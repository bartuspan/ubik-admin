<?php // ==== VARIOUS ==== //

// Show all settings link
function ubik_admin_all_settings_link() {
  add_options_page( __( 'All Settings', 'ubik' ), __( 'All Settings', 'ubik' ), 'administrator', 'options.php' );
}
if ( UBIK_ADMIN_VIEW_ALL_SETTINGS )
  add_action( 'admin_menu', 'ubik_admin_all_settings_link' );

// Disable the visual editor altogether
if ( UBIK_ADMIN_VISUAL_EDITOR_OFF )
  add_filter( 'user_can_richedit' , '__return_false', 50 );
