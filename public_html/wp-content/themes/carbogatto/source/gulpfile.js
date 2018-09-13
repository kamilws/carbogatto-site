const gulp = require("gulp")
const stylus = require("gulp-stylus")
const sourcemaps = require("gulp-sourcemaps")
const gulpIf = require("gulp-if")
const combiner = require("stream-combiner2").obj
const del = require("del")
const rev = require("gulp-rev")
const gzip = require("gulp-gzip")
const svgstore = require("gulp-svgstore")
const rename = require('gulp-rename')
const runSequence = require('run-sequence')
const fs = require("fs")
const run = require('gulp-run')

//PostCSS
const postcss = require("gulp-postcss")
const autoprefixer = require("autoprefixer")
const cssnano = require('cssnano')

const isDevelopment = !process.env.NODE_ENV || process.env.NODE_ENV === "development"

gulp.task("styles", function () {
  let processors = [autoprefixer]

  if (!isDevelopment) {
    processors.push(cssnano({
      zindex: false,
      reduceIdents: {
        keyframes: false
      },
      discardUnused: {
        keyframes: false
      }
    }))
  }

  return combiner(gulp.src("styles/app.styl"),
    gulpIf(isDevelopment, sourcemaps.init()),
    stylus(),
    postcss(processors),
    gulpIf(isDevelopment, sourcemaps.write()),
    rev(),
    gulp.dest("../build/styles"),
    rev.manifest("styles.json"),
    gulp.dest("../build/styles"))
})

gulp.task('styles:svg', () => {
  return combiner(gulp.src('img/svg-sprite/*.svg'),
    rename((path) => {
      path.basename = `svg-${path.basename}`
    }),
    svgstore(),
    rev(),
    gulp.dest('../build/styles'),
    rev.manifest('svg-sprite.json'),
    gulp.dest('../build/styles'))
})

gulp.task("assets:img", function () {
  return gulp.src("img/**/*.*")
    .pipe(gulp.dest("../build/img"))
})

gulp.task("clean", function () {
  return del(["../build/img", "../build/styles"], {force: true})
})

gulp.task("gzip", function (callback) {
  //Сжатие нужно нам только в продакшн режиме
  if (isDevelopment) {
    callback()
    return
  }

  return gulp.src("../build/styles/*")
    .pipe(gzip())
    .pipe(gulp.dest("../build/styles"))
})

gulp.task("build", function (done) {
  runSequence('clean', 'styles', 'styles:svg', 'assets:img', 'gzip', function () {
    console.log('build finished')
    done()
  })
})

gulp.task("watch", function () {
  gulp.watch("styles/**/*.*", ["styles"])
  gulp.watch("img/**/*.*", ["assets:img"])
  gulp.watch("img/svg-sprite/**/*.*", ["styles:svg"])
})

gulp.task("dev", function (done) {
  runSequence('build', 'watch', function () {
    console.log('finished dev')
    done()
  })
})
