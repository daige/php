##第3章 HTML表单和PHP

####简单的表单
HTML中的创建表单使用form标签  
form标签有一个action属性，用来指明将表单数据提交到哪个页面  
`<form action="handle_form.php">` 提交的页面文件需要指定路径  

form中还需要执行method属性，它是告诉服务器如何将数据传送到处理的脚本  
`<form action="handle_form.php" method="get">`

####GET和POST的区别
- GET方式，传送的信息量有限，而且是以公开的方式在URL中传送，GET方式的可以添加书签，因为URL中带有信息，一般从服务器请求信息用GET，
- POST方式，传送的信息可以很多，不公开，但是不能设书签一般用在触发基于服务器的行为，如提交数据等场景
在表单中，一般使用POST

####使用PHP接收表单数据
PHP处理表单数据引用的特定变量可能是`$_GET`或者`$_POST`，如果你使用GET方式传送数
据那么数据就存储在`$_GET`中，POST方式就存储在`$_POST`中  

注意：`$_GET`和`$_POST` 是预定义变量，也是数组，也是一种特殊的变量类型  

访问数组需要使用索引或者键  

比如：
`print $_POST['hello']` 但是需要注意的是，在下面情况中会出现解析错误：
`print "$_POST['hello'],world"`  双引号中，无法解析$_POST数据,需要使用变量  

如果想向PHP脚本传递预设值，可以在HTML表单中使用文本输入框的隐藏类型，例如：  
`<input type="hidden" name="page" value="feedback.html" />`  

关于Magic Quote：Magic Quote是一个过时的特性，如果你提交的表单数据对单引号双引号会被自动的转义处理，那么Magic Quote就是开启状态  


####显示错误
开启错误显示：  
- 开启display_errors 开发网站时，首选
- 为某个单独的脚本开始display_errors设置  
  在脚本中包含代码：`ini_set('display_errors',1);`  使用ini_set可以覆盖PHP配置
  文件中的设置，1表示开启。注意：这种方法的不足之处是如果脚本发生特定类型错误，这行代码不执行，会显示空白页  
  注意：运行脚本时如果看到空白页，也需要检查HTML代码


####错误报告
PHP有11种不同的错误，常见的4中错误类型有：  
- 通知  非致命性的错误
- 警告  非致命性错误 通常表明有问题存在
- 解析错误  由语法错误导致的致命性错误
- 错误  一般性的致命错误

两种设置PHP报告错误的方法：
- 在PHP配置文件中调整error_reporting()级别
- 在脚本中使用error_reporting()函数来调整级别  
  通常设置`error_reporting(E_ALL | E_STRICT);`来开发和测试PHP脚本  


####向页面手动发送数据
手动发送数据，可以通过生成URL链接，靠点击来使用$_GET传递数据  
比如：
`<a href="handle_form.php?test=daige">daige</a>`  
这种方式不推荐使用  
