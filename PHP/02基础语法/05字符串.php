<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/12
 * Time: 上午10:26
 */
header("content-type:text/html;charset=utf-8");
$name = "班长";
$age = 18;
/*
 * 1.拼接
 * */
$value = $name."今年".$age."岁了";
echo $value;
echo "<hr>";

$value1 = "孙悟空是{$name},今年{$age}岁了";
$value2 = "孙悟空是$name,今年$age";
echo $value1;
echo "<hr>";
echo $value2;
echo "<hr>";

/*
 * 2.定界符
 * <<<开头 命名可以随意.但是结束前不能有空格
 * */
$str = "<a href='http://www.baidu.com'>百度一下</a><p>这是一个P标签</p>";
echo $str;
echo "<hr>";
$str1 = <<<name
<a href='http://www.baidu.com'>百度一下</a>
name;
echo $str1;
echo "<hr>";
/*
 * 3.长度  获取的字节数
 * 一个汉字占是三个字节
 * */
$str2 = "abx";
$str3 = "噢噢";
echo strlen($str2);
echo "<hr>";
echo strlen($str3);

echo "<hr>";
/*
 * 4.首位空格
 *
 * */
$str4 = "  Hello World  ";
echo "空格".ltrim($str4)."空格";
echo "<hr>";
echo "空格".rtrim($str4)."空格";
echo "<hr>";
echo "空格".trim($str4)."空格";
echo "<hr>";

/*
 * 5.大小写转换
 * */
$str5 = "zang  ao";
$str6 = "SHA PI";
echo strtolower($str6);
echo "<hr>";
echo strtoupper($str5);
echo "<hr>";
//每个单词首字母转化为大写字母
echo ucwords($str5);
echo "<hr>";
//第一个单词首字母大写
echo ucfirst($str5);
echo "<hr>";

/*
 * 6.字符在字符串中的位置
 * 判断某个字符串 是否字这个字符串中 不存在 返回布尔值
 * */
$str7 = "Hello world";
echo strpos($str7,"o");
echo "<hr>";
echo strpos($str7,"lo");
echo "<hr>";
var_dump(strpos($str7,"a"));//false
echo "<hr>";

/*
 * 7.倒序输出
 * */
echo strrev($str7);
echo "<hr>";

/*
 * 8.按照指定字符串进行拆分
 * */

$str8 = "齐美丽,藏獒,小老弟,赵四,别针,老大,岳小刀";
$arr = explode(",",$str8);//以,分割,分割后放到数组里
print_r($arr);
echo "<hr>";

$str9 = implode("-",$arr);//用-进行拼接
echo $str9;
echo "<hr>";

/*
 * 9.取子串
 * */
$str10 = "good good study day day up";
echo substr($str10,3);//从字节数3截取到最后,包括3
echo "<hr>";
echo substr($str10,3,4);//从字节数3开始截取,截取4个字节
echo "<hr>";
echo substr_count($str10,"o");//获取o 在字符串中的个数  4
echo "<hr>";
echo substr_count($str10,"oo");//获取oo 在字符串中的个数  2
echo "<hr>";
echo substr_replace($str10,"123",2);//将123  从第二个字节开始替换到最后
echo "<hr>";
echo substr_replace($str10,"123",2,4);//将123  从第二个字节开始替换4个节点
echo "<hr>";
echo substr_replace($str10,"",1,2);//删除
echo "<hr>";
echo substr_replace($str10,"123",1,0);//插入字符串
echo "<hr>";




?>
