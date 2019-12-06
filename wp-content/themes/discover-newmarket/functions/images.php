<?php
// ***********************************************************************//
// Images
// ***********************************************************************//

// Images: Add Featured Images Support
add_theme_support('post-thumbnails');

// Images: Add custom featured image sizes
if (function_exists('add_image_size')) {
    add_image_size('carousel', 9999, 9999, false);
    add_image_size('secret-image', 350, 235, false);
    add_image_size('mapimg', 177, 90, true);
    add_image_size('events', 330, 267, true);
}

// Images: Get SVG content 
// Example: get_svg('images/example.svg')
function get_svg($image){
	if (file_exists(TEMPLATEPATH . '/' . $image)) {
	echo file_get_contents(TEMPLATEPATH . '/' . $image);
	} else {
		echo 'Could not find ' . TEMPLATEPATH . '/' . $image;
	}
}