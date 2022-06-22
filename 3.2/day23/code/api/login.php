<?php
    
    //设置字符编码
    header('content-type:text/html; charset=utf-8');

    //接收前端传递过来的数据
    $user = $_GET['username'];
    $pass = $_GET['password'];


    //连接数据库
    $link = mysqli_connect('localhost', 'root', 'root', 'cd-h52204');

    //准备查询的sql语句
    $sql = "select * from login where username='$user' and password='$pass'";

    //执行查询
    //注意点：返回的结果是一个资源类型，是一个对象
    $res = mysqli_query($link, $sql);

    //解析结果
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    
    //判断
    if(count($data)){
        echo json_encode(array('code'=>200, 'body'=>array(
            'msg'=> '登陆成功'
        )));
    }else{
        echo json_encode(array('code'=>404, 'body'=>array(
            'msg'=> '用户名或者密码错误'
        )));
    }

?>