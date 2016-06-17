<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */
require_once 'MySQLDB.class.php';
require_once 'BaseModel.php';

class UserModel extends BaseModel
{
    // 生产用户数据
    public function getUsers()
    {
        $sql = "SELECT * FROM `user` WHERE 2 > 1";
        return $this->db->getRows($sql);
    }

    // 删除用户 $id?
    public function deleteUserById($id)
    {
        $sql = "DELETE FROM `user` WHERE id='{$id}'";
        return $this->db->exec($sql);
    }

    // 添加用户
    public function addUser()
    {
        $registerTime = time();
        $sql = "INSERT INTO `user`
                  (`name`, `nickname`, `email`, `mobile_number`, `register_time`)
                  VALUES ('{$_POST['name']}', '{$_POST['nickname']}', '{$_POST['email']}', '{$_POST['mobile_number']}', '{$registerTime}')";
        return $this->db->exec($sql);
    }

    // 修改用户
    public function updateUser($id, $name, $nickname, $email, $mobileNumber)
    {
        $sql = "UPDATE `user`
                  SET name='{$name}', nickname='{$nickname}', email='{$email}', mobile_number='{$mobileNumber}'
                  WHERE id='{$id}'";
        return $this->db->exec($sql);
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM `user` WHERE id='{$id}'";
        return $this->db->GetOneRow($sql);
    }
}