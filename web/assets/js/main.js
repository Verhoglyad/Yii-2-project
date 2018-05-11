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
	
		
		/* ==============================================
	Sticky
	=============================================== */
    
		try {
			$("#navigation").sticky({
				topSpacing: 0,
				className: 'sticky'
			});
			
		} catch (err) {

		}
		
		/* ==============================================
	Menu For Mobile
	=============================================== */	
		try {
			
			$('.nav-toggle').hover(function() {
				$(this).find('.dropdown-menu').first().stop(true, true).slideToggle(300);
				}, function() {
				$(this).find('.dropdown-menu').first().stop(true, true).slideToggle(200)
			});
		
			$('.mobile-menu,.nav-toggle').on('click', function() {
				$('.dr-mobile').slideUp().removeClass('down');
				$(this).toggleClass('active');
				$('.extra').slideToggle(100);
			});
			
			
		} catch (err) {

		}
		

		/* ==============================================
	Drop Down Menu For Mobile
	=============================================== */	

		$('.mobile-toggle').click(function() {
			if($(this).find('.dr-mobile').first().hasClass('down')) {
				$(this).find('.dr-mobile').first().stop(true, true).slideUp(400).removeClass('down');
			}
			else {
				$(this).parent().find('.dr-mobile').slideUp().removeClass('down');
				$(this).find('.dr-mobile').first().stop(true, true).slideDown(400).addClass('down');
			}	
		});
		
		
		
		
		/* ==============================================
	Magnific Popup
	=============================================== */		
		$('.popup-with-zoom-anim').magnificPopup({
				  type: 'inline',

				  fixedContentPos: false,
				  fixedBgPos: true,

				  overflowY: 'auto',

				  closeBtnInside: true,
				  preloader: false,
				  
				  midClick: true,
				  removalDelay: 300,
				  mainClass: 'my-mfp-zoom-in'
				});

    
		$('.image-popup-no-margins').magnificPopup({
          type: 'image',
          closeOnContentClick: true,
          closeBtnInside: false,
          fixedContentPos: true,
          mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
          image: {
            verticalFit: true
          },
          zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
          }
        });
	
	});

		
		
		/* ==============================================
	Liquid Slider - Home Text Slider
	=============================================== */
		$('#cp-home-liquid-slider').liquidSlider({
			autoSlide: true,
			autoSlideInterval: 4500,
			autoSlideControls: true,
			forceAutoSlide: true,
			dynamicArrows: false,

			slideEaseFunction: 'animate.css',
			slideEaseDuration: 900,
			heightEaseDuration: 900,
			animateIn: "bounceIn",
			animateOut: "bounceOut",
			callback: function() {
				var self = this;
				$('.slider-6-panel').each(function() {
					$(this).removeClass('animated ' + self.options.animateIn);
				});
			}
		});

     
    
		/* ==============================================
	Slick Sliders
	=============================================== */
		$('.item').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 580,
				  settings: {
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 400,
				  settings: {
					slidesToShow: 1
				  }
				}
			  ]
		});

		$('.subscribe-slide').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000
		});

		$('.partner-logo').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 580,
				  settings: {
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 400,
				  settings: {
					slidesToShow: 1
				  }
				}
			  ]
		});
		
		$('.shop-service').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
				  breakpoint: 917,
				  settings: {
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 615,
				  settings: {
					slidesToShow: 1
				  }
				}
			  ]
		});
		
		$('.hire-slide').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			arrows: false,
			autoplaySpeed: 2000
		});
		
		$(document).on('click', '.detail-link', function(e) {
			e.preventDefault();
			$('#toggle-detail').slideToggle();
			$("html, body").animate({ scrollTop: 2000 }, 2000);
		});
	
		/* ==============================================
	Search Custom
	=============================================== */
		(function() {
			var morphSearch = document.getElementById( 'morphsearch' ),
				input = morphSearch.querySelector( 'input.morphsearch-input' ),
				ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
				isOpen = isAnimating = false,
				// show/hide search area
				toggleSearch = function(evt) {
					// return if open and the input gets focused
					if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

					var offsets = morphsearch.getBoundingClientRect();
					if( isOpen ) {
						classie.remove( morphSearch, 'open' );

						// trick to hide input text once the search overlay closes 
						// todo: hardcoded times, should be done after transition ends
						if( input.value !== '' ) {
							setTimeout(function() {
								classie.add( morphSearch, 'hideInput' );
								setTimeout(function() {
									classie.remove( morphSearch, 'hideInput' );
									input.value = '';
								}, 300 );
							}, 500);
						}
						
						input.blur();
					}
					else {
						classie.add( morphSearch, 'open' );
					}
					isOpen = !isOpen;
				};

			// events
			input.addEventListener( 'focus', toggleSearch );
			ctrlClose.addEventListener( 'click', toggleSearch );
			// esc key closes search overlay
			// keyboard navigation events
			document.addEventListener( 'keydown', function( ev ) {
				var keyCode = ev.keyCode || ev.which;
				if( keyCode === 27 && isOpen ) {
					toggleSearch(ev);
				}
			} );


			/***** for demo purposes only: don't allow to submit the form *****/
			// morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
		})();
		
		
		
		/* ==============================================
	Google Maps
	=============================================== */

	$("#map").gmap3({
		marker:{
		address:"4 vladimira velikogo krivoy rog ukraine",
		options:{ icon: "/assets/images/marker.png"}},
		map:{
		options:{
		styles: [ {
		stylers: [ { "saturation":-100 }, { "lightness": 0 }, { "gamma": 0.5 }]},
		],
		zoom: 13,
		scrollwheel:false,
		draggable: true }
		}
	});	
	
		/* ==============================================
	Price Slider
	=============================================== */


