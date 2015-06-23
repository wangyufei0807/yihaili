<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/header.html', 'ff471362c356fcda230904d1f1411d1c', 1435072597);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<meta name="keywords" content="<?=$seo['keywords']?>" />
<meta name="description" content="<?=$seo['description']?>" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/admin/css/all.css"  />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/admin/css/style.css" />
<script src="<?=PATH_URL?>templates/default/admin/js/jquery.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/admin/js/global.js" type="text/javascript"></script>
</head>
<body>
<div class="bgimg"></div>
<div class="pagetop">
	<div class="logo fl">壹海里后台管理系统</div>
	<div class="head_r fr">
		<a href="/" target="_blank">【网站首页】</a>
		<a href="admin.php?mod=do&amp;act=logout">【注销】</a>
	</div>
	<div class="clear"></div>
</div>
<div class="content">
	<div class="main_top"></div>
	<div class="main">
		<div class="left fl"><? if(is_array($adminmenu)) { foreach($adminmenu as $key => $val) { ?><div class="fenlei">
				<h3><?=$val['headnav']?></h3>
				<ul><? if(is_array($val['subnav'])) { foreach($val['subnav'] as $vv) { ?>					<li <? if($vv['menumark']==$menumark ) { ?>class="sel"<? } ?>><a href="<?=$vv['url']?>"><?=$vv['name']?></a></li>
					<? } } ?></ul>
			</div><? } } ?></div>