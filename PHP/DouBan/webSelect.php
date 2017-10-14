<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/21
 * Time: 下午8:59
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$num = $_GET["num"];
$pageNum = $_GET["pageNum"];
$startNum = ($pageNum - 1)*20;
$mysqli = new mysqli("localhost","root","","PHP0404");
if($num == 1){
    $sql ="SELECT * FROM DouBan WHERE  chinese = 1 LIMIT $startNum,20";
}
if($num == 2){
    $sql ="SELECT * FROM DouBan WHERE  USA = 1 LIMIT $startNum,20";
}

if($num == 3){
    $sql ="SELECT * FROM DouBan WHERE  korea = 1 LIMIT $startNum,20";
}
if($num == 4){
    $sql ="SELECT * FROM DouBan WHERE  hot = 1 LIMIT $startNum,20";
}
echo json_encode(sql_select($mysqli,$sql),true);
?>
