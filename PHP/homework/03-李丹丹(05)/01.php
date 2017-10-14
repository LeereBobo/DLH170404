<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 下午6:58
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$pageNum = $_POST["pageNum"];
$pageNum = 1;
$top = $pageNum - 1;
$bottom = $pageNum * 20 - 1;
$mysqli = new mysqli("localhost","root","","information_schema");
$sql = "SELECT * FROM COLUMNS LIMIT $top,$bottom ";
$res = sql_select($mysqli,$sql);
$result = json_encode($res,true);
print_r($result);
?>


