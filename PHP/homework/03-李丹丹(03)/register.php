<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 下午7:12
 */
header("content-type:text/html;charset=utf-8");
print_r($_POST);
if(is_file("register.txt")){
    $flieW = fopen("register.txt","a");
    $username = $_POST["userName"];
    $password = $_POST["passWord"];
    fwrite($flieW,$username.",".$password ."\n");
    fclose($flieW);
}

?>
