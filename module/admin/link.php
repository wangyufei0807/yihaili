<?php
$menumark = 'link_list';
switch ($act) {
	//#####################@ 链接增加 @#####################//
	case 'add':
		Core_Auth::checkauth("link_add"); //增加友情链接
		$action = 'admin.php?mod=link&act=addsql';
		include($template->getfile('default/admin/link_add.html'));
	break;
	//#####################@ 链接增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("link_add"); //增加友情链接
		stripos($_p_info['link_url'], 'http://') === false && $_p_info['link_url'] = "http://{$_p_info['link_url']}";
		
		$sql="insert into `".dbpre."link` (link_id,link_name,link_url,link_order) values (NULL,'".$_p_info['link_name']."','".$_p_info['link_url']."','".$_p_info['link_order']."')";

		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('链接增加成功!');window.location.href='admin.php?mod=link&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('链接增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 链接修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("link_edit"); //修改友情链接
		$info = $db->select("select * from `".dbpre."link` where link_id='$_g_id'");

		$action = "admin.php?mod=link&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/link_add.html'));
	break;
	//#####################@ 链接修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("link_edit"); //修改友情链接
		stripos($_p_info['link_url'], 'http://') === false && $_p_info['link_url'] = "http://{$_p_info['link_url']}";

		$sql="update `".dbpre."link` set link_name='".$_p_info['link_name']."',link_url='".$_p_info['link_url']."' where link_id='$_g_id'";

		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('链接修改成功!');window.location.href='admin.php?mod=link&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('链接修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 链接删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("link_del"); //删除友情链接
		$link_id = is_array($_p_link_id) ? $_p_link_id : $_g_id;

		if ($db->delete("delete from `".dbpre."link` where link_id ='$link_id'")) {
			echo "<script language='javascript'>alert('链接删除成功!');window.location.href='admin.php?mod=link&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('链接删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 链接排序sql @#####################//
	case 'ordersql':
		Core_Auth::checkauth("link_edit"); //修改友情链接
		foreach ($_p_link_order as $k => $v) {
			$result = $db->update("update `".dbpre."link` set link_order='$v' where link_id='$k'");
		}
		if ($result) {
			echo "<script language='javascript'>alert('链接排序成功!');window.location.href='admin.php?mod=link&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('链接排序失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 链接列表 @#####################//
	default:
		Core_Auth::checkauth("link_list"); //查看友情链接
		$info_list = $db->selectall("select * from `".dbpre."link` order by link_order asc");

		$page=$db->page->html;
		include($template->getfile('default/admin/link_list.html'));
	break;
}

?>