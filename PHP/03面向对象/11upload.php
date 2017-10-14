<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 下午4:30
 */
header("content-type:text/html;charset=utf-8");
//$_FILES 超全局变量 获取到的是前端上传的文件
//关联数组
print_r($_POST);
echo "<hr>";
print_r($_FILES);
echo "<hr>";
$imgValue = $_FILES["img"];
print_r($imgValue["tmp_name"]);
echo "<hr>";
$temp_name = $imgValue["tmp_name"];

//上传的文件  最开始存储到系统指定的临时文件夹
//将上传到临时文件夹的文件 移动到指定文件夹
//move_uploaded_file(临时路径,相对自身文件的一个相对路径);
move_uploaded_file($temp_name,"img/download-1.jpg");
?>
