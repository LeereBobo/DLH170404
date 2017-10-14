<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 下午6:58
 */
header("content-type:text/html;charset=utf-8");
require_once "tool.php";
$post_url = "http://localhost/0404PHP/homework/03-李丹丹(05)/01.php?";
$post_data="pageNum=1";
$post_res = httpPost($post_url,$post_data);
$res1 = json_decode($post_res,true);
//var_dump($res1);
?>

<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/17
 * Time: 下午8:34
 */
header("content-type:text/html;charset=utf-8");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<table border="1">
    <?php
    for($i = 0; $i <= count($res1); $i++){
        echo $i;
        echo "<tr>";
        foreach($res1[$i] as $key=>$value){
            echo "<td>";
            echo "$key";
            echo "</td>";
            echo "<td>";
            echo "$value";
            echo "</td>";

        }
        echo "</tr>";
    }
    ?>
</table>

<input type="button" value="下一页" onclick="location.href='01.php?pageNum=<?php echo $pageNum+1?>'">
</body>
</html>






