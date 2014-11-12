<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Register</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Register</h1>
<?php // Script 11.6 - register.php
/* This script registers a user by storing their information in a text file and creating a directory for them. */

// Identify the directory and file to use:
$dir = '../users/';
$file = $dir . 'users.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

	$problem = FALSE; // No problems so far.

	// Check for each value...
	if (empty($_POST['username'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a username!</p>';
	}	

	if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
	}

	if ($_POST['password1'] != $_POST['password2']) {
		$problem = TRUE;
		print '<p class="error">Your password did not match your confirmed password!</p>';
	} 
	
	if (!$problem) { // If there weren't any problems...
	
		if (is_writable($file)) { // Open the file.
			
			// Create the data to be written:
			$subdir = time() . rand(0, 4596);
			$data = $_POST['username'] . "\t" . md5(trim($_POST['password1'])) . "\t" . $subdir . PHP_EOL;

			// Write the data:
			file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
			
			// Create the directory:
			mkdir ($dir . $subdir);

			// Print a message:
			print '<p>You are now registered!</p>';
		
		} else { // Couldn't write to the file.
			print '<p class="error">You could not be registered due to a system error.</p>';
		}
		
	} else { // Forgot a field.
		print '<p class="error">Please go back and try again!</p>';	
	}

} else { // Display the form.

// Leave PHP and display the form:
?>

<form action="register.php" method="post">
	<p>Username: <input type="text" name="username" size="20" /></p>
	<p>Password: <input type="password" name="password1" size="20" /></p>
	<p>Confirm Password: <input type="password" name="password2" size="20" /></p>
	<input type="submit" name="submit" value="Register" />
</form>

<?php } // End of submission IF. ?>
</body>
</html>