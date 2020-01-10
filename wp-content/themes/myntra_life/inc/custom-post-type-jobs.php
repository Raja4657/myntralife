<?php
/*
Custom post type : jobs
*/
add_action( 'init', 'create_post_type_jobs' );
function create_post_type_jobs() {
  register_post_type( 'jobs',
    array(
      'labels' => array(
        'name' => __( 'Jobs' ),
        'singular_name' => __( 'Jobs' ),
    'add_new_item' => __( 'Add New jobs' ),
    'all_items' => __( 'All jobs' ),
    'edit_item' => __( 'Edit jobs' ),
    'new_item' => __( 'New jobs' ),
    'search_item' => __( 'Search jobs' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}