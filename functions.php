<?php 

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'custom-row',
            'title'             => __('Custom row'),
            'description'       => __('A custom row block.'),
            'render_template'   => 'blocks/custom-row-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'custom-trow', 'quote' ),
        ));
    }
}

/**
 * Enqueue scripts and styles
 */
function enqueue_custom_script_airfleet() {
    // all styles
    wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), 20141119 );
    wp_enqueue_style( 'custom-airfleet-style', get_stylesheet_directory_uri() . '/css/style.css', array(), 20141119 );

}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_script_airfleet' );


/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
function wpdocs_enqueue_custom_admin_style() {
    wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), 20141119 );
    wp_enqueue_style( 'custom-airfleet-style', get_stylesheet_directory_uri() . '/css/style.css', array(), 20141119 );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );

// https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css