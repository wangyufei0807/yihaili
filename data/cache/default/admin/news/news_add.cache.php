<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/news/news_add.html', 'b2ec5f147b643566324021680f1606d8', 1435587536);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">发布文章</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>" enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">文章名称：</td>
		<td width="537"><input type="text" name="info[article_name]" value="<?=$info['article_name']?>" class="inputtext inputtext_500" maxlength="36" /></td>
		<td rowspan="5">
			<img src="<?=$info['article_logo']?>" width="160" height="140" style="border:1px solid #ddd" />
		</td>
	</tr>
	<tr>
		<td>文章分类：</td>
		<td>
			<select name="info[category_id]" class="inputselect"><? if(is_array($category_treelist)) { foreach($category_treelist as $key => $v) { ?><option value="<?=$v['category_id']?>" <? if($v['category_id']==$info['category_id']) { ?>selected="selected"<? } ?>><?=$v['category_showname']?></option><? } } ?></select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>

			
		</td>
	</tr>
		<tr>
		<td>缩略图：</td>
		<td><input type="file" name="article_logo" size="11" /></td>
	</tr>
	
	<tr>
		<td>发布日期：</td>
		<td colspan="2"><input type="text" name="info[article_atime]" value="<?=$info['article_atime']?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" class="Wdate" /></td>
	</tr>
	<tr>
		<td>概要：</td>
		<td colspan="2">
		<textarea name="info[article_summary]"  style="width:100%;height:50px"><?=$info['article_summary']?></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="3"><textarea name="info[article_text]" id="editortext" style="width:100%;height:600px"><?=$info['article_text']?></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="2"><input type="submit" value="提 交" class="tjbtn" /></td>
	</tr>
	</table>
	</form>
</div>
<script src="<?=PATH_URL?>include/my97/WdatePicker.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>include/editor/kindeditor.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>include/editor/lang/zh_CN.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
var editor;
KindEditor.ready(function(K) {
	editor = K.create('#editortext', {
		allowFlashUpload :false
	});
});
</script>
<? include($template->getfile('default/admin/footer.html')); ?>
