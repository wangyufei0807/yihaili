<?php
if(!$_g_id){
$info = $db->selectall("select * from `".dbpre."parent` ORDER BY `id` DESC" );
$fenlei = $db->selectall("select * from `".dbpre."parent`" );
include($template->getfile('default/index/parent/list.html'));
}else{
$info = $db->select("select * from `".dbpre."parent` where id='$_g_id'" );
$fenlei = $db->selectall("select * from `".dbpre."parent`" );
include($template->getfile('default/index/parent/news.html'));
}

?>