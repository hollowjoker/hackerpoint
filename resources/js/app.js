import $ from 'jquery'

import Admin from './admin/Admin'
import Front from './front/Front'

const URL = window.location.origin
const ADMIN = new Admin(URL)
const FRONT = new Front()

console.log(URL)

$(document).ready(() => {
  if ($('body').hasClass('admin')) {
    ADMIN.ready()
  } else {
    FRONT.ready()
  }
})
