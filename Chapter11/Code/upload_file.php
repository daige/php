<html>
<head>
	<title> Upload a file</title>
</head>

<body>
	
<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$dest = "D:\upload\\" . $_FILES['the_file']['name'];
		if( move_uploaded_file($_FILES['the_file']['tmp_name'], $dest))
		{
			print '<p>上传成功！</p>';
		}
		else
		{
			print '<p>上传文件失败!</p>';
			switch ($_FILES['the_file']['error']) 
			{
				case 1:
					print '文件超过最大文件大小,请修改PHP.ini';
					break;
				case 2:
					print '文件超过了最大文件大小，请修改HTML 代码';
					break;
				case 3:
					print '文件只上传了一部分';
					break;
				case 4:
					print '没有文件上传';
					break;	
				case 6:
				    print '临时文件不存在';
				    break;
				default:
					print '发生错误';
					break;
			}
		}
	}			
?>


<form action="upload_file.php" enctype="multipart/form-data" method="post"> 
<p>上传文件:</p>
<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
<p><input type="file" name="the_file" /></p>
<p><input type="submit" name="submit" value="Upload the file" /></p>
</form>


</body>
</html>