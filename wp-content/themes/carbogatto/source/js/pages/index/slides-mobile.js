import device from 'current-device'

class Slides {
  constructor(options) {
    if (device.desktop()) return

    this.elem = options.elem
    $('html, body').removeClass('no-scroll')
    this.initMobile()
  }

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
      let preloader = video.closest('.video-container, .video-block').find('.preloader')
      //При первичной загрузке видео в iOS событие playing стреляет раньше чем реально видео начинает воспроизводится
      //поэтому если просто ориентироваться на него, то мы изменим иконку раньше чем запустится видео
      //после события playing проверяем по currentTime что видео действительно запустилось
      let intervalId = setInterval(() => {
        if (!video[0].currentTime) return
        preloader.removeClass('__play __loading').addClass('__pause')
        video.data({
          playing: true,
          paused: false,
          loading: false,
        })
        clearInterval(intervalId)
      }, 100)
    })

    //Переход ко второму слайду
    this.elem.find('.top-block .arrow').click(() => {
      $.scrollTo(this.elem.find('.frame-block'), 800, {offset: -60})
    })

    //Обработка клика по видео
    this.elem.click(this.processMobileVideoClick.bind(this))

    //Видео в верхнем блоке сразу запускаем - оно идет первым
    this.processMobileVideoClick({target: this.elem.find('.top-block video')[0]})
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
      let src = video.data('src')
      if (device.mobile()) {
        src = video.data('src-mob')
      }
      //src = src.replace('localhost:8888', 'cb.sforma.com')
      let ver = 8
      //ver = Math.random()
      video
        .attr('src', `${src}?ver=${ver}`)
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
}

$(document).ready(() => {
  $('section.main.index').each((index, elem) => {
    new Slides({elem: $(elem)})
  })
})