<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 上午9:24
 */
header("content-type:text/html;charset=utf-8");

require_once  "../../../tool.php";
$userName = $_POST["userName"];
$password = $_POST["passWord"];

$mysqli = new mysqli("localhost","root","","PHP0404");

$select_sql = "SELECT*FROM login WHERE username = '$userName'";

$select_res = sql_select($mysqli,$select_sql);

var_dump($select_res);

if(is_array($select_res) && count($select_res)==0){
    $mysqli = new mysqli("localhost","root","","PHP0404");
    $insert_sql = "INSERT INTO login (username,password) VALUES ('$userName','$password')";
    $insert_res = sql_operation($mysqli,$insert_sql);

    if($insert_res){
        echo "注册成功";
    } else {
        echo "注册成功";
    }
}

?>