<?php

add_action('wp_head', 'tailwind_styles');
function tailwind_styles()
{
    wp_enqueue_style('perso-creatisweb', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0');
}

function load_custom_fonts()
{
    wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'load_custom_fonts');
