<?php
$menumark = 'admin_group';
switch ($act) {
	//#####################@ 后台权限组增加 @#####################//
	case 'add':
		Core_Auth::checkauth("group_add"); //添加后台权限组
		$action = 'admin.php?mod=group&act=addsql';
		$auth_checkbox=Core_Auth::auth_checkbox("","auth");//权限组函数
		include($template->getfile('default/admin/group_add.html'));
	break;
	//#####################@ 后台权限组增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("group_add"); //添加后台权限组
		$group_name=$_POST['group_name'];
		$auth=$_POST['auth'];
		$group_timeline=time();

		$auths = "";
	if($auth){
		if(count($auth)>0){
			if(count($auth)==1){
				$auths = trim($auth[0]);
			}else{
				for($ii=0;$ii<count($auth);$ii++){
					$auths .= trim($auth[$ii]).",";
				}
				$auths = substr($auths,0,(strlen($auths)-1));
			}
		}
	}

		$sql="insert into `".dbpre."authgroup` (groupid,groupname,auths,timeline) values ('','$group_name','$auths','$group_timeline')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('添加后台权限组成功');window.location.href='admin.php?mod=group&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('添加后台权限组失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 后台权限组修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("group_edit"); //修改后台用户信息
	    $id=$_GET['id'];
		$sql  = "select * from `".dbpre."authgroup` where  groupid='$id'";
		$info = $db->select($sql);
		$auth_checkbox=Core_Auth::auth_checkbox($info['auths'],"auth");//权限组函数
		$info['timeline']=pe_date($info['timeline']);
		$action = "admin.php?mod=group&act=editsql&id={$id}";
		include($template->getfile('default/admin/group_add.html'));
	break;
	//#####################@ 后台权限组修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("group_edit"); //修改后台用户信息
	    $id=$_GET['id'];
		$groupname=$_POST['group_name'];
		$arrauth=$_POST['auth'];
		$timeline = time();

		$auths = "";
		if($arrauth){
		if(count($arrauth)>0){
			if(count($arrauth)==1){
				$auths = trim($arrauth[0]);
			}else{
				for($ii=0;$ii<count($arrauth);$ii++){
					$auths .= trim($arrauth[$ii]).",";
				}
				$auths = substr($auths,0,(strlen($auths)-1));
			}
		}
	}
		$sql="update `".dbpre."authgroup` set groupname='$groupname',auths='$auths',timeline='$timeline' where groupid='$id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('后台权限组修改成功');window.location.href='admin.php?mod=group&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('后台权限组修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 后台权限组删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("group_del"); //删除后台用户信息
		$id=$_GET['id'];
		$sql="DELETE FROM `".dbpre."authgroup` WHERE groupid = '$id' LIMIT 1";
		if ($db->delete($sql)) {
			echo "<script language='javascript'>alert('后台权限组删除成功');window.location.href='admin.php?mod=group&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('后台权限组删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 后台权限组列表 @#####################//
	default:
		Core_Auth::checkauth("group_list"); //查看后台用户信息

		$sql  = "select * from `".dbpre."authgroup`";
		$info_list = $db->selectall($sql, array(20, $page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['timeline']=pe_date($v['timeline']);
		}
		$page=$db->page->html;
		include($template->getfile('default/admin/group_list.html'));
	break;
}
?>