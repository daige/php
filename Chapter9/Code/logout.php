<?php

   session_start();

   unset($_SESSION);

   $_SESSION = array();

   include ('templates/header.html');
?>

<p>已注销</p>

<?php
   
   include ("templates/footer.html");
?>