<?php

switch ($act) {
	//#####################@ 联系方式增加 @#####################//
	case 'add':
		$menumark = 'contact_add'; //左侧导航颜色
		Core_Auth::checkauth("contact_add"); //增加
		$action = 'admin.php?mod=contact&act=addsql';
		include($template->getfile('default/admin/contact/add.html'));
	break;
	//#####################@ 联系方式增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("contact_add"); //增加sql
		$sql="insert into `".dbpre."contact` (id,name,text) values (NULL,'".$_p_info['name']."','".$_p_info['text']."')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('增加成功');window.location.href='admin.php?mod=contact&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 联系方式修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("contact_edit"); //修改
		$info = $db->select("select * from `".dbpre."contact` where id='$_g_id'");

		$action = "admin.php?mod=contact&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/contact/add.html'));
	break;
	//#####################@ 联系方式修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("contact_edit"); //修改sql
		$sql="update `".dbpre."contact` set name='".$_p_info['name']."',text='".$_p_info['text']."' where id='$_g_id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=contact&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('单页修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("contact_del"); //删除
		$id = is_array($_p_id) ? $_p_id : $_g_id;
		if (is_array($id)) {
			foreach ($id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$id;
		}
		if ($db->delete("delete from `".dbpre."contact` where id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=contact&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 列表 @#####################//
	default :
		$menumark = 'contact_list';//左侧导航颜色
		Core_Auth::checkauth("contact_list"); //查看
		$info_list = $db->selectall("select * from `".dbpre."contact` order by id asc", array(20, $_g_page));
		$page=$db->page->html;
		include($template->getfile('default/admin/contact/list.html'));
	break;
}
?>