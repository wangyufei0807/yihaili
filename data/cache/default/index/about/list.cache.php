<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/about/list.html', '0156fb3789bac62b08bfddac25330244', 1435567268);?>

<? include($template->getfile('default/index/header.html')); ?>
<!-- 内容 -->
    <div class="g-bd">
        <div class="g-in">
            <div class="content-box">
                <div class="c-top">
                    <em>YIHAILI</em><br>
                    壹海里 · <?=$info['name']?>
                </div>
                <div class="txt-con">
                    <?=$info['text']?>
                </div>
            </div>
        </div>
    </div>
<? include($template->getfile('default/index/footer.html')); ?>
