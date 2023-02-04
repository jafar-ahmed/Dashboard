/*global $, jQuery, console, alert, prompt */

$(document).ready(function () {
    "use strict";
    /*************************************/

    $('#openMenu').click(function (e) {
        e.preventDefault();
        $('.side-menu').css("right", 0).css("opacity", 1);
        $('.side-overlay').fadeIn();
        $('body, html').css("overflow-y", "hidden");
        $('.side-overlay, #closeMenu').click(function () {
            $('.side-menu').css("right", "-900px").css("opacity", 0);
            $('.side-overlay').fadeOut();
            $('body, html').css("overflow-y", "auto");
        });
    });

    /*************************************/


	// home-sliders
    $('.home-sliders').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: false,
        nav:true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:true,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:0,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            480 : {
                items:1,
            },
            // breakpoint from 768 up
            768 : {
                items:1,
            },
            // breakpoint from 768 up
            992 : {
                items:1,
            },
            // breakpoint from 768 up
            992 : {
                items:1,
            }
        }
    });
    // products-sliders
    $('.products-sliders').owlCarousel({
        // center: true,
        loop: true,
        rtl: false,
        nav:false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:30,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            481 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            992 : {
                items:3,
            },
            // breakpoint from 768 up
            1200 : {
                items:4,
            }
        }
    });
    // projects-sliders
    $('.projects-sliders').owlCarousel({
        // center: true,
        loop: true,
        rtl: false,
        nav:false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:30,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            481 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            992 : {
                items:3,
            },
            // breakpoint from 768 up
            1200 : {
                items:3,
            }
        }
    });
    // blog-sliders
    $('.blog-sliders').owlCarousel({
        // center: true,
        loop: true,
        rtl: false,
        nav:false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:30,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            481 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            992 : {
                items:3,
            },
            // breakpoint from 768 up
            1200 : {
                items:3,
            }
        }
    });
    // testimonial-sliders
    $('.testimonial-sliders').owlCarousel({
        // center: true,
        loop: true,
        rtl: false,
        nav:false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:true,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:30,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            481 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            992 : {
                items:3,
            },
            // breakpoint from 768 up
            1200 : {
                items:3,
            }
        }
    });
    // team-sliders
    $('.team-sliders').owlCarousel({
        // center: true,
        loop: true,
        rtl: false,
        nav:false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:30,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            481 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:2,
            },
            // breakpoint from 768 up
            992 : {
                items:3,
            },
            // breakpoint from 768 up
            1200 : {
                items:4,
            }
        }
    });
    $('.clients-sliders').owlCarousel({
        // center: true,
        items: 1,
        loop: false,
        rtl: false,
        nav:true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:0,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1,
            },
            // breakpoint from 480 up
            480 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:3,
            },
            // breakpoint from 768 up
            992 : {
                items:4,
            },
            // breakpoint from 992 up
            1200 : {
                items:6,
            }
        }
    });
    // project-sliders
    $('.project-sliders').owlCarousel({
        // center: true,
        items: 1,
        loop: false,
        rtl: false,
        nav:true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:true,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        margin:0,
        smartSpeed:450,
    });
  let product_details_tumb_silder =  $('.product-details-tumb-silder').owlCarousel({
        // center: true,
        loop: true,
        rtl: false,
        nav:false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>","<i class='fas fa-chevron-left' title='Next'></i>"],
        dots:false,
        autoplay: true,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:30,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:3,
            },
            // breakpoint from 480 up
            481 : {
                items:4,
            },
            // breakpoint from 768 up
            768 : {
                items:5,
            },

        }
    });

});
