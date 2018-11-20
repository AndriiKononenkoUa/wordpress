<?php function custom_css_js_enqueue_scripts() {

    /* enqueue the custom-style.css file */
    wp_enqueue_style( 'custom-css', plugins_url( '/css/custom-style.css', __FILE__ ), $ver = false );

    /* enqueue the custom-scripts.js file */
    wp_enqueue_script( 'custom-js', plugins_url( '/js/custom-scripts.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'custom_css_js_enqueue_scripts' ); 
