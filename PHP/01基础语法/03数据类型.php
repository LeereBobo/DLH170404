<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/11
 * Time: 下午5:32
 */
header("content-type:text/html;charset=utf-8");
/*
 * 数据类型 (8种)
 * 1.标量类型 整型integer 浮点型float/double 字符串string 布尔boolean
 * 2.复合类型 对象 数组
 * 3.特殊类型 资源类型 null
 * */

$a = 1;
echo gettype($a);//integer
$b = 1.2;
//获取变量类型
echo gettype($b);//double

$c = 34;
echo "<br>";
//判断数据类型 返回布尔值
echo is_int($c);//1
echo "<br>";
//强制类型转换
$m = "123";
$n = (int)$m;
var_dump($n);
echo "<br>";

$x = 3.14;
$y = (string)$x;
var_dump($y);
echo "<br>";

$z = (array)$x;
var_dump($z);
echo "<br>";

?>
