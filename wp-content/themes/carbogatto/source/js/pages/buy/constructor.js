import BikesCart from '@/components/cart/bikes'

class Index {
  constructor(options) {
    this.elem = options.elem
    this.totalPriceElem = this.elem.find('.total-price')
    this.colorPriceElem = this.elem.find('.color-price')
    this.colorControlElem = this.elem.find('.color-block input[type=checkbox]')
    this.colorNameElem = this.elem.find('.color-name')
    this.frameNameElem = this.elem.find('.frame-name')
    this.framePriceElem = this.elem.find('.frame-price')
    this.frameControlElem = this.elem.find('.frame-control input[type=checkbox]')
    this.batteryNameElem = this.elem.find('.battery-name')
    this.batteryPriceElem = this.elem.find('.battery-price')
    this.batteryControlElem = this.elem.find('.battery-control input[type=checkbox]')
    this.motorNameElem = this.elem.find('.motor-name')
    this.motorPriceElem = this.elem.find('.motor-price')
    this.motorControlElem = this.elem.find('.motor-control input[type=checkbox]')
    this.detailsControlElem = this.elem.find('.details-control input[type=checkbox]')
    this.detailsNameElem = this.elem.find('.details-name')
    this.detailsPriceElem = this.elem.find('.details-price')
    this.linksControlElem = this.elem.find('.links-control input[type=checkbox]')
    this.linksNameElem = this.elem.find('.links-name')
    this.linksPriceElem = this.elem.find('.links-price')
    this.tyresNameElem = this.elem.find('.tyres-name')
    this.tyresPriceElem = this.elem.find('.tyres-price')
    this.tyresControlElem = this.elem.find('.tyres-control input[type=checkbox]')
    this.viewControlElem = this.elem.find('.view input[type=radio]')
    this.bikeElem = this.elem.find('.bike-images-block .bike')
    this.detailsElem = this.elem.find('.bike-images-block .details')
    this.linksElem = this.elem.find('.bike-images-block .links')
    this.orderModalElem = $('.modal-component.__order')

    this.frameControlElem.on('change', e => {
      this.checkboxHelper(e, {
        nameElem: this.frameNameElem,
        priceElem: this.framePriceElem,
        controlElem: this.frameControlElem,
        noEuro: true,
      })
    })

    this.batteryControlElem.on('change', e => {
      this.checkboxHelper(e, {
        nameElem: this.batteryNameElem,
        priceElem: this.batteryPriceElem,
        controlElem: this.batteryControlElem,
        noEuro: true,
      })
    })

    this.motorControlElem.on('change', e => {
      this.checkboxHelper(e, {
        nameElem: this.motorNameElem,
        priceElem: this.motorPriceElem,
        controlElem: this.motorControlElem,
        noEuro: true,
      })
    })

    this.tyresControlElem.on('change', e => {
      this.checkboxHelper(e, {
        nameElem: this.tyresNameElem,
        priceElem: this.tyresPriceElem,
        controlElem: this.tyresControlElem,
        noEuro: true,
      })
    })

    //Детали
    this.detailsControlElem.on('change', e => {
      if(this.checkboxHelper(e, {
        nameElem: this.detailsNameElem,
        priceElem: this.detailsPriceElem,
        controlElem: this.detailsControlElem
      }) === 'default') {
        return
      }

      if(this.viewControlElem.filter(':checked').val() === 'side') {
        this.detailsElem.attr('src', $(e.target).data('side'))
        return
      }
      this.detailsElem.attr('src', $(e.target).data('half'))
    })

    //Линки
    this.linksControlElem.on('change', e => {
      if(this.checkboxHelper(e, {
        nameElem: this.linksNameElem,
        priceElem: this.linksPriceElem,
        controlElem: this.linksControlElem
      }) === 'default') {
        return
      }

      if(this.viewControlElem.filter(':checked').val() === 'side') {
        this.linksElem.attr('src', $(e.target).data('side'))
        return
      }
      this.linksElem.attr('src', $(e.target).data('half'))
    })

    //Изменение цвета
    this.colorControlElem.on('change', e => {
      if(this.checkboxHelper(e, {
        nameElem: this.colorNameElem,
        priceElem: this.colorPriceElem,
        controlElem: this.colorControlElem
      }) === 'default') {
        return
      }

      if(this.viewControlElem.filter(':checked').val() === 'side') {
        this.bikeElem.attr('src', $(e.target).data('side'))
        return
      }
      this.bikeElem.attr('src', $(e.target).data('half'))
    })

    //Изменение вида
    this.viewControlElem.on('change', e => {
      let activeColorElem = this.colorControlElem.filter(':checked')
      let activeDetailsElem = this.detailsControlElem.filter(':checked')
      let activeLinksElem = this.linksControlElem.filter(':checked')
      if($(e.target).val() === 'side') {
        this.bikeElem.attr('src', activeColorElem.data('side'))
        this.detailsElem.attr('src', activeDetailsElem.data('side'))
        this.linksElem.attr('src', activeLinksElem.data('side'))
        return
      }

      this.bikeElem.attr('src', activeColorElem.data('half'))
      this.detailsElem.attr('src', activeDetailsElem.data('half'))
      this.linksElem.attr('src', activeLinksElem.data('half'))
    })

    //Для первичной инициализации
    this.elem.find('.options-block input[type=checkbox]:checked')
      .trigger('click')

    this.loadImages()

    //Окно с заказом
    this.elem.click(e => {
      if($(e.target).closest('.__buy-button').length &&
        this.elem[0].contains(e.target)) {
        this.showOrderModal()
      }
    })
  }

