<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */
class BaseController
{
    protected function redirect($url, $message = "", $time = 3)
    {
        header("Refresh: {$time}; url={$url}");
        echo $message;
    }
}