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
    this.homeNavItem = $('.js-nav-item')
    this.currentIndex = 0
    this.currentItem = 0
  }

  ready () {
    this.setHomeSections(this.homeSections)
    this.bindScroll()
    this.navigateHome(this.homeNavItem)
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

  convertToArray (htmlEntity) {
    return Array.from(htmlEntity)
  }

  setHomeSections (section) {
    let tm = TweenMax
    section.map((i, e) => {
      // console.log(e);
      if (i !== 0) {
        tm.set(e, { top: '-' + $(window).height() })
      }
    })
  }

  navigateHome (item) {
    item.click(e => {
      let _target = $(e.target)
      let section = _target.data('section')
      let sections = this.convertToArray(this.homeSections)

      item.removeClass('active')
      _target.addClass('active')
      if (this.currentIndex < section) {
        this.currentIndex = section
        this.homeSections.map((i, e) => {
          if (i <= this.currentIndex) {
            this.animateHomeSections(this.homeSections[i], 0)
          }
        })
      } else {
        do {
          this.animateHomeSections(this.homeSections[this.currentIndex], '-' + $(window).height())
          this.currentIndex--
        } while (this.currentIndex > section)
      }
    })
  }

  bindScroll () {
    $(window).on('DOMMouseScroll mousewheel', _.debounce(event => {
      if (event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0) {
        //scroll down
        if (this.currentIndex >= this.homeSections.length - 1) {
          this.currentIndex = this.homeSections.length - 1
        } else {
          this.currentIndex++
          $(this.homeNavItem).removeClass('active')
          $(this.homeNavItem[this.currentIndex]).addClass('active')
          this.animateHomeSections(this.homeSections[this.currentIndex], 0)
          this.currentIndex === this.homeSections.length ? this.currentIndex = this.homeSections.length : this.currentIndex = this.currentIndex
        }
      } else {
        //scroll up
        if (this.currentIndex <= 0) {
          this.currentIndex = 0
        } else {
          this.animateHomeSections(this.homeSections[this.currentIndex], '-' + $(window).height())
          this.currentIndex--
          $(this.homeNavItem).removeClass('active')
          $(this.homeNavItem[this.currentIndex]).addClass('active')
        }
      }
      return false;
    }, 100));

  }

  animateHomeSections (section, offsetTop) {
    TweenMax.to(section, 0.4, { ease: Expo.easeInOut, top: offsetTop })

  }
}