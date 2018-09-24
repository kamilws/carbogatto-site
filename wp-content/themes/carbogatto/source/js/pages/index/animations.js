import lozad from 'lozad'
import device from 'current-device'

class Index {
  constructor(options) {
    this.elem = options.elem
    this.slideElems = this.elem.find('.vh-slide')

    if(device.desktop()) {
      this.initDesktop()
    } else {
      this.initMobile()
    }

    this.setSusBikeStyles()
    this.setStandStyles()
    this.setCreateStyles()
  }

  initDesktop() {
    let delay = 600
    let delayLong = delay + 400
    this.slideElems.on('move:start', e => {
      let slide = $(e.target)
      if(slide.is('.frame-block')) {
        this.resetFrame(slide.find('.lozad.__frame'))
        setTimeout(() => {
          this.animateFrame(slide.find('.lozad.__frame'))
        }, delay)
        return
      }

      if(slide.is('.battery-block')) {
        this.resetBattery(slide.find('.lozad.__battery'))
        setTimeout(() => {
          this.animateBattery(slide.find('.lozad.__battery'))
        }, delay)
        return
      }

      if(slide.is('.suspension-block.__front')) {
        this.resetSusBike(slide.find('.lozad.__sus-bike'))
        this.resetSusLogos(slide.find('.lozad.__sus-logos'))
        setTimeout(() => {
          this.animateSusBike(slide.find('.lozad.__sus-bike'))
          this.animateSusLogos(slide.find('.lozad.__sus-logos'))
        }, delayLong)
        return
      }

      if(slide.is('.suspension-block.__rear')) {
        this.resetSusBike(slide.find('.lozad.__sus-bike'))
        this.resetSusLogos(slide.find('.lozad.__sus-logos'))
        setTimeout(() => {
          this.animateSusBike(slide.find('.lozad.__sus-bike'))
          this.animateSusLogos(slide.find('.lozad.__sus-logos'))
        }, delayLong)
        return
      }

      if(slide.is('.motor-block')) {
        this.resetMotor(slide.find('.lozad.__motor'))
        setTimeout(() => {
          this.animateMotor(slide.find('.lozad.__motor'))
        }, delayLong)
        return
      }

      if(slide.is('.stand-block')) {
        this.resetStand(slide.find('.lozad.__stand'))
        setTimeout(() => {
          this.animateStand(slide.find('.lozad.__stand'))
        }, delayLong)
        return
      }

      if(slide.is('.tyres-slide')) {
        this.resetTyresLogos(slide.find('.lozad.__tyres-logos'))
        setTimeout(() => {
          this.animateTyresLogos(slide.find('.lozad.__tyres-logos'))
        }, delayLong)
        return
      }

      if(slide.is('.create-slide')) {
        this.resetCreate(slide.find('.lozad.__create'))
        setTimeout(() => {
          this.animateCreate(slide.find('.lozad.__create'))
        }, delayLong)
      }
    })
  }

  initMobile() {
    lozad('.lozad', {
      threshold: .7,
      load: elem => {
        if ($(elem).hasClass('__battery')) {
          this.animateBattery($(elem))
          return
        }

        if ($(elem).hasClass('__motor')) {
          this.animateMotor($(elem))
          return
        }

        if ($(elem).hasClass('__frame')) {
          this.animateFrame($(elem))
          return
        }

        if ($(elem).hasClass('__sus-bike')) {
          this.animateSusBike($(elem))
          return
        }

        if ($(elem).hasClass('__sus-logos')) {
          this.animateSusLogos($(elem))
          return
        }

        if ($(elem).hasClass('__stand')) {
          this.animateStand($(elem))
          return
        }

        if ($(elem).hasClass('__tyres-logos')) {
          this.animateTyresLogos($(elem))
          return
        }

        if ($(elem).hasClass('__create')) {
          this.animateCreate($(elem))
          return
        }
      }
    }).observe()
  }

  resetAnimation(...elems) {
    for(let elem of elems) {
      elem.css('animation', 'initial')
    }
  }

  animateCreate(elem) {
    elem.find('.bike-icon .bike path').css('animation', 'dash 2s forwards')
    elem.find('.bike-icon .lines path').each((index, elem) => {
      let time = (.3 + Math.random()) * 2.2
      //Такая анимация рисует path внутри svg
      //@keyframes dash
      //   to
      //     stroke-dashoffset 0
      $(elem).css('animation', `dash ${time}s 2s forwards`)
    })
  }

  resetCreate(elem) {
    this.resetAnimation(elem.find('.bike-icon .bike path'),
      elem.find('.bike-icon .lines path'))
  }

  setCreateStyles() {
    this.elem.find('.create-block .bike-icon path').each((index, elem) => {
      this.setDashLength(elem)
    })
  }

  animateTyresLogos(elem) {
    elem.css('animation', 'appear 1.5s forwards')
  }

  resetTyresLogos(elem) {
    this.resetAnimation(elem)
  }

