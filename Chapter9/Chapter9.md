##第9章 cookie和session

####创建cookie
cookie必须在发送其他任何信息之前从服务器发送到客户端,如果使用缓冲可在任何位置 
setcookie函数发送cookie用法：  
`setcookie(name,value);`  

####读取cookie
函数setcookie将cookie数据存放在数组$_COOKIE中  
`$_COOKIE['name']`  

####添加cookie参数
setcookie函数可以接受5个参数：
`setcookie(name,value,expiration,path,domain,secure,httponly);`
- name 
- value
- expiration 指定cookie过期时间 没有设置则为session(浏览器)关闭为止
- path  指定web站点特定文件夹特定域的cookie 
- domain  指定子域cookie
- secure  指定cookie应当通过HTTPS连接传送 1为必须使用安全连接
- httponly  限制对cookie的访问  防止xss的利器 

####删除cookie

通常cookie会在用户浏览关闭或者过期时间到了之后自动过期，但是我们还是需要手动删除它  

删除cookie有两种方法：  
- `setcookie(name,''); or setcookie(name,FALSE);` 把值设为空
- `setcookie(name,FALSE,time() - 600); ` 把过期时间设为过去


####什么是session
session是一种解决方案，解决的问题是它可以跟踪用户在一系列页面访问的数据  
session和cookie的区别：
- cookie存储在客户端，session存储在服务器端
- session通常更安全，数据不会在客户端和服务器端来回传输
- session能够存储比cookie更多的东西
- session可以在用户不接受他们浏览器中的cookie时工作
- cookie更加容易创建和检索
- cookie对服务器造成的压力更少
- cookie能够持续更长的时间

####创建session
使用session_start函数创建，访问或者删除session  
这个函数在首次启动时，会发送一个cookie，所以必须在任何HTML发送给浏览器之前调用，在使用session的页面中，脚本必须起始行调用session_start函数  

在第一次开启session时，会产生一个随机的session ID，并向浏览器发送一个名为
PHPSESSID的cookie  

启用session，向数组$_SESSION赋值的形式为：  
`$_SESSION['username']= 'daige';`  

函数session_name函数可以修改session的名称来替代PHPSESSI，而且应该在调用session_start函数之前使用  

函数session_set_cookie_params函数用来修改session cookie的设置


####访问session变量
创建或者访问一个存在的session，都必须从session_start函数开始 
访问变量和普通数组一样，如`$_SESSION['mail'];`  

- isset($_SESSION['var'])可以查看特定的session值是否存在
- session中的数据都是以纯文本的方式保存在一个可读可写的文本文件中，不要在session中存放敏感的数据
- 为了提高安全性，session可以加密存储，读取session时解密

####删除session
session的数据在两个地方存在，所以需要在两个地方进行删除操作  
必须从session_start函数开始，然后设置$_SESSION数组来删除session值  
`$_SESSION = array();` 最后在服务器上删除session数据`session_destroy();`  




