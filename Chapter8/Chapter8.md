##第8章 创建Web应用程序

####创建模板
在复杂的Web站点中，有一些特性会在站点的每个页面都用到，我们就可以将这些元素放在一个独立的页面。  
创建模板可以将重复的内容和特定的页面的素材分开  
比如：WP中分为header,sidebar footer等模块

####使用外部文件
- include  包含文件 如果include失败，PHP会继续运行
- require  包含文件 如果require失败，PHP会终止脚本执行

`include ("test.html"); ` 或者 `include "test.html";`  

####使用常量
- define() 函数定义并赋值常量
`define ('CONSTANT_NAME',value)`  常量名需全部大写  
常量的引用很简单，直接 `print CONSTANT_NAME` 但是在单引号和双引号里面的常量就无法打印  

- defined() 函数 如果提交的常量已经定义，返回TRUE  

####使用日期和时间
- date  返回格式化的日期和时间
- time   返回当前时刻的时间戳
- mktime  返回给定时间和日期的时间戳
- date_default_timezone_set  设置时区

####输出缓冲
某些函数，只能在没有任何东西被发送到浏览器之前调用，比如header(),setcookie() 和session_start(),如果在Web浏览器已经收到了一些文本、HTML或哪怕是一个空格之后
调用这些函数，就会得到一个恼人的HTTP头已发送错误消息，这个时候采用输出缓冲可以解决这个问题  

利用输出缓冲， HTML和打印的数据将被放到缓冲中。当脚本执行结束后，缓冲将被发送到Web浏览器，或者如果需要的话，缓冲可以清空而不发送到Web浏览器  

启用输出缓冲： 在页面顶端使用ob_start函数，在结尾调用ob_end_flush函数会将缓冲发送到Web服务器，调用ob_end_clean函数会删除缓冲的数据而不进行传输  

缓冲区的大小可以在php.ini文件中设置，默认值为4096字节
- ob_get_length  返回缓冲内容长度
- ob_get_contents 返回缓冲区内容
- ob_flush 将当前缓冲区内容发送到web浏览器并刷新缓冲区
- ob_clean  删除缓冲区的当前内容


####处理HTTP头
web服务器通常需要用其他方式与客户端通信，这些通信需要用HTTP头实现  
下面介绍用header函数重定向页面：
使用PHP重定向浏览器，需要发送一个location头：  
`header("Location: page.php")`  通常后面会跟`exit();` 取消当前脚本执行  

