class Nav {
  constructor(options) {
    this.elem = options.elem
    this.menuContainerElem = this.elem.find('.menu-container')
    this.mup = $('body').data('mup')

    this.elem.find('.burger').click(this.toggleMenu.bind(this))
  }

  toggleMenu() {
    this.elem.toggleClass('__open')
    this.menuContainerElem.slideToggle()
  }
}

$(document).ready(() => {
  $('nav.main').each((index, elem) => {
    new Nav({elem: $(elem)})
  })
})