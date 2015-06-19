<?php
include('common.php');
$admin_id_key=$_SESSION['admin_id_key'];
$adminmenu[] = array(
	'headnav' => '关于我们',
	'subnav' => array(
		array('name' => '内容列表', 'menumark' => 'about_list', 'url' => 'admin.php?mod=about&act=list'),
		array('name' => '添加内容', 'menumark' => 'about_add', 'url' => 'admin.php?mod=about&act=add')
	)
);
$adminmenu[] = array(
	'headnav' => '产品展示',
	'subnav' => array(
		array('name' => '产品分类', 'menumark' => 'category_article', 'url' => 'admin.php?mod=category&act=list&type=article'),
		array('name' => '产品列表', 'menumark' => 'article_list', 'url' => 'admin.php?mod=article&act=list'),
	)
);
$adminmenu[] = array(
	'headnav' => '海参百科',
	'subnav' => array(
		array('name' => '文章分类', 'menumark' => 'category_article', 'url' => 'admin.php?mod=category&act=list&type=article'),
		array('name' => '文章列表', 'menumark' => 'article_list', 'url' => 'admin.php?mod=article&act=list'),
	)
);
$adminmenu[] = array(
	'headnav' => '海参泡发方法',
	'subnav' => array(
		array('name' => '文章分类', 'menumark' => 'category_article', 'url' => 'admin.php?mod=category&act=list&type=article'),
		array('name' => '文章列表', 'menumark' => 'article_list', 'url' => 'admin.php?mod=article&act=list'),
	)
);
$adminmenu[] = array(
	'headnav' => '海参做法',
	'subnav' => array(
		array('name' => '文章分类', 'menumark' => 'category_article', 'url' => 'admin.php?mod=category&act=list&type=article'),
		array('name' => '文章列表', 'menumark' => 'article_list', 'url' => 'admin.php?mod=article&act=list'),
	)
);
$adminmenu[] = array(
	'headnav' => '养生资讯',
	'subnav' => array(
		array('name' => '文章分类', 'menumark' => 'category_article', 'url' => 'admin.php?mod=category&act=list&type=article'),
		array('name' => '文章列表', 'menumark' => 'article_list', 'url' => 'admin.php?mod=article&act=list'),
	)
);
$adminmenu[] = array(
	'headnav' => '联系方式',
	'subnav' => array(
		array('name' => '内容列表', 'menumark' => 'about_list', 'url' => 'admin.php?mod=about&act=list'),
		array('name' => '添加内容', 'menumark' => 'about_add', 'url' => 'admin.php?mod=about&act=add')
	)
);
/*$adminmenu[] = array(
	'headnav' => '新闻动态',
	'subnav' => array(
		array('name' => '文章分类', 'menumark' => 'category_article', 'url' => 'admin.php?mod=category&act=list&type=article'),
		array('name' => '文章列表', 'menumark' => 'article_list', 'url' => 'admin.php?mod=article&act=list'),
	)
);
$adminmenu[] = array(
	'headnav' => '业务体系',
	'subnav' => array(
		array('name' => '内容列表', 'menumark' => 'page_list', 'url' => 'admin.php?mod=page&act=list'),
		array('name' => '添加内容', 'menumark' => 'page_add', 'url' => 'admin.php?mod=page&act=add')
	)
);

$adminmenu[] = array(
	'headnav' => '经典案例',
	'subnav' => array(
		array('name' => '案例分类', 'menumark' => 'category_jingdiananli', 'url' => 'admin.php?mod=category&act=list&type=jingdiananli'),
		array('name' => '案例列表', 'menumark' => 'jingdiananli_list', 'url' => 'admin.php?mod=jingdiananli&act=list')
	)
);
$adminmenu[] = array(
	'headnav' => '合作伙伴',
	'subnav' => array(
		array('name' => '内容列表', 'menumark' => 'parent_list', 'url' => 'admin.php?mod=parent&act=list')
	)
);*/
$adminmenu[] = array(
	'headnav' => '用户管理',
	'subnav' => array(
		array('name' => '会员列表', 'menumark' => 'user_list', 'url' => 'admin.php?mod=user&act=list'),
		//array('name' => '后台权限组', 'menumark' => 'admin_group', 'url' => 'admin.php?mod=group&act=list'),
		array('name' => '后台管理员', 'menumark' => 'admin_list', 'url' => 'admin.php?mod=admin&act=list')
	)
);

/*
$adminmenu[] = array(
	'headnav' => '控制面板',
	'subnav' => array(
		//array('name' => '基本信息', 'menumark' => 'setting_base', 'url' => 'admin.php?mod=setting&act=base'),
		//array('name' => '支付接口', 'menumark' => 'setting_pay', 'url' => 'admin.php?mod=setting&act=pay'),
		//array('name' => '缓存管理', 'menumark' => 'cache_list', 'url' => 'admin.php?mod=cache&act=list'),
		//array('name' => '友情链接', 'menumark' => 'link_list', 'url' => 'admin.php?mod=link&act=list'),
		//array('name' => '广告列表', 'menumark' => 'ad_list', 'url' => 'admin.php?mod=ad&act=list')
	)
);*/


if ($admin_id_key=='' && $act=='index') {
	goto('admin.php?mod=do&act=login');
}
if ($admin_id_key!='' && $act=='index') {
	goto('admin.php?mod=about&act=list');
}

include(PATH_ROOT."module/{$module}/{$mod}.php");
?>
