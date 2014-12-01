<?php // ==== USERS ==== //

// Change user contact methods; Yoast has a discussion of this general approach over here: https://yoast.com/user-contact-fields-wordpress/
// @filter: ubik_admin_user_contact_methods (array)
if ( !function_exists( 'ubik_admin_contact_methods' ) ) : function ubik_admin_contact_methods( $contact ) {

  $methods = apply_filters( 'ubik_admin_user_contact_methods', array(
    'facebook'    => __( 'Facebook profile URL', 'ubik' ),
    'flickr'      => __( 'Flickr URL', 'ubik' ),
    'github'      => __( 'GitHub URL', 'ubik' ),
    'googleplus'  => __( 'Google+', 'ubik' ), // Formerly `google`; changed to be compatible with Yoast WordPress SEO; Google no longer uses authorship in search results; link `rel="author"` is pointless
    'instagram'   => __( 'Instagram ID', 'ubik' ),
    'pinterest'   => __( 'Pinterest', 'ubik' ),
    'twitter'     => __( 'Twitter ID (without @)', 'ubik' )
    )
  );

  // Cycle through the array and assign names and descriptions to new user contact methods (if any)
  if ( !empty( $methods ) ) {
    foreach ( $methods as $method => $name ) {
      if ( !isset( $contact[$method] ) )
        $contact[$method] = $name;
    }
  }

  // Sort contact methods (in case other plugins alter contact methods; in combination with the late firing of this filter this should keep things in order without overwriting anything)
  ksort( $contact );

  return $contact;
} endif;
if ( UBIK_ADMIN_USER_CONTACT_METHOD )
  add_filter( 'user_contactmethods', 'ubik_admin_contact_methods', 99 );



// Clean out the cruft in the default WordPress contact methods
// @filter: ubik_admin_user_contact_cleaner (array)
if ( !function_exists( 'ubik_admin_user_contact_cleaner' ) ) : function ubik_admin_user_contact_cleaner( $contact ) {

  $methods = apply_filters( 'ubik_admin_user_contact_cleaner', array( 'aim', 'jabber', 'yim' ) );

  foreach ( $methods as $method ) {
    if ( isset( $contact[$method] ) )
      unset( $contact[$method] );
  }

  return $contact;
} endif;
if ( UBIK_ADMIN_USER_CONTACT_CLEAN )
  add_filter( 'user_contactmethods', 'ubik_admin_user_contact_cleaner' );



// Allow HTML in author descriptions on single user blogs
// Careful: might be stripped out anyway (e.g. when making meta descriptions) so don't put anything essential in there
if ( UBIK_ADMIN_USER_ALLOW_HTML )
  remove_filter( 'pre_user_description', 'wp_filter_kses' );
