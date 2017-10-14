<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/20
 * Time: 上午10:19
 */
header("content-type:text/html;charset=utf-8");
//从豆瓣获取数据,添加到数据库
require_once "tool.php";
$url = "https://movie.douban.com/j/search_subjects?type=movie&tag=热门&sort=recommend&page_limit=1000&page_start=0";
$result = json_decode(httpGet1($url),true);
$resArr = $result["subjects"];
for($i=0; $i<count($resArr);$i++){
    $hot = rand(0,1);
    $chinese = rand(0,1);
    $USA = rand(0,1);
    $korea = rand(0,1);


    $id=$resArr[$i]["id"];
    $title=$resArr[$i]["title"];
    $imgurl = $resArr[$i]["cover"];
    $score = $resArr[$i]["rate"];

    $mysqli = new mysqli("localhost","root","","PHP0404");
    $sql = "INSERT INTO DouBan(id,title,imgurl,hot,chinese,USA,korea,score) VALUES('$id','$title','$imgurl','$hot','$chinese','$USA','$korea','$score')";
    sql_operation($mysqli,$sql);
}









?>
