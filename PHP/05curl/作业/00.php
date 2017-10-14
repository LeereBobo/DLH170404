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

