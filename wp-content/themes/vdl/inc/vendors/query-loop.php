<?php

function query_loop($arg = array(), $loop_template, $cache = true, $group = 'looping'){
    $data = false;
    if (empty($loop_template) || !is_string($loop_template)){
        return new WP_Error( 'Missing arguments', __( "query_loop missing template", TRANSLATE_DOMAIN ) );
    }
    if (!isset($arg['posts_per_page']))
        $arg['posts_per_page'] = get_option('posts_per_page');
    if (!isset($arg['post_type']))
        $arg['post_type'] = 'post';
    if (get_query_var('paged'))
        $arg['paged'] = get_query_var('paged');
    //var_dump($args); die();
    //User json encode to "serialize" data, it's much faster
    $json_args = json_encode($arg, 256);
    //If cache is enabled
    if($cache){
        //Create cache key
        $cache_id = md5($json_args . $loop_template);
        //Get cache data
        $data = wp_cache_get($cache_id, $group);
        //var_dump($data, $cache_id);
    }
    //Check if we have anything in the cache
    if($cache && $data){	//if we do, return cached data
        return $data;
    }
    $query = new WP_Query($arg);
    $return['data'] = '';
    $return['query'] = $query;
    //Pre fetch users with one query
//    Clrz_user::bulk($query->posts, 'post_author');
    if ($query->have_posts()) {
        $return['data'] = Partial::getPartial('loop', $loop_template, array('d' => $query), true );
    }
    unset($query);
    wp_reset_query();
    return $return;
}
