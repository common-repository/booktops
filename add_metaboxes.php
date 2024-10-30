<?php

// Creating Metaboxes
    function add_booktops_meta_boxes() {
    $meta_box_title = 'Contributors';
    $post_type = 'booktops';
	add_meta_box("add_contributors_booktops", $meta_box_title, "add_contributors_booktops_meta_box", $post_type, "normal", "high");
    }
    function add_contributors_booktops_meta_box(){
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>.width99 {width:99%;}</style>
	<p>
		<label>Contributor 1:</label><br />
		<input type="text" name="contributor1" class="width99" placeholder="Contributor 1" value="<?= @$custom["contributor1"][0] ?>">
	</p>
	<p>
		<label>Contributor 2:</label><br />
		<input type="text" name="contributor2" placeholder="Contributor 2" value="<?= @$custom["contributor2"][0] ?>" class="width99" />
	</p>
	<?php
    }

// Save custom field data when creating/updating posts
    function save_booktops_custom_fields(){
        global $post;
 
        if ( $post ){
            update_post_meta($post->ID, "contributor1", @$_POST["contributor1"]);
            update_post_meta($post->ID, "contributor2", @$_POST["contributor2"]);
        }
    }
add_action( 'admin_init', 'add_booktops_meta_boxes' );
add_action( 'save_post', 'save_booktops_custom_fields' );

?>