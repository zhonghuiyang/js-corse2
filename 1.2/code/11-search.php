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

    //准备查询的sql语句
    // $sql = 'SELECT * FROM student WHERE gender="男"';

    // $sql = 'SELECT * FROM student WHERE age>18';

    // $sql = 'SELECT * FROM student LIMIT 10, 20';

    // $sql = 'SELECT * FROM student WHERE name LIKE "%六%"';

    // $sql = 'select * from shoppinglist';

    //升序
    // $sql = 'SELECT * FROM shoppinglist ORDER BY price ASC';

    //降序
    $sql = 'SELECT * FROM shoppinglist ORDER BY price DESC';

    //执行查询代码
    /*
        参数1：表示连接数据库信息，$link
        参数2：表示要执行的查询代码
    */
    $query = mysqli_query($link, $sql);

    //解析查询结果
    /*
        参数1：表示要解析的结果
        参数2：表示解析完数据后以数组形式展示
    */
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC); 


    echo json_encode($data);


?>