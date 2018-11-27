class Subscribe {
  constructor(options) {
    this.elem = options.elem
    this.busy = false

    this.elem.find('form.form').ajaxForm({
      success: () => {
        $('.thank-you-component.__subscribe').fadeIn()
        this.busy = false
      },
      beforeSubmit: () => !this.busy
    })
  }
}

$(document).ready(() => {
  $('section.main.subscribe').each((index, elem) => {
    new Subscribe({elem: $(elem)})
  })
})