<?php
/**
 * Created by PhpStorm.
 * User: IAN
 * Date: 22/07/2016
 * Time: 11:17 PM
 */

/**
 * Plugin Name: My first plugin
 * Plugin URI: http://localhost
 * Description this is a plugin for some tests
 * Version: 1.0
 * Author: Ian Nastajus
 * Author URI: http://nastajus.com
 * License: GPL2
 */

add_action('publish_post', 'my_function');  //actions are like events.

function my_function()
{
    $post_ID = get_the_ID();
    $tags = array('programming', 'tutorials', 'wordpress');
    wp_set_post_tags($post_ID, $tags, true);
}


function do_something_cool()
{
    //do something
}

add_action('a_hook', 'do_something_cool'); //$tag (req), $function_to_add (req), (optional), (optional).
add_filter('a_hook', 'do_something_cool'); //so, to reiterate, tags are == hooks, hooks are == actions... overly simplistic.

?>