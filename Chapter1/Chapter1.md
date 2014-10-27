##第1章 PHP概述

##HTML语法基础
本书使用XHTML，XHTM和HTML的区别有：
- 所有的标签都使用小写字母
- 嵌套标签必须有恰当的格式(必须就近匹配)
- 所有的标签属性值必须使用引号引起来
- 所有的标签必须关闭 
  有些HTML标签并不强制使用关闭标签，但是有效的XHTML标签，必须在末尾处添加一个空格和斜线以关闭它们 比如:`<img src="xx.xx" />`

##CSS基础
CSS是格式化HTML和XHTML内容的外观和行为  
在web页面加入CSS，有两种方法：
- style标签  
 `<style type="text/css">`  
  CSS规则  
  `</style>`
- 引用外部文件   
`<link href="style.css" rel="stylesheet" type="text/css" />`

CSS的规则可以应用于一般的页面元素，CSS类和特定元素  
- `img { border: 0px;}`  应用所有图片标签  
- `.error { color: red;}` class为error的元素  
- `#about {background-color: #ccc;}` id为about的特定元素

##PHP语法基础
PHP文档和HTML文档的区别：
- 后缀不一样 PHP文档为.php后缀
- 在PHP文档中，必须使用PHP，而且只有在`<?php ?>`中才能使用PHP
- PHP脚本必须运行在启动了PHP的web服务器上 所以PHP必须通过URL运行


##像浏览器发送文本
PHP最频繁的操作就是以文本和HTML标签的方式向浏览器发送信息  
`print "something";`  
print是一个语言结构，并不是函数，作用是输出数据  

    <html>
    <body>
    <?php
      echo "hello world";
    ?>
    </body>
    </html>

类似print功能的有echo结构和printf()函数  

##向浏览器发送HTML
使用PHP向浏览器发送HTML标签和其他数据：  
- `print "<b>hello\nworld!</b>";`  \n换行符 注意：只影响HTML源代码
- `print "<a href=\"page.php\">link</a>;` 对引号进行转义
- `print "<span style=\"font-weight:bold;\">hello</span>";`  输出CSS代码

注意，任何在PHP标签外的HTML都将自动发送到浏览器  


##调试PHP脚本
- 确认总是通过URL来运行PHP脚本
- 熟知运行的PHP版本
- 确保display_errors是开启状态
- 检查HTML源代码
- 相信错误消息
- 休息一下


