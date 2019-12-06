<?php
// ***********************************************************************//
// Base Theme Functions
// ***********************************************************************//
require_once(TEMPLATEPATH . '/functions/admin.php');
require_once(TEMPLATEPATH . '/functions/scripts.php');
require_once(TEMPLATEPATH . '/functions/styles.php');
require_once(TEMPLATEPATH . '/functions/images.php');
require_once(TEMPLATEPATH . '/functions/menus.php');
require_once(TEMPLATEPATH . '/functions/comments.php');

// ***********************************************************************//
// Optional
// ***********************************************************************//
// require_once (TEMPLATEPATH . '/functions/dev.php');
// require_once (TEMPLATEPATH . '/functions/image-filters.php');
require_once(TEMPLATEPATH . '/functions/excerpts.php');
require_once(TEMPLATEPATH . '/functions/widgets.php');
// require_once (TEMPLATEPATH . '/inc/mail/place-email.php');

// Includes from ajax_loader files
require_once(TEMPLATEPATH . '/inc/ajax-loader/gallery-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/stay-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/shop-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/eat-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/business-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/offers-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/latest-news-loader/ajax-post.php');
require_once(TEMPLATEPATH . '/inc/ajax-loader/things-to-do-loader/ajax-post.php');

// Register Custom Post Type
function custom_post_type_trainers()
{

	$labels = array(
		'name'                  => _x('Trainers', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Trainer', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Trainers', 'text_domain'),
		'name_admin_bar'        => __('Post Type', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Items', 'text_domain'),
		'add_new_item'          => __('Add New Item', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Item', 'text_domain'),
		'edit_item'             => __('Edit Item', 'text_domain'),
		'update_item'           => __('Update Item', 'text_domain'),
		'view_item'             => __('View Item', 'text_domain'),
		'view_items'            => __('View Items', 'text_domain'),
		'search_items'          => __('Search Item', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Post Type', 'text_domain'),
		'description'           => __('Post Type Description', 'text_domain'),
		'labels'                => $labels,
		'supports'      		=> array('title'),
		'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('post_type_trainers', $args);
}
add_action('init', 'custom_post_type_trainers');

/**
 * What's On post type
 */
function custom_post_type_whatson()
{

	$labels = array(
		'name'                  => _x('Whats On', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Whats On', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Whats On', 'text_domain'),
		'name_admin_bar'        => __('Post Type', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Items', 'text_domain'),
		'add_new_item'          => __('Add New Item', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Item', 'text_domain'),
		'edit_item'             => __('Edit Item', 'text_domain'),
		'update_item'           => __('Update Item', 'text_domain'),
		'view_item'             => __('View Item', 'text_domain'),
		'view_items'            => __('View Items', 'text_domain'),
		'search_items'          => __('Search Item', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Post Type', 'text_domain'),
		'description'           => __('Post Type Description', 'text_domain'),
		'labels'                => $labels,
		'supports'      		=> array('title', 'thumbnail', 'editor'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-calendar',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('whats-on', $args);
}
add_action('init', 'custom_post_type_whatson');

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

add_action('wp_ajax_add_event', 'add_event_ajax_handler');
add_action('wp_ajax_nopriv_add_event', 'add_event_ajax_handler');

function add_event_ajax_handler()
{

	$data = $_POST['formData'];
	$name = $_POST['eventname'];
	$datestart = $_POST['start-date'];
	$dateend = $_POST['end-date'];
	$location = $_POST['location'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$description = $_POST['description'];

	$uploadedfile = $_FILES['file'];
	$movefile = wp_handle_upload($uploadedfile, array('test_form' => false));

	if ($movefile && !isset($movefile['error'])) {
		echo "File is valid, and was successfully uploaded.\n";

		$file_name_and_location = $movefile["file"];
		$file_title_for_media_library = $name;

		$attachment = array(
			"post_mime_type" => $uploadedfile['type'],
			"post_title" => addslashes($file_title_for_media_library),
			"post_content" => "",
			"post_status" => "inherit",
			"post_author" => 1
		);

		if (!is_null($post)) {
			if (!is_numeric($post)) {
				$post = $post->ID;
			}

			$attachment['post_parent'] = $post;
		}

		require_once(ABSPATH . "wp-admin/includes/image.php");

		$id = wp_insert_attachment($attachment, $file_name_and_location);

		$attach_data = wp_generate_attachment_metadata($id, $file_name_and_location);
		wp_update_attachment_metadata($id, $attach_data);
	} else {
		/**
		 * Error generated by _wp_handle_upload()
		 * @see _wp_handle_upload() in wp-admin/includes/file.php
		 */
		echo $movefile['error'];
	}

	$postid = wp_insert_post(array(
		'post_type'		=> 'whats-on',
		'post_title' 	=> $name,
		'post_content'  => $description
	));

	if ($postid) {
		update_field('event_date', $datestart, $postid);
		update_field('event_date_end', $dateend, $postid);
		update_field('location_form', $location, $postid);
		update_field('phone_number', $phone, $postid);
		update_field('email', $email, $postid);
		update_field('website', $website, $postid);
		set_post_thumbnail($postid, $id);

		$to = 'nick.gordon@discovernewmarket.co.uk';
		$subject = 'New event submition';
		$message = 'A new event submition was made on Discover Newmarket website.';
		$headers = array('Content-Type: text/html; charset=UTF-8', 'From: Discover Newmarket <no-reply@iscovernewmarket.co.uk>');

		wp_mail($to, $subject, $message, $headers);
	} else {
		echo 'error';
	}

	exit;
}

// 984 pixels wide by 623 pixels tall, resize mode
add_image_size('featured-image-size', 492, 316, true);

// add excerpt field in whats'on post type
function wpcodex_add_excerpt_support_for_cpt()
{
	add_post_type_support('whats-on', 'excerpt');
}
add_action('init', 'wpcodex_add_excerpt_support_for_cpt');

