<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <title>Customize Your Settings </title>
</head>
<body>

<?php

  if(isset($_COOKIE['font_size']))
  {
  	 print "\t\tfont-size:" . htmlentities($_COOKIE['font_size']);
  }
   else
   {
   	  print "\t\tfont-size:medium";
   }
    
  if(isset($_COOKIE['font_color']))
  {
  	 print "\t\tfont-color:#" . htmlentities($_COOKIE['font_color']);
  }
  else
   {
   	  print "\t\tfont-color:#000";
   }
?>

</body>
</html>