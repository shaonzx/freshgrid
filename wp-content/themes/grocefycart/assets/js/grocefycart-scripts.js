(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".grocefycart-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".grocefycart-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".grocefycart-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".grocefycart-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".grocefycart-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".grocefycart-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".grocefycart-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".grocefycart-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".grocefycart-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".grocefycart-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".grocefycart-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".grocefycart-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".grocefycart-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".grocefycart-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".grocefycart-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".grocefycart-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".grocefycart-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".grocefycart-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".grocefycart-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".grocefycart-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".grocefycart-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".grocefycart-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".grocefycart-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".grocefycart-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".grocefycart-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".grocefycart-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".grocefycart-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".grocefycart-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".grocefycart-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".grocefycart-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".grocefycart-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".grocefycart-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".grocefycart-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".grocefycart-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".grocefycart-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".grocefycart-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".grocefycart-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".grocefycart-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".grocefycart-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".grocefycart-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".grocefycart-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".grocefycart-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".grocefycart-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".grocefycart-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".grocefycart-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var grocefycartStickyMenu = $(".grocefycart-sticky-menu");
    var grocefycartStickyNavigation = $(".grocefycart-sticky-navigation");

    if (grocefycartStickyMenu.length && scrollTop > 0) {
      grocefycartStickyMenu.addClass("sticky-menu-enabled grocefycart-zoom-in-up");
    } else {
      grocefycartStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".grocefycart-scrollto-top a").fadeIn();
    } else {
      jQuery(".grocefycart-scrollto-top a").fadeOut();
    }
  });
  jQuery(".grocefycart-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
