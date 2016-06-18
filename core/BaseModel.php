<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */
class BaseModel
{
    protected $db;

    public function __construct()
    {
        // 5千行
        // 模型层99%时间在操作数据库
        $this->db = MySQLDB::GetDB(array(
            'host' => 'localhost',
            'port' => '3306',
            'charset' => 'utf8',
            'user' => 'root',
            'pass' => 'hahaha',
            'dbname' => 'php48',
        ));
    }

    public static function create($className = false)
    {
        // 如果没有传$className, $className应该是BaseModel的子类的类名
        if ($className === false) {
            $className = get_called_class();
        }
        static $instance = array();
        if (!isset($instance[$className])) {
            $instance[$className] = new $className();
        }
        return $instance[$className];
    }
}