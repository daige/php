<?php

if(isset($_COOKIE['user']))
{
	setcookie('user',FALSE,time()-300);
}

define('TITLE','退出');
include ('templates/header.html');

print '<p>你已经退出登录</p>';

include ('templates/footer.html');
?>