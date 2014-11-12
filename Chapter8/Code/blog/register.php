<?php

define ("TITLE","用户注册");
include ("templates/header.html");

print "<h3>欢迎注册本网站</h3>";

print '<style type="text/css" media="screen">
       .error {color: red;}
       </style>';


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$problem = FALSE;

	if(empty($_POST['username']))
	{
		$problem = TRUE;
		print '<p>请输入你的名字</p>';

	}


	if(empty($_POST['username']))
	{
		$problem = TRUE;
		print '<p>请输入你的名字</p>';

	}


	if(empty($_POST['password1']))
	{
		$problem = TRUE;
		print '<p>请输入你的密码</p>';

	}

	if(empty($_POST['password2']))
	{
		$problem = TRUE;
		print '<p calss="error">请再次输入你的密码</p>';

	}

	if($_POST['password1'] != $_POST['password2'])
	{
		$problem = TRUE;
		print '<p calss="error">两次输入密码不匹配</p>';
	}

	if(empty($_POST['email']))
	{
		$problem = TRUE;
		print '<p>请输入你的email</p>';

	}

	if( !$problem )
	{
	   print '<p>注册成功</p>';
	   $_POST = array();	
	}
	else
	{
		print '<p class="error">请重新注册</p>';
	}

}

?>

<form action="register.php" method = "post">
<p>用户名:<input type="text" name="username" size ="20" 
            value="<?php if(isset($_POST['username'])) 
                         {print htmlspecialchars($_POST['username']);} 
                   ?>" />
</p>

<p>密码:<input type="password" name="password1" size ="20" 
            value="<?php if(isset($_POST['password1'])) 
                         {print htmlspecialchars($_POST['password1']);} 
                   ?>" />
</p>

<p>重复密码:<input type="password" name="password2" size ="20" />
</p>

<p>email:<input type="text" name="email" size ="20" 
            value="<?php if(isset($_POST['email'])) 
                         {print htmlspecialchars($_POST['email']);} 
                   ?>" />
</p>

<p><input type="submit" name="submit" value="提交注册" /> </p>

</form>

<?php include ("templates/footer.html"); ?>

