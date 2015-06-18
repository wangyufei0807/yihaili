<?php
$menumark = 'cache_list';
switch ($act) {
	//#####################@ 缓存更新sql @#####################//
	case 'updatesql':

		switch ($_g_cache) {
				case 'category':
					unlink(PATH_ROOT."data/cache/default/admin/category_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/category_add.cache.php");
				break;
				case 'product':
					unlink(PATH_ROOT."data/cache/default/admin/product_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/product_add.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/ask_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/ask_add.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/comment_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/comment_add.cache.php");
				break;
				case 'order':
					unlink(PATH_ROOT."data/cache/default/admin/order_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/order_add.cache.php");
				break;
				case 'article':
					unlink(PATH_ROOT."data/cache/default/admin/article_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/article_add.cache.php");
				break;
				case 'group':
					unlink(PATH_ROOT."data/cache/default/admin/group_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/group_add.cache.php");
				break;
				case 'admin':
					unlink(PATH_ROOT."data/cache/default/admin/admin_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/admin_add.cache.php");
				break;
				case 'base':
					unlink(PATH_ROOT."data/cache/default/admin/setting_base.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/setting_pay.cache.php");
				break;
				case 'link':
					unlink(PATH_ROOT."data/cache/default/admin/link_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/link_add.cache.php");
				break;
				case 'ad':
					unlink(PATH_ROOT."data/cache/default/admin/ad_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/ad_add.cache.php");
				break;
				default:
					unlink(PATH_ROOT."data/cache/default/admin/category_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/category_add.cache.php");
			
					unlink(PATH_ROOT."data/cache/default/admin/product_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/product_add.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/ask_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/ask_add.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/comment_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/comment_add.cache.php");
			
					unlink(PATH_ROOT."data/cache/default/admin/order_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/order_add.cache.php");
			
					unlink(PATH_ROOT."data/cache/default/admin/article_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/article_add.cache.php");
				
					unlink(PATH_ROOT."data/cache/default/admin/group_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/group_add.cache.php");
				
					unlink(PATH_ROOT."data/cache/default/admin/admin_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/admin_add.cache.php");
	
					unlink(PATH_ROOT."data/cache/default/admin/setting_base.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/setting_pay.cache.php");

					unlink(PATH_ROOT."data/cache/default/admin/ad_list.cache.php");
					unlink(PATH_ROOT."data/cache/default/admin/ad_add.cache.php");
				break;
			}

		echo "<script language='javascript'>alert('缓存更新成功!');window.location.href='admin.php?mod=cache&act=list';</script>";
	break;
	//#####################@ 缓存列表 @#####################//
	default:
		//后台缓存
		$info_list['base']['cache_name'] = '基本信息';
		$info_list['base']['cache_text'] = '网站【基本信息】或【支付接口】显示错乱或不显示时，可尝试更新此项解决。';
		/*
		$category_size = filesize(PATH_ROOT."templates/cache/default/admin/setting_base.cache.php");
		$category_size += filesize(PATH_ROOT."templates/cache/default/admin/setting_pay.cache.php");
		$info_list['base']['cache_size'] = round($category_size/1024, 1);
		*/

		$info_list['category']['cache_name'] = '分类信息';
		$info_list['category']['cache_text'] = '网站【商品分类】或【文章分类】显示错乱或不显示时，可尝试更新此项解决。';


		$info_list['product']['cache_name'] = '商品信息';
		$info_list['product']['cache_text'] = '网站【商品列表】或【商品咨询】或【商品评价】显示错乱或不显示时，可尝试更新此项解决。';

		$info_list['order']['cache_name'] = '订单信息';
		$info_list['order']['cache_text'] = '网站【订单列表】显示错乱或不显示时，可尝试更新此项解决。';


		$info_list['article']['cache_name'] = '文章信息';
		$info_list['article']['cache_text'] = '网站【文章列表】显示错乱或不显示时，可尝试更新此项解决。';


		$info_list['group']['cache_name'] = '后台权限组';
		$info_list['group']['cache_text'] = '网站【后台权限组】显示错乱或不显示时，可尝试更新此项解决。';

		$info_list['admin']['cache_name'] = '后台管理员';
		$info_list['admin']['cache_text'] = '网站【后台管理员】显示错乱或不显示时，可尝试更新此项解决。';


		$info_list['admin']['cache_name'] = '友情链接';
		$info_list['admin']['cache_text'] = '网站【友情链接】显示错乱或不显示时，可尝试更新此项解决。';


		$info_list['ad']['cache_name'] = '广告列表';
		$info_list['ad']['cache_text'] = '网站【广告列表】显示错乱或不显示时，可尝试更新此项解决。';
		include($template->getfile('default/admin/cache_list.html'));
	break;
}
?>