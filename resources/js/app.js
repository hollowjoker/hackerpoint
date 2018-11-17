; (function () {
  if ($('body').hasClass('admin')) {
    admin.init()
  } else {
    front.init()
  }
})()