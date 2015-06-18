<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/index.html', '93cedc21ed200bec4608e0ae03ceefc6', 1354293764);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>阿拉丁担保</title>
<meta name="keywords" content="<?=$seo['keywords']?>" />
<meta name="description" content="<?=$seo['description']?>" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/index/css/index.css"  />
<script src="<?=PATH_URL?>templates/default/index/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/index/js/tab.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/index/js/dianji2.js" type="text/javascript"></script>
</head>
<body>
<? include($template->getfile('default/index/header.html')); ?>
 

<!--总体-->
<div id="index_main">
<!--left-->
<div id="index_main_left">
	<div id="index_cut">
		<!--图片展示-->
			<div class="tab">
				<dl>
					<div class="tabt2">
						<dd><? if(is_array($jdt)) { foreach($jdt as $v) { ?>							<ul>
							   <div class="banner_right_bottom">
								   <a href="/index.php?mod=fwzl&amp;id=<?=$v['id']?>"><img src="<?=$v['logo']?>" /></a>
							   </div>
							</ul> 
							<? } } ?></dd>
					</div>

					<div class="tabt1">
						<dt>
							<div class="banner_right_top"><? if(is_array($jdt_list)) { foreach($jdt_list as $v) { ?>								<a href="index.php?mod=fwzl&amp;id=<?=$v['id']?>" >  <?=$v['name']?>    </a>
							<? } } ?></div>
							<span></span>	
						</dt>
					</div> 
				</dl>
			</div>
		<!--图片展示结束-->  
	</div>
   
    <div id="index_left_bj">&nbsp;</div>
    <!--left总-->
	   <div id="index_left_z">
			<div id="index_left_z_left">
				<!--切换-->
					<div id="hezuoqiyea3jia_ny">
						<div id="con3jia">
							<ul id="tags3jia">
								<li class="selectTag3jia"><a href="#"  class="tagContent3jia0">公司新闻 <span></span>   </a></li>
								<li><a href="#" class="tagContent3jia1"> 业界动态<span> </span> </a></li>
							</ul>
							<div id="tag_more"  >  <a href="/index.php?mod=news">&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
							
							<div id="tagContent3jia">
								<div class="tagContent3jia selectTag3jia" id="tagContent3jia0">
									<ul>
										<li>
											<span class="qiehuan_jianjie_tuzhi">
												<span  class="qiehuan_jianjie_tuzhi_img"><? if(is_array($gongsitu)) { foreach($gongsitu as $v) { ?>													<a href="index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>">  <img src="<?=$v['article_logo']?>" />  </a>
												<? } } ?></span>
													
												<span  class="qiehuan_jianjie_tuzhi_left"><? if(is_array($gongsi)) { foreach($gongsi as $v) { ?>															<a href="index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>"> <?=$v['article_name']?> </a>
														<? } } ?></span>
											</span>
										</li>
									</ul>
								</div>
            
							<div class="tagContent3jia" id="tagContent3jia1">
								<ul>
									<li>
										<span class="qiehuan_jianjie_tuzhi">
											<span  class="qiehuan_jianjie_tuzhi_img"><? if(is_array($yejietu)) { foreach($yejietu as $v) { ?>													<a href="index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>">  <img src="<?=$v['article_logo']?>" />  </a>
												<? } } ?></span>
													
												<span  class="qiehuan_jianjie_tuzhi_left"><? if(is_array($yejie)) { foreach($yejie as $v) { ?>															<a href="index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>"> <?=$v['article_name']?> </a>
														<? } } ?></span>
									   </span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--切换--结束-->  
		  
				<div class="left_title6">
					<a href="/index.php?mod=ziliao&amp;act=list&amp;type=6"><span>Libray</span> 贷款百科</a>
				</div> <? if(is_array($daikuanbaike)) { foreach($daikuanbaike as $v) { ?>			<div class="left_bottom_bottom_z">
				<div class="left_bottom_bottom_z_left">
						 <a href="index.php?mod=ziliao&amp;act=info&amp;id=<?=$v['ziliao_id']?>">   <?=$v['ziliao_name']?> </a>
				</div>
				<div class="left_bottom_bottom_z_right">
						<?=$v['ziliao_atime']?>       
				</div>
			</div>
		<? } } ?><div class="left_title6">
				<a href="/index.php?mod=ziliao&amp;act=list&amp;type=7"><span>Libray</span> 理财天地 </a>
		</div> <? if(is_array($licaitiandi)) { foreach($licaitiandi as $v) { ?>			<div class="left_bottom_bottom_z">
				<div class="left_bottom_bottom_z_left">
						 <a href="index.php?mod=ziliao&amp;act=info&amp;id=<?=$v['ziliao_id']?>">   <?=$v['ziliao_name']?> </a>
				</div>
				<div class="left_bottom_bottom_z_right">
						<?=$v['ziliao_atime']?>       
				</div>
			</div>
		<? } } ?></div>
		<div id="index_left_z_right">
		   <div class="right_title">
				<a href="/index.php?mod=ziliao&amp;act=list&amp;type=5"><span>Focus</span> 热点聚焦</a>
		   </div>
								   
								   <? if(is_array($redian)) { foreach($redian as $v) { ?>			<div class="banner_right_bottom_bottom_z">
				<div class="banner_right_bottom_bottom_z_left">
						 <a href="index.php?mod=ziliao&amp;act=info&amp;id=<?=$v['ziliao_id']?>">   <?=$v['ziliao_name']?> </a>
				</div>
				<div class="banner_right_bottom_bottom_z_right">
						<?=$v['ziliao_atime']?>       
				</div>
			</div>
		<? } } ?>   
								  
		<div  id="zuoyou_gundong" >
			<iframe name="news" width="100%" frameborder="0" height="90" marginheight="0" marginwidth="0"   scrolling="no" src="/gundong.html"   ></iframe>
		</div>
		
		
		<div id="questions">   
			<div class="right_wen">
				<a href="/xdwd/"><span>Faq</span> 信贷问答 </a>
			</div><? if(is_array($xindai)) { foreach($xindai as $v) { ?>			<div class="banner_right_bottom_bottom_z6">
				<div class="banner_right_bottom_bottom_z_left6">
						 <a href="index.php?mod=ziliao&amp;act=info&amp;id=<?=$v['ziliao_id']?>">   <?=$v['ziliao_name']?> </a>
				</div>
				<div class="banner_right_bottom_bottom_z_right6">
						<?=$v['ziliao_atime']?>       
				</div>
			</div>
		<? } } ?></div>
	</div>
