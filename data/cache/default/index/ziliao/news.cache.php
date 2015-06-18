<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/ziliao/news.html', 'd945cd007b939f34532c21a308276730', 1354293947);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?=$info['category_name']?> - 资料中心</title>
<meta name="keywords" content="<?=$seo['keywords']?>" />
<meta name="description" content="<?=$seo['description']?>" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/index/css/index.css"  />
<script src="<?=PATH_URL?>templates/default/index/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/index/js/tab.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/index/js/dianji2.js" type="text/javascript"></script>
</head>
<body>
<? include($template->getfile('default/index/header.html')); ?>
 

<!--leibiao_banner-->
<div id="liebiao_banner">
     <img src="<?=PATH_URL?>templates/default/index/images/about/ad.jpg" border="0"/>
</div>

<div id="liebiao_banner_xian">

</div>
<!--leibiao_banner结束-->



<!--总体-->
<div id="liebiao_main">

<!--liebiao_left-->
<div id="liebiao_left">




<div id="left_daohang">
   <div class="left_daohang_s1"></div><? if(is_array($category_ziliaoarr)) { foreach($category_ziliaoarr as $v) { ?>	<div class="left_daohang_s2">
	<a href="index.php?mod=ziliao&amp;act=list&amp;type=<?=$v['category_id']?>"><?=$v['category_name']?></a></div> 
	<? } } ?></div>

</div>
<!--liebiao_right-->
<div id="liebiao_right">
    <div id="liebiao_newsnav">
	      <div class="liebiao_newsnav_left">
		      <a href="/"><img src="<?=PATH_URL?>templates/default/index/images/about/neiye.jpg" /></a>
          </div>
		  <div class="liebiao_newsnav_right">
		       <a href="/">首页</a>&nbsp;&gt;&nbsp; <a href="/index.php?mod=ziliao&amp;act=list&amp;type=<?=$fenlei['category_id']?>"><?=$fenlei['category_name']?></a>
          </div>
    </div>
	<div id="liebiao_content">
	     <div class="liebiao_title"><?=$info['ziliao_name']?></div>
		 <div class="liebiao_newstext"><?=$info['ziliao_text']?></div>
	</div>
</div>
<!--liebiao_right结束-->

</div>
<!--总体结束-->
<? include($template->getfile('default/index/footer.html')); ?>
