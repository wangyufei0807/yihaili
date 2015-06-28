<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/message/message.html', '47888b0cc3f9c12713b21e403cac015e', 1435507574);?>

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
                            <ul>
                                <li>
                                    <label for="name">
                                        <span class="red">*</span>您的姓名：</label>
                                    <input type="text" maxlength="100" class="input_text required" id="ContentPlaceHolder1_name" name="name">
                                </li>
                                <li>
                                    <label for="email">
                                        <span class="red">*</span>电子邮箱：</label>
                                    <input type="text" class="input_text required email" id="ContentPlaceHolder1_email" name="email">
                                </li>
                                <li>
                                    <label for="subject">
                                        您的电话：</label>
                                    <input type="text" class="input_text" id="ContentPlaceHolder1_phone" name="phone">
                                </li>
                                <li>
                                    <label for="country">
                                        联系地址：</label>
                                    <input type="text" class="input_text" id="ContentPlaceHolder1_country" name="country">
                                </li>
                                <li>
                                    <label class="label" for="message">
                                        <span class="red">*</span>留言：</label>
                                    <textarea class="textarea required message_length" id="ContentPlaceHolder1_txtMain" name="txtMain"></textarea>
                                    <div class="message_tips_wrap clear">
                                    </div>
                                </li>
                                <li class="Sub_li"><span>&nbsp;</span>
                                    <input type="submit" id="ContentPlaceHolder1_submit" value="提交">
                                    <input type="reset" id="ContentPlaceHolder1_reset" value="重置">
                                </li>
                            </ul>
                        </div>
                    </div>      
        		</div>
	    	</div>
		</div>
	</div>
<? include($template->getfile('default/index/footer.html')); ?>
