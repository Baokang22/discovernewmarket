<?php
// ***********************************************************************//
// Menus
// ***********************************************************************//
// Add Menus
function register_my_menus() {
register_nav_menus(array(
'primary_menu' => 'Primary Menu',
'footer_menu' => 'Footer Menu',
'footer_menu_one' => 'Footer Menu Column One',
'footer_menu_two' => 'Footer Menu Column Two',
'footer_menu_three' => 'Footer Menu Column Three',
'footer_menu_four' => 'Footer Menu Column Four',
'mobile_menu' => 'Mobile Menu'
));
}
add_action('init', 'register_my_menus');