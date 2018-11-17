import $ from 'jquery'
// import 'slick-carousel/slick/slick.css'
// import 'slick-carousel/slick/slick-theme.css'
// import slick from 'slick-carousel'

export default class Front {

  constructor (reviews) {
    this.reviews = reviews
  }

  init () {
    this.initReviews()
  }

  initReviews () {
    // this.reviews.slick({
    //   autoplay: true,
    //   autoplaySpeed: 5000,
    //   arrows: false,
    //   dots: true,

    // })
  }
}