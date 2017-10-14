<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/20
 * Time: 下午7:03
 */
header("content-type:text/html;charset=utf-8");
//点击查询时从数据库中进行模糊查询
require_once "tool.php";
$selectName = $_GET["selectName"];
$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "SELECT * FROM DouBan WHERE title like '%$selectName%'";
//print_r(sql_select($mysqli,$sql));
echo json_encode(sql_select($mysqli,$sql),true);



?>
