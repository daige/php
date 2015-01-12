## 第11章  文件和目录

##文件权限
在PHP脚本得到通过Web服务器运行时，会视为一个不同的服务器用户，然后PHP和web服务器都能够读取上传的文件，但是PHP无法修改这些文件

Web浏览器可以访问Web根目录及其子目录的所有文件，但是不能访问Web根目录外面的目录
所以，在创建可写和目录的时候，放在Web根目录之外更安全


##写入文件
PHP5中的函数：

    file_put_contents($file, $data, FILE_APPEND)
    //打开文件并写入数据，向文件追加数据

    file_put_contents($file, $_POST['quote'] . PHP_EOL,FILE_APPEND);
    //PHP_EOL是表示当前操作系统的换行符


如果不是PHP5，则需要使用旧的方法：

    $fp = fopen($file, mode);
    fwrite($fp, $data . PHP_EOL);
    fclose($fp);


在向文件或者目录写入数据的时候，需要调用is_writable来避免权限错误

    if( is_writable($file))
    //返回布尔值 表示指定文件是否可以被写入


##锁定文件
当多个PHP脚本试图同一时刻写入一个文件时，就会出现问题
在PHP5.1以上版本可以这样：

     file_put_contents($file, $data, FILE_APPEND | LOCK_EX)
     //LOCK_EX 是表示暂时锁定该文件

在早期的PHP版本中，需要使用:

    flock($fp,locktype)
    //LOCK_SH  读取共享锁
      LOCK_EX  写入独享锁
      LOCK_UN  释放一个锁
      LOCL_NB  非阻塞锁

在fclose的时候，文件会自动解锁，最好在写入完成的时候加上解锁的语句


##读取文件
- file_get_contents 所有内容读到一个字符串中
- file    每行一些数据  读取之后放在一个数组中
- fgets   返回具有指定长度的字符串

fgets和C语法一样：

    $fp = fopen($file, 'rb');
    while (!feof($fp))
    {
       $string = fgets($fp, 1024); //返回1023字节数据
    }
    fclose ($fp);



##处理文件上传
处理文件上传必须：
1. 初始form标签时必须包含代码enctype="multipart/form-data"，表单必须使用POST
2. 必须添加一个特殊的隐藏输入框 用来建议浏览器最大能够上传的文件大小
3. 使用file元素创建所需要的表单字段

在PHP中，$_FILES变量包含5个元素：
- name 文件名
- type  MIME类型
- size   文件大小（字节）
- tmp_name  文件存放在服务器上的临时文件名
- error  如果发生错误，保存的错误代码
- 

从安全角度，最好重命名上传的文件，要完成这一任务，需要设计一个系统，能
够生成一个新的唯一的文件名，并在一个文本文件或数据库中同时保存原始文件名和新
文件名











