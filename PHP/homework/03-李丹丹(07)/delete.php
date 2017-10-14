<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/19
 * Time: 下午5:58
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$index = $_POST["deleteNum"];
$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "DELETE  FROM blog WHERE count = '$index'";
sql_operation($mysqli,$sql);


?>
