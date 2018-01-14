<?php

    // Include WP_Bootstrap_Navwalker
    require_once('wp-bootstrap-navwalker.php');

    // Add Featured Image Support Thambnail
    add_theme_support('post-thembnails');

    /*
    /*add my custom system
    **add by alaa
    **wb_enqueue_style
    */
    function add_styles(){

        wp_enqueue_style("bootsrap-css",get_template_directory_uri() . "/css/bootstrap.min.css");
        wp_enqueue_style("bootsrap-font",get_template_directory_uri() . "/css/font-awesome.min.css");
        wp_enqueue_style("main",get_template_directory_uri() . "/css/main.css");
        wp_enqueue_style("style",get_template_directory_uri() . "/css/style.css");
       
        
    }
    /*
    /*add my custom script
    **add by alaa
    **wb_enqueue_script
    */
    function add_scripts(){       
        wp_deregister_script('jquery');//remove registeration for old jquery
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js') ,false, '' ,true);//register anew query 
        wp_enqueue_script('jquery');//enqueue the new jquery
        wp_enqueue_script("bootstrap-js",get_template_directory_uri()."/js/bootstrap.min.js",array('jquery'),false,true);
        wp_enqueue_script('main-js',get_template_directory_uri()."/js/main.js",array(),false,true);//start anew jquery
        // Add Html5shive For Old Browsers
        wp_enqueue_script('html5shiv' , get_template_directory_uri()."/js/html5shiv.js",array(),false,true);
        //  Add Conditional Comment For Html5shiv
        wp_script_add_data('html5shiv' ,'conditional' , 'lt IE 9');       
        // Add Respond Script For Old Browsers
        wp_enqueue_script('respond' , get_template_directory_uri()."/js/respond.min.js",array(),false,true);
        //  Add Conditional Comment For Respond
        wp_script_add_data('respond' ,'conditional' , 'lt IE 9');

    }
    
    // Add Custom Menu
    function register_custom_menu(){
        // Register Custom Menus
        register_nav_menus(array(
            'bootstrap-menu' => 'Navigation Bar',
            'footer-menu' => 'Footer Menu'
        ));
    }

    // Display Nav Menu
    function bootstrap_menu(){
        wp_nav_menu(array(
            'theme_location' => 'bootstrap-menu',
            'menu_class'  => 'nav navbar-nav navbar-right',
            'container' => '',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
        ));
    }

    /* customize The Excerpt Word Length & Read More Dots */
    function extend_excerpt_length($length){
        if(is_author()){
            return 40;
        }else{
            return 85;
        }
    }
    function change_excerpt_dots($more){
        return ' ...';
    }
    // Add Filter
    add_filter('excerpt_length','extend_excerpt_length');
    add_filter('excerpt_more','change_excerpt_dots');
    /*add action*/
    add_action('wp_enqueue_scripts','add_styles');
    add_action('wp_enqueue_scripts','add_scripts');
    add_action('init','register_custom_menu');

