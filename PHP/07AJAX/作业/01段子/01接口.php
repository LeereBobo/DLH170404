<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/19
 * Time: 上午9:04
 */
header("content-type:text/html;charset=utf-8");
require_once "../tool.php";
$url = "http://c.3g.163.com/recommend/getChanRecomNews?channel=duanzi&passport=91153191bdb987ca2bc10b1d3e7a5004@tencent.163.com&devId=CE80EFE4-9CE9-4E06-B117-DFA8DE7893F1&size=20";
$result = httpGet($url);
echo $result;
//var_dump($result);
?>