$("#price-slider").ionRangeSlider({
		type: "double",
		min: 50,
		max: 9999,
		from: 155,
		to: 7500,
		hide_min_max: true,
		hide_from_to: true,
		grid: false,
	});

	
		/* ==============================================
	Cart Item Quantity Control
	=============================================== */	
	
	// $(".cart-item-quantity button").click(function() {
    $('body').on('click', '.cart-item-quantity button',function () {

		var currentVal = parseInt($(this).prev(".cart-quantity").val());

		if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;

		$(this).prev(".cart-quantity").val(currentVal + 1);
	});

	// $(".cart-item-minus").click(function() {
	$('body').on('click', '.cart-item-minus',function () {
		var currentVal = parseInt($(this).next(".cart-quantity").val());
		if (currentVal == "NaN") currentVal = 0;
		if (currentVal > 1) {
			$(this).next(".cart-quantity").val(currentVal - 1);
		}
	});
	
	
	/* ==============================================
	Preloader
	=============================================== */
	try {
		$(window).load(function() {
            $("#preloader").delay(500).fadeOut(1000);
            $(".preload-logo").addClass('fadeOutLeft');
            $(".preload-gif").addClass('fadeOutUp');

		});
	} catch (err) {

        }
	
	
	/* ==============================================
	Wow animation Custom
	=============================================== */
		
	try {
		wow = new WOW(
			{
			  boxClass:     'wow',      // default
			  animateClass: 'animated', // default
			  offset:       0,          // default
			  mobile:       true,       // default
			  live:         true        // default
			}
		)
		wow.init();
		
	} catch (err) {

		}
	
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails",
		directionNav: false
	  });
	});

$('#menu_category').dcAccordion({
	speed: 300,
});

function showCart(cart){
	$('#cart .modal-body').html(cart);
	$('#cart').modal();
};


$('#clearCart').on('click', function (e) {
    $('#cart-target').removeClass('cart-active')
    e.preventDefault();
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Не-а');
            showCart(res)
			$('.del-item').each(function () {
                var id = $(this).data('id');
				$(this).replaceWith('<a href="" class="btn btn-default add-to-cart" role="button" data-id="' + id + '">Добавить в корзину</a>');
            })
        },
        error: function () {
            alert('Уопси, ошибочка')
        }
    })
});
$('#getCart').on('click', function (e) {
	e.preventDefault();
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Не-а');
            showCart(res)
        },
        error: function () {
            alert('Уопси, ошибочка')
        }
    });
    return false;
});


$('body').on('click', '.del-item',function (e) {
	e.preventDefault();
	var id = $(this).data('id');
	var btn = $(this);
    $.ajax({
        url: '/cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Не-а');
            console.log(res)
            showCart(res);
            $('.del-item').each(function () {
                if ($(this).data('id') == id){
                    $(this).replaceWith('<a href="" class="btn btn-default add-to-cart" role="button" data-id="' + id + '">Добавить в корзину</a>');
				} ;
            })
        },
        error: function () {
            alert('Уопси, ошибочка')
        }
    })

});

