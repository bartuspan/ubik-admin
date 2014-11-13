<?php // ==== POST LIST THUMBNAILS ==== //

// Featured image/post thumbnail column in post list; adapted from http://www.rektproductions.com/display-featured-images-in-admin-post-list/
function ubik_admin_posts_columns( $defaults ) {
  $defaults['featured_image'] = __( 'Thumb', 'ubik' );
  return $defaults;
}

function ubik_admin_posts_custom_columns( $column_name, $id ) {
  if ( $column_name === 'featured_image' )
    echo the_post_thumbnail( array( 60, 60 ) );
}

function ubik_admin_posts_columns_style() { // This is a bit of a cheap hack but we're not too concerned about back-end optimization
  ?><style type="text/css">
    .column-featured_image {
      width: 60px;
    }
    td.column-featured_image {
      text-align: center;
    }
  </style><?php
}

if ( UBIK_ADMIN_POST_LIST_THUMBS ) {
  add_filter( 'manage_posts_columns', 'ubik_admin_posts_columns', 5);
  add_action( 'manage_posts_custom_column', 'ubik_admin_posts_custom_columns', 5, 2);
  add_action( 'admin_head-edit.php', 'ubik_admin_posts_columns_style' );
}
