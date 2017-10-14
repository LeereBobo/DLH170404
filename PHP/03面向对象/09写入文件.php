<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 下午4:05
 */
header("content-type:text/html;charset=utf-8");
//写之前需要更改权限
if(is_file("01.txt")){
    $flieW = fopen("01.txt","a");
    fwrite($flieW,"\n许嵩");
    fclose($flieW);
}
?>
