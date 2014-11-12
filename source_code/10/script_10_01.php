<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Date Menus</title>
</head>
<body>
<?php // Script 10.1 - menus.php 
/* This script defines and calls a function. */

// This function makes three pull-down menus for the months, days, and years.
function make_date_menus() {

	// Array to store the months:
	$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

	// Make the month pull-down menu:
	print '<select name="month">';
	foreach ($months as $key => $value) {
		print "\n<option value=\"$key\">$value</option>";
	}
	print '</select>';
	
	// Make the day pull-down menu:
	print '<select name="day">';
	for ($day = 1; $day <= 31; $day++) {
		print "\n<option value=\"$day\">$day</option>";
	}
	print '</select>';
	
	// Make the year pull-down menu:
	print '<select name="year">';
	$start_year = date('Y');
	for ($y = $start_year; $y <= ($start_year + 10); $y++) {
		print "\n<option value=\"$y\">$y</option>";
	}
	print '</select>';
	
} // End of make_date_menus() function.

// Make the form:
print '<form action="" method="post">';
make_date_menus();
print '</form>';

?>
</body>
</html>