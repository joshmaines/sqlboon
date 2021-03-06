<?php

if (!defined('IN_BOON')) {
	header('HTTP/1.1 404 Not Found', 404);
	return;
}

//insert code to check for logged in session
//return false if not logged in
function isLoggedIn() {
	global $settings;
	//If login system is disabled (false), always return true no matter what.  This is useful when testing and during development.
	if ($settings['loginsystem'] == false) {
		return true;
	} else {
		if ($_SESSION['is_logged_in'] == true) {
			return true;
		} else {
			return false;
		}
	}
}

function showLoginForm() {
	//include the login form's view file.
}

// Do not include end cap.  Do not end PHP code.  This could cause header errors.
