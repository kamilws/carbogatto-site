import BikesCart from '@/components/cart/bikes'

class Index {
  constructor(options) {
    this.elem = options.elem
    this.totalPriceElem = this.elem.find('.total-price')
    this.frameNameElem = this.elem.find('.frame-name')
    this.framePriceElem = this.elem.find('.frame-price')
    this.frameControlElem = this.elem.find('.frame-control')
    this.batteryNameElem = this.elem.find('.battery-name')
    this.batteryPriceElem = this.elem.find('.battery-price')
    this.batteryControlElem = this.elem.find('.battery-control')
    this.motorNameElem = this.elem.find('.motor-name')
    this.motorPriceElem = this.elem.find('.motor-price')
    this.motorControlElem = this.elem.find('.motor-control')
    this.detailsControlElem = this.elem.find('.details-control')
    this.detailsNameElem = this.elem.find('.details-name')
    this.detailsPriceElem = this.elem.find('.details-price')
    this.linksControlElem = this.elem.find('.links-control')
    this.linksNameElem = this.elem.find('.links-name')
    this.linksPriceElem = this.elem.find('.links-price')
    this.tyresNameElem = this.elem.find('.tyres-name')
    this.tyresPriceElem = this.elem.find('.tyres-price')
    this.tyresControlElem = this.elem.find('.tyres-control')
    this.colorControlElem = this.elem.find('.color-block input[type=radio]')
    this.viewControlElem = this.elem.find('.view input[type=radio]')
    this.bikeElem = this.elem.find('.bike-images-block .bike')
    this.detailsElem = this.elem.find('.bike-images-block .details')
    this.linksElem = this.elem.find('.bike-images-block .links')
    this.orderModalElem = $('.modal-component.__order')

    this.frameControlElem.on('change', (event) => {
      let rowElem = $(event.target).closest('.row')
      this.frameNameElem.data('id', $(event.target).val())
      this.frameNameElem.data('default', !!$(event.target).data('default'))
      this.frameNameElem.text(rowElem.find('.title').text())
      this.framePriceElem.text(rowElem.find('.price').text())
      this.setTotal()
    })

    this.batteryControlElem.on('change', (event) => {
      let rowElem = $(event.target).closest('.row')
      this.batteryNameElem.data('id', $(event.target).val())
      this.batteryNameElem.data('default', !!$(event.target).data('default'))
      this.batteryNameElem.text(rowElem.find('.title').text())
      this.batteryPriceElem.text(rowElem.find('.price').text())
      this.setTotal()
    })

    this.motorControlElem.on('change', (event) => {
      let rowElem = $(event.target).closest('.row')
      this.motorNameElem.data('id', $(event.target).val())
      this.motorNameElem.data('default', !!$(event.target).data('default'))
      this.motorNameElem.text(rowElem.find('.title').text())
      this.motorPriceElem.text(rowElem.find('.price').text())
      this.setTotal()
    })

    this.tyresControlElem.on('change', (event) => {
      let rowElem = $(event.target).closest('.row')
      this.tyresNameElem.data('id', $(event.target).val())
      this.tyresNameElem.data('default', !!$(event.target).data('default'))
      this.tyresNameElem.text(rowElem.find('.title').text())
      this.tyresPriceElem.text(rowElem.find('.price').text())
      this.setTotal()
    })

    //Детали
    this.detailsControlElem.on('change', (event) => {
      let rowElem = $(event.target).closest('.row')
      this.detailsNameElem.data('id', $(event.target).val())
      this.detailsNameElem.data('default', !!$(event.target).data('default'))
      this.detailsNameElem.text(rowElem.find('.title').text())
      this.detailsNameElem.data('fill', $(event.target).data('fill'))
      this.detailsPriceElem.text(rowElem.find('.price').text())
      this.setTotal()
      let view = this.viewControlElem.filter(':checked').val()
      let src = $(event.target).data('side')
      if(view === 'half') {
        src = $(event.target).data('half')
      }
      this.detailsElem.attr('src', src)
    })

    //Линки
    this.linksControlElem.on('change', (event) => {
      let rowElem = $(event.target).closest('.row')
      this.linksNameElem.data('id', $(event.target).val())
      this.linksNameElem.data('default', !!$(event.target).data('default'))
      this.linksNameElem.text(rowElem.find('.title').text())
      this.linksNameElem.data('fill', $(event.target).data('fill'))
      this.linksPriceElem.text(rowElem.find('.price').text())
      this.setTotal()
      let view = this.viewControlElem.filter(':checked').val()
      let src = $(event.target).data('side')
      if(view === 'half') {
        src = $(event.target).data('half')
      }
      this.linksElem.attr('src', src)
    })

    //Изменение цвета
    this.colorControlElem.on('change', e => {
      if(this.viewControlElem.filter(':checked').val() === 'side') {
        this.bikeElem.attr('src', $(e.target).data('side'))
        return
      }

      this.bikeElem.attr('src', $(e.target).data('half'))
    })

    //Изменение вида
    this.viewControlElem.on('change', e => {
      let activeColorElem = this.colorControlElem.filter(':checked')
      let activeDetailsElem = this.detailsControlElem.find('[type=radio]:checked')
      let activeLinksElem = this.linksControlElem.find('[type=radio]:checked')
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
    this.elem.find('.options-block input[type=radio]:checked')
      .trigger('change')

    //Подгрузим все картинки байков и деталей заранее
    this.colorControlElem.each((index, elem) => {
      let img = new Image()
      img.src = $(elem).data('side')
      let img2 = new Image()
      img2.src = $(elem).data('half')
    })
    this.detailsControlElem.find('[type=radio]').each((index, elem) => {
      let img = new Image()
      img.src = $(elem).data('side')
      let img2 = new Image()
      img2.src = $(elem).data('half')
    })
    this.linksControlElem.find('[type=radio]').each((index, elem) => {
      let img = new Image()
      img.src = $(elem).data('side')
      let img2 = new Image()
      img2.src = $(elem).data('half')
    })

    //Окно с заказом
    this.elem.click(e => {
      if($(e.target).closest('.__buy-button').length &&
        this.elem[0].contains(e.target)) {
        this.showOrderModal()
      }
    })
  }

  showOrderModal() {
    let colorRadioElem = this.elem.find('.color-block input[type=radio]:checked')
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
