<?php

function is_administrator($name='user',$value='root')
{
	if( isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value) )
	{
		return true;
	}
	else
	{
		return false;
	}
}


?>