<?php
	
	$dev = 1;
	$id = intval($_g_id);
	$info = $db->select("select * from `".dbpre."about` where id='$id'" );
	$fenlei = $db->selectall("select * from `".dbpre."about`" );
	include($template->getfile('default/index/about/list.html'));

?>