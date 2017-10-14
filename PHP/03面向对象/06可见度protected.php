<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 上午11:39
 */
header("content-type:text/html;charset=utf-8");
class Person{
    protected $name;
    protected $age;
    protected $sex;
    //protected 在外面获取不到 一般用于这个方法不被外部调用 而其他方法的实现依赖此方法  在子类里也可以调用到此方法
    protected function sayHello($age){
        $this->age = $age;
    //    echo $this->age.__FUNCTION__;
    }
    //系统自带的属性set的方法
    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    //获取属性(get)
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}
class Student extends Person {
    protected $score;
    function sayHello(){
        parent::sayHello();
        echo $this->name;
    }
}
//protected 外部不可访问


$person = new Person();
//$person->age = "18";
$person->sayHello(18);
echo "<hr>";
print_r($person);
echo "<hr>";
//echo $person->age;
//echo "<hr>";

$person->setAge(19);
print_r($person);
echo "<hr>";

echo $person->getAge();
echo "<hr>";

/*
 * protected 受保护的
 * 本类和子类内部可以访问  外部不可以
 * 方法使用居多
 * 使用场景
 * 类的其他方法的实现,需要依赖protected修饰的方法所实现的功能
 * 而protected修饰的方法,并不想公开给外部使用
 * */
?>
