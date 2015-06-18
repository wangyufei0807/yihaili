<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/ziliao/list.html', 'b2ed64b8c2d4a0f3d44976e78070301e', 1354517587);?>
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
		       <a href="/">首页</a>&nbsp;&gt;&nbsp; <a href="/index.php?mod=ziliao&amp;act=list&amp;type=<?=$info['category_id']?>"><?=$info['category_name']?></a>
          </div>
    </div>
	
	<div id="liebiao_content">
		<div class="height_line">&nbsp;</div><? if(is_array($info_list)) { foreach($info_list as $v) { ?>				<div class="news_text">
					<div class="news_text_title">
						<a href="index.php?mod=ziliao&amp;act=info&amp;id=<?=$v['ziliao_id']?>">· <?=$v['ziliao_name']?>	</a>
					</div>
					<div class="news_text_time">
						  &nbsp;<?=$v['ziliao_atime']?>
					</div>
				</div>
			<? } } ?> 
			<!--分页-->
		<div id="fengye"><?=$page?></div>
			<!--分页-->
		</div>
	</div>
<!--liebiao_right结束-->

</div>
<!--总体结束-->
<? include($template->getfile('default/index/footer.html')); ?>
