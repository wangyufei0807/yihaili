<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/message/message_show.html', '7ed22d926cc7a524c2527962c4ae85f1', 1434981007);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">查看留言</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">留言 ID：</td>
		<td><?=$info['msg_id']?></td>
	</tr>
	<tr>
		<td>姓名：</td>
		<td><?=$info['user_tname']?></td>
	</tr>
	<tr>
		<td>邮箱：</td>
		<td><?=$info['user_email']?></td>
	</tr>
	<tr>
		<td>电话：</td>
		<td><?=$info['user_phone']?></td>
	</tr>
	<tr>
		<td>留言时间：</td>
		<td><?=$info['user_atime']?></td>
	</tr>
	<tr>
		<td>留言内容：</td>
		<td><?=$info['msg_content']?></td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
