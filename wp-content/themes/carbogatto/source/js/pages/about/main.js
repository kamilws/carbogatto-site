import 'slick-carousel'
import 'slick-carousel/slick/slick.css'
import lozad from 'lozad'
import 'intersection-observer'
import 'jquery-form'
import 'jquery.scrollto'
import device from 'current-device'

class About {
  constructor(options) {
    this.elem = options.elem
    this.carouselElem = this.elem.find('.slides')
    this.carouselElem.slick({
      adaptiveHeight: true,
      arrow: true,
      appendArrows: this.elem.find('.gallery-block .gallery'),
      prevArrow: this.elem.find('.gallery-block .prev'),
      nextArrow: this.elem.find('.gallery-block .next'),
      dots: true,
      appendDots: this.elem.find('.gallery-block .pager'),
      dotsClass: 'pager-inner'
    })

    lozad('.lozad', {
      threshold: .7,
      load: elem => {
        if ($(elem).hasClass('about-block')) {
          this.animateAbout($(elem))
          return
        }

        if ($(elem).hasClass('team-item')) {
          this.animateTeam($(elem))
        }
      }
    }).observe()

    //Форма become a partner
    this.elem.click(e => {
      if($(e.target).closest('.become').length &&
        this.elem[0].contains(e.target)) {
        this.showPartnersForm()
      }
    })

    //Форма Connect
    this.elem.click(e => {
      if($(e.target).closest('.connect-button').length &&
        this.elem[0].contains(e.target)) {
        if(!device.mobile()) {
          this.showConnectForm()
          return
        }

        $.scrollTo($('.connect-form-anchor'), 400, {
          offset: -90,
          onAfter: () => {
            setTimeout(() => {
              this.showConnectForm()
            }, 300)
          },
        })
      }
    })
  }

  showConnectForm() {
    let formElem = this.elem.find('.connect-block .contact-form')
    this.bindAjaxToForm(formElem)
    formElem.slideDown()
  }

  showPartnersForm() {
    let formElem = this.elem.find('.partners-block .contact-form')
    this.elem.find('.partners-block .partners').fadeOut(400, () => {
      formElem.fadeIn()
      this.bindAjaxToForm(formElem)
    })
  }

  bindAjaxToForm(formElem) {
    formElem.ajaxForm(() => {
      formElem.find('.form-content').fadeOut(400, () => {
        formElem.find('.thanx').fadeIn()
      })
    })
  }

  animateAbout(elem) {
    let delay = 0
    elem.find('.combs img').each((index, item) => {
      $(item).css('animation', `appear .01s ${delay}s forwards`)
      delay += .05
    })
  }

  animateTeam(elem) {
    elem.addClass('__appeared')
  }
}

$(document).ready(() => {
  $('section.main.about').each((index, elem) => {
    new About({elem: $(elem)})
  })
})