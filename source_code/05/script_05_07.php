<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.7 - handle_post.php #6
/* This script receives five values from posting.html:
first_name, last_name, email, posting, submit */

// Address error management, if you want.

// Get the values from the $_POST array.
// Strip away extra spaces using trim():
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim($_POST['posting']);

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Get a word count:
$words = str_word_count($posting);

// Take out the bad words:
$posting = str_ireplace('badword', 'XXXXX', $posting);

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>$posting</p>
<p>($words words)</p></div>";

?>
</body>
</html>