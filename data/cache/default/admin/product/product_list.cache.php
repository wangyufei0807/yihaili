<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/product/product_list.html', 'f5e4ff63d6211c5aa9686a7184311296', 1434973679);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">
			<span class="fl">产品列表</span>
			<span class="fr fabu mat8"><a href="admin.php?mod=product&amp;act=add">发布产品</a></span>
		</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<div class="spqh mat8">
		<div class="fr searbox mat3">
			<form method="get">
				<input type="text" name="keyword" value="<?=$_g_keyword?>" class="inputtext inputtext_200 fl" />
				<select name="category_id" class="inputselect fl mal5 mar5">
					<option value="">所有分类</option><? if(is_array($category_treelist)) { foreach($category_treelist as $key => $v) { ?><option value="<?=$v['category_id']?>" <? if($v['category_id']==$category_id) { ?>selected="selected"<? } ?>><?=$v['category_showname']?></option><? } } ?></select>
				<input type="submit" value="搜索" class="input2" />
			</form>
		</div>
		<div class="clear"></div>
	</div>
	<form method="post" id="form">
	<table border="0" cellspacing="0" cellpadding="0" class="list mat5">
	<tr>
		<td class="bgtt" align="center" width="10"><input type="checkbox" name="checkall" onclick="pe_checkall(this, 'product_id')" /></td>
		<td class="bgtt" align="center" width="40">ID号</td>
		<td class="bgtt" align="center">产品名称</td>
		<td class="bgtt" align="center" width="100">产品分类</td>
		<td class="bgtt" align="center" width="60">发布时间</td>
		<td class="bgtt" align="center" width="50">点击数</td>
		<td class="bgtt" align="center" width="70">操作</td>
	</tr><? if(is_array($info_list)) { foreach($info_list as $key => $v) { ?><tr>
		<td align="center"><input type="checkbox" name="product_id[]" value="<?=$v['product_id']?>"></td>
		<td align="center"><?=$v['product_id']?></td>
		<td><? if($v['product_logo']) { ?><span class="cred">[图]</span><? } ?><a href="/index.php?mod=product&amp;act=info&amp;id=<?=$v['product_id']?>" target="_blank"><?=$v['product_name']?></a></td>
		<td align="center"><?=$v['category_name']?></td>
		<td align="center"><?=$v['product_atime']?></td>
		<td align="center"><?=$v['product_clicknum']?></td>
		<td align="center">
			<a href="admin.php?mod=product&amp;act=edit&amp;id=<?=$v['product_id']?>" class="admin_edit">修改</a>
			<a href="admin.php?mod=product&amp;act=delsql&amp;id=<?=$v['product_id']?>" class="admin_del" onclick="return pe_cfone('删除')">删除</a>
		</td>
	</tr><? } } ?><tr>
		<td class="bgtt"><input type="checkbox" name="checkall" onclick="pe_checkall(this, 'product_id')" /></td>
		<td class="bgtt" colspan="6">
			<span class="fl">
				<button href="admin.php?mod=product&amp;act=delsql" onclick="return pe_cfall(this, 'product_id', 'form', '批量删除')">批量删除</button>
			</span>
			<span class="fenye"><?=$page?></span>
		</td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
