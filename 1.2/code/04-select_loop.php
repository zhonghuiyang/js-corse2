<?php

    header('content-type:text/html; charset=utf-8');

    // $bool = true;
    // if($bool){
    //     echo 'hello';
    // }

    $arr = array("张三", "李四", "王五", "赵六", "田七", "王八");
    // echo count($arr);

    for($i=0; $i<count($arr); $i++){
        echo $arr[$i];
    }

    echo '<hr/>';

    $arr = array(
        "name"=>"zs",
        "age"=>18,
        "sex"=>20
      );
    foreach($arr as $key=>$value){
        // echo $key.'<br/>';
        // echo '<hr/>';
        echo $value.'<br/>';
    }
?>