<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Greetings!</title>
</head>
<body>
<?php // Script 3.7 - hello.php 

ini_set ('display_errors', 1); // Let me learn from my mistakes!
error_reporting (E_ALL | E_STRICT); // Show all possible problems!

// This page should receive a name value in the URL.

// Say "Hello":
$name = $_GET['name'];
print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>!</p>";

?>
</body>
</html>