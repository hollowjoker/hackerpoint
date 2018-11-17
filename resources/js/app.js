import Masonry from 'masonry-layout'
import $ from 'jquery'

import Admin from './admin/Admin'
import Front from './front/Front'

$(document).ready(() => {
  if ($('body').hasClass('admin')) {
    const admin = new Admin()
    admin.init()
  } else {
    const front = new Front()
    front.init()
  }
})
