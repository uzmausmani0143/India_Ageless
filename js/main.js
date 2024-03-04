/*--------------------------------------------------
Template Name: limupa;
Description: limupa - Digital Products Store ECommerce Bootstrap 4 Template;
Template URI:;
Author Name:HasTech;
Author URI:;
Version: 1;
Note: main.js, All Default Scripting Languages For This Theme Included In This File.
-----------------------------------------------------
		CSS INDEX
		================
		01. Li's Meanmenu
		02. Header Dropdown
		03. Li's Sticky Menu Activation
		04. Nice Select
		05. Main Slider Activision
		06. Li's Product Activision
		07. Li's Product Activision
		08. Countdown
		09. Tooltip Active
		10. Scroll Up
		11. Category Menu
		12. Li's Product Activision
		13. FAQ Accordion
		14. Toggle Function Active
		15. Li's Blog Gallery Slider
		16. Counter Js
		17. Price slider
		18. Category menu Activation
		19. Featured Product active
		20. Featured Product 2 active
		21. Modal Menu Active
		22. Cart Plus Minus Button
		23. Single Prduct Carousel Activision
		24. Star Rating Js
		25. Zoom Product Venobox
		26. WOW

-----------------------------------------------------------------------------------*/
(function ($) {
	"use Strict";
/*----------------------------------------*/
/* 	01. Li's Meanmenu
/*----------------------------------------*/
    jQuery('.hb-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "991"
    })
 /*----------------------------------------*/
 /*  02. Header Dropdown
 /*----------------------------------------*/
 	// Li's Dropdown Menu
 	$('.ht-setting-trigger, .ht-currency-trigger, .ht-language-trigger, .hm-minicart-trigger, .cw-sub-menu').on('click', function (e) {
 		e.preventDefault();
 		$(this).toggleClass('is-active');
 		$(this).siblings('.ht-setting, .ht-currency, .ht-language, .minicart, .cw-sub-menu li').slideToggle();
 	});
 	$('.ht-setting-trigger.is-active').siblings('.catmenu-body').slideDown();
/*----------------------------------------*/
/* 03. Li's Sticky Menu Activation
/*----------------------------------------*/
	$(window).on('scroll',function() {
		if ($(this).scrollTop() > 300) {
			$('.header-sticky').addClass("sticky");
		} else {
			$('.header-sticky').removeClass("sticky");
		}
	});
/*----------------------------------------*/
/*  04. Nice Select
/*----------------------------------------*/
	$(document).ready(function() {
		$('.nice-select').niceSelect();
	});



/*----------------------------------------*/
/* 09. Tooltip Active
/*----------------------------------------*/
	$('.product-action a, .social-link a').tooltip({
		animated: 'fade',
		placement: 'top',
		container: 'body'
	});
/*----------------------------------------*/
/* 10. Scroll Up
/*----------------------------------------*/
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-double-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900
	});
/*----------------------------------------*/
/* 11. Category Menu
/*----------------------------------------*/
	 $('.rx-parent').on('click', function(){
	    $('.rx-child').slideToggle();
	    $(this).toggleClass('rx-change');
	});
	//    category heading
	$('.category-heading').on('click', function(){
	    $('.category-menu-list').slideToggle(300);
	});	
	/*-- Category Menu Toggles --*/
	function categorySubMenuToggle() {
	    var screenSize = $(window).width();
	    if ( screenSize <= 991) {
	        $('#cate-toggle .right-menu > a').prepend('<i class="expand menu-expand"></i>');
	        $('.category-menu .right-menu ul').slideUp();
	//        $('.category-menu .menu-item-has-children i').on('click', function(e){
	//            e.preventDefault();
	//            $(this).toggleClass('expand');
	//            $(this).siblings('ul').css('transition', 'none').slideToggle();
	//        })
	    } else {
	        $('.category-menu .right-menu > a i').remove();
	        $('.category-menu .right-menu ul').slideDown();
	    }
	}
	categorySubMenuToggle();
	$(window).resize(categorySubMenuToggle);

	/*-- Category Sub Menu --*/
	function categoryMenuHide(){
	    var screenSize = $(window).width();
	    if ( screenSize <= 991) {
	        $('.category-menu-list').hide();
	    } else {
	        $('.category-menu-list').show();
	    }
	}
	categoryMenuHide();
	$(window).resize(categoryMenuHide);
	$('.category-menu-hidden').find('.category-menu-list').hide();
	$('.category-menu-list').on('click', 'li a, li a .menu-expand', function(e) {
	    var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
	    if ($a.parent().hasClass('right-menu')) {
	        if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
	            if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
	            else {
	                $(this).parents('li').siblings('li').find('ul:visible').slideUp();
	                $a.siblings('ul').slideDown();
	            }
	        }
	    }
	    if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
	        e.preventDefault();
	        return false;
	    }
	});

