<?php

    //设置字符编码
    header('content-type:text/html; charset=utf-8');

    //连接数据库
    /*
        参数1：表示的是数据地址 localhost 127.0.01
        参数2：用户名 root
        参数3：密码 root
        参数4：表示你要连接的数据库
    */
    $link = mysqli_connect('localhost', 'root', 'root', 'cd-h52204');

    //准备增加数据的sql
    $sql = 'insert into login values(null, "何欢", "777")';

    //执行查询代码
    /*
        参数1：表示连接数据库信息，$link
        参数2：表示要执行的查询代码
    */
    $res = mysqli_query($link, $sql);

    echo $res;
    
?>