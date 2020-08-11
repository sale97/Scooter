<?php

// Register styles and scripts
function load_scripts() {
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/assets/css/font.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add theme support thumbnails
add_theme_support('post-thumbnails');

// Add theme support HTML5
add_theme_support('html5');

// Add theme support automatic feed links
add_theme_support('automatic-feed-links');

//Enable custom logo
add_theme_support('custom-logo');

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Add image sizes
add_image_size('custom_small_image_cropped', 800, 600, true); //cropped
add_image_size('custom_small_image_not_cropped', 800, 600, false); //not cropped
add_image_size('custom_small_image_custom_cropped', 800, 600, array('left', 'bottom')); //custom cropped


//register menus
register_nav_menus(array(
    'primary-menu' => 'Primary menu for site header',
    'secondary-left-menu' => 'Secondary menu for site footer - left',
    'secondary-right-menu' => 'Secondary menu for site footer - right',
    'secondary-mobile-menu' => 'Secondary menu for site footer mobile - right'
));

/* small meta box , change "small" into anything you want, change $value and $data name for each new */
//if( ! function_exists( 'small_meta_box' ) ) {
//   function small_meta_box() {
//      add_meta_box(
//         'small_box',
//         'small',
//         'small_meta_box_callback',
//         array( 'lawyer' )
//      );
//   }
//   add_action( 'add_meta_boxes', 'small_meta_box' );
//}
//if( ! function_exists( 'small_meta_box_callback' ) ) {
//   function small_meta_box_callback( $post ) {
//      wp_nonce_field( 'small_meta_box_save_data', 'small_meta_box_nonce' );
//      $value = get_post_meta( $post->ID, '_small_value_key', true );
//      echo '<input type="text" id="small_label" name="small_label" value="' . esc_attr( $value ) . '" size="25" />';
//   }
//}
//if( ! function_exists( 'small_meta_box_save_data' ) ) {
//   function small_meta_box_save_data( $post_id ) {
//      if( ! isset( $_POST['small_meta_box_nonce'] ) ) {
//         return;
//      }
//      if( ! wp_verify_nonce( $_POST['small_meta_box_nonce'], 'small_meta_box_save_data' ) ) {
//         return;
//      }
//      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
//         return;
//      }
//      if( ! current_user_can( 'edit_post', $post_id ) ) {
//         return;
//      }
//      if( ! isset( $_POST['small_label'] ) ) {
//         return;
//      }
//      $data = sanitize_text_field( $_POST['small_label'] );
//      update_post_meta( $post_id, '_small_value_key', $data );
//   }
//   add_action( 'save_post', 'small_meta_box_save_data' );
//}


//register custom post types
//function wpdocs_codex_book_init() {
//    $labels = array(
//        'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
//        'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
//        'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
//        'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
//        'add_new'               => __( 'Add New', 'textdomain' ),
//        'add_new_item'          => __( 'Add New Book', 'textdomain' ),
//        'new_item'              => __( 'New Book', 'textdomain' ),
//        'edit_item'             => __( 'Edit Book', 'textdomain' ),
//        'view_item'             => __( 'View Book', 'textdomain' ),
//        'all_items'             => __( 'All Books', 'textdomain' ),
//        'search_items'          => __( 'Search Books', 'textdomain' ),
//        'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
//        'not_found'             => __( 'No books found.', 'textdomain' ),
//        'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
//        'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
//        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
//        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
//        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
//        'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
//        'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
//    );
//
//    $args = array(
//        'labels'             => $labels,
//        'public'             => true,
//        'publicly_queryable' => true,
//        'show_ui'            => true,
//        'show_in_menu'       => true,
//        'query_var'          => true,
//        'rewrite'            => array( 'slug' => 'book' ),
//        'capability_type'    => 'post',
//        'has_archive'        => true,
//        'hierarchical'       => false,
//        'menu_position'      => null,
//        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
//    );
//
//    register_post_type( 'book', $args );
//}
//
//add_action( 'init', 'wpdocs_codex_book_init' );







