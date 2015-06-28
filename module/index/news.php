<?php
switch ($act) {
	//#####################@ 文章列表 @#####################//
	case 'list':
		$dev = 4;
		$category_id = intval($_g_type);
		$info_list = $db->selectall("select * from `".dbpre."news` where category_id='$category_id' order by article_id desc", array(10, $_g_page));
		$fenlei = $db->select("select category_name from `".dbpre."category` where category_id ='$category_id'");
		$page=$db->page->html;
		include($template->getfile('default/index/news/list.html'));
	break;
	//#####################@ 文章内容 @#####################//
	case 'info':
		$dev = 4;
		$article_id = intval($_g_id);
		$info = $db->select("select * from `".dbpre."news` where article_id='$article_id'");
		$info['article_atime']=pe_date($info['article_atime']);

		$fenlei = $db->select("select * from `".dbpre."category` where category_id='".$info['category_id']."'");
		$db->update("update `".dbpre."news` set article_clicknum=article_clicknum+1 where article_id='$article_id'");
		
		include($template->getfile('default/index/news/show.html'));
	break;
		//#####################@ 文章首页 @#####################//
	default:
		echo "走错地方啦！";
	break;
}
?>