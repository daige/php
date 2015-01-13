<?php

define('TITLE','编辑Quote');
include('templates/header.html');

print '<h2>编辑Quote</h2>';


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
			print '<form action="edit_quote.php" method="post">
				<p><label>Quote<textarea name="quote" rows="5" cols="30">' . 
				htmlentities($row['quote']) . '</textarea></label></p>
				<p><label>source<input type="text" name="source" value="' . 
				htmlentities($row['source']) . '" /></label></p>
				<p><label>Is this a favorite?<input type="checkbox" name="favorite" value="yes"';

			if($row['favorite'] == 1)
			{
				print 'checked="checked"';
			}

			print '/></label></p>
				<input type="hidden" name="id" value="' . $_GET['id'] . '"/>
				<p><input type="submit" name="submit" value="Update this quote!" /></p></form>';	
		}
		else
		{
			print '<p class="error">不能查询到数据，因为：<br/>' . mysql_error($dbc) . '</p><p>SQL语句为：'
			       . $query . '</p>';
		}
	}
	elseif( isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0))
	{
			$problem = FALSE;
			if( !empty($_POST['quote']) && !empty($_POST['source']))
			{

				$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])));
				$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])));

				if(isset($_POST['favorite']) == 1)
				{
					$favorite = 1;
				}
				else
				{
					$favorite = 0;
				}
			}
			else
			{
				print '<p class="error">请提交完整</p>';
				$problem = TRUE;
			}

			if(!$problem)
			{
				$query = "update quotes set quote='$quote',source='$source',favorite=$favorite
						  where quote_id ={$_POST['id']}";

				if($r = mysql_query($query,$dbc))
				{
					print '<p>Quote 已经更新</p>';
				}
				else
				{
					print '<p class="error">更新数据失败，因为：<br/>' . mysql_error($dbc) . '</p><p>SQL语句为：'
					       . $query . '</p>';
				}
			}
	
	}	
	else
	{
		print '<p class="error">无法获取ID</p>';
	}

	mysql_close($dbc);

	include('templates/footer.html');

?>