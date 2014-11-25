<?php // ==== TERM EDITOR ==== //

// Hack: re-arrange the edit-tags.php file; makes working with terms a little easier but there are better ways of doing this
if ( !function_exists( 'ubik_admin_term_edit_style' ) ) : function ubik_admin_term_edit_style() {
  ?><style type="text/css">
    #col-left {
      float: right;
      padding-left: 2%;
      width: 30%;
    }
    #col-right {
      float: left;
      width: 68%;
    }
    .col-wrap {
      padding: 0;
    }
    /* Hide popular tags and add term help; this stuff is superfluous if you work with terms a lot */
    .tagcloud,
    #addtag .form-field p {
      display: none;
    }
  </style><?php
} endif;
if ( UBIK_ADMIN_TERM_EDIT_STYLE )
  add_action( 'admin_head-edit-tags.php', 'ubik_admin_term_edit_style' );
