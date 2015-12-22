<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 21.6.2015.
 * Time: 11:30
 */

add_theme_support( 'post-thumbnails' );
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

/**
 *  200x150 image size
 */
//add_image_size("vdl-200x150", 200, 150, true);


/**
 *  50x50 thumbnail
 */
//add_image_size("vdl-50x50", 50, 50, true);


/**
 *  400x300 image size
 */
//add_image_size("vdl-400x300", 400, 300, true);


/**
 *  800x600 image size
 */
//add_image_size("vdl-800x600", 800, 600, true);