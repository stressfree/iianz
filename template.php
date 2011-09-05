<?php 
function is_loggedin() {
	global $user;
	return (bool) $user->uid;
}
function has_username() {
	global $user;
	return (String) $user->name;
}
function has_userid() {
	global $user;
	return (String) $user->uid;
}
function is_administrator() {
	global $user;
	return (bool) in_array('administrator',$user->roles);
}

/**
* Customise the contact page
*/
function theme_contact_mail_page($form){
	$output = variable_get('contact_form_information', t('You can leave a message using the contact form below.'));  
	//NOTE this is not being filtered so we can include HTML in the contact form
	unset($form['contact_information']);
	$output .= drupal_render($form);
	return $output;
}

?>