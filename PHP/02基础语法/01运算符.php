<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 上午9:09
 */
header("content-type:text/html;charset=utf-8");
//赋值运算符
$a = 1;
//算数运算符 + - * / % ++ --
$b = "班长";
$c = "真黑";
$d = $b . $c;
$b .= $c;//等同于 $b = $b.$c;
echo $d;
echo "<br>";
echo $b;
echo "<br>";
//比较运算符 > < >= <= == === !=
//逻辑运算符 && || !
//异或  一真一假才为真  xor
$x = true;
$y = false;
$z = true;

if ($x xor $y) {
    echo "为真";
    echo "<br>";
}
if ($x xor $y xor $z) {
    echo "00";
    echo "<br>";
}

?>
