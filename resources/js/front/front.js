import $ from 'jquery'
import _ from 'lodash'
import { TweenMax, Expo } from 'gsap/TweenMax'

export default class Front {

  constructor () {
    this.lastScrollTop = 0
    this.homeSections = $('.main.home .section')
    this.homeNavItem = $('.js-nav-item')
    this.currentIndex = 0
    this.currentItem = 0
  }

  ready () {
    if ($(window).width() >= 992) {
      if ($('.main.home').length) {
        this.setHomeSections(this.homeSections)
        this.bindScroll()
        this.navigateHome(this.homeNavItem)
      }
    } else {
      $('.menu-toggle').click(e => {
        $('.menu-toggle, .header').toggleClass('opened')
      })

      this.navigateHomeMobile(this.homeNavItem)

    }
  }

  scroll (e) {
    let $e = e
    let st = $(window).scrollTop()
    console.log(st);
    if (st > this.lastScrollTop) {
    } else {
    }
    this.lastScrollTop = st
  }

  resize (e) {
  }

  load (e) {
    $('.page-loader-wrapper').fadeOut()
  }

  convertToArray (htmlEntity) {
    return Array.from(htmlEntity)
  }

  setHomeSections (section) {
    let tm = TweenMax
    section.map((i, e) => {
      if (i !== 0) {
        tm.set(e, { top: '-' + $(window).height() })
      }
    })
  }

  navigateHomeMobile (listItem) {
    listItem.click(e => {
      let _target = $(e.target)
      let sectionRef = _target.data('name')
      let section = $('.section-' + sectionRef)

      listItem.removeClass('active')
      _target.addClass('active')
      $('html, body').animate({
        scrollTop: section.offset().top
      }, 800)
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
    TweenMax.to(section, 0.55, { ease: Expo.easeInOut, top: offsetTop, force3D: true })
  }
}