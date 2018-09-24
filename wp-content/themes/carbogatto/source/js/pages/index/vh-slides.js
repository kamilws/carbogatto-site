import 'jquery.scrollto'
import device from 'current-device'
import _debounce from 'lodash.debounce'
import isSafari from '@/components/is_safari'

class Slides {
  constructor(options) {
    //return

    this.elem = options.elem
    this.menuButtonElem = this.elem.find('.menu-button')
    this.busy = false
    //Отматываем страницу наверх и ставим первый слайд и первое видео
    if (device.desktop()) {
      window.scrollTo(0, 0)
      this.currentSlideElem = this.elem.find('.vh-slide').first()
      this.currentVideoElem = this.currentSlideElem.find('video')
      this.uploadVideo(this.currentVideoElem)
    } else {
      $('html, body').removeClass('no-scroll')
    }

    //Блокируем управление скролом с помощью клавиш
    $(document).on('keydown', (e) => {
      if ([32, 38, 40].indexOf(e.keyCode) !== -1) {
        e.preventDefault()
      }
    })

    //Управление скролом
    if (device.desktop()) {
      //Cтавим постеры
      this.initDesktopPosters()
      //Пагинация
      this.initPagination()
      //Десктопы
      if (device.macos() && isSafari()) {
        $(document).on('wheel', this.wheelListener.bind(this))
        //$(document).on('wheel', this.fallbackWheelListener.bind(this))
      } else {
        $(document).on('wheel', this.fallbackWheelListener.bind(this))
        //Запуск видео по клику на прелоадер
        this.elem.find('.preloader').click(e => {
          this.fallbackPlayVideo($(e.target).closest('.vh-slide').find('video'))
        })
      }
      //Видео грузим друг за другом, чтобы они грузились по очереди, но были готовы как можно быстрее
      this.elem.on('video:loaded', this.uploadNextVideo.bind(this))
    } else {
      this.initMobile()
    }

    //При ресайзе нужно подкрутить прокрутку к текущему слайду
    $(window).resize(_debounce(this.resizeAdjust.bind(this), 400))

    //На десктопе показывается иконка меню. По клику не нее отметываем на первый слайд
    this.menuButtonElem.click(() => {
      //Если это не десктоп
      if (!device.desktop()) {
        $.scrollTo(0, 500)
        return
      }
      this.move('prev', $(this.elem.find('.pagination svg').first().data('slide')))
    })
  }

  initDesktopPosters() {
    this.elem.find('video').each((index, elem) => {
      $(elem).attr('poster', $(elem).data('poster'))
    })
  }

  initMobilePosters() {
    this.elem.find('video').each((index, elem) => {
      $(elem).attr('poster', $(elem).data('poster-mob'))
    })
  }

  initPagination() {
    this.elem.click(e => {
      if (this.busy) return
      let pagElem = $(e.target).closest('.pagination svg:not(.__active)')
      if (!pagElem.length) return
      this.move('next', $(pagElem.data('slide')))
    })
  }

  //Инициализация телефонов и планшетов
  initMobile() {
    //На телефонах показывается одно видео и один постер
    //на планшетах - другой постер и другое видео
    if (device.mobile()) {
      this.initMobilePosters()
    } else {
      this.initDesktopPosters()
    }

    //После воспроизведения
    this.elem.find('video').on('ended', e => {
      let video = $(e.target)
      let preloader = video
        .closest('.video-container, .video-block')
        .find('.preloader')
      video
        .data('playing', false)
        .data('paused', false)
        .data('played', true)
      preloader.removeClass('__pause __loading').addClass('__play')
    })

    //Начало воспроизведения (после паузы или первично или заново)
    this.elem.find('video').on('playing', e => {
      let video = $(e.target)
      let preloader = video
        .closest('.video-container, .video-block')
        .find('.preloader')
      preloader.removeClass('__play __loading').addClass('__pause')
      video
        .data('playing', true)
        .data('paused', false)
        .data('loading', false)
    })

    //Переход ко второму слайду
    this.elem.find('.top-block .arrow').click(() => {
      $.scrollTo(this.elem.find('.frame-block'), 800, {offset: -60})
    })

    //Обработка клика по видео
    this.elem.click(this.processMobileVideoClick.bind(this))
  }

