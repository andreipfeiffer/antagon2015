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
        if ( $(".navbar").offset().top > 50 ) {
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

    var pswpElement = null;

    ANTAGON.init();

    $(window).scroll(function() {
        ANTAGON.toggleMenu();
    });

    $('#galerie2014').on('click', function(e) {
        e.preventDefault();
        if ( !pswpElement ) {
            $.ajax('views/galerie.php').then(function(data) {
                pswpElement = $('body').append(data).find('.pswp')[0];
                initGalerie();
            });
        } else {
            initGalerie();
        }
    })

    function initGalerie() {
        // build items array
        var items = [
            {
                src: 'img/galerie/2014/img1.jpg',
                w: 2000,
                h: 740
            },
            {
                src: 'img/galerie/2014/img2.jpg',
                w: 960,
                h: 639
            }
        ];

        var options = {
            // optionName: 'option value'
            // for example:
            index: 0 // start at first slide
        };

        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options );
        gallery.init();
    }
});

