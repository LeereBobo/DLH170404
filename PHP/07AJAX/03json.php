<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/19
 * Time: 上午11:25
 */
header("content-type:text/html;charset=utf-8");
$type = $_GET["type"];
function getData($type){
    if($type == "1"){
        $car = ["奔驰","宝马","大众"];
        return json_encode($car);
    }else{
        $animal = ["猪","马","牛","羊"];
        return json_encode($animal);
    }
}


//如果请求参数中有callback 说明是JSONP 网络请求方式
if (isset($_GET["callback"]) && $_GET["callback"]){
    $jsonStr = getData($type);
    //text()
  echo $_GET["callback"]."($jsonStr)";
}else{
    echo getData($type);
}
?>
