//https://stackoverflow.com/questions/5272433/html5-form-required-attribute-set-custom-validation-message
class Required {
  constructor(options) {
    this.elem = options.elem

    this.elem.on('invalid', () => {
      this.elem[0].setCustomValidity('')
      if (!this.elem[0].validity.valid) {
        this.elem[0].setCustomValidity('Please fill out this field')
      }
    })

    this.elem.on('input', () => {
      this.elem[0].setCustomValidity('')
    })
  }
}

$(document).ready(() => {
  $('input[required]').each((index, elem) => {
    new Required({
      elem: $(elem)
    })
  })
})