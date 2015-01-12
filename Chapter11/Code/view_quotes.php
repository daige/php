<html>
<body>
	<h1> Random quotation</h1>

<?php


$data = file('D:\xampp\htdocs\quotes.txt');

$n = count($data);

$rand = rand(0,($n-1));

print '<p>' .trim($data[$rand]) . '</p>';


?>

</body>
</html>