<?php
/*
 * Create a custom login form anywhere in your theme.
 * The form takes 8 arguments:
 * $url - the url you want the form to redirect to (default: home_url())
 * $id - the custom id of the form (default: custom-login-form)
 * $username - the text for the username field (default: Username)
 * $password - the text for the password field (default: Password)
 * $rememberLabel - the text for the remember me checkbox (default: Remember Me)
 * $login - the text for the log in button (default: Log In)
 * $remember - whether or not to display the remember (default: false)
 * Text domain - for translating your site (default: text-domain)
 */
 
function custom_login_form($url, $id, $username, $password, $rememberLabel, $login, $remember = false, $textDomain = 'text-domain') {
	
	$newUrl           = $url; 
	$newId  	      = $id;
	$newUsername      = __( $username, $textDomain );
	$newPassword      = __( $password, $textDomain );
	$newRememberLabel = __( $rememberLabel, $textDomain );
	$newLogin         = __( $login, $textDomain );
	$newRemember      = $remember;
	
	$args = array(
    'redirect' 		 => $newUrl, 
    'form_id' 		 => $newId, 
    'label_username' => $newUsername, 
    'label_password' => $newPassword, 
    'label_remember' => $newRememberLabel, 
    'label_log_in'   => $newLogin, 
    'remember' 		 => $newRemember 
	);
 
	wp_login_form( $args ); // Displays the login.
}