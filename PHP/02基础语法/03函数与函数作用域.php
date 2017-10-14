<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 上午9:56
 */
header("content-type:text/html;charset=utf-8");
function  strcat($str1,$str2){
    return $str1.$str2;
}
$result = strcat("班长","真瘦");
echo $result;
echo "<hr>";
if(1 < 2){
    $a = 10;
}
echo $a;
//PHP函数级别的作用域
echo "<hr>";

$a = 100;
function text(){
    //全局变量在函数内部访问,需要使用关键字global
    global $a;
    $a = 10;
    echo $a;
    echo "<hr>";
}

echo "函数外打印".$a;
echo "<hr>";
text();

function counter(){
    //静态变量
    static $count = 0;
    $count++;
   return $count;
}
echo counter()."<hr>";//1  static 保留上一次运行后的结果,并在此结果上继续运算
echo counter()."<hr>";//2
echo counter()."<hr>";//3
echo counter()."<hr>";//4
?>
