<?php
// ***********************************************************************//
// Scripts
// ***********************************************************************//
// Add function to enqueue extra scripts
add_action('wp_enqueue_scripts', 'cubiq_load_javascript_files');
// Register the scripts
function cubiq_load_javascript_files() {
	wp_register_script('flickity', get_template_directory_uri() . '/js/min/flickity.pkgd.min.js', array('jquery'), true);
	wp_register_script('matchheight', get_template_directory_uri() . '/js/min/jquery.matchHeight-min.js', array('jquery'), true);
	wp_register_script('isotope', get_template_directory_uri() . '/js/min/isotope.min.js', array('jquery'), true);
	wp_register_script('packery', get_template_directory_uri() . '/js/min/packery.min.js', array('jquery'), true);
	wp_register_script('modal', get_template_directory_uri() . '/js/min/bootstrap-modal.min.js', array('jquery'), true);
	wp_register_script('openweather', get_template_directory_uri() . '/js/unpacked/openweather/openweather.js', array('jquery'), true);
	wp_register_script('fancybox', get_template_directory_uri() . '/js/unpacked/fancybox/jquery.fancybox.js', array('jquery'), true);
	wp_register_script('infobubble', get_template_directory_uri() . '/js/unpacked/infobubble.js', array('jquery'), true);

	wp_enqueue_script('flickity');
	wp_enqueue_script('matchheight');
	wp_enqueue_script('isotope');
	wp_enqueue_script('packery');
	wp_enqueue_script('modal');
	wp_enqueue_script('openweather');
	wp_enqueue_script('fancybox');
	wp_enqueue_script('infobubble');


}