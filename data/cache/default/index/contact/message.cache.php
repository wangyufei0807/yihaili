<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/contact/message.html', '0db011e37db9b5fb4f2aea3b1ebe423a', 1435509034);?>

<? include($template->getfile('default/index/header.html')); ?>
<!-- 内容 -->
	<div class="g-bd">
		<div class="g-in">
			<div class="content-box">
        		<div class="c-top">
                    <em>YIHAILI</em><br>
                    壹海里 · 在线留言
        		</div>
        		<div class="message">
                    <div class="welcome">
                        <p>
                            欢迎您访壹海里网站！<br>
                            同时我们也欢迎您对我们的产品、服务、提出宝贵意见和建议，我们将给予您及时的回复。<br>
                            注：带"<span class="red"> *</span> "为必填项！
                        </p>
                        <div class="forms" id="form_validate">
                            <form id="msgForm" action="/index.php?mod=message" method="post">
                                <ul>
                                    <li>
                                        <label for="name">
                                            <span class="red">*</span>您的姓名：</label>
                                        <input type="text" maxlength="100" class="input_text" id="user_tname" name="user_tname">
                                    </li>
                                    <li>
                                        <label for="email">
                                            <span class="red">*</span>电子邮箱：</label>
                                        <input type="text" class="input_text" id="user_email" name="user_email">
                                    </li>
                                    <li>
                                        <label for="subject">
                                            您的电话：</label>
                                        <input type="text" class="input_text" id="user_phone" name="user_phone">
                                    </li>
                                    <li>
                                        <label for="country">
                                            联系地址：</label>
                                        <input type="text" class="input_text" id="user_address" name="user_address">
                                    </li>
                                    <li>
                                        <label class="label" for="message"><span class="red">*</span>留言：</label>
                                        <textarea class="textarea required message_length" id="msg_content" name="msg_content"></textarea>
                                    </li>
                                    <li class="Sub_li"><span>&nbsp;</span>
                                        <input type="submit" id="sub-btn" value="提交">
                                        <input type="reset" id="reset-btn" value="重置">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>      
        		</div>
	    	</div>
		</div>
	</div>
<? include($template->getfile('default/index/footer.html')); ?>
