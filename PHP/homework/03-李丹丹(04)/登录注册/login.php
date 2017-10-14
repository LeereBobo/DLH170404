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

$mySqli = new mysqli("localhost","root","","PHP0404");
if($mySqli->connect_errno){
    die($mySqli->connect_errno);
}
$mySqli->query("set names utf8");
$sqlAll = "SELECT * FROM login";
$resultAll = $mySqli->query($sqlAll);
$userExist = false;
if($resultAll){
    if($resultAll->num_rows){
        $arr = $resultAll->fetch_all(MYSQLI_ASSOC);
    }
    for($i = 0 ; $i < count($arr);$i++){
        if($arr[$i]["username"] == $userName){
            $userExist = true;
            if($arr[$i]["password"] == $passWord){
                echo "登录成功!";
            }else{
                echo "密码错误!";
            }
            break;
        }
    }
}

if(!$userExist){
    echo "用户名错误!";
}
?>
