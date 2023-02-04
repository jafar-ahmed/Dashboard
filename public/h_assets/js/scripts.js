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
    var home_slider = $('.home-sliders').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: true,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 0,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
            },
            // breakpoint from 768 up
            768: {
                items: 1,
            },
            // breakpoint from 768 up
            992: {
                items: 1,
            },
            // breakpoint from 768 up
            992: {
                items: 1,
            }
        }
    });

    var silder_time_out;
    var progress_set_interval;
    home_slider.on('changed.owl.carousel', function (event) {
        clearTimeout(silder_time_out);
        swiping(home_slider, silder_time_out, event.item.index);
    });
    if ($('.home-sliders .owl-item').not(".cloned").length > 1) {
        swiping(home_slider, silder_time_out);
    }

    function swiping(slider, silder_time_out, index = 1) {
        if ($($('.home-sliders-item')[index]).children('img').length != 0) {
            silder_time_out = setTimeout(() => {
                slider.trigger('next.owl.carousel');
            }, 2000);
            progress(1500, 500);

        } else {
            let duration = parseFloat($('.home-sliders-item').children('.item-video')[index - 1].duration) * 1000;
            silder_time_out = setTimeout(() => {
                slider.trigger('next.owl.carousel');
            }, duration);
            progress(duration - 500, 500);

        }
    }

    function progress(duration, delay = 0) {
        clearInterval(progress_set_interval);
        let new_duration = (duration - delay) / 100;
        var width = 0;
        $('.progress').css('width', width + '%');
        let time_out = setTimeout(() => {
            progress_set_interval = setInterval(() => {
                $('.progress').css('width', width + '%');
                width++;
                if (width > 100) {
                    clearTimeout(progress_set_interval);
                }
            }, new_duration);
            clearTimeout(time_out);
        }, delay);


    }

    // products-sliders
    $('.products-sliders').owlCarousel({
        // center: true,
        loop: false,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                items: 3,
            },
            // breakpoint from 768 up
            1200: {
                items: 4,
            }
        }
    });
    // projects-sliders
    $('.projects-sliders').owlCarousel({
        // center: true,
        loop: false,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                items: 3,
            },
            // breakpoint from 768 up
            1200: {
                items: 3,
            }
        }
    });
    // blog-sliders
    $('.blog-sliders').owlCarousel({
        // center: true,
        loop: false,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                items: 3,
            },
            // breakpoint from 768 up
            1200: {
                items: 3,
            }
        }
    });
    // testimonial-sliders
    $('.testimonial-sliders').owlCarousel({
        // center: true,
        loop: false,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: true,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                items: 3,
            },
            // breakpoint from 768 up
            1200: {
                items: 3,
            }
        }
    });
    // team-sliders
    $('.team-sliders').owlCarousel({
        // center: true,
        loop: false,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                items: 3,
            },
            // breakpoint from 768 up
            1200: {
                items: 4,
            }
        }
    });
    let product_details_tumb_silder = $('.product-details-tumb-silder').owlCarousel({
        // center: true,
        loop: false,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: true,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 30,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 3,
            },
            // breakpoint from 480 up
            481: {
                items: 4,
            },
            // breakpoint from 768 up
            768: {
                items: 5,
            },

        }
    });
    // clients-sliders
    $('.clients-sliders').owlCarousel({
        // center: true,
        items: 1,
        loop: false,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 0,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 3,
            },
            // breakpoint from 768 up
            992: {
                items: 4,
            },
            // breakpoint from 992 up
            1200: {
                items: 6,
            }
        }
    });
    // project-sliders
    $('.project-sliders').owlCarousel({
        // center: true,
        items: 1,
        loop: false,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: true,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        margin: 0,
        smartSpeed: 450,
    });

});
