import 'jquery.scrollto'

class FixedBlock {
  constructor(options) {
    this.elem = options.elem
    this.elem.find('.main-view').click(this.scrollTop.bind(this))
  }

  scrollTop() {
    $(window).scrollTo(0, 400)
  }
}

$(document).ready(() => {
  $('section.main.buy .fixed-block').each((index, elem) => {
    new FixedBlock({elem: $(elem)})
  })
})