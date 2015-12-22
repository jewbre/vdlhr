<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 21.6.2015.
 * Time: 11:46
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'catalogue',
        array(
            'labels' => array(
                'name' => __( 'Cases' ),
                'singular_name' => __( 'Case' )
            ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'cases', 'with_front' => true),
        )
    );
}