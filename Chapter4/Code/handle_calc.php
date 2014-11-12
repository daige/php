<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <title>统计</title>
</head>
<body>

<?php

$price    = $_POST["price"];
$quantity = $_POST["quantity"];
$discount = $_POST["discount"];
$tax      = $_POST["tax"];
$shipping = $_POST["shipping"];


$total = $price * $quantity;
$total = $total + $shipping;


?>