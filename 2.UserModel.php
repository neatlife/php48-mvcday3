<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */
require 'MySQLDB.class.php';

class UserModel
{
    // 生产用户数据
    public function getUsers()
    {
        $obj = MySQLDB::GetDB(array(
            'host' => 'localhost',
            'port' => '3306',
            'charset' => 'utf8',
            'user' => 'root',
            'pass' => 'hahaha',
            'dbname' => 'php48',
        ));
        $sql = "SELECT * FROM `user` WHERE 2 > 1";
        return $obj->getRows($sql);
    }

    // 删除用户 $id?
    public function deleteUserById($id)
    {
        $obj = MySQLDB::GetDB(array(
            'host' => 'localhost',
            'port' => '3306',
            'charset' => 'utf8',
            'user' => 'root',
            'pass' => 'hahaha',
            'dbname' => 'php48',
        ));
        $sql = "DELETE FROM `user` WHERE id='{$id}'";
        return $obj->exec($sql);
    }
}