<?php
// add_filter( 'jetpack_development_mode', '__return_true' );

define( 'WP_MAX_MEMORY_LIMIT', '1024' );
define( 'WP_MEMORY_LIMIT', '1024' );

// Add items to the admin menu bar
add_action('wp_before_admin_bar_render', 'cubiq_admin_bar_render', 100);

function cubiq_admin_bar_render() {
    global $template;
    $filename = basename($template);
    
    cubiq_add_admin_bar('Cubiq Debug');
     // Parent item
    cubiq_add_admin_bar('Template is ' . $filename, '#', 'Cubiq Debug');
}

function cubiq_add_admin_bar($name, $href = '', $parent = '', $custom_meta = array()) {
    global $wp_admin_bar;
    
    if (!is_super_admin() || !is_admin_bar_showing() || !is_object($wp_admin_bar) || !function_exists('is_admin_bar_showing')) {
        return;
    }
    
    $id = str_replace('.php', '', basename(__FILE__)) . '-' . $name;
    $id = preg_replace('#[^\w-]#si', '-', $id);
    $id = strtolower($id);
    $id = trim($id, '-');
    
    $parent = trim($parent);
    
    if (!empty($parent)) {
        $parent = str_replace('.php', '', basename(__FILE__)) . '-' . $parent;
        $parent = preg_replace('#[^\w-]#si', '-', $parent);
        $parent = strtolower($parent);
        $parent = trim($parent, '-');
    }
    
    $site_url = site_url();
    
    $meta_default = array();
    $meta_ext = array('target' => '_blank');
    
    $meta = (strpos($href, $site_url) !== false) ? $meta_default : $meta_ext;
    $meta = array_merge($meta, $custom_meta);
    
    $wp_admin_bar->add_node(array('parent' => $parent, 'id' => $id, 'title' => $name, 'href' => $href, 'meta' => $meta,));
}