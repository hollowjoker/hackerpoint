import $ from 'jquery'
import _ from 'lodash'
import { TweenMax, Expo } from 'gsap/TweenMax'
// import 'slick-carousel/slick/slick.css'
// import 'slick-carousel/slick/slick-theme.css'
// import slick from 'slick-carousel'

export default class Front {

  constructor () {
    this.lastScrollTop = 0
    this.homeSections = $('.main.home .section')
    this.currentIndex = 0
  }

  ready () {
    this.setHomeSections(this.homeSections)
    this.bindScroll()
  }

  scroll (e) {
    let $e = e
    let st = $(window).scrollTop()
    console.log(st);
    if (st > this.lastScrollTop) {
      console.log('down');
    } else {
      console.log('up');
    }
    this.lastScrollTop = st
  }

  resize (e) {
    // this.homeSections.map((i, e) => {
    //   tm.set
    // })
  }

  setHomeSections (section) {
    let tm = TweenMax
    section.map((i, e) => {
      console.log(e);
      if (i !== 0) {
        tm.set(e, { top: '-' + $(window).height() })
      }
    })
  }

  bindScroll () {
    $(window).on('DOMMouseScroll mousewheel', _.debounce(event => {
      if (event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0) {
        //scroll down
        if (this.currentIndex >= this.homeSections.length - 1) {
          this.currentIndex = this.homeSections.length
        } else {
          this.currentIndex++
          TweenMax.to(this.homeSections[this.currentIndex], 0.6, { ease: Expo.easeInOut, top: 0 })
          this.currentIndex === this.homeSections.length ? this.currentIndex = this.homeSections.length : this.currentIndex = this.currentIndex
        }
      } else {
        if (this.currentIndex <= 0) {
          this.currentIndex = 0
        } else {
          TweenMax.to(this.homeSections[this.currentIndex], 0.6, { ease: Expo.easeInOut, top: '-' + $(window).height() })
          this.currentIndex--
          // TweenMax.to(this.homeSections[this.currentIndex - 1], 2, { ease: Expo.easeOut, top: 0 })
        }
      }

      return false;
    }, 200));
  }

  animateHomeSection () {

  }
}