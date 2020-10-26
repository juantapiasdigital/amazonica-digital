(function ($) {
  $(document).ready(function () {
    /**
     * Sidebar product cart
     */
    $('.nav-cart').on('click', function(e){
      $('.cart-product').addClass('active');
      $('.cart-product').css({'width': '450px'});
    });


    $('.close-sidebar-cart').on('click', function(e){
      $('.cart-product').removeClass('active');
      $('.cart-product').css({'width': '0px'});
    });

    /**
     * Banner carousel
     */
    $(".banner .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });

    /**
     * Product carousel
     */
    $(".products .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 4,
        },
      },
    });

    /**
     * Brands carousel
     */
    $(".brands .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 3,
        },
      },
    });

  });
})(jQuery);
