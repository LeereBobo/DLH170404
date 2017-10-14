<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 上午10:20
 */
header("content-type:text/html;charset=utf-8");
class Dog{
    public $name;
    public $sex;
    public $age;

    //构造函数
    //构造函数的放   系统内部方法  在创建对象时,自动调用
    //给一个默认值,若不给默认值,当不传参数的时候有错误
    function __construct($theName,$theAge,$theSex = "nsn")
    {
        $this->age = $theAge;
        $this->name = $theName;
        $this->sex = $theSex;
       echo "调用了";
        echo "<hr>";
    }

    //析构函数
    //文件执行完毕时,将创建的对象在内存中销毁
    //析构函数无参无返回
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo __FUNCTION__;
        echo "<hr>";
    }
}

$dog1 = new Dog("嗷嗷",12,"dog");//走到了构造函数内部
$dog1->name = "hao";
print_r($dog1);
echo "<hr>";

$dog2 = new Dog("沙皮",1);
print_r($dog2);
echo "<hr>";

$dog3 = new Dog("团团",3,"女");
for($i = 0; $i <= 10;$i++){
    echo $i;
    echo "<hr>";
}
?>
