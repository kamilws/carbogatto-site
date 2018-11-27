class Cookie {
  constructor(options) {
    this.elem = options.elem
    if($.getCookie('cookie-accepted')) return

    this.elem.show()
    this.elem.find('.ct-cc-button.__accept').click(() => {
      $.setCookie('cookie-accepted', true, {
        expires: 3600 * 24* 30
      })
      this.elem.fadeOut()
    })
  }
}

$(document).ready(() => {
  $('.cookie-component').each((index, elem) => {
    new Cookie({elem: $(elem)})
  })
})