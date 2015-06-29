<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/product/show.html', '4027787fc9adf0038d33156432963af1', 1435570663);?>

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
                    <div class="fenxiang">
                        <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script src="http://static.bshare.cn/b/buttonLite.js#style=-1&uuid=93ff2150-2329-44d4-b3d1-fd4995bd6685&pophcol=2&lang=zh" type="text/javascript"></script><script src="http://static.bshare.cn/b/bshareC0.js" type="text/javascript"></script>
                    </div>
        		</div>
	    	</div>
		</div>
	</div>
<? include($template->getfile('default/index/footer.html')); ?>
