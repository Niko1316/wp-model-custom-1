<?php

/*
Plugin Name: Hello Sancho
Plugin URI: http://sancho.io
Description: test plugin

*/

function display_date(){

    echo '<p class="display_date">' .date("Y-m-d H:i:s").'</p>';
}

add_action('admin_footer',"display_date");
