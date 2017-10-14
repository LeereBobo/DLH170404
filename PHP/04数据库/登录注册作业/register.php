<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 上午9:25
 */
header("content-type:text/html;charset=utf-8");
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];
$str = $userName.",".$passWord."\n";
$fileW = fopen("user.txt","a");
fwrite($fileW,$str);
fclose($fileW);
?>
