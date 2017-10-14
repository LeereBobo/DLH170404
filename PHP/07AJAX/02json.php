<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 下午3:58
 */
header("content-type:text/html;charset=utf-8");
//定义了一个get请求的接口 参数名分别是userName passWord
//参数值必须是 何欣 和123 才能拿到想要返回的结果
//$useName = $_GET["userName"];
//$passWord = $_GET["passWord"];

$useName = $_POST["userName"];
$passWord = $_POST["passWord"];
if($useName == "小猪" && $passWord == "12"){
    $person1 = ["name"=>"孙红雷","age"=>"48","sex"=>"男"];
    $person2 = ["name"=>"黄渤","age"=>"40","sex"=>"男"];
    $person3 =["name"=>"张艺兴","age"=>"18","sex"=>"男"];

    $personArr = [$person1,$person2,$person3];

//数组转json字符串
    $jsonStr = json_encode($personArr);
    echo $jsonStr;
}

//$person1 = ["name"=>"孙红雷","age"=>"48","sex"=>"男"];
//$person2 = ["name"=>"黄渤","age"=>"40","sex"=>"男"];
//$person3 =["name"=>"张艺兴","age"=>"18","sex"=>"男"];
//
//$personArr = [$person1,$person2,$person3];

//数组转json字符串
//$jsonStr = json_encode($personArr);
//var_dump($jsonStr) ;

//echo "<hr>";

//json字符串转数组  stdClass Object  是PHP的根类
//$arr = json_decode($jsonStr,true);
//print_r($arr) ;
?>
