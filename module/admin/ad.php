<?php
$menumark = "ad_list";
switch ($act) {
	//#####################@ 增加广告 @#####################//
	case 'add':
		Core_Auth::checkauth("ad_add"); //增加广告
		$action = "admin.php?mod=ad&act=addsql";
		include($template->getfile('default/admin/ad_add.html'));
	break;
	//#####################@ 增加广告sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("ad_add"); //增加广告
		if ($_FILES['ad_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['ad_logo']);
			$_p_info['ad_logo'] = $upload->fileurl;
		}
		$sql="insert into `".dbpre."ad` (ad_id,ad_logo,ad_url) values (NULL,'".$_p_info['ad_logo']."','".$_p_info['ad_url']."')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('广告增加成功');window.location.href='admin.php?mod=ad&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('广告增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 修改广告 @#####################//
	case 'edit':
		Core_Auth::checkauth("ad_edit"); //修改广告
		$info = $db->select("select * from `".dbpre."ad` where ad_id='$_g_id'");

		$action = "admin.php?mod=ad&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/ad_add.html'));
	break;
	//#####################@ 修改广告sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("ad_edit"); //修改广告
		if ($_FILES['ad_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['ad_logo']);
			$_p_info['ad_logo'] = $upload->fileurl;
		}

		$_p_info['ad_logo'] && $sqlwhere .= " ,ad_logo='".$_p_info['ad_logo']."'"; 
		$sqlwhere .= "  where ad_id='$_g_id'";
		$sql="update `".dbpre."ad` set ad_url='".$_p_info['ad_url']."'".$sqlwhere;
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('广告修改成功');window.location.href='admin.php?mod=ad&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('广告修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 广告排序sql @#####################//
	case 'ordersql':
		Core_Auth::checkauth("ad_edit"); //修改广告
		foreach ($_p_ad_order as $k=>$v) {
			$result = $db->update("update `".dbpre."ad` set ad_order='$v' where ad_id='$k'");
		}
		if ($result) {
			echo "<script language='javascript'>alert('广告排序成功');window.location.href='admin.php?mod=ad&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('广告排序失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 广告删除 @#####################//
	case 'delsql':
		Core_Auth::checkauth("ad_del"); //删除广告
		$ad_id = is_array($_p_ad_id) ? $_p_ad_id : $_g_id;
	
		if ($db->delete("delete from `".dbpre."ad` where ad_id ='$ad_id'")) {
			echo "<script language='javascript'>alert('广告删除成功!');window.location.href='admin.php?mod=ad&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('广告删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 广告列表 @#####################//
	default :
		Core_Auth::checkauth("ad_list"); //查看广告
	
		$info_list = $db->selectall("select * from `".dbpre."ad` order by ad_order asc", array(20, $_g_page));

		$page=$db->page->html;
		include($template->getfile('default/admin/ad_list.html'));
	break;
}
?>