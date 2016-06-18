<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */
header('Content-Type:text/html;charset=utf-8');
$p = $_GET['p'];
define('PLATFORM', $p);
define('VIEW_PATH', './app/view');
require 'core/MySQLDB.class.php';
require 'core/BaseModel.php';
require 'core/BaseController.php';
//require 'app/model/UserModel.php';
//require 'app/model/ProductModel.php';
//require "app/controller/{$p}/UserController.php";
//require 'app/controller/backend/ProductController.php';

function __autoload($className)
{
    // echo '找不到： ' . $className . '<br />';
    if (substr($className, -10) == 'Controller') {// 找不见控制器
        require "app/controller/" . PLATFORM . "/{$className}.php";
    } else if (substr($className, -5) == 'Model') {// 找不见模型
        require "app/model/{$className}.php";
    }
}

$c = (isset($_GET['c']) ? $_GET['c'] : 'User') . 'Controller';
$obj = new $c();
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$obj->$a();