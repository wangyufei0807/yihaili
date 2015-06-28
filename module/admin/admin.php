<?php
$menumark = 'admin_list';
switch ($act) {
	//#####################@ 管理增加 @#####################//
	case 'add':
		Core_Auth::checkauth("admin_add"); //添加后台用户信息
		$action = 'admin.php?mod=admin&act=addsql';
		$groupid_select=db_select("","groupid","authgroup");//帐号权限函数
		include($template->getfile('default/admin/admin_add.html'));
	break;
	//#####################@ 管理增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("admin_add"); //添加后台用户信息
		$admin_name=$_POST['admin_name'];
		$admin_pw=$_POST['admin_pw'];
		$admin_pw = md5($admin_pw);
		$groupid=$_POST['groupid'];
		$admin_atime=time();
		$sql="insert into `".dbpre."admin` (admin_id,groupid,super,admin_name,admin_pw,admin_atime,admin_ltime) values (NULL,'$groupid','','$admin_name','$admin_pw','$admin_atime','$admin_ltime')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('添加信息修改成功');window.location.href='admin.php?mod=admin&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('添加信息修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 管理修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("admin_edit"); //修改后台用户信息
	$id=$_GET['id'];
	if($_SESSION['super']==1){
		$sql  = "select * from `".dbpre."admin` where admin_id='$id'";
	}else{
		$sql  = "select a.*,b.* from `".dbpre."admin` as a, `".dbpre."authgroup` as b where  a.groupid=b.groupid and a.admin_id='$id'";
	}
		$info = $db->select($sql);
		$info['admin_ltime']=pe_date($info['admin_ltime']);
        $groupid_select=db_select($info['groupid'],"groupid","authgroup");//帐号权限函数
		$action = "admin.php?mod=admin&act=editsql&id={$id}";
		include($template->getfile('default/admin/admin_add.html'));
	break;
	//#####################@ 管理修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("admin_edit"); //修改后台用户信息
		$id=$_GET['id'];
		$admin_pw=$_POST['admin_pw'];
		$groupid=$_POST['groupid'];
		$admin_pw = md5($admin_pw);
		$sql="update `".dbpre."admin` set admin_pw='$admin_pw',groupid='$groupid' where admin_id='$id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('管理信息修改成功');window.location.href='admin.php?mod=admin&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('管理信息修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 管理删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("admin_del"); //删除后台用户信息
		if ($_g_id == 1) {
	        echo "<script language='javascript'>alert('抱歉，默认管理员不能删除...');history.go(-1);</script>";
			exit();
		}
		$sql="DELETE FROM `".dbpre."admin` WHERE admin_id = '$_g_id' LIMIT 1";
		if ($db->delete($sql)) {
			echo "<script language='javascript'>alert('管理删除成功');window.location.href='admin.php?mod=admin&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('管理删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 管理列表 @#####################//
	default:
		Core_Auth::checkauth("admin_list"); //查看后台用户信息
	if($_SESSION['super']==1){
		$sql  = "select * from `".dbpre."admin`";
	}else{
		$sql  = "select a.*,b.* from `".dbpre."admin` as a, `".dbpre."authgroup` as b where  a.groupid=b.groupid";
	}
		$info_list = $db->selectall($sql, array(15, $_g_page));
		$page=$db->page->html;
		foreach ($info_list as $k => $v) {
			$info_list[$k]['admin_ltime']=pe_date($v['admin_ltime']);
		}
		include($template->getfile('default/admin/admin_list.html'));
	break;
}
?>