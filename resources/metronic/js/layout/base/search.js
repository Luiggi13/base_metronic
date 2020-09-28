"use strict";

var KTLayoutSearch2 = function() {
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

            $('.mobile-nav-toggle').on('click', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('.mobile-nav-toggle i').toggleClass('fa-bars fa-times');
                $('.mobile-nav-overly').toggle();
                console.log('asd');
            });
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
            $(function () {
                if(window.location.href.indexOf("searchF") > -1) {
                    $('#header').addClass('header-scrolled');
                    $('#header .container').addClass('container-fluid').removeClass('container');
                    $('i.bookmark-icon').on('click', function(e){
                        e.preventDefault();
                        $(this).toggleClass('bookmarked');
                  });
                  $('.enable-filters-button').on('click', function(){
                        $('.full-page-sidebar').toggleClass("enabled-sidebar");
                        $('.full-page-content-container-search').toggleClass("sidebar-enabled");
                        $(this).toggleClass("active");
            
                    });
                    var headerHeight = $("body").outerHeight();
            
                    $(".switch").on('click', function() {
                        $(".switch").addClass('interactive-effect');
                    if($(".mailaction").is(':checked')) {
                      $('.mailaction').removeAttr('checked');
                    }else{
                      $('.mailaction').attr('checked','checked');
                    }
            
                  });
            
            
                  }
            });
            
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
	module.exports = KTLayoutSearch2;
}
