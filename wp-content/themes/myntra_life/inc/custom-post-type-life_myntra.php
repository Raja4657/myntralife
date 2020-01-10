<?php
/*
Custom post type : Life_myntra
*/
add_action( 'init', 'create_post_type_Life_myntra' );
function create_post_type_Life_myntra() {
  register_post_type( 'Life_myntra',
    array(
      'labels' => array(
        'name' => __( 'Life_myntra' ),
        'singular_name' => __( 'Life_myntra' ),
    'add_new_item' => __( 'Add New Life_myntra' ),
    'all_items' => __( 'All Life_myntra' ),
    'edit_item' => __( 'Edit Life_myntra' ),
    'new_item' => __( 'New Life_myntra' ),
    'search_item' => __( 'Search Life_myntra' ),
      ),
    'menu_position'  => 5,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('post_tag','post'),
    'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}