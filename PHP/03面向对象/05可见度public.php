<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 上午11:39
 */
header("content-type:text/html;charset=utf-8");
class Person{
    public $name;
    public $age;
    public $sex;

    function sayHello(){
        echo $this->name.__FUNCTION__;
    }
}
class Student extends Person {
    public $score;
    function sayHello(){
        parent::sayHello();
        echo $this->name;
    }
}
//可见度
//父类的属性和方法在子类中是否可以使用
//子类对象是否可以使用父类方法和属性
//public 公开的 父类子类都可以使用  其他对象也都可以访问
//protected
//private
$stu = new Student();
$stu->name = "小明";
print_r($stu);
?>
