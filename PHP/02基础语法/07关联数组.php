<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 下午3:34
 */
header("content-type:text/html;charset=utf-8");
//定义
$arr = ["name","age"=>"18"];
print_r($arr);
echo "<hr>";
var_dump($arr);
echo "<hr>";

//添加
$arr["sex"] = "女";
print_r($arr);
echo "<hr>";

//修改
$arr["age"] = "19";
print_r($arr);
echo "<hr>";

//获取某个键值对的值
echo $arr["name"];
echo "<hr>";

//foreach
foreach ($arr as $value){
    //$value代表的数组中的每个value的值
    echo $value;
    echo "<hr>";
}
foreach ($arr as $key=>$value){
    echo $key.":".$value;
    echo "<hr>";
}
$arr1 = [1,2,4,5];
foreach ($arr1 as $a){
    //数组中的元素,不是下标
    echo $a;
    echo "<hr>";
}

//取出所有的key值
$keyArr = array_keys($arr);
print_r($keyArr);
echo "<hr>";

//取出所有的value值
$valueArr = array_values($arr);
print_r($valueArr);
echo "<hr>";

//判断key值是否存在
var_dump(array_key_exists("name",$arr));
echo "<hr>";
var_dump(isset($arr["name"]));
echo "<hr>";
?>