  processMobileVideoClick(e) {
    let video = $()
    if ($(e.target).is('video')) {
      video = $(e.target)
    }
    if ($(e.target).closest('.video-container, .video-block').length) {
      video = $(e.target).closest('.video-container, .video-block').find('video')
    }

    if (!video.length) return
    if (video.data('loading')) return

    let preloader = video
      .closest('.video-container, .video-block')
      .find('.preloader')

    //Первичная инициализация видео
    if (!video.data('inited')) {
      //Ставим исходник. У планшетов десктопный исходник, у телефонов - мобильный
      //у десктопного исходника нет расширения в дата-атрибуте
      let src = `${video.data('src')}?ver=7`
      if (device.mobile()) {
        src = `${video.data('src-mob')}?ver=7`
      }
      video
        .attr('src', src)
        .data('inited', true)
        .data('loading', true)
      //Запускаем
      video[0].play()
      //Прелоадер - лоадинг
      preloader.removeClass('__play __pause').addClass('__loading')
      return
    }

    //Видео проигрывается
    if (video.data('playing')) {
      video[0].pause()
      video
        .data('playing', false)
        .data('paused', true)
      preloader.removeClass('__pause __loading').addClass('__play')
      return
    }

    //Видео на паузе
    if (video.data('paused')) {
      video[0].play()
      video
        .data('playing', true)
        .data('paused', false)
      preloader.removeClass('__play __loading').addClass('__pause')
      return
    }

    //Видео проиграно до конца
    if (video.data('played')) {
      video[0].currentTime = 0
      video[0].play()
      video
        .data('played', false)
        .data('playing', true)
      preloader.removeClass('__play __loading').addClass('__pause')
    }
  }

  move(direction = 'next', nextSlideElem = null) {
    //Включаем скролл на документе при переходе в след слайду (изначально выключен)
    $('html, body').removeClass('no-scroll')

    let nextSlide = this.currentSlideElem.next('.vh-slide')
    if (direction === 'prev') {
      nextSlide = this.currentSlideElem.prev('.vh-slide')
    }
    //После последнейго слайда идем к футеру
    if (this.currentSlideElem.is('.__last') && direction === 'next') {
      nextSlide = $('footer.main')
    }
    //От футера идем к последнему слайду
    if (this.currentSlideElem.is('footer.main') && direction === 'prev') {
      nextSlide = this.elem.find('.vh-slide.__last')
    }
    //Если однозначно передали к какому слайду идем
    if (nextSlideElem) {
      nextSlide = nextSlideElem
    }

    let offset = 0
    //Если первый слайд, то прокручиваем до верха страницы
    //т.е. делаем отступ равный высоте навигации
    if (nextSlide.is('.__first')) {
      offset = -1 * $('nav.main').outerHeight()
    }

    if (!nextSlide.length) return

    this.busy = true
    //Снимаем флаг просмотренности для видео на слайде с которого ушли в сафари
    if (isSafari()) {
      this.currentVideoElem.data('played', false)
    }
    //Генерим событие начало перехода к слайду
    nextSlide.trigger('move:start')
    $(window).scrollTo(nextSlide, 1100, {
      offset,
      onAfter: () => {
        this.currentSlideElem = nextSlide
        this.currentVideoElem = this.currentSlideElem.find('video')
        this.uploadVideo(this.currentVideoElem)
        this.setCurrentPagElem()
        //Показываем/скрываем иконку меню
        if (this.currentSlideElem.is('.__first')) {
          this.menuButtonElem.addClass('__hidden')
        } else {
          this.menuButtonElem.removeClass('__hidden')
        }
        //Даем скролу остановится
        //Инерция у скрола большая на мак ос и маленькая у всех остальных
        let delay = 100
        if (device.macos()) delay = 800
        setTimeout(() => {
          this.busy = false
        }, delay)
      }
    })
  }

  resizeAdjust() {
    if (device.desktop()) {
      if (this.currentSlideElem.is('.__first')) {
        $.scrollTo($('body'), 400)
        return
      }
      $.scrollTo(this.currentSlideElem, 400)
    }
  }

  fallbackWheelListener(e) {
    e.preventDefault()
    //Если переход или подгрузка видео в процессе, то ничего не делаем
    if (this.busy) return

    //Направление скрола
    let delta = e.originalEvent.deltaY
    if (delta === 0) return
    let direction = 'next'
    if (delta < 0) {
      direction = 'prev'
    }

    //Если мы скролим вниз и внутри слайда есть
    //загруженное
    //не запущенное видео
    //не просмотренное
    //Т.е. при первом скроле запускаем видео а дальше всегда при скроле переходим к следующему слайду
    if (direction === 'next' &&
      this.currentVideoElem.length &&
      this.currentVideoElem.data('loaded') &&
      !this.currentVideoElem.data('played') &&
      !this.currentVideoElem.data('playing')) {
      this.fallbackPlayVideo(this.currentVideoElem)
      this.busy = true
      //Даем скролу остановится
      setTimeout(() => {
        this.busy = false
      }, 1500)
      return
    }

    //Переходим к следующему слайду
    this.move(direction)
  }

  fallbackPlayVideo(videoElem) {
    let preloader = videoElem.closest('.vh-slide').find('.preloader')
    videoElem[0].currentTime = 0
    videoElem[0].play()
    videoElem.data('playing', true)
    videoElem.on('ended', () => {
      videoElem.data({
        played: true,
        playing: false
      })
      preloader.show().addClass('__replay')
    })
  }

