<?php
    // Addding CSS and JS Files
    function crosbies_files(){

        //////////////////////////
        //////// CSS Files ///////
        /////////////////////////

        // Bootstrap 
        wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        // Custom css
        wp_enqueue_style('crosbies_main_styles', get_stylesheet_uri());
        // AOS css
        wp_enqueue_style('aos-css', '//unpkg.com/aos@2.3.1/dist/aos.css');

        // Slick Slider
        wp_enqueue_style( 'slick-css', get_template_directory_uri()  . '/slick/slick.css');
        wp_enqueue_style( 'slick-theme-css', get_template_directory_uri()  . '/slick/slick-theme.css' ); 
        
        /////////////////////////
        //////// JS Files ///////
        /////////////////////////

        // jQuery Files
        wp_enqueue_script('jquery_file1', '//code.jquery.com/jquery-1.11.0.min.js');
        wp_enqueue_script('jquery_file2', '//code.jquery.com/jquery-migrate-1.2.1.min.js');

        // AOS JS
        wp_enqueue_script('aos-js', '//unpkg.com/aos@2.3.1/dist/aos.js');

        // Bootstrap JS
        wp_enqueue_script('bootstrap-slim-js', '//code.jquery.com/jquery-3.4.1.slim.min.js');
        wp_enqueue_script('bootstrap-popper-js', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
        wp_enqueue_script('bootstrap-min-js', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');

        // Slick JS
        wp_enqueue_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'),'1.1', true);
        wp_enqueue_script('slick-custom-js', get_template_directory_uri(). '/scripts/slick.js', array('jquery'),'1.1', true);

        // Custom JS
        wp_enqueue_script('custom-js', get_template_directory_uri(). 'scripts/custom.js', array('jquery'),'1.1', true);
    }

    add_action('wp_enqueue_scripts','crosbies_files' );

    // Header Main Menu 
    // function crosbies_features (){
    //     register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // }

    // add_action('after_setup_theme', 'crosbies_features');
    
    ////////////////////////////////////////////
    ///////// Walker function for menu /////////
    ///////////////////////////////////////////

    // Register Nav walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Theme Support
    function crosbies_features (){
            register_nav_menu('headerMenuLocation', 'Header Menu Location');
        }   
    add_action('after_setup_theme', 'crosbies_features');
    
    // SVG Adding
    function my_myme_types($mime_types){
        $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
        return $mime_types;
    }
    add_filter('upload_mimes', 'my_myme_types', 1, 1);
   
?>

 