class ThankYou {
  constructor(options) {
    this.elem = options.elem
    this.elem.find('.ct-ty-close').click((e) => {
      this.elem.fadeOut()
    })
  }
}

$(document).ready(() => {
  $('.thank-you-component').each((index, elem) => {
    new ThankYou({elem: $(elem)})
  })
})