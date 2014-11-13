<?php

  define("TITLE", "登录");
  include ("templates/header.html");

  print '<p>请输入用户名和密码用于登录</p>';

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
  	if(  (!empty($_POST['email'])) && (!empty($_POST['password'])) ) 
  	{
  		if( (strtolower($_POST['email']) == 'root@daige.me') && ($_POST['password'] == 'helloworld'))
  		{

        session_start();
        $_SESSION['email']= $_POST['email'];
        $_SESSION['loggedin']=time();

  			ob_end_clean(); //清空缓冲

  			header("Location:welcome.php");
  			exit();
  		}
  		else
  		{
  			print '<p>你输入的emai或者密码错误</p>';
  		}
  	}
  	else
  	{
  		print '<p>请重新登录</p>';
  	}

  }

  else
  {
	print '<form action="login.php" method="post">
	<p>用户名: <input type="text" name="email" size="20" /></p>
	<p>密码:   <input type="password" name="password" size="20"/></p>
	<p> <input type="submit" name="submit" value="登录" size="20"/></p>
	</form>';

  }

  include ("templates/footer.html");
?>

