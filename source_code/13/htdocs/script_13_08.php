<?php // Script 13.8- view_quotes.php
/* This script lists every quote. */

// Include the header:
define('TITLE', 'View All Quotes');
include('templates/header.html');

print '<h2>All Quotes</h2>';

// Restrict access to administrators only:
if (!is_administrator()) {
	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>';
	include('templates/footer.html');
	exit();
}

// Need the database connection:
include('../mysql_connect.php');

// Define the query:
$query = 'SELECT quote_id, quote, source, favorite FROM quotes ORDER BY date_entered DESC';

// Run the query:
if ($result = mysql_query($query, $dbc)) {
	
	// Retrieve the returned records:
	while ($row = mysql_fetch_array($result)) {
		
		// Print the record:
		print "<div><blockquote>{$row['quote']}</blockquote>- {$row['source']}\n";
		
		// Is this a favorite?
		if ($row['favorite'] == 1) {
			print ' <strong>Favorite!</strong>';
		}
		
		// Add administrative links:
		print "<p><b>Quote Admin:</b> <a href=\"edit_quote.php?id={$row['quote_id']}\">Edit</a> <->
		<a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a></p></div>\n";
		
	} // End of while loop.

} else { // Query didn't run.
	print '<p class="error">Could not retrieve the data because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
} // End of query IF.

mysql_close($dbc); // Close the connection.

include('templates/footer.html'); // Include the footer.
?>