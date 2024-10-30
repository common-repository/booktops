<?php
   /*
   Plugin Name: BookTops
   Plugin URI: http://www.iqubex.com/projects/plugins/booktops
   Description: This plugin would let you add books instead of posts which would also allow you to develop a button which would download your E-book!
   Version: 1.1
   Author: Kumar Abhirup
   Author URI: http://www.iqubex.com/team/kumar-abhirup
   License: GPL2
   */

   // Die if entered directly!
   if  ( ! DEFINED( 'ABSPATH' ) ){
       exit;
   }

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
require( PLUGIN_PATH . 'create_post_type.php');
require( PLUGIN_PATH . 'render_posts.php');
require( PLUGIN_PATH . 'create_taxonomies.php');
require( PLUGIN_PATH . 'add_metaboxes.php');

?>