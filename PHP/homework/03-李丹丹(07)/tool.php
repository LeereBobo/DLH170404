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

//网络请求(get)
function httpGet($url){
    //1.
    $curl = curl_init();
    //2.curl_setopt(网络请求对象,设置所请求的是网址(get),请求的接口);
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    //3.
    $res = curl_exec($curl);
    //4.
    curl_close($curl);

    return $res;
}

//网络请求
function httpPost($url,$data)
{
    //1.
    $curl = curl_init();
    //2.
    //设置请求方式
    curl_setopt($curl, CURLOPT_POST, true);
    //设置请求网址
    curl_setopt($curl, CURLOPT_URL, $url);
    //设置请求参数
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //返回的是网络请求的结果,不是布尔值
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //3.
    //执行网路请求
    $res = curl_exec($curl);
    //4.
    curl_close($curl);
    return $res;
}
?>
