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

add_action('publish_post', 'my_function');

function my_function()
{
    $post_ID = get_the_ID();
    $tags = array('programming', 'tutorials', 'wordpress');
    wp_set_post_tags($post_ID, $tags, true); //true means append, false means overwrite
}

?>