<?php

function scripts() {


    wp_register_style('style',get_template_directory_uri(). '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri(). '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');

}

add_action('wp_enqueue_scripts','scripts');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus( 
    array(
        'top-menu' => 'Top Menu',
    )
    );

 add_image_size('post_image', 1100, 750, false);

 

// function mytheme_add_woocommerce_support()
// {
//     add_theme_support('woocommerce');
// }
// add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

?>