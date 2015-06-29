<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/product/list.html', '3067bd0714d52f79224a3d447249eac8', 1435590168);?>

<? include($template->getfile('default/index/header.html')); ?>
<!-- 内容 -->
	<div class="g-bd">
		<div class="g-in">
			<div class="content-box">
        		<div class="c-top">
                    <em>YIHAILI</em><br>
                    壹海里 · <?=$fenlei['category_name']?>产品
        		</div>
        		<div class="pro-list">
                    <ul class="f-cb">
                    <? if(is_array($info_list)) { foreach($info_list as $v) { ?>                        <li>
                            <div class="pro-item"><a href="/index.php?mod=product&amp;act=info&amp;id=<?=$v['product_id']?>"><img width="210" height="210" src="<?=$v['product_logo']?>"></a></div>
                            <p><a href="#"><?=$v['product_name']?></a></p>
                        </li>
                        <? } } ?>            		</ul>
            		<div class="pagelink">
            			<?=$page?>
            		</div>      
        		</div>
	    	</div>
		</div>
	</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
		//设置产品列表第四个图片右边距为0
		
		$(".pro-list li").each(function(){
			var index = $(this).index();
		
			if((index+1)%4==0){
			$(this).css("padding-right","0px")
			}
		})
	});

</script>
<? include($template->getfile('default/index/footer.html')); ?>
