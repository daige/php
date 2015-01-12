##数据库介绍

##安全查询数据
PHP安全涉及很广，而其中的sql注入也需要很深入了解。具体的知识点，另外一本书《SQL注入攻击与防御》值得参考，这本书的读书笔记也在进行中，可以关注一下  

这里列举几个PHP关于安全查询的函数：

- mysql_real_escape_string 
  对任何可能危险的字符进行转义（在前面加一个反斜线）
- addslashes
- htmlentities  
- htmlspecialchars  
- strip_tags  除去字符串中所有的HTML，JS和PHP标签
- md5
- sha1
- intval 


##PHP操作mysql函数
- mysql_connect
- mysql_error
- mysql_select_db
- mysql_query
- mysql_fetch_array
- mysql_num_rows
- mysql_affected_rows
- mysql_close


