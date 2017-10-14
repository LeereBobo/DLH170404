<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 下午4:41
 */
header("content-type:text/html;charset=utf-8");

/*
 * 1.链接数据库;
 * 2.判断是否链接成功;
 * 3.执行数据库操作;
 * 4.执行完毕,关闭数据库;
 * */

//1.链接数据库
$mySqli = new mysqli("localhost","root","","PHP0404");//(域名,账号,蜜码,数据库)

//2.判断链接是否有问题;
//$mySqli->connect_errno  获取错误信息  如果没有错误返回0 有错误 返回错误码;
if($mySqli->connect_errno){
    //终止程序并且提示错误
    die($mySqli->connect_errno);
}

//3.执行数据库操作;

$mySqli->query("set names utf8"); // 表中所有字段设置编码格式 utf8;

$sql = "SELECT*FROM user";

//执行sql语句
//执行查询的sql 错误返回false  正确返回查询结果;
$result = $mySqli->query($sql);

echo "<br>";
if($result){
    //$result->num_rows 数据库查询以后有几条数据;
    if($result->num_rows){
        $arr = $result->fetch_all(MYSQLI_ASSOC);
        print_r($arr);
    } else {
        echo "没有数据";
    }

} else {
    echo "失败";
}
//4.关闭数据库;

$mySqli->close();




?>