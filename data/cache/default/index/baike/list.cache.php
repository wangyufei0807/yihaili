<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/baike/list.html', '2b6bd10481602215c0dc5d88524a32d4', 1435591237);?>

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
                                <a href="/index.php?mod=baike&amp;act=info&amp;id=<?=$v['article_id']?>"><?=$v['article_name']?></a><br>
                                <?=$v['article_summary']?>
                                <br>
                                <span><a href="/index.php?mod=baike&amp;act=info&amp;id=<?=$v['article_id']?>">更多&gt;&gt;</a></span>
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
