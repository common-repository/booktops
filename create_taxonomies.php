<?php

//CATEGORY like taxomony
function IQ_create_taxonomy_type_categories(){
        $singular_label = 'Genre';
        $plural_label = $singular_label.'s';
        $taxonomy = $plural_label;
        $object_type = 'booktops';
        $labels = array(
                'name'          => $plural_label,
                'singular_name' => $singular_label,
                'menu_name'     => $plural_label,
                'all_items'     => 'All'.' '.$plural_label,
                'edit_items'    => 'Edit'.' '.$plural_label,
                'edit_item'     => 'Edit'.' '.$singular_label,
                'view_item'     => 'View'.' '.$singular_label,
                'update_item'   => 'Update'.' '.$singular_label,
                'add_new_item'  => 'Add New'.' '.$singular_label,
                'new_item_name' => 'New'.' '.$singular_label.' '.'name',
                'search_items'  => 'Search'.' '.$plural_label,
                'popular_items' => 'Popular '.$plural_label,

                'separate_items_with_commas' => 'Separate '.$plural_label.' '.'with commas.',
                'add_or_remove_items'        => 'Add or Remove '.$plural_label,
                'choose_from_most_used'      => 'Choose from most used '.$plural_label,
                'not_found'                  => 'No '.$plural_label.' '.'found!',
        );
        $args = array(
                'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => $plural_label ),
        );
        register_taxonomy( $taxonomy, $object_type, $args );
}
add_action( 'init' , 'IQ_create_taxonomy_type_categories' , 0 );



// TAG like Taxonomy
function IQ_create_taxonomy_type_tags(){
        $singular_label = 'Author';
        $plural_label = $singular_label.'s';
        $taxonomy = $plural_label;
        $object_type = 'booktops';
        $labels = array(
                'name'          => $plural_label,
                'singular_name' => $singular_label,
                'menu_name'     => $plural_label,
                'all_items'     => 'All'.' '.$plural_label,
                'edit_items'    => 'Edit'.' '.$plural_label,
                'edit_item'     => 'Edit'.' '.$singular_label,
                'view_item'     => 'View'.' '.$singular_label,
                'update_item'   => 'Update'.' '.$singular_label,
                'add_new_item'  => 'Add New'.' '.$singular_label,
                'new_item_name' => 'New'.' '.$singular_label.' '.'name',
                'search_items'  => 'Search'.' '.$plural_label,
                'popular_items' => 'Popular '.$plural_label,

                'separate_items_with_commas' => 'Separate '.$plural_label.' '.'with commas.',
                'add_or_remove_items'        => 'Add or Remove '.$plural_label,
                'choose_from_most_used'      => 'Choose from most used '.$plural_label,
                'not_found'                  => 'No '.$plural_label.' '.'found!',
        );
        $args = array(
                'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => $plural_label ),
        );
        register_taxonomy( $taxonomy, $object_type, $args );
}
add_action( 'init' , 'IQ_create_taxonomy_type_tags' , 0 );

?>