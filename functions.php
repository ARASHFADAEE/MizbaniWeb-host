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

//add support img and title tag in site
function run_setup(){
    add_theme_support('title-tag');
    // add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');


    register_nav_menus(
        array(
            'main-menu' => __( 'header-menu' ),
        )
    );
}
add_action('after_setup_theme' , 'run_setup');


//the_expert() expert custom for posts 

function custom_excerpt_length($length) {
    return 20; 
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return ' ...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// add wp host post type
function post_type_wp_host() {
    $labels = array(
        'name'               => __( 'هاست وردپرس' ),
        'singular_name'      => __( 'هاست وردپرس' ),
        'menu_name'          => __( 'هاست وردپرس' ),
        'name_admin_bar'     => __( 'هاست وردپرس' ),
        'add_new'            => __( ' افزودن جدید' ),
        'add_new_item'       => __( 'پست مخصوص هاست وردپرسی' ),
        'new_item'           => __( 'پست جدید' ),
        'edit_item'          => __( 'ویرایش هاست وردپرس' ),
        'view_item'          => __( 'مشاهده هاست وردپرس' ),
        'all_items'          => __( 'همه هاست وردپرس ها' ),
        'search_items'       => __( 'جستجو در بین هاست وردپرس ها' ),
        'parent_item_colon'  => __( 'مادر' ),
        'not_found'          => __( 'مطلب یافت نشد' ),
        'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'wphost', $args );
}
add_action( 'init', 'post_type_wp_host' );



//woocommerce post type


function post_type_wc_host() {
    $labels = array(
        'name'               => __( 'هاست ووکامرس' ),
        'singular_name'      => __( 'هاست ووکامرس' ),
        'menu_name'          => __( 'هاست ووکامرس' ),
        'name_admin_bar'     => __( 'هاست ووکامرس' ),
        'add_new'            => __( ' افزودن جدید' ),
        'add_new_item'       => __( 'پست مخصوص هاست ووکامرسی' ),
        'new_item'           => __( 'پست جدید' ),
        'edit_item'          => __( 'ویرایش هاست ووکامرس' ),
        'view_item'          => __( 'مشاهده هاست ووکامرس' ),
        'all_items'          => __( 'همه هاست ووکامرس ها' ),
        'search_items'       => __( 'جستجو در بین هاست ووکامرس ها' ),
        'parent_item_colon'  => __( 'مادر' ),
        'not_found'          => __( 'مطلب یافت نشد' ),
        'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'wchost', $args );
}
add_action( 'init', 'post_type_wc_host' );



//end woocommerce post type






//wp host category
function create_taxonomies_for_ausbildung() {
    $labels = array(
        'name'              => _x( 'دسته بندی', 'دسته بندی' ),
        'singular_name'     => _x( 'دسته بندی پست ها ', 'دسته بندی' ),
        'search_items'      => __( 'جستجویه دسته' ),
        'all_items'         => __( 'تمام دسته ها' ),
        'parent_item'       => __( 'زیر دسته' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'ویرایش دسته' ),
        'update_item'       => __( 'بروزرسانی دسته' ),
        'add_new_item'      => __( 'افزودن دسته جدید' ),
        'new_item_name'     => __( 'نام جدید دسته' ),
        'menu_name'         => __( 'دسته بندی' ),
    );

    $ar = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy( 'wp-host', 'wphost' , $ar );
}
add_action( 'init', 'create_taxonomies_for_ausbildung');





//wc host category
function create_taxonomies_for_wc() {
    $labels = array(
        'name'              => _x( 'دسته بندی', 'دسته بندی' ),
        'singular_name'     => _x( 'دسته بندی پست ها ', 'دسته بندی' ),
        'search_items'      => __( 'جستجویه دسته' ),
        'all_items'         => __( 'تمام دسته ها' ),
        'parent_item'       => __( 'زیر دسته' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'ویرایش دسته' ),
        'update_item'       => __( 'بروزرسانی دسته' ),
        'add_new_item'      => __( 'افزودن دسته جدید' ),
        'new_item_name'     => __( 'نام جدید دسته' ),
        'menu_name'         => __( 'دسته بندی' ),
    );

    $ar = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy( 'wc-host', 'wchost' , $ar );
}
add_action( 'init', 'create_taxonomies_for_wc');