  wheelListener(e) {
    e.preventDefault()
    if (this.busy) return

    //Направление скрола
    let delta = e.originalEvent.deltaY
    if (delta === 0) return
    let direction = 'next'
    if (delta < 0) {
      direction = 'prev'
    }

    //Если внутри элемента есть не загруженное видео
    //то ждем пока оно загрузится
    if (this.currentVideoElem.length &&
      !this.currentVideoElem.data('loaded')) {
      //return
    }

    //Если внутри элемента есть загруженное видео
    if (this.currentVideoElem.length &&
      this.currentVideoElem.data('loaded')) {
      this.playVideo(delta)

      //Если видео на середине
      if (this.currentVideoElem.data('playing')) {
        return
      }

      //Если видео на старте и мы крутим вниз
      if (this.currentVideoElem[0].currentTime <= 0
        && direction === 'next') {
        return
      }

      //Если видео в конце и мы крутим вверх
      if (this.currentVideoElem[0].currentTime >= this.currentVideoElem.data('duration')
        && direction === 'prev') {
        return
      }
    }

    //Переходим к следующему слайду
    this.move(direction)
  }

  playVideo(delta) {
    requestAnimationFrame(() => {
      //В сафари присутствует глюк. При попытке первый раз прокрутить первое видео
      //видео пропадает - как будто оно полностью прозрачное
      //если при этом изменить какое-то css-свойство элемента, то глюк пропадает
      //поэтому поставим какие-нибудь свойство, которое не влияет на внешний вид и нам вообще не важно
      this.currentVideoElem.css('backface-visibility', 'hidden')

      let currentTime = this.currentVideoElem[0].currentTime
      let duration = this.currentVideoElem.data('duration')
      let speed = this.currentVideoElem.data('speed')
      let time = currentTime + delta / 2000 * speed

      if (time > 0 && time < duration) {
        //Смотрим видео
        this.currentVideoElem[0].currentTime = time
        if (!this.currentVideoElem.data('playing')) {
          this.currentVideoElem.data('playing', true)
        }
      } else if (time <= 0) {
        //Просмотрели до начала (в обратном порядке)
        time = 0
        this.currentVideoElem[0].currentTime = time
        this.currentVideoElem.data('playing', false)
      } else {
        //Просмотрели до конца
        time = duration
        this.currentVideoElem[0].currentTime = time
        this.currentVideoElem.data('playing', false)
      }
    })
  }

  setCurrentPagElem() {
    let currentPagElem
    this.elem.find('.pagination svg').each((index, elem) => {
      let selector = $(elem).data('slide')
      if (this.currentSlideElem.is(selector)) {
        currentPagElem = $(elem)
      }
    })

    if (currentPagElem) {
      this.elem.find('.pagination svg').removeClass('__active')
      currentPagElem.addClass('__active')
    }
  }

  uploadNextVideo(e) {
    let uploadedVideo = $(e.target)
    let nextVideo = uploadedVideo
      .closest('.vh-slide')
      .nextAll('.vh-slide')
      .first()
      .find('video')
    if (!nextVideo.length) return
    this.uploadVideo(nextVideo)
  }

  uploadVideo(videoElem) {
    if (!videoElem.length) return
    if (videoElem.data('inited')) return

    let src = videoElem.data('src')
    //src = src.replace('localhost:8888', 'cb.sforma.com')
    let ver = 8
    //ver = Math.random()

    videoElem
      .attr('src', `${src}?ver=${ver}`)
      .attr('preload', 'auto')
      .prop('preload', 'auto')
      .data('inited', true)

    //Отслеживаем загрузку видео
    //В хроме при закэшированном видео глюк - события progress не происходит
    setTimeout(() => {
      this.uploadVideoHelper(videoElem)
    }, 800)
    //Через 1,5 секунды если видео еще не загрузилось и прелоадер не видим
    //то покажем прелоадер
    setTimeout(() => {
      if (videoElem.data('loaded')) return
      let preloaderElem = videoElem.closest('.vh-slide').find('.desktop-preloader')
      if (preloaderElem.is(':visible')) return
      preloaderElem.fadeIn()
    }, 1500)

    videoElem.on('progress', e => {
      this.uploadVideoHelper($(e.target))
    })
  }

  uploadVideoHelper(videoElem) {
    if (videoElem.data('loaded')) return
    if (!videoElem[0].buffered.length) return

    let duration = videoElem.data('duration')
    let loadedTime = videoElem[0].buffered.end(0)
    let loaded = Math.round(loadedTime / duration * 100)
    if (loaded > 100) loaded = 100

    let preloaderElem = videoElem.closest('.vh-slide').find('.desktop-preloader')
    preloaderElem
      .find('.preloader-icon-percents')
      .text(`${loaded}%`)

    //Когда подгрузили видео так, что не подгружено осталось 2 секунды или меньшье,
    // то считаем, что подгрузили его полностью
    if (duration - 2 <= loadedTime) {
      videoElem
        .data('loaded', true)
        .addClass('__inited')
        .trigger('video:loaded')
      preloaderElem
        .find('.preloader-icon-percents')
        .text('100%')
      preloaderElem.fadeOut(300)
    }
  }
}

$(document).ready(() => {
  $('section.main.index').each((index, elem) => {
    new Slides({elem: $(elem)})
  })
})


