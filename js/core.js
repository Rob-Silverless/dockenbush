//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.js
//@prepros-prepend mixitup-pagination.js
//@prepros-prepend jquery.magnific-popup.js

jQuery(document).ready(function( $ ) {

/* ADD CLASS ON LOAD*/

    $("html").delay(100).queue(function(next) {
        $(this).addClass("loaded");
        next();
    });

/* ADD CLASS ON SCROLL*/

	$(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    });

//Smooth Scroll

    $('nav a, a.button').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top -100
        }, 1000);
        return false;
    });

    $('.wrapper-hero a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top -50
        }, 1500);
        return false;
    });

// ========== Controller for lightbox elements

    $(document).ready(function() {

        $('.lodge-gallery').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    });

// GLOBAL OWL CAROUSEL SETTINGS

    $('.standard').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:10,
        nav:true,
    	navClass: ['owl-prev', 'owl-next'],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.testimonial-slider').owlCarousel({
        autoplay:true,
        autoplayTimeout:10000,
        loop:true,
        margin:10,
        nav: false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            2000:{
                items:1
            }
        }
    })

/* CLASS AND FOCUS ON CLICK */

    $('.nav-wrapper__trigger').click(function() {
        $('.hamburger').toggleClass('is-active');
        $(".nav-wrapper").toggleClass("menu-open");
    });

    $('.multi-panel__trigger').click(function() {
        $(".multi-panel__trigger.active").removeClass("active");
        $(this).addClass('active');
    });

    $('.menu-item a').click(function() {
        $(".nav-wrapper").removeClass("menu-open");
        $(".nav-wrapper__trigger.is-active").removeClass("is-active");
    });

    $(".openTrigger").click(function(event) {
      $('.content__hidden').addClass("show");
      $(this).addClass("hide");
    });

    $(".closeTrigger").click(function(event) {
      $('.content__hidden').removeClass("show");
      $('.openTrigger').removeClass("hide");
    });

});//Don't remove ---- end of jQuery wrapper
