<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/baike/show.html', '6376646d46ac875d7d8c1b6cc90dcb88', 1435499995);?>

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
                    <h2 class="tit"><?=$info['article_name']?></h2>
                    <h6 class="time"><?=$info['article_atime']?></h6>
                    <div class="show-con">
                        <?=$info['article_text']?>
                    </div>
        		</div>
	    	</div>
		</div>
	</div>
<? include($template->getfile('default/index/footer.html')); ?>
