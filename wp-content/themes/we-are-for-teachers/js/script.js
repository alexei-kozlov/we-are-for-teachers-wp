;(function ($) {
  // Slider Promo
  $('.promo__slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: false,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    fade: true,
  });

  // Slider Congratulations
  $('.congratulations__slider').slick({
    focusOnSelect: true,
    speed: 1500,
    autoplay: false,
    autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    cssEase: 'ease-in-out',
    centerMode: true,
    variableWidth: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnDotsHover: true,
    responsive: [
      {
        breakpoint: 650,
        settings: {
          dots: false,
        }
      }
    ]
  });

  // Slider Cards
  $('.cards__slider').slick({
    focusOnSelect: true,
    centerMode: true,
    variableWidth: true,
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    swipeToSlide: true,
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
  })
      .on('beforeChange', (event, slick, currentSlide, nextSlide) => {
        if (currentSlide !== nextSlide) {
          $('.slick-center + .slick-cloned').each(function () {
            // Timeout required or Slick will overwrite the classes
            setTimeout(() => this.classList.add('slick-current', 'slick-center'));
          });
        }
      });

  // Function - Add anchor links and scrolling on them
  function anchorLink(link, id) {
    $(link).on('click', function () {
      let wpadminbar = $('#wpadminbar').height();
      if (window.matchMedia('(max-width: 600px)').matches)
        $('html, body').animate({
          scrollTop: $(id).offset().top - $('header').height()
        }, 10);
      else if (window.matchMedia('(min-width: 601px) and (max-width: 850px)').matches) {
        if (wpadminbar)
          $('html, body').animate({
            scrollTop: $(id).offset().top - $('header').height() - wpadminbar
          }, 10);
        else $('html, body').animate({
          scrollTop: $(id).offset().top - $('header').height()
        }, 10);
      } else if (window.matchMedia('(min-width: 851px)').matches) {
        if (wpadminbar)
          $('html, body').animate({
            scrollTop: $(id).offset().top
          }, 10);
        else $('html, body').animate({
          scrollTop: $(id).offset().top + 32
        }, 10);
      }
    });
  }

  // Call Functions anchorLink
  anchorLink('a[href="#promo"]', '#promo');
  anchorLink('a[href="#about"]', '#about');
  anchorLink('a[href="#congratulations"]', '#congratulations');
  anchorLink('a[href="#cards"]', '#cards');

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

  $(window).on('scroll', function () {

    // Navigation work as sticky-fixed after scroll
    let header = $('.header').height();
    let promo = $('.promo').height();
    let navigation = 248;
    let wpadminbar = $('#wpadminbar').height();
    if (wpadminbar) {
      if ($(this).scrollTop() > (header + promo + navigation + wpadminbar)) {
        $('.nav').addClass('nav--sticky');
        $('.nav .inner').addClass('inner--sticky');
        $('.nav__camera-roll').addClass('nav__camera-roll--hidden');
      } else {
        $('.nav').removeClass('nav--sticky');
        $('.nav .inner').removeClass('inner--sticky');
        $('.nav__camera-roll').removeClass('nav__camera-roll--hidden');
      }
    } else {
      if ($(this).scrollTop() > (header + promo + navigation)) {
        $('.nav').addClass('nav--sticky');
        $('.nav .inner').addClass('inner--sticky');
        $('.nav__camera-roll').addClass('nav__camera-roll--hidden');
      } else {
        $('.nav').removeClass('nav--sticky');
        $('.nav .inner').removeClass('inner--sticky');
        $('.nav__camera-roll').removeClass('nav__camera-roll--hidden');
      }
    }

    // Correction navigation list after scrolling
    if ($(this).scrollTop() > 0) {
      $('.nav__list').addClass('nav__list--higher');
    } else {
      $('.nav__list').removeClass('nav__list--higher');
    }

    // To top window button fade In/Out
    if ($(this).scrollTop() > 100)
      $('.up-button').fadeIn();
    else $('.up-button').fadeOut();
  });

  // To top button on-click
  $('.up-button').click(function () {
    $('html, body').animate({scrollTop: 0}, 10);
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

    // Autoplay/stop YouTube video if mouse focus on/off
    $(this).on('mouseenter', function () {
      let isSrc = $(this).attr('src');
      if(isSrc !== 'https://www.youtube.com/embed/' + videoID + '?enablejsapi=1') {
        $(this).attr('src', 'https://www.youtube.com/embed/' + videoID + '?enablejsapi=1').attr('id', videoID);
      }
      $(this).on('click', function () {
        this.contentWindow.postMessage(JSON.stringify({
          "event": "command",
          "func": "playVideo",
          "args": ""
        }), "*");
      });
    });
    $(this).on('mouseleave', function () {
      this.contentWindow.postMessage(JSON.stringify({
        "event": "command",
        "func": "pauseVideo",
        "args": ""
      }), "*");
    });
  });

  // Add trigger some events
  $(document).ready(function () {
    // Main Menu position if decor image not exists
    if (!$('.nav__camera-roll').length) {
      $('.nav__menu').toggleClass('nav__menu--center-mode');
    }
    $(window).trigger('scroll');

    // Add snowflakes
    for (let i = 1; i <= 100; i++) {
      $('.snowfall').append($('<div/>', {class: 'snowflake'}))
    }
  });

  $(document).ready(function () {
    $('.dark-logo .custom-logo').each(function () {
      $(this).attr('src', $(this).attr('src').replace('footer-', 'dark-'));
    });

    // Change site's themes
    function applyTheme(theme) {
      $('body').removeClass('theme-auto theme-light theme-dark theme-snow').addClass(`theme-${theme}`);
    }

    const savedTheme = localStorage.getItem('theme') || 'auto';
    applyTheme(savedTheme);

    for (const themeElement of $('.theme .theme__input')) {
      themeElement.checked = savedTheme === themeElement.value;
    }
    // Toggle theme-menu
    $('.theme__title').on('click', () => {
      const theme = $('.theme');
      if (theme.attr('data-state') === 'active') {
        theme.attr('data-state', '');
      } else {
        theme.attr('data-state', 'active');
      }
    });

    // Save data in local storage
    $('.theme__input').each(function () {
      $(this).on('click', () => {
        $('.theme').attr('data-state', '').attr('data-theme', $(this).attr('value'));
        localStorage.setItem('theme', $(this).attr('value'));
        applyTheme($(this).attr('value'));
      });
    });
  });
})(jQuery);
