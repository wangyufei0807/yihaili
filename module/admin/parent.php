<?php

switch ($act) {
	//#####################@ 合作伙伴增加 @#####################//
	case 'add':
		$menumark = 'parent_add'; //左侧导航颜色
		Core_Auth::checkauth("parent_add"); //增加
		$action = 'admin.php?mod=parent&act=addsql';
		include($template->getfile('default/admin/parent/add.html'));
	break;
	//#####################@ 合作伙伴增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("parent_add"); //增加sql
		if ($_FILES['logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['logo']);
			$_p_info['logo'] = $upload->fileurl;
		}
		$_p_info['parent_atime'] = $_p_info['parent_atime'] ? strtotime($_p_info['parent_atime']) : time();
		$sql="insert into `".dbpre."parent` (id,name,text,logo,parent_atime) values (NULL,'".$_p_info['name']."','".$_p_info['text']."','".$_p_info['logo']."','".$_p_info['parent_atime']."')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('增加成功');window.location.href='admin.php?mod=parent&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 合作伙伴修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("parent_edit"); //修改
		$info = $db->select("select * from `".dbpre."parent` where id='$_g_id'");

		$action = "admin.php?mod=parent&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/parent/add.html'));
	break;
	//#####################@ 合作伙伴修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("parent_edit"); //修改sql
		$sql="update `".dbpre."parent` set name='".$_p_info['name']."',text='".$_p_info['text']."' where id='$_g_id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=parent&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('单页修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("parent_del"); //删除
		$id = is_array($_p_id) ? $_p_id : $_g_id;
		if (is_array($id)) {
			foreach ($id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$id;
		}
		if ($db->delete("delete from `".dbpre."parent` where id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=parent&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 列表 @#####################//
	default :
		$menumark = 'parent_list';//左侧导航颜色
		Core_Auth::checkauth("parent_list"); //查看
		$info_list = $db->selectall("select * from `".dbpre."parent` order by id desc", array(20, $_g_page));
		$page=$db->page->html;
		include($template->getfile('default/admin/parent/list.html'));
	break;
}
?>