<?php // ==== POST LIST FILTERS ==== //

// Add a tags filter to post list; adapted from https://wordpress.stackexchange.com/questions/578/adding-a-taxonomy-filter-to-admin-list-for-a-custom-post-type
// @TODO: generalize this function to apply to any taxonomy
if ( !function_exists( 'ubik_admin_tag_filter' ) ) : function ubik_admin_tag_filter() {
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
} endif;

// This is a workaround for a known WordPress issue: https://core.trac.wordpress.org/ticket/13258
if ( !function_exists( 'ubik_admin_tag_filter_query_vars' ) ) : function ubik_admin_tag_filter_query_vars( $vars ) {
  if ( is_admin() )
    $vars[] = "tag_id";
  return $vars;
} endif;

if ( UBIK_ADMIN_TAG_FILTER ) {
  add_filter( 'query_vars', 'ubik_admin_tag_filter_query_vars' );
  add_action( 'restrict_manage_posts', 'ubik_admin_tag_filter' );
}



// Hide categories filter on uncategorized blogs
if ( !function_exists( 'ubik_admin_category_filter_hide' ) ) : function ubik_admin_category_filter_hide() {
  ?><style type="text/css">
      select#cat { display: none; }
    }
  </style><?php
} endif;

// Automatically hide categories; @DEPENDENCY: relies on the is_categorized conditional in Ubik core
if ( function_exists( 'is_categorized' ) ) {
  if ( !is_categorized() )
    add_action( 'admin_head-edit.php', 'ubik_admin_category_filter_hide' );
}
