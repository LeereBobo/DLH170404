<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/18
 * Time: 上午9:08
 */
header("content-type:text/html;charset=utf-8");
require_once "../tool.php";
//每页显示20条数据  参数代表第几页

//定义接口为post请求
$pageNum = $_GET["pageNum"];
//$pageNum =1;
/*
 * 1  0
 * 2  20
 * 3  40
 * */

//从哪条开始查找
$startNum = ($pageNum - 1) * 20;
$mysqli = new mysqli("localhost","root","","information_schema");
$sql = "SELECT * FROM COLUMNS LIMIT $startNum,20";
$result = sql_select($mysqli,$sql);
echo json_encode($result);//转化成json字符串

//print_r($result);
?>
