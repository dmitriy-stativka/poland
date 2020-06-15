"use strict";

$(document).ready(function () {

  $('.single-item').slick({
    infinite: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 1500,
    nextArrow: '<div class="arrow-next-cont">  <svg class="icon"><use xlink:href="#arrow-next" /></svg> </div>',
    prevArrow: '<div class="arrow-prev-cont">  <svg class="icon"><use xlink:href="#arrow-prev" /></svg> </div>',
  });

  $(window).resize(function () {
    if($(window).width() >= 1023){
      $( ".header-bottom__center" ).removeClass( "animate__fadeOutUpBig" );     

  

    };
});

    let hidden = false;
    window.addEventListener("scroll",()=> {
        if(window.scrollY > 0 && !hidden && $(window).width() >= 1023) {        

                  
            hidden = true
            $(".logo").animate({'max-width' : '180px'});
            $(".header-bottom").animate({'padding' : '15px 0px'})
        } else if(window.scrollY === 0 && hidden) {     

              
            hidden = false
            $(".logo").animate({'max-width' : '200px'});
            $(".header-bottom").animate({'padding' : '30px 0px'})
        }
    });


  // Burger btn on click
  $(".nav-tools__burger").on("click", function () {
      
    $(".nav-tools__burger").toggleClass("nav-tools__burger-open");
    $(".burger-menu__block").toggleClass("burger-menu__block-show");
    
    if ($(".nav-tools__burger").hasClass("nav-tools__burger-open")) {
      $( ".header-bottom__center" ).removeClass( "animate__fadeOutUpBig" );
      $( ".header-bottom__center" ).addClass( "animate__fadeInDownBig" );

    } else {
      $( ".header-bottom__center" ).removeClass( "animate__fadeInDownBig" );
      $( ".header-bottom__center" ).addClass( "animate__fadeOutUpBig" );
    }

  });
  // End

  $(".columbus-house__bottom-btn").on("click", function() {
    // $(".columbus-house-hidden").fadeIn();
    $(".columbus-house").toggleClass("columbus-house-hidden");    
  })

  var p = $(".popup__overlay");
$(".header-phone").click(function () {
  console.log('asdadad');
  p.addClass("popup_open");
});
$(".popup__close").click(function () {
  p.removeClass("popup_open");
});
$(function () {
  $(".header-phone").bind("click", function (e) {
    e.preventDefault();
  });
});


  // $(".nav-tools__search").on("click", function () {
  //   $(".nav-tools__search-block_click").toggleClass("nav-tools__search-block_click-show");
  //   $(".nav-tools__search").toggleClass("nav-tools-close"); // $('.header').toggleClass('header-onclick-search_and_burg');

  //   if ($(".nav-tools__search-block_click-show")) {
  //     $(".nav-tools__burger").removeClass("nav-tools__burger-open");
  //     $(".burger-menu__block").removeClass("burger-menu__block-show");
  //   }
  // });
  
  // var p = $(".popup__overlay");
  // $(".popup__toggle").click(function () {
  //   p.addClass("popup_open");
  // });
  // $(".popup__close").click(function () {
  //   p.removeClass("popup_open");
  // });
  // $(function () {
  //   $(".popup__toggle").bind("click", function (e) {
  //     e.preventDefault();
  //   });
  // });
  // $("#textArea-connect").on("keydown keyup", function () {
  //   this.style.height = "1px";
  //   this.style.height = this.scrollHeight + "px";
  //   this.style.transition = "height .3s ease";
  // });
  // var searchBlock = $(".nav-tools__search-block_click");
  // var menuBlock = $(".burger-menu__block");



  
  
  // // Top-site slider functions 
  // var sliderNavBlock = $(".slider-nav__block");
  // var dot = $(".dot");
  // var leftArrow = $(".nav-bar__prev");
  // var rightArrow = $(".nav-bar__next"); // Function for desktop slider

  // sliderNavBlock.click(function () {
  //   $(".slider-for__container").removeClass('content-active').hide().eq($(this).index()).addClass('content-active').show();
  //   $('.slider-nav__block').removeClass('active-block');
  //   $(this).addClass('active-block');
  // }); // End of Desktop slider

  // // Mobile slider

  // dot.click(function () {
  //   // let sliderBlock = $(".slider-for__container"); 
  //   $(".dot").removeClass('dot-active');
  //   $(this).addClass('dot-active');
  //   $(".slider-for__container").removeClass('content-active').hide().eq($(".dot-active").index()).addClass('content-active').show();
  //   var currentColor = $('.content-active').children(".slider-nav__block-top").children(".nav__block-top__category").css('background');
  //   $(".dot").css({
  //     "background": "#9d9d9d"
  //   });
  //   $(this).css({
  //     "background": currentColor
  //   });
  // });
  // leftArrow.click(function () {
  //   var activeDot = $(".dot-active");
  //   var indexOfDot = $(".dot-active").index();
  //   var sliderBlock = $(".slider-for__container");
  //   activeDot.removeClass("dot-active");
  //   $(".dot").eq(indexOfDot - 1).addClass("dot-active");
  //   sliderBlock.removeClass('content-active').hide().eq($(".dot-active").index()).addClass('content-active').show();
  //   var currentColor = $('.content-active').children(".slider-nav__block-top").children(".nav__block-top__category").css('background');
  //   $(".dot-active").css({
  //     "background": currentColor
  //   });

  //   if ($(".dot-active").index() === 3) {
  //     $(".dot").eq(0).css({
  //       "background": "#9d9d9d"
  //     });
  //   }

  //   $(".dot").eq($(".dot-active").index() + 1).css({
  //     "background": "#9d9d9d"
  //   });
  // });
  // rightArrow.click(function () {
  //   var activeDot = $(".dot-active");
  //   var indexOfDot = $(".dot-active").index();
  //   var sliderBlock = $(".slider-for__container");
  //   activeDot.removeClass("dot-active");

  //   if (indexOfDot === 3) {
  //     $(".dot").eq(0).addClass("dot-active");
  //   } else {
  //     $(".dot").eq(indexOfDot + 1).addClass("dot-active");
  //   }

  //   sliderBlock.removeClass('content-active').hide().eq($(".dot-active").index()).addClass('content-active').show();
  //   var currentColor = $('.content-active').children(".slider-nav__block-top").children(".nav__block-top__category").css('background');
  //   $(".dot-active").css({
  //     "background": currentColor
  //   });
  //   $(".dot").eq($(".dot-active").index() - 1).css({
  //     "background": "#9d9d9d"
  //   });
  // });

  // // End of mobile slider
  // // End of top-site slider functions
  

  // $('.slider-single').slick({
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   arrows: true,
  //   fade: false,
  //   adaptiveHeight: true,
  //   nextArrow: '<div class="arrow-next-cont">  <svg class="icon"><use xlink:href="#right-arrow" /></svg> </div>',
  //   prevArrow: '<div class="arrow-prev-cont">  <svg class="icon"><use xlink:href="#left-arrow" /></svg> </div>',
  //   infinite: false,
  //  useTransform: true,
  //   speed: 400,
  //   cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
  // });
 
  // $('.slider-nav-about')
  //   .on('init', function(event, slick) {
  //     $('.slider-nav-about .slick-slide.slick-current').addClass('is-active');
  //   })
  //   .slick({
  //     slidesToShow: 5,
  //     slidesToScroll: 5,
  //     dots: false,
  //     arrows: false,
  //     focusOnSelect: false,
  //     infinite: false,
  //     responsive: [{
  //       breakpoint: 1024,
  //       settings: {
  //         slidesToShow: 5,
  //         slidesToScroll: 5,
  //       }
  //     }, {
  //       breakpoint: 640,
  //       settings: {
  //         slidesToShow: 4,
  //         slidesToScroll: 4,
  //      }
  //     }, {
  //       breakpoint: 420,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 2,
  //    }
  //     }]
  //   });
 
  // $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
  //   $('.slider-nav-about').slick('slickGoTo', currentSlide);
  //   var currrentNavSlideElem = '.slider-nav-about .slick-slide[data-slick-index="' + currentSlide + '"]';
  //   $('.slider-nav-about .slick-slide.is-active').removeClass('is-active');
  //   $(currrentNavSlideElem).addClass('is-active');
  // });
 
  // $('.slider-nav-about').on('click', '.slick-slide', function(event) {
  //   event.preventDefault();
  //   var goToSingleSlide = $(this).data('slick-index');
 
  //   $('.slider-single').slick('slickGoTo', goToSingleSlide);
  // });




});



$('.search-section-form input[type=submit]').attr({value: ''});
