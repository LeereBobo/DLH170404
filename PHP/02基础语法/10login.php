<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 下午4:38
 */
header("content-type:text/html;charset=utf-8");
//超全局变量  关联数组
print_r($_GET);
if(isset($_GET["userName"]) && isset($_GET["passWord"])){
    $userName = $_GET["userName"];
    $password = $_GET["passWord"];
    echo $userName."<br>";
    echo $password."<br>";

}else{
    echo "请求参数错误";
}
?>
