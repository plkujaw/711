$(document).ready(function () {
  var rellax = new Rellax('.rellax');

  var width = $(window).width();

  $('.img-left').each(function () {
    $(this).css({ left: -(250 - width * 0.1) });
  });

  $('.img-right').each(function () {
    $(this).css({ right: -(250 - width * 0.1) });
  });

  var imageInitialPosition = $('.the-building__image--2').css({
    right: -220 + width * 0.1,
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

    $('.the-building__image--2').css({
      right: -220 + width * 0.1,
    });
  });

  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return (
      (elemTop >= docViewTop && elemTop <= docViewBottom - 200) ||
      (elemBottom >= docViewTop && elemBottom <= docViewBottom - 200)
    );
  }
  $(window).scroll(function () {
    $('.scroll-fade').each(function () {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('scroll-fade-in');
      }
    });
  });
});
