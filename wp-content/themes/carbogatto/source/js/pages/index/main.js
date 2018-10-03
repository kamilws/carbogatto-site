class Index {
  constructor(options) {
    this.elem = options.elem
    this.menuButtonElem = this.elem.find('.menu-button')

    this.menuButtonElem.click(() => {
      $('nav.main').toggleClass('__active')
    })
    $('nav.main .close').click(() => {
      $('nav.main').toggleClass('__active')
    })
  }
}

$(document).ready(() => {
  $('section.main.index').each((index, elem) => {
    new Index({elem: $(elem)})
  })
})