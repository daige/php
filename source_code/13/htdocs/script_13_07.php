<?php // Script 13.7 - add_quote.php
/* This script adds a quote. */

// Define a page title and include the header:
define('TITLE', 'Add a Quote');
include('templates/header.html');

print '<h2>Add a Quotation</h2>';

// Restrict access to administrators only:
if (!is_administrator()) {
	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>';
	include('templates/footer.html');
	exit();
}

// Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

	if ( !empty($_POST['quote']) && !empty($_POST['source']) ) {

		// Need the database connection:
		include('../mysql_connect.php');

		// Prepare the values for storing:
		$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])), $dbc);
		$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])), $dbc);
		
		// Create the "favorite" value:
		if (isset($_POST['favorite'])) {
			$favorite = 1;
		} else {
			$favorite = 0;
		}
	
		$query = "INSERT INTO quotes (quote, source, favorite) VALUES ('$quote', '$source', $favorite)";
		$result = mysql_query($query, $dbc);
		
		if (mysql_affected_rows($dbc) == 1){
			// Print a message:
			print '<p>Your quotation has been stored.</p>';
		} else {
			print '<p class="error">Could not store the quote because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}
		
		// Close the connection:
		mysql_close($dbc);
		
	} else { // Failed to enter a quotation.
		print '<p class="error">Please enter a quotation and a source!</p>';
	}
	
} // End of submitted IF.

// Leave PHP and display the form:
?>

<form action="add_quote.php" method="post">
	<p><label>Quote <textarea name="quote" rows="5" cols="30"></textarea></label></p>
	<p><label>Source <input type="text" name="source" /></label></p>
	<p><label>Is this a favorite? <input type="checkbox" name="favorite" value="yes" /></label></p>
	<p><input type="submit" name="submit" value="Add This Quote!" /></p>
</form>

<?php include('templates/footer.html'); ?>