<?php
/////////// Post Types ///////////
    function crosbies_services(){
        register_post_type('service',array(
            'public' => true,
            'labels' => array(
                'name' => 'Services',
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service',
                'all_items' => 'All Services',
                'singular_name' => 'Service'
            ),
            'menu_icon' => 'dashicons-admin-tools'
        ));
    }
    add_action('init', 'crosbies_services');
?>