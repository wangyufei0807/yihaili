<?php

switch ($act) {
	//#####################@ 关于我们增加 @#####################//
	case 'add':
		$menumark = 'about_add'; //左侧导航颜色
		Core_Auth::checkauth("about_add"); //增加
		$action = 'admin.php?mod=about&act=addsql';
		include($template->getfile('default/admin/about/add.html'));
	break;
	//#####################@ 关于我们增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("about_add"); //增加sql
		$sql="insert into `".dbpre."about` (id,name,text) values (NULL,'".$_p_info['name']."','".$_p_info['text']."')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('增加成功');window.location.href='admin.php?mod=about&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 关于我们修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("about_edit"); //修改
		$info = $db->select("select * from `".dbpre."about` where id='$_g_id'");

		$action = "admin.php?mod=about&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/about/add.html'));
	break;
	//#####################@ 关于我们修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("about_edit"); //修改sql
		$sql="update `".dbpre."about` set name='".$_p_info['name']."',text='".$_p_info['text']."' where id='$_g_id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=about&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('单页修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("about_del"); //删除
		$id = is_array($_p_id) ? $_p_id : $_g_id;
		if (is_array($id)) {
			foreach ($id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$id;
		}
		if ($db->delete("delete from `".dbpre."about` where id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=about&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 列表 @#####################//
	default :
		$menumark = 'about_list';//左侧导航颜色
		Core_Auth::checkauth("about_list"); //查看
		$info_list = $db->selectall("select * from `".dbpre."about` order by id asc", array(20, $_g_page));
		$page=$db->page->html;
		include($template->getfile('default/admin/about/list.html'));
	break;
}
?>