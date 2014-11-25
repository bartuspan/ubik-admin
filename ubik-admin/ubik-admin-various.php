<?php // ==== VARIOUS ==== //

// Show all settings link
if ( !function_exists( 'ubik_admin_all_settings_links' ) ) : function ubik_admin_all_settings_link() {
  add_options_page( __( 'All Settings', 'ubik' ), __( 'All Settings', 'ubik' ), 'administrator', 'options.php' );
} endif;
if ( UBIK_ADMIN_VIEW_ALL_SETTINGS )
  add_action( 'admin_menu', 'ubik_admin_all_settings_link' );
