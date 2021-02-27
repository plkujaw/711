$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $('.header').addClass('header--sticky');
    } else {
      $('.header').removeClass('header--sticky');
    }
  });

  $('.nav__back-to-top').click(function (e) {
    e.preventDefault();
    $(window).scrollTop(0);
  });
});
