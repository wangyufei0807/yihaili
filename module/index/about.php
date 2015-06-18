<?php
if(!$_g_id){
$info = $db->select("select * from `".dbpre."about`" );
$fenlei = $db->selectall("select * from `".dbpre."about` where id<>7" );
include($template->getfile('default/index/about/index.html'));
}else{
$info = $db->select("select * from `".dbpre."about` where id='$_g_id'" );
$fenlei = $db->selectall("select * from `".dbpre."about` where id<>7" );
include($template->getfile('default/index/about/list.html'));
}
?>