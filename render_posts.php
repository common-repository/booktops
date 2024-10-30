<?php
// Show the Items on Home Page
add_action( 'pre_get_posts' , 'iq_bt_show_item' );
function iq_bt_show_item( $query ){
    if ( ( is_home() && $query->is_main_query() ) || is_feed() )
		$query->set( 'post_type', array( 'post', 'booktops' ) );
	return $query;
}
?>