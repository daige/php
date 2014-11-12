##第5章 使用字符串

####连接字符串
在编程的时候，特定的字符串连接，使用运算符句点(.)  
`$greet="hello, " . "world!"; `  
也可使用：  
`$greeting="hello, "; $greeting .= "world!"`  

PHP在处理字符串变量的时候，使用变量替换他们的值：  
`$greeting="$s1$s2"`

####处理换行符
PHP中的nl2br()函数能够将换行符自动换为break标签  
比如：

    <p>备注：
        <textarea name="commit" rows="3" cols="30"></textarea>
    </p>
    //把textare中输入的换行符转为break
    print nl2br($_POST["commit"]);

####HTML和PHP
用户在表单中可以输入HTML字符，这样将对页面的格式产生影响，更糟糕的情况是可能引发安全方面的问题，所以有必要处理字符串变量中的HTML标签  
处理字符串中的HTML标签的函数有：
- htmlspecialchars() 将特定的HTML标签转换为实体版本 
- htmlentities() 
  将所有的HTML标签转换为实体版本 相反功能的函数为html_entity_decode
- strip_tags() 移除所有的HTML和PHP标签  
  如果还需要将换行符转为break标签，可以先使用strip_tags后再使用nl2br


`htmlspecialchars`和`htmlentities`会把HTML标签转义，比如：
输入`<script>alert(1)</script>`会得到`&lt;script&gt;alert(1)&lt;/script&gt;gt;`  
####字符串的编码和解码
在使用GET方法的时候，是把数据通过URL传递的，如果想在传递的数据中有多个词以及特殊的符号那就需要对数据进行编码
urlencode函数可以对一个字符串进行编码，使它能够完全适合URL的传输，它会用+号替换空格，并把特殊字符替换  

    <?php
         $name = "hello,world!\ndaige ";
         $name = urlencode($name);
         $uid="123456";
         $uid=urlencode($uid);
         print "Click <a href=\"name.php?name=$name&uid=$uid \">here</a> to continue";
    ?>

编码之后的URL为：

    name.php?name=hello%2Cworld%21%0Adaige+&uid=123456 

当我们点击此链接的后，我们并不需要使用urldecode函数来解码才能获取数据，因为PHP会自动解码  

字符串的加密和解密：  
PHP可以使用crypt函数来对数据进行加密，注意它是单向加密  
另外Mcrypt扩展中提供了一对加密解密函数：mcrypt_encrypt()和mcrypt_decrypt()  


####查找子字符串
PHP提供一些函数用来拆解，搜索和比较字符串  
- strtok
- substr
- strlen
- str_word_count  字符串的单词数量
- strcmp  不区分大小写 strcasecmp
- strnatcmp  不区分大小写 strnatcasecmp
- strstr 不区分大小写 stristr
- strpos  不区分大小写 stripos

####替换局部字符串
- str_ireplace 不区分大小写
- str_replace 区分大小写
- trim 移除字符串首尾的所有空白 rtrim 移除右边 ltrim移除左边
- ucfirst 第一个字母大写
- ucwords 每个单词第一个字母大写
- strtoupper 整个字符串大写
- strtolower  整个字符串小写


