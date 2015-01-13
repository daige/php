<?php

define('TITLE', '增加Quote');
include ('templates/header.html');

print '<h2>增加一个Quote</h2>';


if(!is_administrator())
{
	print '<h2>访问被拒绝</h2><p>你没有访问权限</p>';
	include('templates/footer.html');
	exit();
}

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{

	if(!empty($_POST['quote']) && !empty($_POST['source']))
	{
		include('includes/mysql_connect.php');


	$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])),$dbc);
	$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])),$dbc);

	if(isset($_POST['favorite']))
	{
		$favorite = 1;
	}
	else
	{
		$favorite = 0;
	}


	$query = "insert into quotes(quote,source,favorite) values('$quote','$source',$favorite)";
	$r = mysql_query($query,$dbc);


	if(mysql_affected_rows($dbc) == 1)
	{
		print '<p>你的Quote已经存储</p>';
	}
	else
	{
		print '<p class= "error">无法存储此Quotes:<br/>' . mysql_error($dbc) . '</p>查询语句：' . $query . '</p>';
	}

	mysql_close($dbc);
  }
  else
  {
  	print '<p class="error">请填写Quotation和Source</p>';
  }

}

?>

<form action="add_quote.php" method="post">
  <p><label>Quote <textarea name="quote" rows="5" cols="30"></textarea></label></p>
  <p><label>Source <input type="text" name="source"></label></p>
  <p><label>Is this a favorite?<input type="checkbox" name="favorite" value="yes"></label></p>
  <p><input type="submit" name="submit" value="Add this quote!"></p>
 </form>

 <?php 
 	include('templates/footer.html');
 ?>




