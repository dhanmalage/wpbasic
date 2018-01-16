/**
 * Created by Dananjaya Maha Malage on 1/16/2018.
 */


/**
 *
 * Scroll reveal example
 *
    jQuery(function() {
        window.sr = ScrollReveal();
        sr.reveal('.come-class');
    });
 *
 */


/**
 *
 * owl carousel example
 *
    jQuery(function() {
        var owl1 = jQuery('.owl1');
        owl1.owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoplayTimeout:6000,
            autoplayHoverPause:true,
            autoHeight:true,
            nav:true,
            smartSpeed:900,
            navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        });
    });
 *
 */

/**
 *
 * Smooth scroll
 *
    jQuery(function() {
        smoothScroll.init();
    });
 *
 */

/**
 *
 * Pre loader
 *
    jQuery(document).ready(function(){
        //pre load animation
        //paste this code under the head tag or in a separate js file.
        // Wait for window load
        jQuery(window).on('load', function() {
            // Animate loader off screen
            jQuery(".se-pre-con").fadeOut("slow");
        });
    });
 *
 */
