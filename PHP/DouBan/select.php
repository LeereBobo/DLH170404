<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/20
 * Time: 下午3:16
 */
header("content-type:text/html;charset=utf-8");
//每次从数据库中查询20条数据
require_once "tool.php";
$pageNum = $_GET["pageNum"];
$startNum = ($pageNum - 1)*20;
$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "SELECT * FROM DouBan LIMIT $startNum,20";

echo json_encode(sql_select($mysqli,$sql),true);


?>
