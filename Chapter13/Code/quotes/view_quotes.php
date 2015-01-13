<?php
	
	define('TITLE','查看所有Quotes');
	include('templates/header.html');

	print '<h2>所有的Quotes</h2>';


	if(!is_administrator())
	{
		print '<h2>访问被拒绝</h2><p>你没有访问权限</p>';
		include('templates/footer.html');
		exit();
	}


	include('includes/mysql_connect.php');

	$query ='select quote_id,quote,source,favorite from quotes order by date_entered DESC';
	
	if($r = mysql_query($query,$dbc))
	{
		while($row = mysql_fetch_array($r))
		{
			print "<div><blockquote>{$row['quote']}</blockquote>{$row['source']}\n";

			if($row['favorite'] == 1)
			{
				print '<strong>Favorite!</strong>';
			}

			print "<p><b>Quote管理:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">
					编辑</a>
					<a href=\"delete_quote.php?id={$row['quote_id']}\">删除</a></p></div>\n";
		}
	}
	else
	{
		print '<p class="error">不能删除数据，因为：<br/>' . mysql_error($dbc) . '</p><p>SQL语句为：'
		       . $query . '</p>';
	}


	mysql_close($dbc);

	include('templates/footer.html');

?>