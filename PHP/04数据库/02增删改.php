<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 下午4:41
 */
header("content-type:text/html;charset=utf-8");
/*
 * 1.链接数据库
 * 2.判断是否链接成功
 * 3.执行数据库操作
 * 4.执行完毕,关闭数据库
 * */

//1.链接数据库
//new mysqli(域名,账号,密码,数据库);

$mySqli = new mysqli("localhost","root","","PHP0404");

//2.判断链接的数据库是否有问题
//$mySqli->connect_errno 获取错误信息 如果没有错误返回0  有错误返回错误码
if($mySqli->connect_errno){
    //终止程序并且提示错误
    die($mySqli->connect_errno);
}

//3.执行数据库操作
//表格里的所有字段设置编码格式 utf8
$mySqli->query("set names utf8");
$sql = "INSERT INTO user(name,age,sex) VALUES('小白龙',56,'男')";

//4.执行sql语句  执行增删改的sql  返回的是布尔值
$result = $mySqli->query($sql);

if($result){
    echo "成功!";
}else{
    echo "失败!";
}

//关闭数据库
$mySqli->close();

function adr ($sqlObj){
    $mySqli = new mysqli("localhost","root","","PHP0404");
    if($mySqli->connect_errno){
        die($mySqli->connect_errno);
    }
    $mySqli->query("set names utf8");
    $sql = $sqlObj;
    $result = $mySqli->query($sql);
    if($result){
        echo "成功!";
    }else{
        echo "失败!";
    }
    $mySqli->close();
}

?>
