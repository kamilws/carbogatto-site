import 'jquery.scrollto'

class TopBlock {
  constructor(options) {
    //return
    this.elem = options.elem
    this.busy = false
    this.elem.find('.to-main-view').click(this.scrollTop.bind(this))

    this.elem.on('transitionend', () => this.busy = false)

    //this.elem.addClass('__small')

    $(window).scroll(this.scrollHandler.bind(this))
  }

  scrollHandler() {
    if (this.busy) return

    if (pageYOffset > 0) {
      if (this.elem.hasClass('__small')) return
      this.busy = true
      console.log('start')
      this.elem.addClass('__small')
      return
    }

    if (!this.elem.hasClass('__small')) return
    this.busy = true
    console.log('start')
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