/*----------------------------------------*/
/* 13. FAQ Accordion
/*----------------------------------------*/
	$('.card-header a').on('click', function() {
		 $('.card').removeClass('actives');
		 $(this).parents('.card').addClass('actives');
	});
/*----------------------------------------*/
/* 14. Toggle Function Active
/*----------------------------------------*/ 
	// showlogin toggle
		$('#showlogin').on('click', function() {
				$('#checkout-login').slideToggle(900);
		});
	// showlogin toggle
		$('#showcoupon').on('click', function() {
				$('#checkout_coupon').slideToggle(900);
		});
	// showlogin toggle
		$('#cbox').on('click', function() {
				$('#cbox-info').slideToggle(900);
		});

	// showlogin toggle
		$('#ship-box').on('click', function() {
				$('#ship-box-info').slideToggle(1000);
		});

/*----------------------------------------*/
/* 16. Counter Js
/*----------------------------------------*/
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

 /*----------------------------------------*/
 /* 18. Category menu Activation
 /*----------------------------------------*/
 $('.category-sub-menu li.has-sub > a').on('click', function () {
     $(this).removeAttr('href');
     var element = $(this).parent('li');
     if (element.hasClass('open')) {
         element.removeClass('open');
         element.find('li').removeClass('open');
         element.find('ul').slideUp();
     } else {
         element.addClass('open');
         element.children('ul').slideDown();
         element.siblings('li').children('ul').slideUp();
         element.siblings('li').removeClass('open');
         element.siblings('li').find('li').removeClass('open');
         element.siblings('li').find('ul').slideUp();
     }
 });


 /*----------------------------------------*/
 /* 21. Modal Menu Active
 /*----------------------------------------*/ 
 $('.product-details-images').each(function(){
     var $this = $(this);
     var $thumb = $this.siblings('.product-details-thumbs, .tab-style-left');
     $this.slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        dots: false,
        infinite: true,
        centerMode: false,
        centerPadding: 0,
        asNavFor: $thumb,
    });
 });
 $('.product-details-thumbs').each(function(){
     var $this = $(this);
     var $details = $this.siblings('.product-details-images');
     $this.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        dots: false,
        infinite: true,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: 0,
        prevArrow: '<span class="slick-prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="slick-next"><i class="fa fa-angle-right"></i></span>',
        asNavFor: $details,
    });
 });
 $('.tab-style-left, .tab-style-right').each(function(){
     var $this = $(this);
     var $details = $this.siblings('.product-details-images');
     $this.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        dots: false,
        infinite: true,
        focusOnSelect: true,
        vertical: true,
        centerPadding: 0,
        prevArrow: '<span class="slick-prev"><i class="fa fa-angle-down"></i></span>',
        nextArrow: '<span class="slick-next"><i class="fa fa-angle-up"></i></span>',
        asNavFor: $details,
    });
 });
/*----------------------------------------*/
/* 22. Cart Plus Minus Button
/*----------------------------------------*/
 $(".cart-plus-minus").append('<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>');
 $(".qtybutton").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.hasClass('inc')) {
       var newVal = parseFloat(oldValue) + 1;
    } else {
        // Don't allow decrementing below zero
       if (oldValue > 0) {
         var newVal = parseFloat(oldValue) - 1;
         } else {
         newVal = 0;
       }
       }
    $button.parent().find("input").val(newVal);
   });

/*----------------------------------------*/
/* 24. Star Rating Js
/*----------------------------------------*/
    $(function() {
          $('.star-rating').barrating({
            theme: 'fontawesome-stars'
        });
    });
/*----------------------------------------*/
/* 25. Zoom Product Venobox
/*----------------------------------------*/
    $('.venobox').venobox({
        spinner:'wave',
        spinColor:'#cb9a00',
    });
/*----------------------------------------*/
/* 26. WOW
/*----------------------------------------*/
    new WOW().init();
})(jQuery);
/*----------------------------------------------------------------------------------------------------*/
/*------------------------------------------> The End <-----------------------------------------------*/
/*----------------------------------------------------------------------------------------------------*/