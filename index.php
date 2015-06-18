<?php
include('common.php');

//分类
include_once(PATH_ROOT.'hook/category.hook.php');
$category_articlearr = category_treelist('article');
$category_jingdiananli = category_treelist('jingdiananli');



include(PATH_ROOT."module/{$module}/{$mod}.php");

?>