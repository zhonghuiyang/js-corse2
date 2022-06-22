<?php

    header('content-type:text/html; charset=utf-8');

    //索引数组
    // $arr1 = array('缪飞', '杨帅', '张晋伟');

    //用于输出引用数据类型的
    // print_r($arr1);
    
    // echo '<hr/>';

    //用于输出引用数据类型的，会把咱们的值类型输出
    // var_dump($arr1);

    // echo '<hr/>';

    //取出数组里面的值
    // echo $arr1[0];

    //关联数组
    // $arr2 = array('name'=>'张三', 'age'=>18);
    // print_r($arr2);
    // echo '<hr/>';
    // echo $arr2['name'];

    //简化形式
    // $arr3 = ['嘿嘿', '哈哈'];
    // print_r($arr3);

    //使用数组给前端返回提示信息
    // $data = array('code'=>200, 'body'=>array(
    //     'msg'=> '登陆成功'
    // ));

    //把php数组转成json格式给前端返回
    // $res = json_encode($data);

    // echo $res;

    // $data2 = '{"a":1}';
    // $res = json_decode($data2);

    // print_r($res);

?>
