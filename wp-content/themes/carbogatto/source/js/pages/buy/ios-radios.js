import Hammer from 'hammerjs'

class IosRadio {
  constructor(options) {
    this.elem = options.elem
    this.radioElem = this.elem.find('input[type=radio], input[type=checkbox]')
    let manager = new Hammer.Manager(this.elem[0])
    manager.add(new Hammer.Swipe())

    manager.on('swiperight', () => {
      this.radioElem
        .prop('checked', true)
        .trigger('change')
    })

    if(this.radioElem.is('[type=checkbox]')) {
      manager.on('swipeleft', () => {
        this.radioElem
          .prop('checked', false)
          .trigger('change')
      })
    }
  }
}

$(document).ready(() => {
  $('section.main.buy .options-block label.button').each((index, elem) => {
    new IosRadio({elem: $(elem)})
  })
})