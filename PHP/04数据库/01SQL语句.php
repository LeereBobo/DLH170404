<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 17/7/14
 * Time: 下午2:49
 */
header("content-type:text/html;charset=utf-8");

/*
 * 插入
 * INSERT INTO 表名(字段一,字段二,....) VALUES(值1,值2......)
 * */
//INSERT INTO user(name,sex,age) VALUES("哮天犬","男",400)
//INSERT INTO user(name,sex,age) VALUES("哮天犬","男",400),("铁扇公主","女",900)

/*
 * delete
 * DELETE FROM 表名
 * 删除表中的所有数据,但是不删表格
 * DELETE FROM user;
 * 删除user表中id = 1;
 * DELETE FROM user WHERE 条件
 * DELETE FROM user WHERE id = 1;
 * 同时满足两个条件使用关键字 AND 连接
 * DELETE FROM user WHERE sex = "女" AND age > 900
 * */

/*
 *更改数据
 * 不添加条件改变整张表中所有字段的值
 * UPDATE 表名 SET 字段一 = 值1 ,字段二 = 值2,.........WHERE 条件
 *UPDATE user SET name = "观音姐姐",age = 20 WHERE id = 2;
 * */


/*
 * 查找
 *
 * //查找表中所有数据
 *SELECT * FROM user
 * //查找年龄大于18的
 * SELECT * FROM `user` WHERE age > 18
 * 查找年龄不等于20的
 * SELECT * FROM `user` WHERE age <> 20
 * SELECT * FROM `user` WHERE age != 20
 * 模糊查寻  查找user表中 name以白开头的所有数据
 * SELECT * FROM `user` WHERE name like "白%"
 * 模糊查寻  查找user表中 name以僧结尾的所有数据
 * SELECT * FROM `user` WHERE name like "%僧"
 * 模糊查寻  查找user表中 name包含龙的所有数据
 * SELECT * FROM `user` WHERE name like "%龙%"
 * */

//排序
//按着年龄排序 (数字) DESC 降序  ASC 升序  默认升序
//SELECT * FROM `user`ORDER BY age DESC
//按着姓名首字母排列(A-Z)
//SELECT * FROM `user`ORDER BY convert (name using gbk)

//查找表中所有 name age字段
//SELECT name,age FROM `user`

//从第二条开始找,查找三个
//从数据库中的数据默认从0开始
//SELECT * FROM `user` LIMIT 2,3

?>