  setStandStyles() {
    this.elem.find('.stand-block .bike-icon path').each((index, elem) => {
      //У ножки обводки нет. Ее фейдом выведем
      if ($(elem).is('.stand-stick')) {
        $(elem).css('opacity', 0)
        return
      }
      this.setDashLength(elem)
    })
  }

  animateStand(elem) {
    elem.find('.bike-icon path').css('animation', 'dash 2s forwards')
    elem.find('.bike-icon .stand-stick').css('animation', 'appear 2s forwards')
  }

  resetStand(elem) {
    this.resetAnimation(elem.find('.bike-icon path'), elem.find('.bike-icon .stand-stick'))
  }

  animateSusLogos(elem) {
    elem.css('animation', 'appear 1.5s forwards')
  }

  resetSusLogos(elem) {
    this.resetAnimation(elem)
  }

  setSusBikeStyles() {
    this.elem.find('.suspension-block .bike-icon path').each((index, elem) => {
      this.setDashLength(elem)
    })
  }

  animateSusBike(elem) {
    elem.find('.bike-icon path').css('animation', 'dash 2s forwards')
    elem.find('.shocks').css('animation', 'appear 1s 2s forwards')
  }

  resetSusBike(elem) {
    this.resetAnimation(elem.find('.bike-icon path'), elem.find('.shocks'))
  }

  animateFrame(elem) {
    elem.find('.line').css('animation', 'slide-to-right 2s forwards')
    elem.find('.text').css('animation', 'appear 2.4s forwards')
  }

  resetFrame(elem) {
    this.resetAnimation(elem.find('.line'), elem.find('.text'))
  }

  animateBattery(elem) {
    //Линии
    elem.find('.icons-line').css('animation', 'slide-to-right 2s forwards')
    //Батарейка
    elem.find('.__body').css('animation', 'appear .3s forwards')
    for (let i = 1; i <= 10; i++) {
      elem.find(`.__${i}`).css('animation', `appear .2s ${i * 200 / 1000}s forwards`)
    }
    //Напряжение
    elem.find('.icons-icon.__voltage').css('animation', 'appear-zoom 1.5s forwards')
    //Дистация
    elem.find('.wheel-left').css('animation', 'appear .5s forwards')
    elem.find('.dots').css('animation', 'appear .5s .5s forwards')
    elem.find('.wheel-right').css('animation', 'appear .5s 1s forwards')
    elem.find('.flag').css('animation', 'appear .5s 1.5s forwards')
    //Цифры
    elem.find('.icons-title .__number').each((index, elem) => {
      let time = 1000
      if ($(elem).is('.__voltage')) time += 200
      if ($(elem).is('.__range-from')) time += 400
      if ($(elem).is('.__range-to')) time += 600
      this.animateNumber($(elem), +$(elem).data('to'), 0, time)
    })
  }

  resetBattery(elem) {
    this.resetAnimation(elem.find('.icons-line'),
      elem.find('.__body'),
      elem.find('.__1, .__2, .__3, .__4, .__5, .__6, .__7, .__8, .__9, .__10'),
      elem.find('.icons-icon.__voltage'),
      elem.find('.wheel-left'),
      elem.find('.dots'),
      elem.find('.wheel-right'),
      elem.find('.flag'))
    elem.find('.icons-title .__number').text('0')
  }

  animateMotor(elem) {
    elem.find('.icons-icon.__speed .__arrow').css('animation', 'turn-arrow 1.5s forwards')
    elem.find('.icons-line').css('animation', 'slide-to-right 2s forwards')
    elem.find('.icons-icon.__power').css('animation', 'appear 1.5s forwards')
    for (let i = 1; i <= 4; i++) {
      elem.find(`.__${i}`).css('animation', `appear .5s ${i * 400 / 1000}s forwards`)
    }
  }

  resetMotor(elem) {
    this.resetAnimation(elem.find('.icons-icon.__speed .__arrow'),
      elem.find('.icons-line'),
      elem.find('.icons-icon.__power'),
      elem.find('.__1, .__2, .__3, .__4'))
  }

  setDashLength(elem) {
    let length = elem.getTotalLength()
    $(elem).css({
      'stroke-dasharray': length,
      'stroke-dashoffset': length,
    })
  }

  animateNumber(elem, to, from = 0, time = 2500) {
    if (!to) return
    let intNum = to - from
    let intTime = time / intNum
    let num = 0
    let value = from
    let intervalId = setInterval(() => {
      if (value === to) {
        clearInterval(intervalId)
        return
      }

      value += 1
      elem.text(value)

      //Дополнительная проверка на всякий случай, чтобы точно в бесконечность не попасть
      num++
      if (num >= intNum) {
        clearInterval(intervalId)
      }
    }, intTime)
  }
}

$(document).ready(() => {
  $('section.main.index').each((index, elem) => {
    new Index({elem: $(elem)})
  })
})