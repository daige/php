<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Cost Calculator</title>
</head>
<body>
<?php // Script 10.4 - calculator.php
/* This script displays and handles an HTML form. 
It uses a function to calculate a total from a quantity and price. */

// This function performs the calculations.
function calculate_total ($quantity, $price) {

	$total = $quantity * $price; // Calculation
	$total = number_format ($total, 2); // Formatting
	
	return $total; // Return the value.

} // End of function.

// Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Check for values:
	if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {
	
		// Call the function and print the results:
		$total = calculate_total($_POST['quantity'], $_POST['price']);
		print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>.</p>";
		
	} else { // Inappropriate values entered.
		print '<p style="color: red;">Please enter a valid quantity and price!</p>';
	}
	
}
?>
<form action="calculator.php" method="post">
	<p>Quantity: <input type="text" name="quantity" size="3" /></p>
	<p>Price: <input type="text" name="price" size="5" /></p>
	<input type="submit" name="submit" value="Calculate!" />
</form>
</body>
</html>
