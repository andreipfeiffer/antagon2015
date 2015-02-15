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

    var pswpElement = null,
        galleryData = {};

    ANTAGON.init();

    $(window).scroll(function() {
        ANTAGON.toggleMenu();
    });

    $('.galerie').on('click', function(e) {
        e.preventDefault();
        var year = $(this).attr('data-year');
        if ( !pswpElement ) {
            $.when(
                $.get('views/galerie.php'),
                $.get('galerie-data.php')
            ).done(function(template, imageData) {
                galleryData = JSON.parse( imageData[0] );
                pswpElement = $('body').append(template[0]).find('.pswp')[0];
                initGalerie( galleryData[year] );
            });
        } else {
            initGalerie( galleryData[year] );
        }
    })

    function initGalerie(items) {

        if ( typeof items === 'undefined' ) {
            return;
        }

        var options = {
            // optionName: 'option value'
            // for example:
            index: 0 // start at first slide
        };

        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options );
        gallery.init();
    }
});

