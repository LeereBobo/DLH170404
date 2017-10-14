<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 上午10:16
 */
header("content-type:text/html;charset=utf-8");
//内部变量
//运行的操作系统
echo PHP_OS;
echo "<hr>";
//PHP的版本
echo PHP_VERSION;
echo "<hr>";
//魔术变量
//当前行数
echo __LINE__;
echo "<hr>";
//文件的绝对路径
echo __FILE__;
echo "<hr>";

function a(){
    //当前所在函数的函数名;
    echo __FUNCTION__;
    echo "<hr>";
}
a();
?>
