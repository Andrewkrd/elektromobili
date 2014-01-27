/**
 * EMThemes
 *
 * @license commercial software
 * @copyright (c) 2012 Codespot Software JSC - EMThemes.com. (http://www.emthemes.com)
 */
 
(function($) {

if (typeof EM == 'undefined') EM = {};
if (typeof EM.tools == 'undefined') EM.tools = {};

var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);

var domLoaded = false, 
	windowLoaded = false, 
	last_adapt_i, 
	last_adapt_width;
/**
 * Auto positioning product items in products-grid *
 */
EM.tools.decorateProductsGrid = function (productsGridEl) {
	var $productsGridEl = $(productsGridEl);
	if ($productsGridEl.length == 0) return;
		
	var maxHeight = 0;
	$('.item', $productsGridEl).each(function() {
        if ($(this).outerHeight(true) > maxHeight) {
            maxHeight = $(this).outerHeight(true);
            if(maxHeight>450){
                maxHeight = 450;
            }
            if(maxHeight<400){
                maxHeight = 400;
            }
        }
	});
	
	$('.item', $productsGridEl).each(function() {
	   $(this).css({'min-height': maxHeight + 'px'});
	});
};

EM.tools.decorateProductCollateralTabs = function() {   
	$(window).load(function() {		
		$('.product-collateral').addClass('tab_content').each(function(i) {
		    $(this).wrap('<div class="tabs_wrapper_details collateral_wrapper" />');
		    var tabs_wrapper = $(this).parent();
		    var tabs_control = $(document.createElement('ul')).addClass('tabs_control').insertBefore(this);
		    
		    $('.box-collateral', this).addClass('tab-item').each(function(j) {
			var id = 'box_collateral_'+i+'_'+j;
			$(this).addClass('content_'+id);
			tabs_control.append('<li><h2><a href="#'+id+'">'+$('h2', this).html()+'</a></h2></li>');
		    });            
		    initToggleTabs(tabs_wrapper);
		});
		
	});
};


/**
 * Fix iPhone/iPod auto zoom-in when text fields, select boxes are focus
 */
function fixIPhoneAutoZoomWhenFocus() {
	var viewport = $('head meta[name=viewport]');
	if (viewport.length == 0) {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>');
		viewport = $('head meta[name=viewport]');
	}	
	var old_content = viewport.attr('content');	
	function zoomDisable(){
		viewport.attr('content', old_content + ', user-scalable=0');
	}
	function zoomEnable(){
		viewport.attr('content', old_content);
	}	
	$("input[type=text], textarea, select").mouseover(zoomDisable).mousedown(zoomEnable);
}



/**
 * Adjust elements to make it responsive
 *
 * Adjusted elements:
 * - Image of product items in products-grid scale to 100% width
 */
function responsive() {		
	var img = $('.products-grid .item .product-image img');
	img.each(function() {
		img.data({
			'width': $(this).width(),
			'height': $(this).height()
		})
	});
	img.removeAttr('width').removeAttr('height').css('width', '100%');
	
	// responsive:
	// - image 
	// - custom logo on sidebar
	// - category image
	$('.sidebar img, .category-image img, .cloud-zoom-gallery img, .img-lightbox img, .img-default img,#crosssell-products-list .product-image img').each(function() {
		if (!$(this).hasClass('fluid')) {
			$(this).css({
				'max-width': $(this).width(),
				'max-height': $(this).height(),
                'width': '100%'
			});
		}
	});
}


/**
 * Function called when layout size changed by adapt.js
 */
function whenAdapt(i, width) {	
	$('body').removeClass('adapt-0 adapt-1 adapt-2 adapt-3 adapt-4 adapt-5 adapt-6')
		.addClass('adapt-'+i);
	EM.tools.decorateProductsGrid('.category-products .products-grid');	
    if (FREEZED_TOP_MENU !=0 && isMobile == false){
        var setWidth = $('.em_nav, .nav-container').parent().parent().width();
    	var sticky_navigation = function(){
    		var scroll_top = $(window).scrollTop();
    		if (scroll_top > 150) {
                $('.em_nav, .nav-container').addClass('fixed-top');
    			$('.em_nav, .nav-container').css({ 'position': 'fixed', 'width':setWidth, 'top':0, 'z-index':9999});
    		} else {
    			$('.em_nav, .nav-container').removeAttr('style');
                $('.em_nav, .nav-container').removeClass('fixed-top');
    		}   
    	};
    	sticky_navigation();
    	$(window).scroll(function() {
    		 sticky_navigation();
    	});
    }
}



/**
 * Callback function called when stylesheet is changed by adapt.js
 */
ADAPT_CONFIG.callback = function(i, width) {
	last_adapt_i = i;
	last_adapt_width = width;	
	whenAdapt(last_adapt_i, last_adapt_width);
};


$(document).ready(function() {
	domLoaded = true;
    optionCategory();
    if($('body').viewPC()){toolbar();}
    backToTop();        
	isMobile && fixIPhoneAutoZoomWhenFocus();	
	alternativeProductImage();
    setupReviewLink();	
	// safari hack: remove bold in h5, .h5
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		$('h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-weight', 'normal');
	}
    addClassMobile();
    toogleColorVariation();
    toogleStore();    
    if (FREEZED_TOP_MENU !=0 && isMobile == false){persistentMenu();}	
});

