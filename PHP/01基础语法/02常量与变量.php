<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/11
 * Time: 下午4:58
 */
header("content-type:text/html;charset=utf-8");
//常量 不可以改变的量
define("NAME","噢噢");
echo NAME;
/*
 * 常量
 * 多数情况 所有字母大写  多个字母命名时,使用下划线
 * 第一个参数:定义常量名
 * 第二个参数:常量的值
 * 第三个参数:使用常量名时,是否区分大小写
 * true不区分大小写 false反之 默认为false
 * */
define("CAT_NAME","蓝猫",false);
echo cat_name;

//变量 弱类型语言
$name = "oo";
echo $name;
echo "<hr>";

$age = 18;
echo $age;

//布尔值在浏览器上显示的是0或者1 0不显示
$tf = true;
echo $tf;//1
$f = false;
echo $f;//不打印

echo "<br>";
//输出多个变量
echo $name,$age;

print($name);

//格式化输出语句
/*
 * %s 是字符串
 * %d 是数字
 * %f 是浮点数
 * */
printf("name的值是%s age的值是%d",$name,$age);

//输出PHP中的数组和对象  echo不能输出数组和对象
print_r($name);

echo "<br>";
//帮助输出变量的具体信息  比如类型 长度  值等
//可以输出数组和对象
var_dump($name);

//引用
$m = 10;
$n = &$m;//$m的地址赋值给$n
echo "<br>";
echo $n;
$m = 20;
echo "<br>";
echo $n;

//变量的变量
$value1 = "hello";
$$value1 = "word";
echo "<br>";
echo $hello;