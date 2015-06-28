<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/category_add.html', '5bf4194503bf1a14bda5e25fdcdb912e', 1435418972);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2"><? if($act=='edit') { ?>修改分类<? } else { ?>增加分类<? } ?></div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">分类名称：</td>
		<td><input type="text" name="info[category_name]" value="<?=$info['category_name']?>" class="inputtext inputtext_200" /></td>
	</tr>
	<tr>
		<td>上级分类：</td>
		<td>
			<select name="info[category_pid]" class="inputtext">
			<option value="0">+++顶级分类+++</option><? if(is_array($category_treelist)) { foreach($category_treelist as $key => $v) { ?><option value="<?=$v['category_id']?>" <? if($v['category_id']==$info['category_pid']) { ?>selected="selected"<? } ?> <? if(in_array($v['category_id'], (array)$category_noid)) { ?>disabled="disabled"<? } ?>><?=$v['category_showname']?></option><? } } ?></select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="提 交" class="tjbtn" /></td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