$(window).bind('load', function() {
	windowLoaded = true;
	responsive(); 
    //doSlider('#feature_home',false,null,0);
	whenAdapt(last_adapt_i, last_adapt_width);
    doSlider('.more-views ul',false,null,0);
    doSlider('#upsell-product-table .products-grid',false,null,0);
    doSlider('#crosssell-products-list',false,null,0);
    doSlider('.brands ul',false,null,0);     	   
});

$(window).bind('orientationchange', function () {
    //EM.tools.decorateProductsGrid('.category-products .products-grid');
});

$(window).resize(function() {
	if(isPhone == false){
		if ($('#image').length != 0){
            if (typeof(product_zoom) != 'undefined' || product_zoom){
                $('#image').width(product_zoom.imageDim.width);
                Event.stopObserving($('#zoom_in'), 'mousedown', product_zoom.startZoomIn.bind(product_zoom));
                Event.stopObserving($('#zoom_in'), 'mouseup', product_zoom.stopZooming.bind(product_zoom));
                Event.stopObserving($('#zoom_in'), 'mouseout', product_zoom.stopZooming.bind(product_zoom));
                
                Event.stopObserving($('#zoom_out'), 'mousedown', product_zoom.startZoomOut.bind(product_zoom));
                Event.stopObserving($('#zoom_out'), 'mouseup', product_zoom.stopZooming.bind(product_zoom));
                Event.stopObserving($('#zoom_out'), 'mouseout', product_zoom.stopZooming.bind(product_zoom));
                product_zoom = new Product.Zoom('image', 'track', 'handle', 'zoom_in', 'zoom_out', 'track_hint');;
            }
        }
	}
});
	
})(jQuery);

/** 
*   Back to top
**/
function backToTop(){
    // hide #back-top first
	jQuery("#back-top").hide();
	
	// fade in #back-top
	
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('#back-top').fadeIn();
		} else {
			jQuery('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	jQuery('#back-top a').click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

}

/**
*   Option Category
**/
function optionCategory(){
    var $ = jQuery;
    var container = $("#toggleText");
    $("#displayOption").click(
        function( event ){
            event.preventDefault();
            if (container.is( ":visible" )){
                container.slideUp(100);
                $("#displayOption").toggleClass('hidden-arrow');
                $("#displayOption").html('Показать опции');
                
                
            } else {
                container.slideDown(100);
                $("#displayOption").removeClass('hidden-arrow');
                $("#displayOption").html('Скрыть опции показа');
            }
        }
    );  
}

/**
*   toolbar
**/
function toolbar(){
	var $ = jQuery;
	$('.show').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
	$('.sortby').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
    $('#select_1').each(function(){
		$(this).insertUlOption();
		$(this).selectUlOption();
	});
    $('#select-store').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	}); 
}

