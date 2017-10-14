<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/18
 * Time: 上午9:09
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$pageNum = 1;
$end =10;
//如果页面没有拼接参数,说明是第一次加载此页面 让pageNum = 1
//如果拼接参数  且参数名对应有值 说明点击了下一页  进入if判断 让$pageNum 取对应的参数值
if (isset($_GET["pageNum"]) && $_GET["pageNum"]){
    $pageNum = $_GET["pageNum"];
}

$url="http://localhost/0404PHP/06AJAX/作业/01接口.php?pageNum=$pageNum&end=$end";
$result = httpGet($url);
$resultArr = json_decode($result,true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <table border="1">
     <?php

         echo "<tr>";
         foreach ($resultArr[0] as $key=>$value){
             echo "<th>$key</th>";
         }
         echo "</tr>";

     for($i = 0; $i < count($resultArr);$i++){
         echo "<tr>";
         foreach ($resultArr[$i] as $value){
             echo "<td>$value</td>";
         }
         echo "</tr>";
     }

     ?>
 </table>
 <input type="button" value="下一页" onclick="location.href='02数据请求.php?pageNum=<?php echo $pageNum+1?>'">
</body>
</html>