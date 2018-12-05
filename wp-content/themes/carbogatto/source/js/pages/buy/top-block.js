import 'jquery.scrollto'

class TopBlock {
  constructor(options) {
    //return
    this.elem = options.elem
    this.busy = false
    this.mup = $('body').data('mup')
    this.top = 0
    if (window.innerWidth < this.mup) {
      this.top = 0
    }
    this.sectionElem = $('section.main.buy')
    this.elem.find('.to-main-view').click(this.scrollTop.bind(this))

    this.elem.on('transitionend', () => {
      this.busy = false
    })

    $(window).scroll(this.scrollHandler.bind(this))
  }

  scrollHandler() {
    if (this.busy) return

    if (pageYOffset > this.top) {
      if (this.elem.hasClass('__small')) return
      this.busy = true
      this.sectionElem.addClass('__small-pad')
      this.elem.addClass('__small')
      return
    }

    if (!this.elem.hasClass('__small')) return
    this.busy = true
    this.sectionElem.removeClass('__small-pad')
    this.elem.removeClass('__small')
  }

  scrollTop() {
    $(window).scrollTo(0, 400)
  }
}

$(document).ready(() => {
  $('section.main.buy .top-block').each((index, elem) => {
    new TopBlock({elem: $(elem)})
  })
})