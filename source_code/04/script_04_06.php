<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Lucky Numbers</title>
</head>
<body>
<?php // Script 4.6 - random.php
/* This script generates 3 random numbers. */

// Address error handling, if you want.

// Create three random numbers:
$n1 = rand (1, 99);
$n2 = rand (1, 99);
$n3 = rand (1, 99);

// Print out the numbers:
print "<p>Your lucky numbers are:<br />
$n1<br />
$n2<br />
$n3</p>";

?>
</body>
</html>