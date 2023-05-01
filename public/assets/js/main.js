/*
Author       : Theme-Family
Template Name: Al-Mujib - Busniess & Consulting Agency Template
Version      : 1.0
*/
(function ($) {
  "use strict";


  /*--------------------------------------------------------------
       PRELOADER
      --------------------------------------------------------------*/
  /*PRELOADER JS*/
  $(window).load(function () {
    $('.atf-status').fadeOut();
    $('.atf-preloader').delay(350).fadeOut('slow');
  });
  /*END PRELOADER JS*/

  /*--------------------------------------------------------------
       Sticky Header
      --------------------------------------------------------------*/

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $('.atf-sticky-header').addClass('atf-sticky-active');
    } else {
      $('.atf-sticky-header').removeClass('atf-sticky-active');
    }
  });

  /*--------------------------------------------------------------
     Mobile Menu
    --------------------------------------------------------------*/

  $('.atf-nav').append('<span class="atf-menu-toggle"><span></span></span>');
  $('.menu-item-has-children').append('<span class="atf-menu-dropdown-toggle"></span>');
  $('.atf-menu-toggle').on('click', function () {
    $(this).toggleClass("atf-toggle-active").siblings('.atf-nav-list').slideToggle();;
  });
  $('.atf-menu-dropdown-toggle').on('click', function () {
    $(this).toggleClass('active').siblings('ul').slideToggle();
  });


  /*--------------------------------------------------------------
     One Page Navigation
    --------------------------------------------------------------*/
  // Click To Go Top
  $('.atf-smooth-move').on('click', function () {
    var thisAttr = $(this).attr('href');
    if ($(thisAttr).length) {
      var scrollPoint = $(thisAttr).offset().top - 50;
      $('body,html').animate({
        scrollTop: scrollPoint
      }, 800);
    }
    return false;
  });

  // One Page Active Class
  var topLimit = 300,
    ultimateOffset = 200;

  $('.atf-onepage-nav').each(function () {
    var $this = $(this),
      $parent = $this.parent(),
      current = null,
      $findLinks = $this.find("a");

    function getHeader(top) {
      var last = $findLinks.first();
      if (top < topLimit) {
        return last;
      }
      for (var i = 0; i < $findLinks.length; i++) {
        var $link = $findLinks.eq(i),
          href = $link.attr("href");

        if (href.charAt(0) === "#" && href.length > 1) {
          var $anchor = $(href).first();
          if ($anchor.length > 0) {
            var offset = $anchor.offset();
            if (top < offset.top - ultimateOffset) {
              return last;
            }
            last = $link;
          }
        }
      }
      return last;
    }

    $(window).on("scroll", function () {
      var top = window.scrollY,
        height = $this.outerHeight(),
        max_bottom = $parent.offset().top + $parent.outerHeight(),
        bottom = top + height + ultimateOffset;

      var $current = getHeader(top);

      if (current !== $current) {
        $this.find(".active").removeClass("active");
        $current.addClass("active");
        current = $current;
      }
    });
  });

  /*--------------------------------------------------------------
       Sticky Back To Top
      --------------------------------------------------------------*/

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
      $('.atf-sticky-header').addClass('atf-nav');
      $('.atf-back-to-top').addClass('open');
    } else {
      $('.atf-sticky-header').removeClass('atf-nav');
      $('.atf-back-to-top').removeClass('open');
    }
  });

  /*--------------------------------------------------------------
       Scroll UP
      --------------------------------------------------------------*/

  if ($('.atf-back-to-top').length) {
    $(".atf-back-to-top").on('click', function () {
      var target = $(this).attr('data-targets');
      // animate
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);

    });
  }



  /*--------------------------------------------------------------
      START PARTNER LOGO
      --------------------------------------------------------------*/

  $('.atf-brand-active').owlCarousel({
    rtl: true,
    margin: 10,
    autoplay: true,
    items: 3,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 3
      },
      600: {
        items: 4
      },
      1000: {
        items: 6
      }
    }
  });
  /*END PARTNER LOGO*/
  $('.Portfolio-owl').owlCarousel({
    rtl:true,
    margin: 10,
    autoplay: true,
    items: 3,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
  /*******************/
  $('.testimonial-owl').owlCarousel({
    rtl:true,
    margin: 10,
    autoplay: true,
    items: 3,
    loop: true,
    nav: true,
    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });





  /*--------------------------------------------------------------
    WOW SCROLL SPY
      --------------------------------------------------------------*/
  var wow = new WOW({
    //disabled for mobile
    mobile: false
  });

  wow.init();

  /******************COUNTER***********/
  $('.counting').each(function () {
    var $this = $(this),
      countTo = $this.attr('data-count');

    $({ countNum: $this.text() }).animate({
      countNum: countTo
    },

      {

        duration: 3000,
        easing: 'linear',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }

      });


  });


})(jQuery);

