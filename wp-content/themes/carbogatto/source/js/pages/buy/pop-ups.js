class PopUp {
  constructor(options) {
    this.elem = options.elem
    this.popupElem = this.elem.find('.desc-pop-up')

    this.elem.find('.desc-text, .info-icon').click(this.togglePopup.bind(this))
    this.popupElem.find('.pop-up-close').click(this.hidePopup.bind(this))

    $(document).click(e => {
      if(this.elem[0].contains(e.target)) return
      this.hidePopup()
    })
  }

  togglePopup() {
    this.popupElem.fadeToggle()
  }

  hidePopup() {
    this.popupElem.fadeOut()
  }
}

$(document).ready(() => {
  $('section.main.buy .options-block .desc').each((index, elem) => {
    new PopUp({elem: $(elem)})
  })
})