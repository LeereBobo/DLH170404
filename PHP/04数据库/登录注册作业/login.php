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
$userAll = file("user.txt");
/*for($i = 0 ; $i < count($userAll);$i++){
    $userArr = explode(",",$userAll[$i]);
    if($userArr[0] == $userName."\n"){
        if($userArr[1] == $passWord."\n"){
            echo "登录成功!";
        }else{
            echo "密码错误!";
        }
        break;
    }else{
        if($i == count($userAll) - 1){
            echo "用户名错误!";
        }
    }
}*/

$userExist = false;
for($i = 0 ; $i < count($userAll);$i++){
    $userArr = explode(",",$userAll[$i]);
    if($userArr[0] == $userName."\n"){
        $userExist = true;
        if($userArr[1] == $passWord."\n"){
            echo "登录成功!";
        }else{
            echo "密码错误!";
        }
        break;
    }
}
if(!$userExist){
    echo "用户名错误!";
}
?>
