<?
switch ($act) {
	//#####################@ 管理员退出 @#####################//
	case 'logout':
		unset($_SESSION['admin_id_key'], $_SESSION['admin_id'], $_SESSION['admin_name']);
		echo "<script language='javascript'>alert('管理员退出成功！');window.location.href='admin.php';</script>";
	break;
	//#####################@ 管理员登录sql @#####################//
	case 'loginsql':
		$admin_name = $_POST['admin_name'];
	    $admin_password = md5($_POST['admin_password']);
		$sel  = "select * from `".dbpre."admin` where admin_name='$admin_name' and admin_pw='$admin_password' limit 1";
		$arr = $db->select($sel);
	if($arr['super']==1){
			$sql="update `".dbpre."admin` set admin_ltime='".time()."' where admin_id='".$arr['admin_id']."'";
			$db->update($sql);
			$_SESSION['admin_id_key'] = md5($arr['admin_id'].$arr['admin_name'].time());
			$_SESSION['admin_name'] = $arr['admin_name'];
			$_SESSION['super'] = $arr['super'];
			echo "<script language='javascript'>alert('超级管理员登录成功！');window.location.href='admin.php';</script>";
	}else{
		$sql  = "select a.*,b.* from `".dbpre."admin` as a, `".dbpre."authgroup` as b where  a.groupid=b.groupid and a.admin_name='$admin_name' and a.admin_pw='$admin_password' limit 1";
		if($info = $db->select($sql)){  
			$sql="update `".dbpre."admin` set admin_ltime='".time()."' where admin_id='".$info['admin_id']."'";
			$db->update($sql);
			$_SESSION['admin_id_key'] = md5($info['admin_id'].$$info['admin_name'].time());
			$_SESSION['admin_name'] = $info['admin_name'];
			$_SESSION['groupname'] = $info['groupname'];
			$_SESSION['super'] = $info['super'];
			$_SESSION['auths'] = $info['auths'];
			echo "<script language='javascript'>alert('普通管理员登录成功！');window.location.href='admin.php';</script>";
		}else {
			echo "<script language='javascript'>alert('用户名或密码错误...');window.location.href='admin.php';</script>";
		}
	}


	break;
	//#####################@ 管理员登录 @#####################//
	default:
		$action = 'admin.php?mod=do&act=loginsql';
		include($template->getfile('default/admin/do_login.html'));
	break;
}
?>