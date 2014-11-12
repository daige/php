<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Registration Form</title>
</head>
<body>
<!-- Script 6.9 - register.php -->
<div><p>Please complete this form to register:</p>

<form action="handle_reg.php" method="post">

	<p>Email Address: <input type="text" name="email" size="30" /></p>

	<p>Password: <input type="password" name="password" size="20" /></p>
	
	<p>Confirm Password: <input type="password" name="confirm" size="20" /></p>

	<p>Date Of Birth: 
	<select name="month">
	<option value="">Month</option>
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
	</select>
	<select name="day">
	<option value="">Day</option>
	<?php // Print out 31 days:
	for ($i = 1; $i <= 31; $i++) {
		print "<option value=\"$i\">$i</option>\n";
	}
	?>
	</select>
	<input type="text" name="year" value="YYYY" size="4" /></p>
	
	<p>Favorite Color: 
	<select name="color">
	<option value="">Pick One</option>
	<option value="red">Red</option>
	<option value="yellow">Yellow</option>
	<option value="green">Green</option>
	<option value="blue">Blue</option>
	</select></p>

	<p><input type="checkbox" name="terms" value="Yes" /> I agree to the terms (whatever they may be).</p>

	<input type="submit" name="submit" value="Register" />

</form>

</div>
</body>
</html>