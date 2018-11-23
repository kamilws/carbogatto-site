class Index {
  constructor(options) {
    this.elem = options.elem
    this.menuButtonElem = this.elem.find('.menu-button')
    this.keepInTouchELem = this.elem.find('.keep-in-touch')
    this.busy = false

    this.initNav()
    this.initKeepInTouch()
  }

  initNav() {
    this.menuButtonElem.click(() => {
      $('nav.main').toggleClass('__active')
    })
  }

  initKeepInTouch() {
    this.keepInTouchELem.find('.keep-form').ajaxForm({
      success: () => {
        this.keepInTouchELem.find('.thank-you-component').fadeIn()
        this.busy = false
      },
      beforeSubmit: () => !this.busy
    })
  }
}

$(document).ready(() => {
  $('section.main.index').each((index, elem) => {
    new Index({elem: $(elem)})
  })
})