<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/19
 * Time: 下午4:11
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$text = $_POST["text"];
$timer = $_POST["timer"];
$person = $_POST["person"];
$count = $_POST["count"];
$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "INSERT INTO blog(content,person,time,count) VALUES ('$text','$person','$timer','$count')";
sql_operation($mysqli,$sql);

$mysqli_select = new mysqli("localhost","root","","PHP0404");
$sqli_select = "SELECT * FROM blog WHERE count = $count";
echo json_encode(sql_select($mysqli_select,$sqli_select)) ;
?>
