import $ from 'jquery'

import Admin from './admin/Admin'
import Front from './front/Front'

$(document).ready(() => {
  if ($('body').hasClass('admin')) {
    const admin = new Admin()
    admin.init()
  } else {
    let masonryItems = document.querySelector('.section-shop__grid')
    const front = new Front(masonryItems)
    front.init()
  }
})
