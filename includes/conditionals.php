<?php $iwmp_options = get_option('iwmp_settings'); ?>


<?php 
	
if ( $iwmp_options['iwmp_single_images'] == '1' ) {
	
	function iwmp_add_single_script() { ?>
	
		<script>	
		// Ref: http://ajtroxell.com/use-magnific-popup-with-wordpress-now/
		jQuery(document).ready(function($) {
			// Single Image
			$('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
				//single image popup
				if ($(this).parents('.iwmp-gallery').length == 0) { //check that it's not part of a gallery
					
					$(this).addClass('iwmp-single'); //Add a class
					
					if ( $('.woocommerce .product .images a') ) { // Make sure not to add to woocommerce product images
						$('.woocommerce .product .images a').removeClass('iwmp-single'); //remove a class
					}
					
					$('.iwmp-single').magnificPopup({
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
		});		
		
		</script>	
	
	<?php } //end function iwmp_add_single_script()
		
	add_action( 'wp_footer', 'iwmp_add_single_script' );
	
} // end if for single images
	


if ( $iwmp_options['iwmp_gallery_images'] == '1' ) {
	
	function iwmp_add_gallery_script() { ?>
	
		<script>	
		// Ref: http://ajtroxell.com/use-magnific-popup-with-wordpress-now/
		jQuery(document).ready(function($) {
			// Gallery Images
			$('.iwmp-gallery').each(function() {
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
	
	<?php } //end function iwmp_add_gallery_script()
		
	add_action( 'wp_footer', 'iwmp_add_gallery_script' );
	
} // end if for galleries
	


if ( $iwmp_options['iwmp_woocommerce_images'] == '1' ) {
	
	function iwmp_add_woocommerce_script() { ?>
	
		<script>	
		// Ref: http://ajtroxell.com/use-magnific-popup-with-wordpress-now/
		jQuery(document).ready(function($) {
			// Single Image
			$('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
				//single image popup
				if ($(this).parents('.iwmp-gallery').length == 0) { //check that it's not part of a gallery
					
					$(this).addClass('iwmp-single'); //Add a class
					
					$('.iwmp-single').magnificPopup({
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
		});		
		
		</script>	
	
	<?php } //end function iwmp_add_woocommerce_script()
		
	add_action( 'wp_footer', 'iwmp_add_woocommerce_script' );
	
} // end if for WooCommerce images
	
	
	function iwmp_add_css(){ ?>
		<style>
			.iwmp-single, .iwmp-gallery img {
				cursor: pointer;
		    cursor: -webkit-zoom-in;
		    cursor: -moz-zoom-in;
		    cursor: zoom-in;
	    }
	    .mfp-content:hover {
		    cursor: -moz-zoom-out;
		    cursor: -webkit-zoom-out;
		    cursor: zoom-out	    
	    }
		</style>		
	<?php }
		
	add_action( 'wp_footer', 'iwmp_add_css' );
?>