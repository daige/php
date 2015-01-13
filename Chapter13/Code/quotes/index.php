<?php

	include('templates/header.html');
	include('includes/mysql_connect.php');


	if(isset($_GET['random']))
	{
	   $query = 'select quote_id,quote,source,favorite from quotes order by rand() desc limit 1';	
	}
	elseif(isset($_GET['favorite']) )
	{
		$query = 'select quote_id,quote,source,favorite from quotes where favorite=1 order by rand() desc limit 1';
	}
	else
	{
		$query = 'select quote_id,quote,source,favorite from quotes order by date_entered desc limit 1';
	} 


	if($r = mysql_query($query,$dbc))
	{
		$row = mysql_fetch_array($r);

		print "<div><blockquote>{$row['quote']}</blockquote>
				{$row['source']}";

		if($row['favorite'] == 1)
		{
			print '<strong>Favorite</strong>';
		}

		print '</div>';


		if( is_administrator())
		{
			print "<p><b>Quote管理:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">
					编辑</a>
					<a href=\"delete_quote.php?id={$row['quote_id']}\">删除</a></p></div>\n";
		}
		else
		{
			print '<p class="error">不能查询到数据，因为：<br/>' . mysql_error($dbc) . '</p><p>SQL语句为：'
			       . $query . '</p>';
		}
	}


	mysql_close($dbc);

	 print '<p><a href="index.php">Latest</a> <-> <a href="index.php?random=true">
 Random</a> <-> <a href="index.php?favorite=true">Favorite</a><p>';


	include("templates/footer.html");

?>