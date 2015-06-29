<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/admin_list.html', 'bfe3a0be905e0fe5c0f90e6d0a020a8c', 1435572006);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">
			<span class="fl">管理列表</span>
			<!-- <span class="fr fabu mat8"><a href="admin.php?mod=admin&amp;act=add">增加管理</a></span> -->
		</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" id="form">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list mat5">
	<tr>
		<td class="bgtt" align="center" width="50">ID号</td>
		<td class="bgtt" align="center" >管理帐号</td>
		<td class="bgtt" align="center" width="120">上次登录</td>
		<td class="bgtt" align="center" width="70">操作</td>
	</tr><? if(is_array($info_list)) { foreach($info_list as $key => $v) { ?><tr>
		<td align="center"><?=$v['admin_id']?></td>
		<td align="center"><?=$v['admin_name']?></td>
		<td align="center"><?=$v['admin_ltime']?></td>
		<td align="center">
			<a href="admin.php?mod=admin&amp;act=edit&amp;id=<?=$v['admin_id']?>" class="admin_edit">修改</a><!-- 
			<a href="admin.php?mod=admin&amp;act=delsql&amp;id=<?=$v['admin_id']?>" class="admin_del" onclick="return pe_cfone('删除')">删除</a> -->
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
