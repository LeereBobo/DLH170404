<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/13
 * Time: 下午3:47
 */
header("content-type:text/html;charset=utf-8");
//获取文件大小
echo filesize("01.txt");
echo "<hr>";
//判断文件是否存在  填入路径
if(is_file("01.txt")){
    echo "文件存在";
    echo "<hr>";

    print_r(file("01.txt"));
    echo "<hr>";

    $fileR = fopen("01.txt","r");
    var_dump($fileR);//resource 资源类型
    echo "<hr>";
    //fread(文件resource,读取文件的长度)
    $result = fread($fileR,filesize("01.txt"));
    echo $result;
    echo "<hr>";
    fclose($fileR);
}else{
    echo "文件不存在";
    echo "<hr>";
}

?>
