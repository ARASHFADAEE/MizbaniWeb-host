<?php



function add_theme_scripts(){
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false , 'all');
    wp_enqueue_style('font-icon' , get_template_directory_uri() . '/css/font-icons.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_template_directory_uri() . '/css/style.css' , array() , false , 'all');



    //add js script
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery.min.js' , array() , false , true);
    wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js' , array() , false , true);
    wp_enqueue_script('pluginss' , get_template_directory_uri() . '/js/plugins.js' , array() , false , true);
    wp_enqueue_script('jsscript' , get_template_directory_uri() . '/js/scripts.js' , array() , false , true);
    wp_enqueue_script('cookie-1' , get_template_directory_uri() . '/js/cookies.js' , array() , false , true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );