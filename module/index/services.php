<?php
if(!$_g_id){
$info = $db->selectall("select * from `".dbpre."page` ORDER BY `id` ASC LIMIT 0 ,4" );
$info1 = $db->selectall("select * from `".dbpre."page` ORDER BY `id` ASC LIMIT 4 ,8" );
$fenlei = $db->selectall("select * from `".dbpre."page` ORDER BY `id` ASC" );
include($template->getfile('default/index/page/index.html'));
}else{
$info = $db->select("select * from `".dbpre."page` where id='$_g_id'" );
$fenlei = $db->selectall("select * from `".dbpre."page` ORDER BY `id` ASC" );
include($template->getfile('default/index/page/list.html'));
}
?>