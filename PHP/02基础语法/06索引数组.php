<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 下午2:35
 */
header("content-type:text/html;charset=utf-8");
/*
 * 数组:
 * 索引数组 通过下标获取元素
 * 关联数组 key-value的形式
 * */

//定义数组
$arr = [1,2.5];
$arr1 = array(3,56,3,2);
print_r($arr);
echo "<hr>";
print_r($arr1);
echo "<hr>";

var_dump($arr);
echo "<hr>";
//更改某个下标的值
$arr1[3] = "邓小平";
print_r($arr1);
echo "<hr>";
//如果不指定下标,默认在数组末尾添加元素
$arr1[] = "毛泽东";
print_r($arr1);
echo "<hr>";
//删除元素
//数组下标不会自动向前移
unset($arr1[3]);
print_r($arr1);
echo "<hr>";

/*
 * 判断元素是否在数组中,返回布尔值
 *
 * */
var_dump(in_array(4,$arr1));//false
echo "<hr>";

//数组去重   去重后数组的下标不会改变
$arr2 = [1,2,2,3,4,5,6,32,2];
$arr3 = array_unique($arr2);
print_r($arr3);
echo "<hr>";

//删除数组中的最后的元素
print_r($arr2);
echo "<hr>";
array_pop($arr2);
print_r($arr2);
echo "<hr>";

//数组首位添加元素
//下标值正常

array_unshift($arr3,999);
print_r($arr3);
echo "<hr>";
//删除数组中的首位元素
//下标值重新排序
array_shift($arr3);
print_r($arr3);
echo "<hr>";

//数组长度
echo count($arr3);
echo "<hr>";

//遍历数组
for($i = 0; $i < count($arr3);$i++){
    print_r($arr3[$i]);
    echo "<hr>";
}

?>
