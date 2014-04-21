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
	
//Add script to initate Magnific Popup, to the footer.
function iwmp_add_script() { ?>

	<script>
		jQuery(document).ready(function($) {
			$('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
				//single image popup
				if ($(this).parents('.gallery').length == 0) {
					$(this).magnificPopup({type:'image'});
				}
			});
			//gallery popup
			$('.gallery').each(function() {
				$(this).magnificPopup({
					delegate: 'a',
					type: 'image',
					gallery: {enabled:true}
				});
			}); 
		});
		</script>
		
<?php	}

add_action( 'wp_footer', 'iwmp_add_script' );

?>