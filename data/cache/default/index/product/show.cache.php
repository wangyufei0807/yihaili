<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/product/show.html', 'a6af6d6a93d83af13ea448962b95b98b', 1435501717);?>

<? include($template->getfile('default/index/header.html')); ?>
<!-- 内容 -->
	<div class="g-bd">
		<div class="g-in">
			<div class="content-box">
        		<div class="c-top">
                    <em>YIHAILI</em><br>
                    壹海里 · <?=$fenlei['category_name']?>
        		</div>
        		<div class="show-body">
                    <h2 class="tit"><?=$info["product_name"]?></h2>
                    <h6 class="time"><?=$info["product_atime"]?></h6>
                    <div class="show-con">
                        <?=$info['product_text']?>
                    </div>
        		</div>
	    	</div>
		</div>
	</div>
<? include($template->getfile('default/index/footer.html')); ?>
