<?php

/*
Plugin Name: Hello Sancho
Plugin URI: http://sancho.io
Description: test plugin

*/

if (!defined('WPINC')) {
    die('');
}

function display_date(){

    echo '<p class="display_date">' .date("Y-m-d H:i:s").'</p>';
}

add_action('admin_footer',"display_date");
add_action('after_banner',"display_date");


function hello_sancho_css() {
  // This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	.display_date {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}
add_action('admin_head', 'hello_sancho_css');
