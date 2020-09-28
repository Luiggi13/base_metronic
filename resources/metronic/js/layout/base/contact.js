"use strict";

var KTLayoutContact = function() {
    // Private properties
    var _element;

    // Private functions
    var _getHeight = function() {
        var height = 0;

        if (_element) {
            height = KTUtil.actualHeight(_element);
        }

        return height;
    }

    var _checkTransparent = function() {
        if ($('.nav-menu').length) {
            // var $mobile_nav = $('.nav-menu').clone().prop({
            //   class: 'mobile-nav d-lg-none'
            // });
            // $('body').append($mobile_nav);
            // $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars"></i></button>');
            // $('body').append('<div class="mobile-nav-overly"></div>');



            // $('.mobile-nav').on('click', function(e) {
            //   e.preventDefault();
            //   console.log('asd')
            //   $(this).next().slideToggle(300);
            //   $(this).parent().toggleClass('active');
            // });

            $('.mobile-nav-toggle').on('click', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
                $('.mobile-nav-overly').toggle();
                console.log('asd');
            });
            // $(document).on('click', function(e) {
            // // $(document).click(function(e) {
            //   var container = $(".mobile-nav, .mobile-nav-toggle");
            //   if (!container.is(e.target) && container.has(e.target).length === 0) {
            //     if ($('body').hasClass('mobile-nav-active')) {
            //       $('body').removeClass('mobile-nav-active');
            //   $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
            //       $('.mobile-nav-overly').fadeOut();
            //     }
            //   }
            // });
          }
            var classes = $('#header').hasClass('header-scrolled');
            if(classes == false) {
                $('#header').addClass('transparente');
                return true;
            }
            $('#header').addClass('colorizado');
            return false;
    }

    // Public methods
	return {
		init: function() {
            if(window.location.href.indexOf("contact") > -1) {
                $('#header').addClass('header-scrolled');
                console.log('contacto');
            }else{
            //   $(window).scroll(function() {
            //     if ($(this).scrollTop() > 100) {
            //       $('#header').addClass('header-scrolled');
            //     } else {
            //       $('#header').removeClass('header-scrolled');
            //     }
            //   });

              if ($(window).scrollTop() > 100) {
                $('#header').addClass('header-scrolled');
              }
            }
            /**/
            /**/$(function() {

                if ($('.nav-menu').length) {
                    // var $mobile_nav = $('.nav-menu').clone().prop({
                    //   class: 'mobile-nav d-lg-none'
                    // });
                    // $('body').append($mobile_nav);
                    // $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars"></i></button>');
                    // $('body').append('<div class="mobile-nav-overly"></div>');



                    // $('.mobile-nav').on('click', function(e) {
                    //   e.preventDefault();
                    //   console.log('asd')
                    //   $(this).next().slideToggle(300);
                    //   $(this).parent().toggleClass('active');
                    // });

                    $('.mobile-nav-toggle').on('click', function(e) {
                        $('body').toggleClass('mobile-nav-active');
                        $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
                        $('.mobile-nav-overly').toggle();
                        console.log('asd');
                      });
                    // $(document).click(function(e) {
                    //   var container = $(".mobile-nav, .mobile-nav-toggle");
                    //   if (!container.is(e.target) && container.has(e.target).length === 0) {
                    //     if ($('body').hasClass('mobile-nav-active')) {
                    //       $('body').removeClass('mobile-nav-active');
                    //   $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
                    //       $('.mobile-nav-overly').fadeOut();
                    //     }
                    //   }
                    // });
                  }
                //   else if ($(".mobile-nav, .mobile-nav-toggle").length) {
                //     $(".mobile-nav, .mobile-nav-toggle").hide();
                //   }
                  // Real view height for mobile devices
                //   if (window.matchMedia("(max-width: 767px)").matches) {
                //     $('#hero').css({
                //       height: $(window).height()
                //     });
                //   }
});

            /**/
            /**/
            return _checkTransparent();
		},

        getElement: function() {
            return _element;
        },

        getHeight: function() {
            return _getHeight();
        }
	};
}();

// Webpack support
if (typeof module !== 'undefined') {
	module.exports = KTLayoutContact;
}
