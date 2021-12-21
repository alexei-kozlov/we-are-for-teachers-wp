;(function ($) {

  // Slider Congratulations
  $('.congratulations__slider').slick({
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    infinite: true,
    cssEase: 'ease-in-out',
    centerMode: true,
    variableWidth: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnDotsHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 650,
        settings: {
          dots: false,
          slidesToShow: 1
        }
      }
    ]
  });

  // Slider Cards
  $('.cards__slider').slick({
    centerMode: true,
    variableWidth: true,
    centerPadding: '38px',
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 3000,
    cssEase: 'ease-in-out',
    arrows: true,
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnDotsHover: true,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 650,
        settings: {
          centerPadding: '60px',
          dots: false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 450,
        settings: {
          centerPadding: '30px',
          dots: false,
          slidesToShow: 1
        }
      }
    ]
  });

  // Toggle mobile-menu
  $('.nav__menu-field').on('click', function () {
    $('.nav .inner').toggleClass('inner--menu-wrapper');
    $('.nav__menu').toggleClass('nav__menu--active');
    $('.nav__menu-field').toggleClass('nav__menu-field--active');
  });

  // Toggle mobile-menu after choose menu-item
  $('.menu-item').on('click', function () {
    $('.nav .inner').removeClass('inner--menu-wrapper');
    $('.nav__menu').toggleClass('nav__menu--active');
    $('.nav__menu-field').toggleClass('nav__menu-field--active');
  });

  // Navigation work as sticky-fixed after scroll
  $(window).on('scroll', function () {
    let header = $('.header').height();
    let promo = $('.promo').height();
    let navigation = $('.nav').height();
    if ($(this).scrollTop() > (header + promo + navigation)) {
      $('.nav .inner').addClass('inner--sticky');
      $('.nav__camera-roll').addClass('nav__camera-roll--hidden');
    } else {
      $('.nav .inner').removeClass('inner--sticky');
      $('.nav__camera-roll').removeClass('nav__camera-roll--hidden');
    }

    if ($(this).scrollTop() > 0) {
      $('.nav__list').addClass('nav__list--higher');
    } else {
      $('.nav__list').removeClass('nav__list--higher');
    }
  });

  // Check social item's attribute value (href)
  $('.social__link').each(function () {
    if ($(this).attr('href').length === 0) {
      $(this).closest('.social__item').remove();
    }
  });

  // Change congratulation item's video attribute value (href)
  $('.congratulations__video').each(function () {
    let href = $(this).attr('data-href'),
        videoID = href.substring(href.indexOf('v=') + 2, href.indexOf('v=') + 13);
    $(this).attr('src', 'https://www.youtube.com/embed/' + videoID);
  });

  // Add trigger some events
  $(document).ready(function () {
    $(window).trigger('scroll');

    // Main Menu position if decor image not exists
    if (!$('.nav__camera-roll').length) {
      $('.nav__menu').toggleClass('nav__menu--center-mode');
    }
  });
})(jQuery);