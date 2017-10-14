<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 下午5:22
 */
header("content-type:text/html;charset=utf-8");

if($_GET["userName"] == "12345" && $_GET["passWord"] == "12345"){
    $userName = $_GET["userName"];
    $passWord = $_GET["passWord"];
    print_r($_GET);
    echo "<br>";
    echo "登录成功!";
}
//else{
//    echo "用户名或者密码错误";
//}
?>
