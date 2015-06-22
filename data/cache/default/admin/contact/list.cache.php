<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/contact/list.html', '18662fa3db9fb3ab7bab56c84c1dbac5', 1434979785);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">
			<span class="fl">列表</span>
			<span class="fr fabu mat8"><a href="admin.php?mod=about&amp;act=add">增加</a></span>
		</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" id="form">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list mat5">
	<tr>
		<td class="bgtt" align="center" width="10"><input type="checkbox" name="checkall" onclick="pe_checkall(this, 'id')" /></td>
		<td class="bgtt" align="center" width="40">ID号</td>
		<td class="bgtt" align="center">名称</td>
		<td class="bgtt" align="center" width="70">操作</td>
	</tr><? if(is_array($info_list)) { foreach($info_list as $key => $v) { ?><tr>
		<td align="center"><input type="checkbox" name="id[]" value="<?=$v['id']?>"></td>
		<td align="center"><?=$v['id']?></td>
		<td align="center"><?=$v['name']?></td>
		<td align="center">
			<a href="admin.php?mod=about&amp;act=edit&amp;id=<?=$v['id']?>" class="admin_edit">修改</a>
			<a href="admin.php?mod=about&amp;act=delsql&amp;id=<?=$v['id']?>" class="admin_del" onclick="return pe_cfone('删除')">删除</a>
		</td>
	</tr><? } } ?><tr>
		<td class="bgtt" align="center"><input type="checkbox" name="checkall" onclick="pe_checkall(this, 'id')" /></td>
		<td class="bgtt" colspan="6">
			<span class="fl"><button href="admin.php?mod=about&amp;act=delsql" onclick="return pe_cfall(this, 'id', 'form', '批量删除')">批量删除</button></span>
			<span class="fenye"><?=$page?></span>
		</td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
