##第10章 创建函数

####global
global声明就是：希望函数内的变量能够指向函数外具有相同名称的变量  
global就是把局部变量变成全局变量

    function name($args)
    {
        global $var; //转变为全局变量
        statement(s); 
    }

####函数返回多个值
PHP通过数组返回对个值

    function some_function($a1,$a2)
    {
        //something
        return array($v1,$v2);
    }

调用的时候，使用list函数来接受变量:

    list($var1,$var2) = some_function($p1,$p2)


