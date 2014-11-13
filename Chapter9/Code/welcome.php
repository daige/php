<?php

session_start();


define("TITLE", "欢迎daige");

include ("templates/header.html");

print '<p>hello，' . $_SESSION['email'] . '!</p>';


date_default_timezone_set("Asia/Shanghai");

print '<p>你于'. date('g:i a',$_SESSION['loggedin']) . '登录到系统</p>';

?>

<h2>daige已经登录</h2>

<?php
  
  print '<p><a href="logout.php">注销登录</a></p>';

  include ("templates/footer.html");
?>

