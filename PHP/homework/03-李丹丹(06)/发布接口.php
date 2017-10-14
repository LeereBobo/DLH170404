<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/18
 * Time: 下午7:41
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$url = "http://c.3g.163.com/recommend/getChanRecomNews?channel=duanzi&passport=91153191bdb987ca2bc10b1d3e7a5004@tencent.163.com&devId=CE80EFE4-9CE9-4E06-B117-DFA8DE7893F1&size=20";
$res = httpGet($url);
echo $res;
//json_encode($res);
?>
