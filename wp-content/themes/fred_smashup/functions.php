<?php
// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

#Theme resources
function fred_resources() {
    #Deregister local Jquery
    wp_deregister_script('jquery');
    #Register Jquery from CDN
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    #Register fred.js
    wp_register_script('fred_js', get_template_directory_uri() . '/js/fred.js');
    #Register clean_js
    wp_register_script('clean_js', get_template_directory_uri() . '/js/clean-blog.js');

    #Register css so it can be loaded in correct order
    wp_register_style('fred_style', get_stylesheet_uri());
    wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_register_style('clean_blog_css', get_template_directory_uri() . '/css/clean-blog.css');
    wp_register_style('font_awe', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        
        
    #Styles
    wp_enqueue_style('bootstrap_css');
    wp_enqueue_style('clean_blog_css');
    wp_enqueue_style('font_awe');
    wp_enqueue_style('fred_style', array('bootstrap_css', 'clean_blog_css'));
    

    #Custom Fonts
    wp_enqueue_style('font_awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
    wp_enqueue_style('fonts_google_lora', 'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('fonts_google_open_sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

    #Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('fitvids','https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.js', array('jquery'));
    wp_enqueue_script('clean_js','', array('bootstrap_js'));
    
    if ( is_page('kalender') or is_front_page()) {
        wp_enqueue_script('fred_js', array('jquery'));
    }
}

add_action('wp_enqueue_scripts', 'fred_resources');

#Theme setup
function stof_wp_setup(){
    #allows administration users to create custom menus for use in a theme.
    /*
    register_nav_menus(
        array('primary' => __('Main Menu Fred'))
    );
    */
    register_nav_menus( array(
            'primary' => __( 'Bootstrap Menu'),
    ) );
    
    #Add featured image support
    add_theme_support('post-thumbnails');
    
    #Add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'audio', 'video'));
}

add_action('after_setup_theme', 'stof_wp_setup');

#Sidebar
function setup_widget_area() {
    register_sidebar(
        array(
            'name'          => 'Sidebar Left',
            'id'            =>  'sidebar_left',
            'class'         => 'custom', #for admin areas. WP well prepend 'sidebar-'
            'description'   => 'The Left Sidebar',
            'before_widget' => '<aside id="left_sidebar_id" class="left_sidebar_class pointer_hover">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>'
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sidebar Right',
            'id'            =>  'sidebar_right',
            'class'         => 'custom', #for admin areas. WP will prepend 'sidebar-'
            'description'   => 'The Right Sidebar',
            'before_widget' => '<aside id="right_sidebar_id" class="right_sidebar_class pointer_hover">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>'
        )
    );
    register_sidebar(
        array(
            'name'          => 'Frontpage Right Add',
            'id'            =>  'frontpage_add_right',
            'class'         => 'custom', #for admin areas. WP will prepend 'sidebar-'
            'description'   => 'Right add area on frontpage',
            'before_widget' => '<div id="frontpage_right_add_id" class="frontpage_right_add_id pointer_hover">',
            'after_widget'  => '</div>',
            #'before_title'  => '<h5 class="widget_title">',
            #'after_title'   => '</h5>'
        )
    );
    register_sidebar(
        array(
            'name'          => 'Frontpage Left Add',
            'id'            =>  'frontpage_add_left',
            'class'         => 'custom', #for admin areas. WP will prepend 'sidebar-'
            'description'   => 'Left add area on frontpage',
            'before_widget' => '<div id="frontpage_left_add_id" class="frontpage_left_add_id pointer_hover">',
            'after_widget'  => '</div>',
            #'before_title'  => '<h5 class="widget_title">',
            #'after_title'   => '</h5>'
        )
    );
}
add_action('widgets_init', 'setup_widget_area');

?>