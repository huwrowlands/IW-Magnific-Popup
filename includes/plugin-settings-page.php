<?php
	
	// Create the menu for the options/settings page
	
	function iwmp_magnific_popup_menu() {
		
		add_options_page(
			'IW Magnific Popup - Settings',
			'IW Magnific Popup',
			'manage_options',
			'iwmp-settings',
			'iwmp_options_page'
		);		
		
	}
	
	add_action('admin_menu', 'iwmp_magnific_popup_menu');
	
	
//Global Variable
$iwmp_options = array();

//Options Page
function iwmp_options_page() {

    if( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'You do not have sufficient permission to access this page.' );
    }

    global $iwmp_options;

    // Make sure this is a POST request
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
        if ( ! isset( $_POST['_iwmp_nonce'] ) || ! wp_verify_nonce( $_POST['_iwmp_nonce'], 'iwmp_settings_nonce' ) ) {
            wp_die( 'Cheating, Huh?' );
        }

        if( isset($_POST['iwmp_settings_form_submitted']) ) {

            $hidden_field = esc_html( $_POST['iwmp_settings_form_submitted'] );

            if($hidden_field == "Y") {

                if ( isset( $_POST['iwmp_single_images'] ) ) {
                    $iwmp_options['iwmp_single_images'] = esc_html( $_POST['iwmp_single_images'] );
                } else {
                    $iwmp_options['iwmp_single_images'] = '';
                }

                if ( isset( $_POST['iwmp_gallery_images'] ) ) {
                    $iwmp_options['iwmp_gallery_images'] = esc_html( $_POST['iwmp_gallery_images'] );
                } else {
                    $iwmp_options['iwmp_gallery_images'] = '';
                }

                if ( isset( $_POST['iwmp_woocommerce_images'] ) ) {
                    $iwmp_options['iwmp_woocommerce_images'] = esc_html( $_POST['iwmp_woocommerce_images'] );
                } else {
                    $iwmp_options['iwmp_woocommerce_images'] = '';
                }
                                
                update_option('iwmp_settings', $iwmp_options);

            }

        }

    }

    $iwmp_options = get_option('iwmp_settings');

    if( $iwmp_options != '' ) {

        $iwmp_single_images = $iwmp_options['iwmp_single_images'];
        $iwmp_single_images = $iwmp_options['iwmp_gallery_images'];
        $iwmp_single_images = $iwmp_options['iwmp_woocommerce_images'];

    }

    require('plugin-settings-page-wrapper.php');

}
	
?>