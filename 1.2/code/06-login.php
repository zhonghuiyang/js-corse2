<?php

    header('content-type:text/html; charset=utf-8');

    //函数，专门用于接收前端传递过来的数据
    // $user = $_GET['username'];
    // $pass = $_GET['userpwd'];

    $user = $_POST['username'];
    $pass = $_POST['userpwd'];

    // echo $user;
    // echo '<hr/>';
    // echo $pass;

    //假如这是从数据库里面获取出来的数据
    $us = '缪飞';
    $ps = '123';

    //判断
    if($us == $user && $ps == $pass){
        echo json_encode(array('code'=>200, 'body'=>array(
            'msg'=> '登陆成功'
        )));
    }else{
        echo json_encode(array('code'=>404, 'body'=>array(
            'msg'=> '用户名或者密码错误'
        )));
    }

?>