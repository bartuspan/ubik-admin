<?php // ==== VARIOUS ==== //

// Show all settings link
function all_settings_link() {
  add_options_page( __('All Settings'), __('All Settings'), 'administrator', 'options.php' );
}
if ( UBIK_ADMIN_VIEW_ALL_SETTINGS )
  add_action( 'admin_menu', 'all_settings_link' );
