<?php // ==== POST LIST FILTERS ==== //

// Add a tags filter to post list; adapted from https://wordpress.stackexchange.com/questions/578/adding-a-taxonomy-filter-to-admin-list-for-a-custom-post-type
// @TODO: generalize this function to apply to any taxonomy
function ubik_admin_tag_filter() {
  global $typenow;

  if ( $typenow == 'post' ) {
    $taxonomy = 'post_tag';
    $term = get_query_var( 'tag_id' );
    wp_dropdown_categories( array(
      'show_option_all'   => __( 'View all tags', 'ubik' ),
      'hide_empty'        => 1,
      'hierarchical'      => 0,
      'show_count'        => 0,
      'orderby'           => 'name',
      'name'              => 'tag_id',
      'taxonomy'          => $taxonomy,
      'selected'          => $term
    ) );
  }
}

// This is a workaround for a known WordPress issue: https://core.trac.wordpress.org/ticket/13258
function ubik_admin_tag_filter_query_vars( $vars ) {
  if ( is_admin() )
    $vars[] = "tag_id";
  return $vars;
}

if ( UBIK_ADMIN_TAG_FILTER ) {
  add_filter( 'query_vars', 'ubik_admin_tag_filter_query_vars' );
  add_action( 'restrict_manage_posts', 'ubik_admin_tag_filter' );
}



// Hide categories filter on uncategorized blogs
function ubik_admin_category_filter_hide() {
  ?><style type="text/css">
      select#cat { display: none; }
  </style><?php
}

// Automatically hide categories; @DEPENDENCY: Ubik Terms (should fail gracefully though)
if ( function_exists( 'ubik_terms_categorized' ) ) {
  if ( !ubik_terms_categorized() )
    add_action( 'admin_head-edit.php', 'ubik_admin_category_filter_hide' );
}
