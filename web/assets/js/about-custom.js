jQuery(document).ready(function(){
					jQuery('#about-us-slider').revolution(
				{
					delay:4000,
					startwidth:1170,
					startheight:1081,

					hideThumbs:200,

					thumbWidth:200,
					thumbHeight:180,
					thumbAmount:4,

					navigationType:"thumb",
					navigationArrows:"none",

					navigationStyle:"none",


					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:20,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:20,

					touchenabled:"off",
					onHoverStop:"on"

				});
				
				});