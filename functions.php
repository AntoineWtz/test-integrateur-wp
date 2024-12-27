<?php

add_action('wp_head', 'tailwind_styles');
function tailwind_styles()
{
    wp_enqueue_style('perso-creatisweb', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0');
}
