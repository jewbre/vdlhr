<?php

define("INCLUDE_PATH", get_template_directory() . "/inc/");
define("TEMPLATE_PATH", get_template_directory() . "/");

if ( !defined('WP_MEMORY_LIMIT') )
    define('WP_MEMORY_LIMIT', '500M');

require get_template_directory() . "/inc/vendors/AutoLoader.php";

function dump($obj) {
    echo "<pre class='debug'>";
    var_dump($obj);
    echo "</pre>";
}

/**
 * Base url convertion method.
 * @param $url
 * @return string
 */
function bu($url) {
    return "/wp-content/themes/vdl/inc/" . $url;
}

/**
 * Base url root convertion method.
 * @param $url
 * @return string
 */
function buRoot($url) {
    return "/wp-content/themes/vdl/" . $url;
}

function get_post_featured($post_id = null, $size = "post-thumbnail", $attr = '') {
    if($post_id == null) {
        $post_id = get_the_ID();
    }
    $image = get_the_post_thumbnail($post_id, $size, $attr);

    $startSrc = strpos($image, "src=");
    if(!$startSrc) return "";

    $startSrc += 5;
    $endSrc = strpos($image, "\"", $startSrc+1);

    $imageUrl = substr($image, $startSrc, $endSrc-$startSrc);
    return $imageUrl;
}


// Post to Facebook
function post_to_facebook_page( $post_id ) {
// If this is just a revision, don't send the email.
    session_start();
    require 'inc/vendors/Facebook/autoload.php';

    $appId = "888405884569924";
    $appSecret = "37390ccce1dfd0c1ea570a1c3e2e2ea9";

// start session

    $config = array('app_id' => $appId, 'app_secret'=> $appSecret);

    $fb = new \Facebook\Facebook($config);

    $session =
    die();

}
add_action( 'save_post_catalogue', 'post_to_facebook_page' );