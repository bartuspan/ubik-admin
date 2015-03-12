<?php
/**
 * Plugin Name: Ubik Admin
 * Plugin URI: http://github.com/synapticism/ubik-admin
 * Description: A library of hacks and snippets for the WordPress admin panel
 * Author: Alexander Synaptic
 * Author URI: http://alexandersynaptic.com
 * Version: 0.0.4
 */
define( 'UBIK_ADMIN_VERSION', '0.0.4' );

// Do not call this plugin directly
if ( !defined( 'WPINC' ) ) {
  die;
}

// Configuration file loading: first we try to grab user-defined settings
if ( is_readable( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-config.php' ) )
  require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-config.php' );

// Configuration file loading: now load the defaults
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-config-defaults.php' );

// Load plugin core
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-post-list-filters.php' );
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-post-list-thumbs.php' );
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-term-editor.php' );
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-users.php' );
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-various.php' );
require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'ubik-admin-view-all-shortcodes.php' );
