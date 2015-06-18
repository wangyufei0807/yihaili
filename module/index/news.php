<?php
switch ($act) {
	//#####################@ 文章列表 @#####################//
	case 'list':
		$category_id = intval($_g_type);
		$info = $db->select("select * from `".dbpre."category` where category_id='$category_id' order by category_id desc");
		$info_list = $db->selectall("select * from `".dbpre."article` where category_id='$category_id' order by article_id desc", array(20, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['article_atime'] = pe_date($v['article_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/index/news/list.html'));
	break;
	//#####################@ 文章内容 @#####################//
	case 'info':
		$article_id = intval($_g_id);
		$info = $db->select("select * from `".dbpre."article` where article_id='$article_id'");
		$info['article_atime']=pe_date($info['article_atime']);

		$fenlei = $db->select("select * from `".dbpre."category` where category_id='".$info['category_id']."' order by category_id desc");
		$db->update("update `".dbpre."article` set article_clicknum=article_clicknum+1 where article_id='$article_id'");
		
		include($template->getfile('default/index/news/news.html'));
	break;
		//#####################@ 文章首页 @#####################//
	default:
		$logo = $db->selectall("select * from `".dbpre."article`  where article_logo is not null and category_id=2 ORDER BY article_logo DESC LIMIT 0,1"); //公司新闻
		
		$info = $db->selectall("select * from `".dbpre."article` where category_id=2 ORDER BY article_id DESC LIMIT 0,9"); //公司新闻
		foreach ($info as $k => $v) {
			$info[$k]['article_atime']=pe_date($v['article_atime']);
			$info[$k]['article_name']=mb_substr($v['article_name'], 0, 20, 'utf-8');
		}
		
		$hylogo = $db->selectall("select * from `".dbpre."article`  where article_logo is not null and category_id=3 ORDER BY article_logo DESC LIMIT 0,1"); //行业动态
		
		$hyinfo = $db->selectall("select * from `".dbpre."article` where category_id=3 ORDER BY article_id DESC LIMIT 0,9"); //行业动态
		foreach ($hyinfo as $k => $v) {
			$hyinfo[$k]['article_atime']=pe_date($v['article_atime']);
			$hyinfo[$k]['article_name']=mb_substr($v['article_name'], 0, 20, 'utf-8');
		}
		include($template->getfile('default/index/news/index.html'));
	break;
}
?>