<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 上午10:46
 */
header("content-type:text/html;charset=utf-8");
//定义一个person类 三个属性 name age sex
//实现它的构造函数
//添加它的方法sayHello 方法中打印函数名
class Person{
    public $name;
    public $age;
    public $sex;

    function __construct($theName,$theAge,$theSex)
    {
        $this->name = $theName;
        $this->sex = $theSex;
        $this->age = $theAge;

    }
    function sayHello(){
        echo __FUNCTION__;
        echo "<hr>";
    }

}

$person = new Person("悟空",500,"男");
$person->sayHello();

class Student extends Person {
    public $score;
    //重写父类方法(多态的体现)
    //使用场景  既想实现父类方法的功能,又想在此方法上添加功能
    //如果想不实现父类方法功能,重新定义功能 则不调用父类方法
    function __construct($theName = "小红",$theAge = 10,$theSex = "女",$theScore = 60)
    {
        parent::__construct($theName,$theAge,$theSex);
        $this->score = $theScore;
    }

    function sayHello(){
        parent::sayHello();
        echo "小明出去";
        echo "<hr>";
    }
}
$student = new Student("小明",3,"男",20);
print_r($student);
echo "<hr>";
$student->sayHello();
echo $student->name;
echo "<hr>";
?>
