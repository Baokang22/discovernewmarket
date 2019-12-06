<?php
// add_action( 'init', 'create_new_member', 95 );
function create_new_member() {
	if (isset($_POST['sign-up-register'])):
		// ***********************************************************************//
		// Gather inputted data from the form
		// ***********************************************************************//
		$name          = sanitize_text_field($_POST['name']);
		$enquiry          = sanitize_text_field($_POST['enquiry']);
		$email              = sanitize_email($_POST['email-address']);
		// ***********************************************************************//
		// Check if there is an associated account (against email address)
		// ***********************************************************************//

		if( email_exists( $email )) :
			$GLOBALS ['notifications'] .= 'This email address appears to already be associated with an account. Please try <a href="' . wp_login_url() . '">logging in</a>';
		else:

		// ***********************************************************************//
		// Create the Account
		// ***********************************************************************//

		// $userdata = array(
		// 	'user_email' => $email,
		// 	'user_login' => $username,
		// 	'role'		 => 'author'
		// 	);
		// $user_id = wp_insert_user( $userdata ) ;

		// ***********************************************************************//
		// Log in user to the new account
		// ***********************************************************************//
		// $secure_cookie = is_ssl() ? true : false;
		// wp_set_auth_cookie( $user_id, true, $secure_cookie );
		// ***********************************************************************//
		// Send out an email
		// ***********************************************************************//
		$to = $email;
		$subject = "New Enquiry from $name";
		// $email_body = file_get_contents(TEMPLATEPATH . '/emails/email-template.html');
		$email_title = "New enquiry from: $name";
		// $email_content = '<a href="' . wp_lostpassword_url( home_url() ) .  '">Please click here to generate your login password.</a>';
		// $email_disclaimer = 'Disclaimer Content';
		// $email_body = str_replace('{{email_title}}', $email_title, $email_body);
		$email_title = "New enquiry from: $name <br> Email Address: $email <br> Enquiry: $";
		// $email_body = str_replace('{{email_content}}', $email_content, $email_body);
		// $email_body = str_replace('{{disclaimer}}', $email_disclaimer, $email_body);
		// $email_body = str_replace('src="images', 'src="' . get_template_directory_uri() . '/emails/images', $email_body);
		$headers = array('Content-Type: text/html; charset=UTF-8');
		//Sendgrid key for reference: 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
		wp_mail( $to, $subject, $email_body, $headers );
		// ***********************************************************************//
		// Redirect to the account page
		// ***********************************************************************//

		wp_redirect( get_post_permalink($user_post_id) );
		exit;
		endif;
		endif;

		// ***********************************************************************//
		// AJAX Check if email Address already exists
		// ***********************************************************************//
		add_action( 'wp_ajax_existing_email_check', 'existing_email_check_callback' );
		add_action( 'wp_ajax_nopriv_existing_email_check', 'existing_email_check_callback' );
		function existing_email_check_callback() {
		$email  = sanitize_text_field($_POST['email']);
		if( email_exists( $email )) :
			echo 'email_exist';
		else:
			echo 'email_doesnt_exist';
		endif;
		die();
	}
}