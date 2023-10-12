<?php



function add_theme_scripts(){
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.css' , array() , false , 'all');
    wp_enqueue_style('font-assom' , get_template_directory_uri() . '/assets/css/fontawesome.css' , array() , false , 'all');
    wp_enqueue_style('font-icon' , get_template_directory_uri() . '/assets/css/themify-icons.css' , array() , false , 'all');
    wp_enqueue_style('magnific' , get_template_directory_uri() . '/assets/css/magnific.css' , array() , false , 'all');
    wp_enqueue_style('animate.css' , get_template_directory_uri() . '/assets/css/animate.css' , array() , false , 'all');
    wp_enqueue_style('jq-slider' , get_template_directory_uri() . '/assets/css/jq-slider.css' , array() , false , 'all');
    wp_enqueue_style('jq-megamenu' , get_template_directory_uri() . '/assets/css/jq-megamenu.css' , array() , false , 'all');
    wp_enqueue_style('owlcarousel' , get_template_directory_uri() . '/assets/css/owlcarousel.css' , array() , false , 'all');
    wp_enqueue_style('main-rtl' , get_template_directory_uri() . '/assets/css/main-rtl.css' , array() , false , 'all');
    wp_enqueue_style('fontss' , get_template_directory_uri() . '/assets/css/fonts.css' , array() , false , 'all');
    wp_enqueue_style('custom' , get_template_directory_uri() . '/assets/css/custom.css' , array() , false , 'all');



    //add js script
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery.min.js' , array() , false , true);
    wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js' , array() , false , true);
    wp_enqueue_script('pluginss' , get_template_directory_uri() . '/js/plugins.js' , array() , false , true);
    wp_enqueue_script('jsscript' , get_template_directory_uri() . '/js/scripts.js' , array() , false , true);
    wp_enqueue_script('cookie-1' , get_template_directory_uri() . '/js/cookies.js' , array() , false , true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );