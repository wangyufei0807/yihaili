<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/news/index.html', 'c507ab89092698b7680105c4710d44c8', 1434969595);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>新闻动态</title>
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
	<div class="list_left_t1"><a href="#">NEWS 新闻动态</a></div>
	<div class="list_left_menu">
		<div id="wrapper-250">
		  <ul class="accordion">
		  <? if(is_array($category_articlearr)) { foreach($category_articlearr as $v) { ?>				<li><a href="/index.php?mod=news&amp;act=list&amp;type=<?=$v['category_id']?>"><?=$v['category_name']?></a> </li>
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
	<div class="list_right_t1">	<img src="<?=PATH_URL?>templates/default/index/images/news.jpg" border="0"/></div>
	<div class="list_right_t2"><a href="/" >首页</a>&nbsp;>&nbsp;<a href="/index.php?mod=news">新闻动态</a></div>
	<div class="list_right_t3">新闻动态</div>
	
	<div class="list_right_main">
		<!--左-->
		<div class="list_right_main_news">
		
		    <div  style="width:351px;height:30px;" >
			    <a href="/index.php?mod=news&amp;act=list&amp;type=2"><img src="<?=PATH_URL?>templates/default/index/images/new2.jpg"   style="display:block;" /></a>
		    </div>
			           <? if(is_array($logo)) { foreach($logo as $v) { ?>			   <div class="list_right_main_news_img">
					<a href="/index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>">  <img src="<?=$v['article_logo']?>" /> </a>  
			   </div>
			<? } } if(is_array($info)) { foreach($info as $v) { ?>				<div class="news_text2">
					<div class="news_text_title2">
					<a href="/index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>"> <?=$v['article_name']?> </a>
					</div>
					<div class="news_text_time2">
						   <?=$v['article_atime']?>
					</div>
				</div>
			<? } } ?>   
		</div>
		<!--左结束-->
			   
		<!--右-->
		<div class="list_right_main_news  float_right2">
		
				<div  style="width:351px;height:30px;" >
					<a href="/index.php?mod=news&amp;act=list&amp;type=3"><img src="<?=PATH_URL?>templates/default/index/images/new1.jpg"   style="display:block;" /></a>
				</div>
						   

				   <div class="list_right_main_news_img">
						<a href="/index.php?mod=news&amp;act=list&amp;type=3">  <img src="<?=PATH_URL?>templates/default/index/images/hydt.jpg" /> </a>  
				   </div><? if(is_array($hyinfo)) { foreach($hyinfo as $v) { ?>					<div class="news_text2">
						<div class="news_text_title2">
						<a href="/index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>"> <?=$v['article_name']?> </a>
						</div>
						<div class="news_text_time2">
							   <?=$v['article_atime']?>
						</div>
					</div>
				<? } } ?>  
				   
		</div>
		<!--右结束-->
	</div>

</div>
<!--列表right-->


</div>
<!--列表main结束-->
<? include($template->getfile('default/index/footer.html')); ?>
