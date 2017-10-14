<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 上午10:40
 */
header("content-type:text/html;charset=utf-8");
//增删改

function sql_operation($mysqli,$sql){
    if($mysqli -> connect_errno){
        die($mysqli->connect_errno);
    }
    $mysqli->query("set names utf8");
    $result = $mysqli->query($sql);
    $mysqli->close();
    return $result;
}

//$mysqli = new mysqli("localhost","root","","PHP0404");
//$sql = "INSERT INTO user(name,age,sex) VALUES('白娘子',400,'女')";
//$res = sql_operation($mysqli,$sql);
//
//if($res){
//    echo "成功";
//}else{
//    echo "失败";
//}

//查询
function sql_select($mysqli,$sql){
    if($mysqli->connect_errno){
        die($mysqli->connect_errno);
    }
    $mysqli->query("set names utf8");
    $result = $mysqli->query($sql);
    $mysqli->close();
    if($result){
        $arr = $result->fetch_all(MYSQLI_ASSOC);
        return $arr;
    }else{
        return false;
    }
}

$mysqli = new mysqli("localhost","root","","PHP0404");
$sql = "SELECT * FROM user WHERE name = '白娘子'";
$res = sql_select($mysqli,$sql);
print_r($res);
echo "<br>";
for($i = 0; $i < count($res);$i++){
    foreach ($res[$i] as $key=>$value){
        print_r($key.":".$value);
        echo "<br>";


    }
}
?>
