<?php
// Register Post Type
    add_action( 'init', 'IQ_create_post_type' );
    function IQ_create_post_type() {
        $IQ_post_type = 'booktops';
        $IQ_label_plural_name = 'Books';
        $IQ_label_singular_name = 'Book';
        $args = array(
                'labels' => array(
                    'name' => $IQ_label_plural_name,
                    'singular_name' => $IQ_label_singular_name,
                    'add_new' => 'Add New Book',
                    'add_new_item' => 'Add New Book',
                    'edit_item' => 'Edit Book',
                    'new_item' => 'New Book',
                    'view_item' => 'View this Book',
                    'view_items' => 'View this Books',
                    'search_items' => 'Search a Book',
                    'not_found' => 'No Books Found',
                    'not_found_in_trash' => 'No trashed Books Found',
                    'all_items' => 'All Books',
                    'archives' => 'Book Archive',
                    'attributes' => 'Book Attributes',
                    'insert_into_item' => 'Insert into Book',
                    'uploaded_to_this_item' => 'Uploaded to this Book',
                     ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'books'),
                'show_in_admin_bar' => true,
                'menu_position' => 5,
                'menu_icon' => 'dashicons-book',
                'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'thumbnail',
                    'comments',
                    ),
                'can-export' => true,
                'capability_type' => 'post',
                );
        register_post_type( $IQ_post_type , $args );
}
?>