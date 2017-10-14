<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/18
 * Time: 上午11:20
 */
header("content-type:text/html;charset=utf-8");
$arr = ["西游记"=>[["name"=>"孙","流沙河"=>["name"=>"小沙","age"=>"500","sex"=>"男"],"age"=>"500","sex"=>"男","花果山"=>["name"=>"孙","age"=>"500","sex"=>"男"]],["name"=>"孙","age"=>"500","sex"=>"男","高老庄"=>["name"=>"小猪","age"=>"500","sex"=>"男"]],["name"=>"孙","age"=>"500","女儿国"=>["name"=>"国王","age"=>"500","sex"=>"男"],"sex"=>"男"],["name"=>"白","age"=>"500","sex"=>"男"],["name"=>"黑","age"=>"500","sex"=>"男"]]];
print_r(json_encode($arr));
//"花果山"=>["name"=>"孙","age"=>"500","sex"=>"男"]
//"流沙河"=>["name"=>"小沙","age"=>"500","sex"=>"男"]
//"高老庄"=>["name"=>"小猪","age"=>"500","sex"=>"男"]
//"女儿国"=>["name"=>"国王","age"=>"500","sex"=>"男"]
?>
