<?php // ==== EDITOR ==== //

// HTML editor fontstack and fontsize hack; source: http://justintadlock.com/archives/2011/07/06/fixing-wordpress-3-2s-html-editor-font
// Modifying editor-style.css is a better way to do this...
function ubik_html_editor_fontstack() {
  ?><style type="text/css">
    #wp-content-editor-container textarea#content,
    textarea#wp_mce_fullscreen {
      font-size: <?php echo UBIK_ADMIN_EDITOR_FONT_SIZE; ?>;
      font-family: <?php echo UBIK_ADMIN_EDITOR_FONT_STACK; ?>;
    }
  </style><?php
}
if ( UBIK_ADMIN_EDITOR_FONT_SIZE || UBIK_ADMIN_EDITOR_FONT_STACK ) {
  add_action( 'admin_head-post.php', 'ubik_html_editor_fontstack' );
  add_action( 'admin_head-post-new.php', 'ubik_html_editor_fontstack' );
}

// Disable the visual editor altogether
if ( UBIK_ADMIN_VISUAL_EDITOR_OFF )
  add_filter( 'user_can_richedit' , '__return_false', 50 );
