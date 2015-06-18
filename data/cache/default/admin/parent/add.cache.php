<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/parent/add.html', '26e971cce1c913c567f0b11f7af68752', 1354521920);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2"><? if($_g_act=='edit') { ?>修改<? } else { ?>增加<? } ?></div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>" enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">名称：</td>
		<td><input type="text" name="info[name]" value="<?=$info['name']?>" class="inputtext inputtext_500" /></td>
	</tr>
	<tr>
		<td>缩略图：</td>
		<td><input type="file" name="logo" size="11" /></td>
	</tr>
	<tr>
		<td>发布日期：</td>
		<td colspan="2"><input type="text" name="info[parent_atime]" value="<?=$info['parent_atime']?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" class="Wdate" /></td>
	</tr>
	<tr>
		<td colspan="2"><textarea name="info[text]" id="editortext" style="width:100%;height:600px"><?=$info['text']?></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="提 交" class="tjbtn" /></td>
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
