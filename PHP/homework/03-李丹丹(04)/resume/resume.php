<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/15
 * Time: 上午9:28
 */
header("content-type:text/html;charset=utf-8");
$imgValue = $_FILES["img"];
$temp_name = $imgValue["tmp_name"];
print_r($_FILES["img"]["name"]);
move_uploaded_file($temp_name,"img/{$imgValue['name']}");
$str = <<<name
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			table{
				width: 900px;
				height: 700px;
				text-align: center;
				border-collapse: collapse;
			}
			img{
			width:250px;
			height:300px;
			}
		</style>
	</head>
	<body>
		<table border="" cellspacing="" cellpadding="">
			
			
			
			<tr>
				<td>姓名</td>
				<td>{$_POST["name"]}</td>
				<td>性别</td>
				<td>{$_POST["sex"]}</td>
				<td rowspan="5">
					<img src="img/{$imgValue['name']}"/>
				</td>
			</tr>
			<tr>
				<td>民族</td>
				<td>{$_POST["nation"]}</td>
				<td>籍贯</td>
				<td>{$_POST["origin"]}</td>
			</tr>
			<tr>
				<td>出生日期</td>
				<td>{$_POST["date"]}</td>
				<td>政治面貌</td>
				<td>{$_POST["political"]}</td>
			</tr>
			<tr>
				<td>学历</td>
				<td>{$_POST["education"]}</td>
				<td>婚姻状况</td>
				<td>{$_POST["marriage"]}</td>
			</tr>
			<tr>
				<td>专业</td>
				<td>{$_POST["professional"]}</td>
				<td>健康状况</td>
				<td>{$_POST["health"]}</td>
			</tr>
			<tr>
				<td>求职方向</td>
				<td colspan="4">{$_POST["job"]}</td>
			</tr>
			<tr>
				<td>毕业院校</td>
				<td colspan="2">{$_POST["school"]}</td>
				<td>邮编</td>
				<td>{$_POST["code"]}</td>
			</tr>
			<tr>
				<td>电话</td>
				<td>{$_POST["phone"]}</td>
				<td colspan="2">邮箱</td>
				<td>{$_POST["email"]}</td>
			</tr>
			
		</table>
	</body>
</html>

name;
echo $str;
?>
