<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/19
 * Time: 下午7:50
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "SELECT * FROM blog";
echo json_encode(sql_select($mysqli,$sql)) ;
?>
