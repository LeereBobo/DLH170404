<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 下午3:08
 */
header("content-type:text/html;charset=utf-8");
class Person{
    private $name;
    public $age;
    public $sex;

     function sayHello(){
        echo $this->name.__FUNCTION__;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}
class Student extends Person {
    public $score;
}

$person = new Person();
$student = new Student();
//echo $person->name; 获取不到
//echo $student->name;
$student->setName("小明");
print_r( $student->getName());
echo "<hr>";
$student->sayHello();

/*
 *
 * */
?>
