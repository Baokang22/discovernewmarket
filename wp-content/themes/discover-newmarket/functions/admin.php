<?php 
// ***********************************************************************//
// Admininistration / Dashboard modifications
// ***********************************************************************//

// Admin: Remove Admin Bar Items
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}

add_action( 'init', 'disable_wp_emojicons' );

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

remove_action('wp_head', 'wp_generator');

// Register Custom Taxonomy
function custom_taxonomy() {
 
    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'attachment-categories', array( 'attachment' ), $args );
 
}
add_action( 'init', 'custom_taxonomy', 0 );


function my_acf_init() {
    
    acf_update_setting('google_api_key', 'AIzaSyDtFBp_QIl_Jt2veLfSFZTRJ979VWXnbkA');
}

add_action('acf/init', 'my_acf_init');

add_action('wp_before_admin_bar_render', 'lingo_admin_bar_render', 100);

function lingo_admin_bar_render() {
    global $template;
    $filename = basename($template);
    
    lingo_add_admin_bar('Cubiq Theme Debug');
     // Parent item
    lingo_add_admin_bar('Template is ' . $filename, '#', 'Cubiq Theme Debug');
}

function lingo_add_admin_bar($name, $href = '', $parent = '', $custom_meta = array()) {
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

  function cf7_dynamic_select_do_example1($choices, $args=array()) {
    // this function returns and array of label => value pairs to be used in the select field
    $choices = array(
      '-- Make a Selection --' => '',
      'Choice 1' => 'Choice 1',
      'Choice 2' => 'Choice 2',
      'Choice 3' => 'Choice 3',
      'Choice 4' => 'Choice 4',
      'Choice 5' => 'Choice 5',
      'default' => array('Choice 2', 'Choice 3')
    );
    return $choices;
  } // end function cf7_dynamic_select_do_example1
  add_filter('wpcf7_dynamic_select_example1', 'cf7_dynamic_select_do_example1', 10, 2);

  // Add field to user sign up


add_action( 'init', 'blockusers_init' );
function blockusers_init() {
if ( is_admin() && ! current_user_can( 'administrator' ) &&
! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
wp_redirect( home_url() );
exit;
}
}
  