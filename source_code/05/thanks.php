<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Thanks!</title>
</head>
<body>
<?php // Script 5.6 - thanks.php
/* This is the page the user sees after clicking on the link in handle_post.php (Script 5.5).
This page receives name and email variables in the URL. */

// Address error management, if you want.

// Get the values from the $_GET array:
$name = $_GET['name'];
$email = $_GET['email'];

// Print a message:
print "<p>Thank you, $name. We will contact you at $email.</p>";

?>
</body>
</html>