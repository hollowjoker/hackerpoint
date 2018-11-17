import $ from 'jquery'

import Admin from './admin/Admin'
import Front from './front/Front'

const ADMIN = new Admin()
const FRONT = new Front()


$(document).ready(() => {
  if ($('body').hasClass('admin')) {
    ADMIN.ready()
  } else {
    FRONT.ready()
  }
})

$(window).on('scroll', e => {
  // if ($('body').hasClass('admin')) {
  //   ADMIN.scroll(e)
  // } else {
  //   FRONT.scroll(e)
  // }
})

$(window).on('load', e => {
  if ($('body').hasClass('admin')) {
    ADMIN.ready()
  } else {
    FRONT.load(e)
  }
})