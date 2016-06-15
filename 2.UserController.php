<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */
header('Content-Type:text/html;charset=utf-8');
$type = $_GET['type'];

require '2.UserModel.php';
$userModel = new UserModel();
if ($type == 'list') {// 表示想看用户表的列表
    $users = $userModel->getUsers();
    require '2.UserList.html';
} else if ($type == 'delete') {// 删除
    $id = $_GET['id'];
    $userModel->deleteUserById($id);
    header("Refresh: 3; url=2.UserController.php?type=list");
    echo '删除成功';
} else if ($type == 'add') {// 添加

} else if ($type == 'update') { // 修改

}