"use strict";

// Initialization
KTUtil.ready(function() {
    ////////////////////////////////////////////////////
    // Layout Base Partials(mandatory for core layout)//
    ////////////////////////////////////////////////////

    // Init Desktop & Mobile Headers
    KTLayoutHeader.init('kt_header', 'kt_header_mobile');

    // Init Header Menu
    KTLayoutHeaderMenu.init('kt_header_menu', 'kt_header_menu_wrapper');

    // Init Header Topbar For Mobile Mode
    KTLayoutHeaderTopbar.init('kt_header_mobile_topbar_toggle');

    // Init Brand Panel For Logo
    KTLayoutBrand.init('kt_brand');

    // Init Aside
    KTLayoutAside.init('kt_aside');

    // Init Aside Menu Toggle
    KTLayoutAsideToggle.init('kt_aside_toggle');

    // Init Aside Menu
    KTLayoutAsideMenu.init('kt_aside_menu');

    // Init Subheader
    KTLayoutSubheader.init('kt_subheader');

    // Init Content
    KTLayoutContent.init('kt_content');
    // Init Contact
    KTLayoutContact.init();

    // Init Footer
    KTLayoutFooter.init('kt_footer');


    //////////////////////////////////////////////
    // Layout Extended Partials(optional to use)//
    //////////////////////////////////////////////

    // Init Scrolltop
    KTLayoutScrolltop.init('kt_scrolltop');

    // Init Sticky Card
    KTLayoutStickyCard.init('kt_page_sticky_card');

    // Init Stretched Card
    KTLayoutStretchedCard.init('kt_page_stretched_card');

    // Init Code Highlighter & Preview Blocks(used to demonstrate the theme features)
	KTLayoutExamples.init();

    // Init Demo Selection Panel
	KTLayoutDemoPanel.init('kt_demo_panel');

    // Init Chat App(quick modal chat)
    KTLayoutChat.init();

    // Init Quick Actions Offcanvas Panel
    KTLayoutQuickActions.init('kt_quick_actions');

    // Init Quick Notifications Offcanvas Panel
    KTLayoutQuickNotifications.init('kt_quick_notifications');

    // Init Quick Offcanvas Panel
    KTLayoutQuickPanel.init('kt_quick_panel');

    // Init Quick User Panel
    KTLayoutQuickUser.init('kt_quick_user');

    // Init Quick Search Panel
    KTLayoutQuickSearch.init('kt_quick_search');

    // Init Quick Cart Panel
    KTLayoutQuickCartPanel.init('kt_quick_cart');

    // Init Search For Quick Search Dropdown
    KTLayoutSearch().init('kt_quick_search_dropdown');

    // Init Search For Quick Search Offcanvas Panel
    KTLayoutSearchOffcanvas().init('kt_quick_search_offcanvas');
    KTLayoutContact.init();



    $(function() {

                if ($('.nav-menu').length) {
                    var $mobile_nav = $('.nav-menu').clone().prop({
                      class: 'mobile-nav d-lg-none'
                    });
                    $('body').append($mobile_nav);
                    // $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars"></i></button>');
                    // $('body').append('<div class="mobile-nav-overly"></div>');



                    $('.mobile-nav').on('click', function(e) {
                      e.preventDefault();
                      console.log('asd')
                      $(this).next().slideToggle(300);
                      $(this).parent().toggleClass('active');
                    });

                    $('.mobile-nav-toggle').on('click', function(e) {
                        $('body').toggleClass('mobile-nav-active');
                        $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
                        $('.mobile-nav-overly').toggle();
                        console.log('asd');
                      });
                    $(document).click(function(e) {
                      var container = $(".mobile-nav, .mobile-nav-toggle");
                      if (!container.is(e.target) && container.has(e.target).length === 0) {
                        if ($('body').hasClass('mobile-nav-active')) {
                          $('body').removeClass('mobile-nav-active');
                      $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
                          $('.mobile-nav-overly').fadeOut();
                        }
                      }
                    });
                  }
                  else if ($(".mobile-nav, .mobile-nav-toggle").length) {
                    $(".mobile-nav, .mobile-nav-toggle").hide();
                  }
                //   Real view height for mobile devices
                  if (window.matchMedia("(max-width: 767px)").matches) {
                    $('#hero').css({
                      height: $(window).height()
                    });
                  }
});


});
