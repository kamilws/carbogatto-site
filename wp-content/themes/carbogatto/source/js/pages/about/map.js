//Функция выполнится после загрузки и готовности АПИ яндекс карт
//Это сигнал комонентам для инициализации карт
//Загрузка АПИ карт в html сейчас выполняется асинхронно, чтобы не подвисала страница
//<script async src='//api-maps.yandex.ru/2.1/?lang=ru_RU&onload=mapsInit'></script>
//теоретически, функция mapsInit может быть вызвана до того, как будут инициализированы
//компоненты (событие загрузки карт может произойти до DOMContantLoaded)
//но это маловероятно
window.mapsInit = () => {
  let map = new ymaps.Map("get-map", {
    center: [55.761092, 37.547537],
    zoom: 15,
    controls: ["zoomControl"]
  })

  map.behaviors.disable('scrollZoom')
  let fullscreenControl = new ymaps.control.FullscreenControl()
  map.controls.add(fullscreenControl)

  let placemark = new ymaps.Placemark([55.761092, 37.547537], {
    hintContent: ''
  }, {
    preset: 'islands#icon',
    iconColor: '#00d2ff'
  })
  map.geoObjects.add(placemark)
}