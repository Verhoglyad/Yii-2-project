/*
Theme Name: Ricochet
Version: 1.0.0
Author: Mkscoder
Author URI: http://www.mkscoder.com
Description: Multi-Purpose Theme by Mkscoder
*/

/*	IE 10 Fix*/

var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

$(document).ready(function($) {
    "use strict";
	
		
			
			if ($(window).width() < 1000) {
			
				$('.mobile-menu').on('click', function() {
				$(this).toggleClass('active');
				$('.extra').slideToggle(300);
				});
			}
			
		
	
	});

		
		
	