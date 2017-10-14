<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 下午5:22
 */
header("content-type:text/html;charset=utf-8");

//print_r($_GET["passWord"]);
$filesArr = file("register.txt");
foreach($filesArr as $key=>$value){
    $arr = explode(",",$value);
   for($i = 0; $i < count($arr); $i++){
       if(trim($arr[0]) == $_GET["userName"] && trim($arr[1]) == $_GET["passWord"]){
           echo "登录成功!";
           echo "<br>";
           break;
       }else if(trim($arr[0]) != $_GET["userName"] ){
           echo "用户名错误!";
           echo "<br>";
       }else if(trim($arr[1]) != $_GET["passWord"]) {
           echo "密码错误!";
           echo "<br>";
       }


   }
}

?>
