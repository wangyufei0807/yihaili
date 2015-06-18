<?php
switch ($act) {
	//#####################@ 经典案例内容 @#####################//
	case 'info':
		$jingdiananli_id = intval($_g_id);
		$info = $db->select("select * from `".dbpre."jingdiananli` where jingdiananli_id='$jingdiananli_id'");
		$info['jingdiananli_atime']=pe_date($info['jingdiananli_atime']);

		$fenlei = $db->select("select * from `".dbpre."category` where category_id='".$info['category_id']."' order by category_id desc");
		$db->update("update `".dbpre."jingdiananli` set jingdiananli_clicknum=jingdiananli_clicknum+1 where jingdiananli_id='$jingdiananli_id'");
		
		include($template->getfile('default/index/jingdiananli/news.html'));
	break;
		//#####################@ 经典案例列表 @#####################//
	case 'list':
		$category_id = intval($_g_type);
		$info = $db->select("select * from `".dbpre."category` where category_id='$category_id' order by category_id desc");
		$info_list = $db->selectall("select * from `".dbpre."jingdiananli` where category_id='$category_id' order by jingdiananli_id desc", array(20, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['jingdiananli_atime'] = pe_date($v['jingdiananli_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/index/jingdiananli/list.html'));
	break;
		//#####################@ 经典案例主页 @#####################//
	default:
		$fenlei = $db->select("select * from `".dbpre."category` where category_id='".$info['category_id']."' order by category_id desc");
		$info = $db->select("select * from `".dbpre."category` where category_id='$category_id' order by category_id desc");
		$info_list = $db->selectall("select * from `".dbpre."jingdiananli` where category_id='$category_id' order by jingdiananli_id desc", array(20, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['jingdiananli_atime'] = pe_date($v['jingdiananli_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/index/jingdiananli/index.html'));
	break;
}
?>