<?php

//获取用户信息
    header('content-type:text/html;charset=utf-8');
    $username = $_POST['username'];
    $password =$_POST['password'];
    $link =mysqli_connect("localhost","root","root","music");
    $sql="SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($res);
    if($row){
        $arr = array('code'=>1,'age'=>2);
        $json = json_encode($arr);
        echo $json;
    }else{
        $arr = array('age'=>2);
        $json = json_encode($arr);
        echo $json;
    }
?>