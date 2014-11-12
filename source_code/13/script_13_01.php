<?php // Script 13.1 - mysql_connect.php
/* This script connects to and selects the database. */

// Connect:
$dbc = mysql_connect('localhost', 'username', 'password');

// Select:
mysql_select_db('myquotes', $dbc);

?>