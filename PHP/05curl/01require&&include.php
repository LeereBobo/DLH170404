<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 上午10:25
 */
header("content-type:text/html;charset=utf-8");
//include "02test.php";
//include "02test.php";
//include "02test.php";
//include "02test.php";

//只引用一次
//include_once "02test.php";
//include_once "02test.php";
//include_once "02test.php";


require "02test.php";
require "02test.php";
require "02test.php";

require_once "02test.php";
echo "哈哈";
// require 遇到错误时,代码会停止运行
//include 显示错误信息,代码会继续执行
?>
