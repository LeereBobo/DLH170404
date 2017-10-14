<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 上午9:25
 */
header("content-type:text/html;charset=utf-8");
$userName = $_GET["userName"];
$passWord = $_GET["passWord"];
$mySqli = new mysqli("localhost","root","","PHP0404");
if($mySqli->connect_errno){
    die($mySqli->connect_errno);
}
$mySqli->query("set names utf8");
$sqlAll = "SELECT * FROM login";
$resultAll = $mySqli->query($sqlAll);
$isAdd = true;
if($resultAll) {
    if ($resultAll->num_rows) {
        $arr = $resultAll->fetch_all(MYSQLI_ASSOC);
        for ($i = 0; $i < count($arr); $i++) {
            if ($userName == $arr[$i]["username"]) {
                echo "用户名已存在,请更改用户名!";
                $isAdd = false;
                break;
            }

        }

    if($isAdd){
        $sql = "INSERT INTO login(username,password) VALUES('$userName','$passWord')";
        $result = $mySqli->query($sql);
        if($result){
            echo "成功!";
        }else{
            echo "失败!";
        }
    }


    }

}

?>
