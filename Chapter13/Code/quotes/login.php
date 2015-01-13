<?php

  $loggedin = false;
  $error = false;


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  	if(!empty($_POST['email']) && !empty($_POST['password']))
  	{
  		if(  (strtolower($_POST['email']) == 'root@root.com') && ($_POST['password'] == 'root') )
  		{
  			setcookie('user','root',time()+3600);
  			$loggedin = true;
  		}
  		else
  		{
  			$error = "用户名或密码错误，请重新登录";
  		}
  	}
  	else
  	{
  		$error = "请完成登录表单";
  	}
  }


  define('TITLE', '登录');

  include('templates/header.html');

  if($error)
  {
  	print '<p class="error">' . $error . '</p>';
  }


  if($loggedin)
  {
  	 print '<p>你已经登录!</p>';
  }
  else
  {
  	 print '<h2>登录框</h2>
  	 <form action="login.php" method="post">
  	 <p><label>用户名:<input type="text" name="email" /></label></p>
  	 <p><label>密  码:<input type="password" name="password" /></label></p>
  	 <p><input type="submit" name="submit" value="登录" /></p>
     </form>';

  }

  include('templates/footer.html');

?>