  checkboxHelper(e, options = {nameElem: '', priceElem: '', controlElem: '', noEuro : false}) {
    //Если отключили позицию, то включим дефолтную позицию
    let val = e.target.checked
    if(!val) {
      options.controlElem.filter('[data-default="true"]')
        .prop('checked', true)
        .trigger('change')
      return 'default'
    }

    let euro = ' €'
    if(options.noEuro) euro = ''
    options.priceElem.text(`${$(e.target).data('price')} ${euro}`)
    options.nameElem.text($(e.target).data('name'))
    options.nameElem.data('id', $(event.target).val())
    options.nameElem.data('default', !!$(event.target).data('default'))
    options.nameElem.data('fill', $(event.target).data('fill'))

    this.setTotal()

    //Если включили позицию, то выключим все остальные позиции
    options.controlElem.not(e.target).prop('checked', false)
  }

  loadImages() {
    //Подгрузим все картинки байков и деталей заранее
    this.colorControlElem.each((index, elem) => {
      let img = new Image()
      img.src = $(elem).data('side')
      let img2 = new Image()
      img2.src = $(elem).data('half')
    })
    this.detailsControlElem.find('[type=checkbox]').each((index, elem) => {
      let img = new Image()
      img.src = $(elem).data('side')
      let img2 = new Image()
      img2.src = $(elem).data('half')
    })
    this.linksControlElem.find('[type=checkbox]').each((index, elem) => {
      let img = new Image()
      img.src = $(elem).data('side')
      let img2 = new Image()
      img2.src = $(elem).data('half')
    })
  }

  showOrderModal() {
    let colorRadioElem = this.elem.find('.color-block input[type=checkbox]:checked')
    let bike = {
      num: 1,
      colorId: colorRadioElem.val(),
      colorName: colorRadioElem.data('name'),
      colorPrice: +colorRadioElem.data('price'),
      colorFill: colorRadioElem.data('fill'),
      colorDefault: !!colorRadioElem.data('default'),
      frameId: this.frameNameElem.first().data('id'),
      frameDefault: this.frameNameElem.first().data('default'),
      frameName: this.frameNameElem.first().text(),
      framePrice: this.getNumPrice(this.framePriceElem.first().text()),
      batteryId: this.batteryNameElem.first().data('id'),
      batteryDefault: !!this.batteryNameElem.first().data('default'),
      batteryName: this.batteryNameElem.first().text(),
      batteryPrice: this.getNumPrice(this.batteryPriceElem.first().text()),
      motorId: this.motorNameElem.first().data('id'),
      motorDefault: !!this.motorNameElem.first().data('default'),
      motorName: this.motorNameElem.first().text(),
      motorPrice: this.getNumPrice(this.motorPriceElem.first().text()),
      tyresId: this.tyresNameElem.first().data('id'),
      tyresDefault: !!this.tyresNameElem.first().data('default'),
      tyresName: this.tyresNameElem.first().text(),
      tyresPrice: this.getNumPrice(this.tyresPriceElem.first().text()),
      detailsId: this.detailsNameElem.first().data('id'),
      detailsDefault: !!this.detailsNameElem.first().data('default'),
      detailsName: this.detailsNameElem.first().text(),
      detailsPrice: this.getNumPrice(this.detailsPriceElem.first().text()),
      detailsFill: this.detailsNameElem.first().data('fill'),
      linksId: this.linksNameElem.first().data('id'),
      linksDefault: !!this.linksNameElem.first().data('default'),
      linksName: this.linksNameElem.first().text(),
      linksPrice: this.getNumPrice(this.linksPriceElem.first().text()),
      linksFill: this.linksNameElem.first().data('fill'),
      linksCustomColor: $('input[name="individual-color"]').val(),
    }
    BikesCart.addBike(bike)

    //$.deleteCookie('bikes_cart')
    //console.log($.getCookie('bikes_cart'))
    //console.log(bike)
    this.orderModalElem.trigger('mc:bikes_update')
    $('.modal-component.__order').trigger('mc:show')
  }

  getNumPrice(price) {
    price = price.replace(/\D/g, '')
    return +price || 0
  }

  setTotal() {
    let total = parseInt(this.framePriceElem.first().text().replace(/\s/g, ''))
    total += parseInt(this.batteryPriceElem.first().text().replace(/\s/g, ''))
    total += parseInt(this.motorPriceElem.first().text().replace(/\s/g, ''))
    total += parseInt(this.tyresPriceElem.first().text().replace(/\s/g, ''))
    total += parseInt(this.detailsPriceElem.first().text().replace(/\s/g, ''))
    total += parseInt(this.linksPriceElem.first().text().replace(/\s/g, '')) || 0
    total += parseInt(this.colorPriceElem.first().text().replace(/\s/g, ''))

    let totalText = total.toString().replace(/./g, (c, i, a) => {
      return i && c !== "." && ((a.length - i) % 3 === 0) ? ' ' + c : c
    })

    this.totalPriceElem.text(totalText)
  }
}

$(document).ready(() => {
  $('section.main.buy').each((index, elem) => {
    new Index({elem: $(elem)})
  })
})
