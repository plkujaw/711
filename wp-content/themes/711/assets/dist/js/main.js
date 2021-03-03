$(document).ready(function () {
  var rellax = new Rellax('.rellax');

  var width = $(this).width();
  $('.img-left').each(function () {
    $(this).css({ left: -(250 - width * 0.1) });
  });

  $('.img-right').each(function () {
    $(this).css({ right: -(250 - width * 0.1) });
  });

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

  $('.header__menu').click(function () {
    $('.mobile-menu').toggleClass('mobile-menu--open');
  });

  $('.mobile-menu__nav')
    .find('a')
    .click(function () {
      $('.mobile-menu').removeClass('mobile-menu--open');
    });

  $(window).resize(function () {
    var width = $(this).width();

    $('.img-left').each(function () {
      $(this).css({ left: -(250 - width * 0.1) });
    });

    $('.img-right').each(function () {
      $(this).css({ right: -(250 - width * 0.1) });
    });
  });

});
