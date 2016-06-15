<?php
/**
 * 传智博客：高端PHP培训
 * 网站：http://www.itcast.cn
 */

$type = $_GET['type'];

require '1.DateModel.php';
$a = new A();
if ($type == 1) {
    $str = $a->a();
    require '1.dateView.html';
} else if ($type == 2) {
    $str = $a->b();
    require '1.timeView.html';
} else if ($type == 3) {
    $str = $a->c();
    require '1.datetimeView.html';
}