/**
*   Slider
**/
function doSlider(e,isverticals,iswraps,isauto) {
    function carouselCallBack(carousel){
	    jQuery(e).touchwipe({
		    wipeLeft: function() { 
	    		carousel.next();
	    	},
		    wipeRight: function() { 
	    		carousel.prev();
	    	},
			preventDefaultEvents: false
		});
        jQuery(window).resize(function() {
			setTimeout(function(){
				carousel.scroll(1,true);
				carousel.funcResize();
			},500);
			
		});						
	}
    var width = jQuery(e +' li.item').width();	
	jQuery(e +' li.item').css('width',width+'px');
	jQuery(e)
	.addClass('jcarousel-skin-tango')
	.jcarousel({
		buttonNextHTML:'<a title="Next" class="next" href="javascript:void(0);" title="Next"></a>',
		buttonPrevHTML:'<a title="Previous" class="previous" href="javascript:void(0);" title="Previous"></a>',
		scroll: 1,
        resizeTimer: 1,
		wrap: iswraps,
        auto: isauto,
		animation:'normal',
		vertical:isverticals,
		initCallback: carouselCallBack
	});    
}

/**
*   Tabs
**/
function initToggleTabs($selector){
	if(jQuery($selector).length > 0){
		var timeout = new Array(jQuery($selector).length);
		var div = new Array(jQuery($selector).length);
		jQuery($selector).addClass('ui-tabs ui-widget ui-widget-content ui-corner-all');
		jQuery($selector).each(function(index,value){
			timeout[index] = null;
			div[index] = jQuery(this);
			div[index].addClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');
			//When page loads...
			div[index].find(".tab-item").slideUp('fast'); //Hide all content
			div[index].children('ul').find("li:first").addClass("ui-tabs-selected").slideDown('fast'); //Activate first tab
			div[index].children('ul').addClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');
			div[index].children('ul').find('li').addClass('ui-state-default ui-corner-top');	
			div[index].find(".tab-item:first").slideDown('fast'); //Show first tab content
			//On Click Event
			div[index].children('ul').find("li").click(function() {
				var currentTab = jQuery(this);
				if(currentTab.hasClass('ui-tabs-selected'))
					return false;
				if (timeout[index])
					clearTimeout(timeout[index]);
				timeout[index] = setTimeout(function() {
					timeout[index] = null;	
					// Hide old content tab
					var oldIndex = div[index].children('ul').find('li.ui-tabs-selected a').attr('href').replace(/.*?#/,'');
					div[index].find('div.content_' + oldIndex).slideToggle('fast');
					
					div[index].children('ul').find("li").removeClass("ui-tabs-selected"); //Remove any "ui-tabs-selected" class
					currentTab.addClass("ui-tabs-selected"); //Add "active" class to selected tab
					
					var activeIndex = currentTab.find("a").attr("href").replace(/.*?#/,''); //Find the href attribute value to identify the active tab + content
					div[index].find('div.content_' + activeIndex).slideToggle('fast').trigger('emtabshow'); //Fade in the active ID content
					return false;
				}, 10);
				return false;
			});	
		});
		
	}
}

/**
*   showReviewTab
**/
function showCusReviewTab() {
	var $ = jQuery;
    if ($('#cus_review').size()) {
		// scroll to customer review
		$('html, body').animate({ scrollTop: $('#cus_review').offset().top }, 500);
	} else {
		return false;
	}
	return true;
}

function showWriReviewTab() {
	var $ = jQuery;
    if ($('#wri_review').size()) {
		// scroll to customer review
		$('html, body').animate({ scrollTop: $('#wri_review').offset().top }, 500);
	} else {
		return false;
	}
	return true;
}

function setupReviewLink() {
	jQuery('.cus-review').click(function (e) {
		if (showCusReviewTab())
			e.preventDefault();
	});
    
    jQuery('.wri-review').click(function (e) {
		if (showWriReviewTab())
			e.preventDefault();
	});
}


function persistentMenu() {
    var $ = jQuery;
    var setWidth = $('.em_nav, .nav-container').parent().parent().width();
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop();
		if (scroll_top > 150) {
            $('.em_nav, .nav-container').addClass('fixed-top');
			$('.em_nav, .nav-container').css({ 'position': 'fixed', 'width':setWidth, 'top':0, 'z-index':9999});
		} else {
			$('.em_nav, .nav-container').removeAttr('style');
            $('.em_nav, .nav-container').removeClass('fixed-top');
		}   
	};
	sticky_navigation();
	$(window).scroll(function() {
		 sticky_navigation();
	});
}


function addClassMobile(){
    if(isMobile == true){
        jQuery('body').addClass('mobile-view');
    }
}

/**
 * Change the alternative product image when hover
 */
function alternativeProductImage() {
    var $=jQuery;
	var tm;
	function swap() {
		clearTimeout(tm);
		setTimeout(function() {
			el = $(this).find('img[data-alt-src]');
			var newImg = $(el).data('alt-src');
			var oldImg = $(el).attr('src');
			$(el).attr('src', newImg).data('alt-src', oldImg);
		}.bind(this), 200);
	}	
	$('.item .product-image img[data-alt-src]').parents('.item').bind('mouseenter', swap).bind('mouseleave', swap);
}

/**
*   Toogle Color Variation
**/
function toogleColorVariation(){
    if(isMobile == false){
        var $ = jQuery;
        var screen = "<div id='bg_fade_color'></div>";
    	$(document.body).append(screen);
    			
    	$(".btn_color_variation").click(function() {
    		var bg	=	$("#bg_fade_color");
    		bg.css("opacity",0.5);
    		bg.css("display","block");
            var left = ( $(window).width() - $(".colordiv").width() ) / 2;
    		$(".colordiv").show();    		
    		$(".colordiv").css('top', Math.max($(document).scrollTop(), Math.min($(this).offset().top, $(document).scrollTop() + $(window).height() - $(".colordiv").outerHeight())) + 20 + 'px');
            $(".colordiv").css('left',left);    		
    	});
    	
    	$(".btn_color_close").click(function() {
    		color_hide();
    	});
    	
    	function color_hide(){
    		var bg	=	$("#bg_fade_color");
    		$(".colordiv").hide();
    		bg.css("opacity",0);
    		bg.css("display","none");
    	}
    }
}

/**
*   isLandscape
**/
function isLandscape() {
	return typeof window.orientation != 'undefined' && (window.orientation == 90 || window.orientation == -90);
}

function toogleStore(){
    if(isMobile == false){               
        var $=jQuery;
        doSlider('#slider_storeview ul',false,null,0);
        $('.storediv').hide(); 
        $(".btn_storeview").click(function() {
    		store_show();        
    	});
    	
    	$(".btn_storeclose").click(function() {
    		store_hide();
    	});
    	
    	function store_show(){            
    		var bg	=	$("#bg_fade_color");
    		bg.css("opacity",0.5);
    		bg.css("display","block");    		
            var top =( $(window).height() - $(".storediv").height() ) / 2;
            var left = ( $(window).width() - $(".storediv").width() ) / 2;
			$(".storediv").show();
            $(".storediv").css('top', top+'px');
            $(".storediv").css('left', left+'px');
    	}
    	
    	function store_hide(){
    		var bg	=	$("#bg_fade_color");
    		$(".storediv").hide();
    		bg.css("opacity",0);
    		bg.css("display","none");
    	}
    }
}