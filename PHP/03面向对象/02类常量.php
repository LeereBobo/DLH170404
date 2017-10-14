<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 上午10:07
 */
header("content-type:text/html;charset=utf-8");
class Person {
    //在类中不可以改变的量
    const COUNTRY = "CHINA";
    public $name;
    function sayHello(){
        //::范围解析符
        //类内部使用
        echo self::COUNTRY."你好";
    }

}
$person = new Person();
$person->sayHello();
//类外面使用
//1.通过对象获取
echo "<hr>";
echo $person::COUNTRY;
echo "<hr>";

//2.通过类名获取
echo Person::COUNTRY;
echo "<hr>";
//3.通过与类名相同的字符串
$str = "Person";
echo $str::COUNTRY;
echo "<hr>";
?>
