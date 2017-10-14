<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/20
 * Time: 下午7:20
 */
header("content-type:text/html;charset=utf-8");
//点击新增时将数据添加到数据库中
require_once "tool.php";
$newName = $_GET["newName"];
$newHot = $_GET["newHot"];
$newChinese = $_GET["newChinese"];
$newUsa = $_GET["newUsa"];
$newKorea = $_GET["newKorea"];
$newId = $_GET["newId"];
$newUrl = $_GET["newUrl"];


$mysqliAdd = new mysqli("localhost","root","","PHP0404");
$sqlAdd = "INSERT INTO DouBan(id,title,imgurl,hot,chinese,USA,korea,score) VALUES('$newId','$newName','$newUrl','$newHot','$newChinese','$newUsa','$newKorea','9.0')";
sql_operation($mysqliAdd,$sqlAdd);

$pageNum = $_GET["pageNum"];
$startNum1 = ($pageNum - 1)*20;
$mysqli1 = new mysqli("localhost","root","","PHP0404");
$sql1 = "SELECT * FROM DouBan LIMIT $startNum1,20";

echo json_encode(sql_select($mysqli1,$sql1),true);


?>
