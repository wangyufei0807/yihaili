<?php
$menumark = 'user_list';
switch ($act) {
	//#####################@ 会员修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("user_edit"); //修改前台会员
		$info = $db->select("select * from `".dbpre."user` where user_id='$_g_id'");
		$info['user_atime']=pe_date($info['user_atime']);
		$info['user_ltime']=pe_date($info['user_ltime']);
		$action = "admin.php?mod=user&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/user_add.html'));
	break;
	//#####################@ 会员修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("user_edit"); //修改前台会员
		$_p_user_pw && $_p_info['user_pw'] = md5($_p_user_pw);

		$_p_info['user_pw'] && $sqlwhere .= " ,user_pw='$_p_user_pw'"; 
		$sqlwhere .= "  where user_id='$_g_id'";

		$sql="update `".dbpre."user` set user_tname='".$_p_info['user_tname']."',user_phone='".$_p_info['user_phone']."',user_email='".$_p_info['user_email']."',user_address='".$_p_info['user_address']."' ".$sqlwhere;


		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('会员信息修改成功!');window.location.href='admin.php?mod=user&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('会员信息修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 会员删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("user_del"); //删除前台会员
		$user_id = is_array($_p_user_id) ? $_p_user_id : $_g_id;
		if (is_array($user_id)) {
			foreach ($user_id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$user_id;
		}
		if ($db->delete("delete from `".dbpre."user` where user_id in(".$new.")")) {
			echo "<script language='javascript'>alert('会员删除成功!');window.location.href='admin.php?mod=user&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('会员删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 会员列表 @#####################//
	default:
		Core_Auth::checkauth("user_list"); //查看前台会员
		$_g_keyword && $sqlwhere = " and `user_name` like '%{$_g_keyword}%'";
		$sqlwhere .= " order by `user_id` desc";
		$info_list = $db->selectall("select * from `".dbpre."user`", array(20, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['user_atime']=pe_date($v['user_atime']);
			$info_list[$k]['user_ltime']=pe_date($v['user_ltime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/admin/user_list.html'));
	break;
}
?>