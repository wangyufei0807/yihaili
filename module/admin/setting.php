<?php
switch ($act) {
	//#####################@ 支付接口 @#####################//
	case 'pay':
		Core_Auth::checkauth("setting_pay_edit"); //修改支付接口
		$menumark = 'setting_pay';
		$sql  = "select * from `".dbpre."setting`";
		$info = $db->selectall($sql);

		$action = 'admin.php?mod=setting&act=paysql';
		include($template->getfile('default/admin/setting_pay.html'));
	break;
	//#####################@ 支付接口设置sql @#####################//
	case 'paysql':
		Core_Auth::checkauth("setting_pay"); //查看支付接口
		$sql = "update `".dbpre."setting` set `setting_value` = case `setting_key`
			when 'alipay_name' then '".$_p_info['alipay_name']."'
			when 'alipay_pid' then '".$_p_info['alipay_pid']."'
			when 'alipay_key' then '".$_p_info['alipay_key']."' end
			where `setting_key` in ('alipay_name','alipay_pid','alipay_key')";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('支付接口设置成功');window.location.href='admin.php?mod=setting&act=pay';</script>";
		}
		else {
			echo "<script language='javascript'>alert('支付接口设置失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 基本信息设置sql @#####################//
	case 'basesql':
		Core_Auth::checkauth("setting_base_edit"); //修改基本信息
		$sql = "update `".dbpre."setting` set `setting_value` = case `setting_key`
			when 'web_title' then '".$_p_info['web_title']."'
			when 'web_keywords' then '".$_p_info['web_keywords']."'
			when 'web_description' then '".$_p_info['web_description']."'
			when 'web_tpl' then '".$_p_info['web_tpl']."'
			when 'web_copyright' then '".$_p_info['web_copyright']."'
			when 'web_icp' then '".$_p_info['web_icp']."'
			when 'web_weibo' then '".$_p_info['web_weibo']."'
			when 'web_tongji' then '".$_p_info['web_tongji']."' end
			where `setting_key` in ('web_title','web_keywords','web_description','web_tpl','web_copyright','web_icp','web_weibo','web_tongji')";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('基本信息设置成功');window.location.href='admin.php?mod=setting&act=base';</script>";
		}
		else {
			echo "<script language='javascript'>alert('基本信息设置失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 基本信息 @#####################//
	default:
		Core_Auth::checkauth("setting_base"); //查看基本信息
		$menumark = 'setting_base';
		$sql  = "select * from `".dbpre."setting`";
		$info = $db->selectall($sql);
		$action = 'admin.php?mod=setting&act=basesql';
		include($template->getfile('default/admin/setting_base.html'));
	break;
}
?>