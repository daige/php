<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php // Script 6.7 - handle_reg.php #6
/* This script receives seven values from register.html:
email, password, confirm, year, terms, color, submit */

// Address error management, if you want.

// Flag variable to track success:
$okay = TRUE;

// Validate the email address:
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = FALSE;
}

// Validate the password:
if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
}

// Check the two passwords for equality:
if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = FALSE;
}

// Validate the year:
if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {

	// Check that they were born before 2011.
	if ($_POST['year'] < 2011) {
		$age = 2011 - $_POST['year']; // Calculate age this year.
	} else {
		print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
		$okay = FALSE;
	} // End of 2nd conditional.
	
} else { // Else for 1st conditional.

	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;

} // End of 1st conditional.

// Validate the terms:
if ( !isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;	
}

// Validate the color:
if ($_POST['color'] == 'red') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'yellow') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'green') {
	$color_type = 'secondary';
} elseif ($_POST['color'] == 'blue') {
	$color_type = 'primary';
} else { // Problem!
	print '<p class="error">Please select your favorite color.</p>';
	$okay = FALSE;
}

// If there were no errors, print a success message:
if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color is a $color_type color.</p>";
}
?>
</body>
</html>