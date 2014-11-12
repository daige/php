<?php // Script 9.4 - reset.php

// Delete the cookies:
setcookie('font_size', '', time() -  600, '/');
setcookie('font_color', '', time() - 600, '/');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Reset Your Settings</title>
</head>
<body>

<p>Your settings have been reset! Click <a href="view_settings.php">here</a> to go back to the main page.</p>

</body>
</html>