</div>
<!--left总结束-->
</div>
<!--left结束-->

<!--right-->
<div id="index_main_right">
       <div class="mian_right_img"><a href="/index.php?mod=about&amp;id=1"><img src="<?=PATH_URL?>templates/default/index/images/index_r8_c19.jpg" /></a></div>
	   <div class="mian_right_img"><a href="/index.php?mod=fwzl"><img src="<?=PATH_URL?>templates/default/index/images/index_r10_c19.jpg" /></a></div>
       <div class="mian_right_img"><a href="/index.php?mod=feedback"><img src="<?=PATH_URL?>templates/default/index/images/index_r12_c19.jpg" /></a></div>
	   
	   <div class="main_right_bj">&nbsp;</div>
	   
	   <div class="main_right_tel"><img src="<?=PATH_URL?>templates/default/index/images/index_r15_c19.jpg" /></div>

	    <div id="partners">
	   
	          <div class="partners_title">
	                <a href="#"><span>Parent</span> 合作伙伴</a>
			  </div>
			  
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/f6f50a89fc42b7c57bcf727ee988d2e4.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/1651e21bfc715f2fabcc78de2ff1a746.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/0863f8afc303cb703ac7de7a304f83ae.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/12b278ca4897c7a1ed91a05d60396413.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/0b1dd608a726cb1178c7e90ff415600a.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/9f5aab3664b428977492213af1d1651e.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/471502d4cff8698a4f2871c036d8743e.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/b57dd4c9cbad10a25473dd1ff2cd5994.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/f473b0da9d1dd5edbc94a7ce33b020f1.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/1ad1885981c392dfd75e2afba8e0a3fa.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/33bdfd9180241a9ec2fcefb7a97a0bbd.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/17d0f07825080e7fce746970ef3fcd01.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/da3d19d02e6c7b4bd16ed36f1b5e867c.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/1d8e953918bfcb2e913ce886680e4fb3.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/7fd8f3deee89c6088e4e18b0a4144548.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/f7de428ce0990d011a84127c93c4ffcd.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/db8a9ffc5d62b9dea801c6cf1a98764e.jpg" /></a> </div>
			  <div class="partners_img"><a href="/"><img src="<?=PATH_URL?>templates/default/index/images/hz/2a41a9ce4dd3616a68bea061b4b3c4f2.jpg" /></a> </div>			  
	</div>
</div>	
<!--right结束-->

</div>
<? include($template->getfile('default/index/footer.html')); ?>
