$(document).ready(function() {
  var lastScrollTop = 0;
  $(window).scroll(function() {
    var currentScrollTop = $(this).scrollTop();
    if (currentScrollTop < lastScrollTop) {
      $('nav.navbar').removeClass('static-top').addClass('fixed-top');
      $('body').css('padding-top', ($('nav.navbar').height() + 15));
    } else {
      $('nav.navbar').removeClass('fixed-top').addClass('static-top');
      $('body').css('padding-top', '0px');
    }
    lastScrollTop = currentScrollTop;
  });
});