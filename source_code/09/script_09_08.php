<?php // Script 9.8 - logout.php
/* This is the logout page. It destroys the session information. */

// Need the session:
session_start();

// Delete the session variable:
unset($_SESSION);

// Reset the session array:
$_SESSION = array();

// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.html');

?>

<h2>Welcome to the J.D. Salinger Fan Club!</h2>
<p>You are now logged out.</p>
<p>Thank you for using this site. We hope that you liked it.<br />
Blah, blah, blah...
Blah, blah, blah...</p>

<?php include('templates/footer.html'); ?>