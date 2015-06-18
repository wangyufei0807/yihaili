<?php
switch ($act) {
	//#####################@ 服务种类增加 @#####################//
	case 'add':
		$menumark = 'page_add'; //左侧导航颜色
		Core_Auth::checkauth("page_add"); //增加
		$action = 'admin.php?mod=page&act=addsql';
		include($template->getfile('default/admin/page_add.html'));
	break;
	//#####################@ 服务种类增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("page_add"); //增加
		if ($_FILES['logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['logo']);
			$_p_info['logo'] = $upload->fileurl;
		}
		$sql="insert into `".dbpre."page` (id,name,text,logo) values (NULL,'".$_p_info['name']."','".$_p_info['text']."','".$_p_info['logo']."')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('增加成功');window.location.href='admin.php?mod=page&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 服务种类修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("page_edit"); //修改
		$info = $db->select("select * from `".dbpre."page` where id='$_g_id'");
		$action = "admin.php?mod=page&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/page_add.html'));
	break;
	//#####################@ 服务种类修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("page_edit"); //修改
		if ($_FILES['logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['logo']);
			$_p_info['logo'] = $upload->fileurl;
		}
		$_p_info['logo'] && $sqlwhere .= " ,logo='".$_p_info['logo']."'"; 

		$sql="update `".dbpre."page` set name='".$_p_info['name']."',text='".$_p_info['text']."'".$sqlwhere." where id='$_g_id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=page&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 服务种类删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("page_del"); //删除
		$id = is_array($_p_id) ? $_p_id : $_g_id;
		if (is_array($id)) {
			foreach ($id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$id;
		}
		if ($db->delete("delete from `".dbpre."page` where id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=page&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 服务种类列表 @#####################//
	default :
		$menumark = 'page_list';//左侧导航颜色
		Core_Auth::checkauth("page_list"); //查看
		$info_list = $db->selectall("select * from `".dbpre."page` order by id asc", array(20, $_g_page));
		$page=$db->page->html;
		include($template->getfile('default/admin/page_list.html'));
	break;
}
?>