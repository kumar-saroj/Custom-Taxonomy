<?php
add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
 
function create_subjects_hierarchical_taxonomy() { 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Categories', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Categories' ),
    'parent_item_colon' => __( 'Parent Categories:' ),
    'edit_item' => __( 'Edit Categories' ), 
    'update_item' => __( 'Update Categories' ),
    'add_new_item' => __( 'Add New Categories' ),
    'new_item_name' => __( 'New Categories Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('categories',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories' ),
  ));
  //flush_rewrite_rules();
 
}

?>