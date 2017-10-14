<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 上午9:49
 */
header("content-type:text/html;charset=utf-8");
//创建类 类名习惯首字母大写
class Person {
    //定义属性
    public $name = "默认值";//给默认值
    public $sex;
    public $age;
    //定义方法
    function sayHello(){
        echo $this->name."说你好";
        echo "<hr>";
    }
    //描述
    function description(){
        return "姓名 : ".$this->name."年龄 : ".$this->age."性别 : ".$this->sex;


    }
}
$person1  = new Person();
$person1->name = "牂牂";
$person1->age = 5;
$person1->sex = "dog";

echo $person1->name;
echo "<hr>";
print_r($person1);
echo "<hr>";

//调用方法
$person1->sayHello();
 echo $person1->description();
echo "<hr>";
?>
