<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title>Predefined Variables</title> 
</head> 
<body>
<pre>
<?php
	 $name = "hello,world!\ndaige ";
	 $name = urlencode($name);

	 $uid="123456";
	 $uid=urlencode($uid);
	  
	  print "Click <a href=\"name.php?name=$name&uid=$uid \">here</a> to continue";

?>
</pre>
</body>
</html>
