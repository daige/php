##第2章 变量
####预定义的变量
PHP中的变量是临时的，只存在于脚本执行期间  
预定义的变量是不需创建就可以使用，因为PHP已经完成创建工作  

print_r()函数可以显示变量值  

打印PHP预定义的变量： 

        <?php
            print_r($_SERVER);
        ?>

`$_SERVER` 这个预定义的变量包含了服务器的所有数据  

例如：

    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.101 Safari/537.36
    [SERVER_SOFTWARE] => Apache/2.4.9 (Win32) OpenSSL/1.0.1g PHP/5.5.11


####变量命名
注意：PHP的变量区分大小写  
变量命名建议：
- 变量名全部用小写字母
- 让变量名具有意义
- 使用注释说明变量用途
- 保持一致的命名规则


####变量类型
- 字符串  
 "1990" 字符串型的整型在进行数学运算时会被当成数值型  
- 数组  
  PHP的数组有两种类型：索引数组和关联数组  
  索引数组：使用数组作为键  
  关联数组：使用字符串作为键

print不能打印非单值的类型，数组和对象需要使用print_r打印值  

####理解引号
- 单引号 单引号的内容将照字面意思进行处理
- 双引号 双引号引用的内容需要进行推断 双引号里面的变量将被值代替  

<pre><code>  
$str = '1990'; //这里可以使用双引号
print '$str'; //$str 单引号 字面值
print "\n"; //转义字符 必须双引号
print "$str+10";//1990+10 双引号 变量被值替换
</code></pre>
