<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/jingdiananli/news.html', '0b205c47fd73530b2e7b4fda85016664', 1354521387);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?=$info['category_name']?> - 经典案例</title>
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
	<div class="list_left_t1"><a href="#">CASE 经典案例</a></div>
	<div class="list_left_menu">
		<div id="wrapper-250">
		  <ul class="accordion">
		  <? if(is_array($category_jingdiananli)) { foreach($category_jingdiananli as $v) { ?>				<li><a href="/index.php?mod=case&amp;act=list&amp;type=<?=$v['category_id']?>"><?=$v['category_name']?></a> </li>
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

	<div class="list_right_t1">	<img src="<?=PATH_URL?>templates/default/index/images/case-ad.jpg" border="0"/></div>
	<div class="list_right_t2"><a href="/" >首页</a>&nbsp;>&nbsp;<a href="/index.php?mod=case">经典案例</a>&nbsp;>&nbsp; <a href="/index.php?mod=case&amp;act=list&amp;type=<?=$info['category_id']?>"><?=$info['category_name']?></a></div>
	<div class="list_right_t3"><?=$info['jingdiananli_name']?></div>
    <div class="list_right_main"><?=$info['jingdiananli_text']?></div>	

</div>
<!--列表right-->

</div>

<!--列表main结束-->
<? include($template->getfile('default/index/footer.html')); ?>
