<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/20
 * Time: 下午8:50
 */
header("content-type:text/html;charset=utf-8");
//点击删除时,将数据中对应的数据数据删除
require_once "tool.php";
$deleteId  = $_GET["deleteId"];
$mysqli = new mysqli("localhost","root","","PHP0404");
$sql="DELETE FROM DouBan WHERE id = '$deleteId'";
$result = sql_operation($mysqli,$sql);
$resultArr = ["result"=>$result];
echo json_encode($resultArr);
?>