$('body').on('click', '.add-to-cart',function (e) {
    e.preventDefault();
	var id = $(this).data('id');
	var qty = $('#qty').val();
	var btn = $(this);
	$('#cart-target').addClass('cart-active')
	$.ajax({
		url: '/cart/add',
		data: {id: id, qty: qty},
		type: 'GET',
		success: function (res) {
			if (!res) alert('Не-а');
			showCart(res);
            $('.add-to-cart').each(function () {
                if ($(this).data('id') == id) {
                    $(this).replaceWith('<a href="" class="btn btn-default active del-item" role="button" data-id="' + id + '">Удалить из корзины</a>');
                }
            })

        },
		error: function () {
			alert('Уопси, ошибочка')
        }
	})
});

$('.irs-slider').mouseup(function () {
	var from_to = $('#price-slider').val();
    var from = from_to.split(';')[0];
    var to = from_to.split(';')[1];
	var id = $('#price-slider').data('id');
	var all = $('#price-slider').data('all');
	console.log(all);
   $.ajax({
       url: '/shop/filter',
       data: {from: from, to: to, id: id, all: all},
       type: 'GET',
       dataType: "html",
       success: function (res) {
           if (!res) alert('Не-а');
           $('#product-wrapper').html(res);
       },
       error: function () {
           alert('Уопси, ошибочка')
       }
   })

});
$('#clear-filter').on('click', function () {
    // $('.irs-from').text(75);
    // $('.irs-to').text(5600);
    location.reload()
});

$('body').on('click', '.cart-item-quantity-btn',function () {

    var id = $(this).data('id');
    var idSharp = '#'+id;
    var qty = Number($(idSharp).val());
    console.log(id, qty)
    $.ajax({
        url: '/cart/change-qty-cart',
        data: {id: id, qty: qty},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Не-а');
            showCart(res)
        },
        error: function () {
            alert('Уопси, ошибочка')
        }
    })

});


$('#img').change(function () {
    var input = $(this)[0];
    if (input.files && input.files[0]) {
        if (input.files[0].type.match('image.*')) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            console.log('ошибка, не изображение');
        }
    } else {
        console.log('хьюстон у нас проблема');
    }
});

$('#reset-img-preview').click(function() {
    $('#img').val('');
    $('#img-preview').attr('src', 'default-preview.jpg');
});

$('#form').bind('reset', function () {
    $('#img-preview').attr('src', 'default-preview.jpg');
});



$('body').on('submit', '#oder_form',function (e) {
    e.preventDefault();
    $(".oder_loader").fadeIn();
    var name = $('#oder_form #name').val();
    var phone = $('#oder_form #phone').val();
    var comment = $('#oder_form #comment').val();
    var email = $('#oder_form #email').val(); ;
    $.ajax({
        url: '/cart/send',
        data: {name: name, phone: phone, comment: comment, email: email},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Не-а');
            showCart(res)
            $('.del-item').each(function () {
                var id = $(this).data('id');
                $(this).replaceWith('<a href="" class="btn btn-default add-to-cart" role="button" data-id="' + id + '">Добавить в корзину</a>');
            })

            $(".oder_loader").delay(500).fadeOut();
            $('#cart-target').removeClass('cart-active')


        },
        error: function () {
            alert('Уопси, ошибочка')
        }
    })
});


var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML;
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) {
                continue;
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
            params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');
            if(pair.length < 2) {
                continue;
            }
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect();

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};

// execute above function
initPhotoSwipeFromDOM('.my-gallery');


jQuery(document).ready(function() {
	// var title = ["Свернуть", 'Посмотреть все фото'];
	// var i = 0;
    var num = 8;
    $('body').on('click', '#showAllImg',function (e) {
        e.preventDefault();
        // $('#my-gallery').children().toggleClass('visible-item', 'invisible-item');
        // $('#showAllImg').html(title[i]);
        // i = 1 - i;

        var id = $(this).data('id');
        $.ajax({
            url: '/portfolio/gallery',
            data: {id: id, num : num },
            type: 'GET',
            success: function (res) {
                if (!res) alert("Это все фото");
                $('#my-gallery').append(res)
                num = num + 16;
            },
            error: function () {
                alert('Уопси, ошибочка')
            }
        })
    });


});

jQuery(document).ready(function() {
	var id = $('#pageId').val();
	var id2 = "#link_" + id;
	console.log(id2)
	$(id2).addClass('active')
})

