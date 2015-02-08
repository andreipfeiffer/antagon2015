var ANTAGON = (function() {

    'use strict';

    function init() {
        scrollToSection();

        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function() {
            $('.navbar-toggle:visible').click();
        });
    }

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    function scrollToSection() {
        $('.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 800, 'easeInOutExpo');
            event.preventDefault();
        });
    }

    // jQuery to collapse the navbar on scroll
    function toggleMenu() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    }

    return {
        init: init,
        toggleMenu: toggleMenu
    };

})();

$(function() {

    'use strict';

    ANTAGON.init();

    $(window).scroll(function() {
        ANTAGON.toggleMenu();
    });
});

