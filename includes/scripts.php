<?php

/*******************
	Load JS Scripts & CSS Styles
*******************/

// Load the Javscript and CSS files.
function iwmp_load_styles() {

	wp_enqueue_style( 'iwmp-styles', plugins_url( '/assets/magnific-popup.css', __FILE__ ) );
	
	// Load JS in footer
	wp_enqueue_script( 'iwmp-scripts', plugins_url( '/assets/jquery.magnific-popup.min.js', __FILE__ ), array( 'jquery' ), '1.0', true );
	
}

add_action( 'wp_enqueue_scripts', 'iwmp_load_styles' );
	
//Add script to the footer, to initate Magnific Popup.
function iwmp_add_script() { ?>

	<script>	
		// Ref: http://ajtroxell.com/use-magnific-popup-with-wordpress-now/
		jQuery(document).ready(function($) {
			// Single Image
			$('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
				//single image popup
				if ($(this).parents('.iwmp-gallery').length == 0) {
					$(this).magnificPopup({
						type:'image',
						callbacks: {
							open: function() {
				        $('.mfp-description').append(this.currItem.el.attr('alt'));
				      },
				      afterChange: function() {
				        $('.mfp-description').empty().append(this.currItem.el.attr('alt'));
				      }
				    },
						image: {
							markup: 
							'<div class="mfp-figure">'+
							'<div class="mfp-close"></div>'+
							'<div class="mfp-img"></div>'+
							'<div class="mfp-bottom-bar">'+
							'<div class="mfp-title"></div>'+
							'<div class="mfp-description"></div>'+
							'<div class="mfp-counter"></div>'+
							'</div>'+
							'</div>',
							titleSrc: function(item) {
								return item.el.find('img').attr('alt');
							}							
						}
					});
				}
			});		
				
			// Gallery Images
			$('.iwmp-gallery, .woocomerce-main-image').each(function() {
				$(this).magnificPopup({
					delegate: 'a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]',
					type: 'image',
					gallery: {enabled:true},
					callbacks: {
						open: function() {
			        $('.mfp-description').append(this.currItem.el.attr('alt'));
			      },
			      afterChange: function() {
			        $('.mfp-description').empty().append(this.currItem.el.attr('alt'));
			      }
			    },
					image: {
						markup: 
						'<div class="mfp-figure">'+
						'<div class="mfp-close"></div>'+
						'<div class="mfp-img"></div>'+
						'<div class="mfp-bottom-bar">'+
						'<div class="mfp-title"></div>'+
						'<div class="mfp-description"></div>'+
						'<div class="mfp-counter"></div>'+
						'</div>'+
						'</div>',
						titleSrc: function(item) {
							return item.el.find('img').attr('alt');
						}
					},
				});
			}); 
		});		
		
		</script>
		
<?php	}

add_action( 'wp_footer', 'iwmp_add_script' );

?>