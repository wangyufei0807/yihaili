<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/group_list.html', 'f800c944ff66f96f4d0dc90d22e850f4', 1354524536);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">
			<span class="fl">后台权限组列表</span>
			<span class="fr fabu mat8"><a href="admin.php?mod=group&amp;act=add">增加</a></span>
		</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" id="form">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list mat5">
	<tr>
		<td class="bgtt" align="center" width="50">ID号</td>
		<td class="bgtt" align="center" width="150">权限组名</td>
		<td class="bgtt" align="center">权限属性</td>
		<td class="bgtt" align="center" width="100">添加时间</td>
		<td class="bgtt" align="center" width="70">操作</td>
	</tr><? if(is_array($info_list)) { foreach($info_list as $key => $val) { ?><tr>
		<td align="center"><?=$val['groupid']?></td>
		<td align="center"><?=$val['groupname']?></td>
		<td align="center"><?=$val['auths']?></td>
		<td align="center"><?=$val['timeline']?></td>
		<td align="center">
			<a href="admin.php?mod=group&amp;act=edit&amp;id=<?=$val['groupid']?>" class="admin_edit">修改</a>
			<a href="admin.php?mod=group&amp;act=delsql&amp;id=<?=$val['groupid']?>" class="admin_del" onclick="return pe_cfone('删除')">删除</a>
		</td>
	</tr><? } } ?><tr>
		<td class="bgtt" colspan="5">
			&nbsp;<span class="fenye"><?=$page?></span>
		</td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
