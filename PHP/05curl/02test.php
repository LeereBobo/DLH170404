<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 上午10:25
 */
header("content-type:text/html;charset=utf-8");
echo "only test";
echo $arr = [0,2,2,3];
//错误:数组越界
echo $arr[4];
?>
