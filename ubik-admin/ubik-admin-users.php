<?php // ==== USERS ==== //

// Change user contact methods
if ( !function_exists( 'ubik_admin_contact_methods' ) ) : function ubik_admin_contact_methods( $contact ) {

  // Add useful contact methods
  if ( !isset( $contact['facebook'] ) )
    $contact['facebook'] = 'Facebook';

  if ( !isset( $contact['flickr'] ) )
    $contact['flickr'] = 'Flickr';

  if ( !isset( $contact['github'] ) )
    $contact['github'] = 'GitHub';

  if ( !isset( $contact['google'] ) )
    $contact['google'] = 'Google+';

  if ( !isset( $contact['instagram'] ) )
    $contact['instagram'] = 'Instagram';

  if ( !isset( $contact['twitter'] ) )
    $contact['twitter'] = 'Twitter';

  // Remove cruft
  if ( isset( $contact['aim'] ) )
    unset($contact['aim']);

  if ( isset( $contact['jabber'] ) )
    unset($contact['jabber']);

  if ( isset( $contact['yim'] ) )
    unset($contact['yim']);

  return $contact;
} endif;
if ( UBIK_ADMIN_CONTACT_METHODS )
  add_filter( 'user_contactmethods', 'ubik_admin_contact_methods' );



// Allow HTML in author descriptions on single user blogs
// Careful: might be stripped out anyway (e.g. when making meta descriptions) so don't put anything essential in there
if ( UBIK_ADMIN_USER_ALLOW_HTML )
  remove_filter( 'pre_user_description', 'wp_filter_kses' );
