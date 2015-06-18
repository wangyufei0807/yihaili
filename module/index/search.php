<?php

	$keyboard=$_POST['keyboard'] ? $_POST['keyboard'] : $_GET['keyboard'];
	$info_list = $db->selectall("select * from `".dbpre."article` where article_name like '%$keyboard%' order by article_id desc", array(20, $_g_page));
	foreach ($info_list as $k => $v) {
		$info_list[$k]['article_atime'] = pe_date($v['article_atime']);
	}
	include($template->getfile('default/index/news/list.html'));

?>