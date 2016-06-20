<?php
/**
 * 传智播客：高端PHP培训
 * 网站：http://www.itcast.cn
 */

class UserController extends BaseController
{
    function add()
    {
        if (empty($_POST)) {
            // 显示添加用户的表单
            require VIEW_PATH . '/backend/UserAdd.html';
        } else {
            // 将新用户保存到数据库中
            if (UserModel::create()->addUser()) {
                $this->redirect('index.php?p=backend&c=User&a=index', '添加成功');
            } else {
                $this->redirect('index.php?p=backend&c=User&a=index', '添加失败');
            }
        }
    }

    function delete()
    {
        $id = $_GET['id'];
        if (UserModel::create()->deleteUserById($id)) {
            $this->redirect('index.php?p=backend&c=User&a=index', '删除成功');
        } else {
            $this->redirect('index.php?p=backend&c=User&a=index', '删除失败');
        }
    }

    function update()
    {
        if (empty($_POST)) {
            $id = $_GET['id'];
            $user = UserModel::create()->getUserById($id);
            require VIEW_PATH . '/backend/UserUpdate.html';
        } else {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $nickname = $_POST['nickname'];
            $email = $_POST['email'];
            $mobileNumber = $_POST['mobile_number'];
            if (!UserModel::create()->updateUser($id, $name, $nickname, $email, $mobileNumber)) {
                // 如果updateUser返回了0表示没有被修改
                $this->redirect('index.php?p=backend&c=User&a=index', '修改失败');
            } else {
                $this->redirect('index.php?p=backend&c=User&a=index', '修改成功');
            }
        }
    }

    function index()
    {
        $users = UserModel::create()->getUsers();
        require VIEW_PATH . '/backend/UserList.html';
    }
}