<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/header.html', 'e9bb390fdeef8d6a64abf9e547e95948', 1434979136);?>
<body>
<div id="list_header">
	<div id="list_header_img">
		<div id="list_header_img_tu">
			<a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.aladdin-media.com/')" href="#"><img src="<?=PATH_URL?>templates/default/index/images/zhu_a1_r1_c1.gif" /></a> 
			<a onclick="window.external.addFavorite(location.href,document.title)" href="#"><img src="<?=PATH_URL?>templates/default/index/images/a1_r1_c2.gif" /></a>
			<a href="#"><img src="<?=PATH_URL?>templates/default/index/images/a1_r1_c3.gif" /></a>
		</div>	
	</div>
</div>

<div id="donghang_list">
	<div  id="daohang_nav">
		<div id="daohang_nav_left">
			<a href="/">首页</a> 
			<a href="/index.php?mod=about"> 走进阿拉丁 </a>
			<a href="/index.php?mod=news"> 新闻动态 </a>
			<a href="/index.php?mod=services">业务体系</a>
			<a href="/index.php?mod=case">经典案例</a>
			<a href="/index.php?mod=parent" >合作伙伴</a>
			<a href="/index.php?mod=about&amp;id=7">联系我们</a> 
		</div>
										
		<div id="daohang_nav_right">
			<form name=search_js1 method=post action='/index.php?mod=search' onsubmit='return search_check(document.search_js1);'>
				<input type="hidden" name=show  value=title,smalltext />	
					<div class="daohang_nav_right_sou">
						<input name="keyboard" type="text" id="textfield" value=""     class="search"  /> 
					</div>
														    
					<div class="daohang_nav_right_button">
						<input type="image" name="Submit" value="提交" src="<?=PATH_URL?>templates/default/index/images/a1_r2_c14.jpg"  />
					</div>								  
			</form>	  
		</div>
										
	</div>	
</div>


<!--beijing-->
<div id="yanse_bj">
&nbsp;
</div>
<!--beijing结束-->