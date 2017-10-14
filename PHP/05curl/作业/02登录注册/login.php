<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 上午9:38
 */
header("content-type:text/html;charset=utf-8");
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];
require_once "../../../tool.php";

$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "SELECT * FROM login WHERE username = $userName";

$res = sql_select($mysqli,$sql);
if(is_array($res)){
    if(count($res) == 0){
       echo "用户不存在";
    }else{
        $ps = $res[0]["password"];
        if($ps == $passWord){
            echo "登录成功";
        }
    }
}else{
    echo "查找错误";
}

?>
