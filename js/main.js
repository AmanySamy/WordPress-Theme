/* Add My Custom Scripts Here */
jQuery(function($) {
	'use strict';
    /*--------- Call Owl Carousel -----*/
    $(".owl-carousel").owlCarousel({

        navigation:true,
        items:4,
        margin:10,
        loop:true,
        autoplay:true,
        pagination:true,
        // autoplayTimeout:1000,
        // autoplayHoverPause:true,
        navigationText: ["<i class='fa fa-chevron-left icon-white'></i>", "<i class='fa fa-chevron-right icon-white'></i>"],
        
        responsive:{
            0:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });
});
