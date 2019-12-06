<?php
// ***********************************************************************//
// Styles
// ***********************************************************************//

// Load the theme stylesheet from the CSS folder instead, datestamped to avoid refreshing cache
function cubiq_load_styles() {
    wp_enqueue_style('frontend-stylesheet', get_template_directory_uri() . '/css/screen.css', null, filemtime( get_template_directory() . '/css/screen.css'));
}

add_action('wp_enqueue_scripts', 'cubiq_load_styles');


function cubiq_login_styles() {
  wp_enqueue_style('login-stylesheet', get_template_directory_uri() . '/css/login.css', null, filemtime( get_template_directory() . '/css/login.css'));
}
add_action( 'login_enqueue_scripts', 'cubiq_login_styles' );

// Make WYSIWYG use the same stylesheet
add_editor_style('css/screen.css');