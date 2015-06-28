<?php
	
	$data['user_tname'] = $_p_user_tname;
	$data['user_email'] = $_p_user_email;
	$data['user_phone'] = $_p_user_phone;
	$data['user_address'] = $_p_user_address;
	$data['user_msg_content'] = $_p_user_msg_content;
	$data['msg_atime'] = time();

	$sql="insert into `".dbpre."message` (user_tname,user_email,user_phone,user_address,msg_content,msg_atime) values ('".$data['user_tname']."','".$data['user_email']."','".$data['user_phone']."','".$data['user_address']."','".$data['msg_content']."','".$data['msg_atime']."')";
	if ($db->insert($sql)) 
	{
		echo "<script language='javascript'>alert('增加成功');window.location.href='index.php?mod=contact&id=0';</script>";
	}
	else {
		echo "<script language='javascript'>alert('增加失败...');history.go(-1);</script>";
	}
?>