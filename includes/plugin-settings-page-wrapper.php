<?php
if ( ! defined( 'ABSPATH' ) ) {
exit;
} ?>

<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>IW Magnific Popup - Settings</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Choose your settings</span></h3>
						<div class="inside">

							<form name="iwmp_settings_form" method="post" action="">
								
								<?php wp_nonce_field( 'iwmp_settings_nonce', '_iwmp_nonce' ); ?>
								
								<input type="hidden" name="iwmp_settings_form_submitted" value="Y">

								<fieldset>
									
									<legend class="screen-reader-text"><span>IW Magnific Popup Settings Form</span></legend>
									
									<p>
										<input name="iwmp_single_images" type="checkbox" id="iwmp_single_images" value="1" <?php checked( $iwmp_options['iwmp_single_images'], 1 ); ?> />
										<label for="iwmp_single_images">Enable on Single Images:</label>
									</p>

									<p>
										<input name="iwmp_gallery_images" type="checkbox" id="iwmp_gallery_images" value="1" <?php checked( $iwmp_options['iwmp_gallery_images'], 1 ); ?> />										
										<label for="iwmp_gallery_images">Enable on Galleries:</label>
									</p>

									<p>
										<input name="iwmp_woocommerce_images" type="checkbox" id="iwmp_woocommerce_images" value="1" <?php checked( $iwmp_options['iwmp_woocommerce_images'], 1 ); ?> />
										<label for="iwmp_woocommerce_images">Enable for WooCommerce Product images:</label>
										<br /><small>Note: Please make sure to turn off the default lightbox in WooCommerce Settings if you have WooCommerce installed.</small>									
									</p>
																											
								</fieldset>
								
								<p>
									<input class="button-primary" type="submit" name="iwmp_settings_submit" value="<?php _e( 'Save Settings' ); ?>" />
							</p>
							
							</form>

						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->