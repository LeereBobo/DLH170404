<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/18
 * Time: 上午10:43
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$url="http://c.3g.163.com/nc/article/list/T1348654060988/0-20.html";
$result = httpGet($url);

$resultArr = json_decode($result,true);
$arr = $resultArr["T1348654060988"];
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
  <?php
    for($i = 0; $i < count($arr);$i++){
      if(isset($arr[$i]["ltitle"])){
          echo $arr[$i]["ltitle"]."<br>";
      }
    }
  ?>
</body>
</html>
