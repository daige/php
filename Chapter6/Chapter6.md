##第6章 控制结构

####验证函数
PHP验证表单的常用函数有：  
- empty 检验一个变量是否拥有0和空字符之外的其他值，没有返回TRUE
- isset 当变量拥有值(包括0，FALSE，空字符串)返回TRUE 避免引用不存在的变量
- is_numeric 检验变量是不是一个有效的数字类型 是返回TRUE 数字字符串有效

####switch语句
switch语句是替换很多的if-elseif-else的好办法  
注意switch语句中的case可以为字符串和数值，而且字符串是区分大小写的  

- break  退出当前结构 可以是switch if-else 或者循环 
- continue 终止当前的迭代 剩下的语句不执行 再次检查循环条件
- exit  终止PHP脚本 exit后面的php脚本将不会被执行
- die   die与exit相同


