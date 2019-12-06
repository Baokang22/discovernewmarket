<?php
// ***********************************************************************//
// Image Filters
// ***********************************************************************//

add_action('after_setup_theme','imagefilter_sizes');
function imagefilter_sizes() {
    add_image_size('bw-image', 1024, 1024, true);
}

add_filter('wp_generate_attachment_metadata','bw_filter');
function bw_filter($meta) {
$path = wp_upload_dir();
/* get dirname of file to get correct date folder */
$subdir = trailingslashit(dirname($meta['file']));
/* get basedir on path to get uploads folder */
$file = trailingslashit($path['basedir']).$subdir.$meta['sizes']['bw-image']['file'];
list($orig_w, $orig_h, $orig_type) = @getimagesize($file);
$image = wp_load_image($file);
imagefilter($image, IMG_FILTER_GRAYSCALE);
imagefilter($image, IMG_FILTER_CONTRAST, -25);

switch ($orig_type) {
case IMAGETYPE_GIF:
imagegif( $image, $file );
break;
case IMAGETYPE_PNG:
imagepng( $image, $file );
break;
case IMAGETYPE_JPEG:
imagejpeg( $image, $file );
break;
}
return $meta;
}