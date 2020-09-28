

  $(function() {
    $(".testimonials-carousel").owlCarousel({
        autoplay: false,
        dots: false,
        loop: false,
        items: 6,
        responsive:{
          0:{
              items:1,
              nav:false
          },
          500:{
              items:2,
              nav:false,
              loop:true
            },
            700:{
              items:3,
              nav:false,
              loop:true
          },
          1000:{
              items:5,
              nav:false,
              loop:true
          }
      }
      });
  });
