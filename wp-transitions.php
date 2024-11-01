<?php
/*
Plugin Name: WP Transitions
Plugin URI: http://farzad.id.ir/wordpress/wordpress-plugin-run-the-transition-beautiful-css3-effects-on-the-site.html
Description: Automatically adds <strong>CSS transitions</strong> to your Wordpress website/blog and Wordpress Admin Elements with hover/active/focus
Author: Farzad Setoode
Author URI: http://farzad.id.ir
Version: 1.4
License: GPLv2
*/
add_action('wp_head', 'wp_transition');
add_action('admin_head', 'wp_transition');

function wp_transition(){ ?>
<style type="text/css">
/*
Added by wp-transiton plugin.
*/
* , a , input , div {
	-moz-transition : 0.5s;
	-o-transition : 0.5s;
	-ms-transition : 0.5s;
	-webkit-transition : 0.5s;
	transition : 0.5s;
}
*:hover , a:hover , input:hover , div:hover {
	-moz-transition : 0.5s;
	-o-transition : 0.5s;
	-ms-transition : 0.5s;
	-webkit-transition : 0.5s;
	transition : 0.5s;
}
*:focus , a:focus , input:focus , div:focus {
	-moz-transition : 0.5s;
	-o-transition : 0.5s;
	-ms-transition : 0.5s;
	-webkit-transition : 0.5s;
	transition : 0.5s;
}

.wp-submenu {
	-moz-transition : 0s;
	-o-transition : 0s;
	-ms-transition : 0s;
	-webkit-transition : 0s;
	transition : 0s;
}

</style>
<?php }

