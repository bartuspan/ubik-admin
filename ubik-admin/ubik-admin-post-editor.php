<?php // ==== EDITOR ==== //

// HTML editor style hack; source: http://justintadlock.com/archives/2011/07/06/fixing-wordpress-3-2s-html-editor-font
// See also: http://css-tricks.com/snippets/wordpress/apply-custom-css-to-admin-area/
if ( !function_exists( 'ubik_admin_text_editor_style' ) ) : function ubik_admin_text_editor_style() {

  if ( UBIK_ADMIN_EDITOR_FONT_SIZE ) {
    $font_size = UBIK_ADMIN_EDITOR_FONT_SIZE;
  } else {
    $font_size = '18px';
  }

  if ( UBIK_ADMIN_EDITOR_FONT_STACK ) {
    $font_stack = UBIK_ADMIN_EDITOR_FONT_STACK;
  } else {
    $font_stack = '"Helvetica Neue", Helvetica, Arial, "Nimbus Sans L", "Liberation Sans", sans-serif';
  }

  if ( UBIK_ADMIN_EDITOR_LINE_HEIGHT ) {
    $line_height = UBIK_ADMIN_EDITOR_LINE_HEIGHT;
  } else {
    $line_height = '1.5';
  }

  ?><style type="text/css">
    .wp-editor-area {
      font-size: <?php echo $font_size; ?> !important;
      font-family: <?php echo $font_stack; ?> !important;
      line-height: <?php echo $line_height; ?> !important;
    }
  </style><?php
} endif;



// Font loading code borrowed from Twenty Twelve by way of Pendrell
if ( !function_exists( 'ubik_admin_text_editor_fonts' ) ) : function ubik_admin_text_editor_fonts() {

  // Allows us to pass a Google web font declaration as needed
  if ( UBIK_ADMIN_EDITOR_GOOGLE_FONTS ) {
    $fonts = UBIK_ADMIN_EDITOR_GOOGLE_FONTS;
  } else {
    return; // Don't enqueue any script
  }

  // Encode commas and pipe characters; explanation: http://www.designfordigital.com/2014/04/07/google-fonts-bad-value-css-validate/
  $fonts = str_replace( ',', '%2C', $fonts );
  $fonts = str_replace( '|', '%7C', $fonts );

  $protocol = is_ssl() ? 'https' : 'http';

  $font_url = "$protocol://fonts.googleapis.com/css?family=" . $fonts;

  wp_enqueue_style( 'ubik-admin-fonts', esc_url_raw( $font_url ), array(), null );
} endif;

if ( UBIK_ADMIN_EDITOR_STYLE ) {
  add_action( 'admin_head-post.php', 'ubik_admin_text_editor_style' );
  add_action( 'admin_head-post-new.php', 'ubik_admin_text_editor_style' );
  add_action( 'admin_enqueue_scripts', 'ubik_admin_text_editor_fonts' );
}



// Disable the visual editor altogether
if ( UBIK_ADMIN_VISUAL_EDITOR_OFF )
  add_filter( 'user_can_richedit' , '__return_false', 50 );
