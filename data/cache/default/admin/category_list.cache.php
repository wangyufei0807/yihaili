<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/category_list.html', '34efacdd48f592c77cbe4b2c1756e9e1', 1435072105);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">
			<span class="fl"><? if($type=='article') { ?>文章分类<? } else { ?>案例分类<? } ?></span>
			<span class="fr fabu mat8"><a href="admin.php?mod=category&amp;act=add&amp;type=<?=$type?>">增加分类</a></span>
		</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" id="form">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list mat5">
	<tr>
		<td class="bgtt" align="center" width="40">ID号</td>
		<td class="bgtt" align="center" width="50">排序</td>
		<td class="bgtt" align="center" width="550">分类名称</td>
		<td class="bgtt" align="center" width="70">操作</td>
	</tr><? if(is_array($info_list)) { foreach($info_list as $key => $v) { ?><tr>
		<td align="center"><?=$v['category_id']?></td>
		<td align="center"><input type="text" name="category_order[<?=$v['category_id']?>]" value="<?=$v['category_order']?>" class="inputtext inputtext_50" /></td>
		<td><?=$v['category_showname']?></td>
		<td align="center">
			<a href="admin.php?mod=category&amp;act=edit&amp;id=<?=$v['category_id']?>&amp;type=<?=$v['category_type']?>" class="admin_edit">修改</a>
			<a href="admin.php?mod=category&amp;act=delsql&amp;id=<?=$v['category_id']?>&amp;type=<?=$v['category_type']?>" class="admin_del" onclick="return pe_cfone('删除')">删除</a>
		</td>
	</tr><? } } ?><tr>
		<td class="bgtt" colspan="4"><button href="admin.php?mod=category&amp;act=ordersql&amp;type=<?=$v['category_type']?>" onclick="pe_doall(this,'form')">批量排序</button></td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
