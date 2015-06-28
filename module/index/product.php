<?php
switch ($act) {
	//#####################@ 产品列表 @#####################//
	case 'list':
		$dev = 2;
		$category_id = intval($_g_type);
		$info_list = $db->selectall("select * from `".dbpre."product` where category_id='$category_id' order by product_id desc", array(6, $_g_page));
		$fenlei = $db->select("select category_name from `".dbpre."category` where category_id ='$category_id'");
		$page=$db->page->html;
		include($template->getfile('default/index/product/list.html'));
	break;
	//#####################@ 产品内容 @#####################//
	case 'info':
		$dev = 2;
		$product_id = intval($_g_id);
		$info = $db->select("select * from `".dbpre."product` where product_id='$product_id'");
		$info['product_atime']=pe_date($info['product _atime']);

		$fenlei = $db->select("select * from `".dbpre."category` where category_id='".$info['category_id']."'");
		$db->update("update `".dbpre."product` set product_clicknum=product_clicknum+1 where product_id='$product_id'");
		
		include($template->getfile('default/index/product/show.html'));
	break;
		//#####################@ 产品首页 @#####################//
	default:
		
		echo "走错位置啦！";
	break;
}
?>