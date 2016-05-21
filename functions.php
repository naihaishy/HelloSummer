<?php

if ( function_exists('register_sidebar') )
    register_sidebar();

function get_ssl_avatar($avatar) {
    $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"secure.gravatar.com",$avatar);
    return $avatar;
}
add_filter('get_avatar', 'get_ssl_avatar');

//add post thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'customized-post-thumb', 100, 120 );
}

?>
