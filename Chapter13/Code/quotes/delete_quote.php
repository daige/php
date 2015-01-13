<?php

define('TITLE','删除Quote');
include('templates/header.html');

print '<h2>删除Quote</h2>';


	if(!is_administrator())
	{
		print '<h2>访问被拒绝</h2><p>你没有访问权限</p>';
		include('templates/footer.html');
		exit();
	}


	include('includes/mysql_connect.php');

	if( isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) )
	{
		$query = "select quote,source,favorite from quotes where quote_id={$_GET['id']}";

		if($r = mysql_query($query,$dbc))
		{

			$row = mysql_fetch_array($r);
			print '<form action="delete_quote.php" method="post">
					<p>你想删除此Quote？</p>
					<div><blockquote>' . $row['quote'] . '</blockquote>' . $row['source'];

			if($row['favorite'] == 1)
			{
				print '<strong>Favorite</strong>';
			}

			print '</div><br/>
				<input type="hidden" name="id" value="' . $_GET['id'] . '"/>
				<p><input type="submit" name="submit" value="delete this quote!" /></p></form>';	
		}
		
	}
	elseif( isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0))
	{
			
	  $query = "delete from quotes where quote_id={$_POST['id']} limit 1";
	  $r = mysql_query($query,$dbc);

	  if( mysql_affected_rows($dbc) == 1)
	  {
	  	print '<p>已经成功删除</p>';
	  }
	  else
	  {
		print '<p class="error">不能查询到数据，因为：<br/>' . mysql_error($dbc) . '</p><p>SQL语句为：'
			       . $query . '</p>';
	  }
	}	
	else
	{
		print '<p class="error">无法获取ID</p>';
	}

	mysql_close($dbc);

	include('templates/footer.html');

?>