<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 下午4:20
 */
header("content-type:text/html;charset=utf-8");

//curl 是一个PHP中的网络请求类  可以做同域或者跨域请求  可以获取其他PHP或者后台文件(接口)返回的数据
/*
网络请求分4部
1.创建一个curl对象
2.对curl进行设置
3.执行curl
4.关闭curl
*/

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

//路径必须是绝对路径   url ? 参数名1 = 参数值1 & 参数名2 = 参数值2....
$request_url = "http://localhost/0404PHP/05curl/03json.php?userName=小猪&passWord=123";
$result = httpGet($request_url);
var_dump($result);




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

//$post_url = "http://localhost/0404PHP/05curl/03json.php";
//$post_data = "userName=小猪&passWord=12";
//
//$post_res = httpPost($post_url,$post_data);
//echo $post_res;
?>
