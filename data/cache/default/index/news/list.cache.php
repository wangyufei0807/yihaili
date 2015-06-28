<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/news/list.html', '785c8cab27e309d649fedcde76f25d99', 1435509302);?>

<? include($template->getfile('default/index/header.html')); ?>
<!-- 内容 -->
	<div class="g-bd">
		<div class="g-in">
			<div class="content-box">
        		<div class="c-top">
                    <em>YIHAILI</em><br>
                    壹海里 · <?=$fenlei['category_name']?>
        		</div>
        		<div class="news-list">
                    <ul class="f-cb">
                        <? if(is_array($info_list)) { foreach($info_list as $v) { ?>                        <li>
                            <p>
                                <img width="145px" height="145px" src="<?=$v['article_logo']?>">
                                <a href="/index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>"><?=$v['article_name']?></a><br>
                                展会背景介绍：由中国医药保健品进出口商会与上海博华国际展览有限公司联合主办的“第六届中国国际健康与营养保健品
                                <br>
                                <span><a href="/index.php?mod=news&amp;act=info&amp;id=<?=$v['article_id']?>">更多&gt;&gt;</a></span>
                            </p>
                        </li>
                        <? } } ?>            		</ul>
                    <div class="pagelink">
                        <?=$page?>
                    </div>      
        		</div>
	    	</div>
		</div>
	</div>
<? include($template->getfile('default/index/footer.html')); ?>
