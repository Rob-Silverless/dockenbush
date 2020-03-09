//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.js
//@prepros-prepend mixitup-pagination.js
//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend ../owl/owl.carousel.min.js

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

    $('.btt').click(function(){
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
        nav:true,
    	navClass: ['owl-prev', 'owl-next'],
        dots:true,
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
        nav: true,
        navClass: ['testimonial-prev', 'testimonial-next'],
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

    $('.hero-slider').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        nav:true,
        navClass: ['hero-prev', 'hero-next'],
        dots:true,
        items:1,
        autoplay: true,
        autoplayTimeout: 8000
    });

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

    // Thigns to do and Places to eat

    $('.things-container__list-item').on('click', function(e){
        e.preventDefault();
        var item = $(this).attr('data-item');
        $('.things-container__item').fadeOut(500);
        $('#' + item).delay(500).fadeIn();
    });
    $('.eat-container__list-item').on('click', function(e){
        e.preventDefault();
        var item = $(this).attr('data-item');
        $('.eat-container__item').fadeOut(500);
        $('#' + item).delay(500).fadeIn();

    });
    $('.eat-mob-container__list-item').on('click', function(e){
        e.preventDefault();
        var item = $(this).attr('data-item');
        $('.eat-mob-container__item').fadeOut(500);
        $('#' + item).delay(500).fadeIn();

    });
    $('#things').on('click', function(e){
        e.preventDefault();
        $('.eat-container').slideUp();
        $('.eat-mob-container').slideUp();
        $('.things-container').slideToggle();
    });
    $('#eat').on('click', function(e){
        e.preventDefault();
        $('.things-container').slideUp();
        $('.eat-container').slideToggle();

    });

    $('#eat-mob').on('click', function(e){
        e.preventDefault();
        $('.things-container').slideUp();
        $('.eat-mob-container').slideToggle();

    });
});//Don't remove ---- end of jQuery wrapper
