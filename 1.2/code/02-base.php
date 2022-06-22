<?php

    // echo 'hello';

    //设置编码格式
    header('content-type:text/html; charset=utf-8');

    // php里面声明变量要使用$符号
    // 注意点1：php里面每一句代码后面必须都要加分号
    // $name = '缪飞';
    
    //字符串拼接，要求使用点.
    // echo '我的是名字是: '.$name;

    //注意点2：php里面双引号可以解析变量，而单引号无法解析变量的
    // echo "我的是名字是: $name";

    // echo $name;

    
    // $a = 'hello';
    // $A = 20;
    // echo $a;

    //注意点3：php里面不区分大小写
    // function sayHello () {
    //     echo "大家好";
    // }
    // sayHello();
    // sayhello();
    // SAYHELLO();
    
    // function miaoFei($name='hello'){
    //     echo "我的名字是: $name";
    // }
    // miaoFei()

    //注意点4：php里面的布尔值，true输出的结果是1，false不输出（空白）
    // $bool = true;
    $bool = false;
    echo $bool;
    
    
?>