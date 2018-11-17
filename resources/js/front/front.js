import Masonry from 'masonry-layout'

export default class Front {
  constructor (masonry) {
    this.masonry = masonry
  }

  init () {
    this.initMasonry()
  }

  initMasonry () {
    // let grid = new Masonry(this.masonry, {
    //   itemSelector: '.section-shop__grid-item',
    //   columnWidth: 300,
    //   horizontalOrder: false,
    //   containerStyle: null,
    //   // gutter: 30
    // })
  }
}