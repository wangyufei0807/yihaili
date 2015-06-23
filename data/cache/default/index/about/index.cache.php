<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/about/index.html', '99686f36026d4d939620021febf35224', 1434983936);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>走进阿拉丁</title>
<meta name="keywords" content="<?=$seo['keywords']?>" />
<meta name="description" content="<?=$seo['description']?>" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/index/css/index.css"  />
<script src="<?=PATH_URL?>templates/default/index/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/index/js/tab.js" type="text/javascript"></script>
<!--[if lte IE 6]>
<script src="<?=PATH_URL?>templates/default/index/js/png.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->
</head>
<? include($template->getfile('default/index/header.html')); ?>
<!--列表mian-->

<div id="list_main"   >



<!--列表left-->
<div id="list_left">
	<div class="list_left_t1"><a href="#">ABOUT US 走进阿拉丁</a></div>
	<div class="list_left_menu">
		<div id="wrapper-250">
		  <ul class="accordion"><? if(is_array($fenlei)) { foreach($fenlei as $v) { ?>				<li> <a href="/index.php?mod=about&amp;id=<?=$v['id']?>"><font color="#462B1F"><?=$v['name']?></font></a>    </li>
				<? } } ?>  </ul>
		</div>
	</div>
	<div class="list_left_t2"><img src="<?=PATH_URL?>templates/default/index/images/left_t2.jpg" /></div>
	<div class="list_left_t3"><img src="<?=PATH_URL?>templates/default/index/images/left_t3.jpg" /></div>
	<div class="list_left_t4"><img src="<?=PATH_URL?>templates/default/index/images/left_t4.jpg" /></div>
</div>
<!--列表left结束-->



<!--列表right-->
<div id="list_right">
	<div class="list_right_t1">	<img src="<?=PATH_URL?>templates/default/index/images/about.jpg" border="0"/></div>
	<div class="list_right_t2"><a href="/" >首页</a>&nbsp;>&nbsp;<a href="/index.php?mod=about">走进阿拉丁</a></div>
	<div class="list_right_t3">走进阿拉丁</div>
	<div class="list_right_t4"><a href="/index.php?mod=about&amp;id=1"><img src="<?=PATH_URL?>templates/default/index/images/right_t4_1.jpg" border="0" /></a><a href="/index.php?mod=about&amp;id=3"><img src="<?=PATH_URL?>templates/default/index/images/right_t4_2.jpg" border="0" /></a><a href="/index.php?mod=about&amp;id=5"><img src="<?=PATH_URL?>templates/default/index/images/right_t4_3.jpg" border="0" /></a><a href="/index.php?mod=about&amp;id=6"><img src="<?=PATH_URL?>templates/default/index/images/right_t4_4.jpg" border="0" /></a></div>
</div>
<!--列表right-->

</div>

<!--列表main结束-->
<? include($template->getfile('default/index/footer.html')); ?>
