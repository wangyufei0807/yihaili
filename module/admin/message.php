<?php
$menumark = 'message_list';
switch ($act) {
	//#####################@ 查看留言 @#####################//
	case 'show':
		Core_Auth::checkauth("message_show"); //查看留言
		$info = $db->select("select * from `".dbpre."message` where msg_id='$_g_id'");
		$info['msg_atime']=pe_date($info['msg_atime']);
		include($template->getfile('default/admin/message/message_show.html'));
	break;
	//#####################@ 留言列表 @#####################//
	default:
		Core_Auth::checkauth("message_list"); //查看留言列表
		$_g_keyword && $sqlwhere = " and `user_tname` like '%{$_g_keyword}%'";
		$sqlwhere .= " order by `msg_id` desc";
		$info_list = $db->selectall("select * from `".dbpre."message`", array(15, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['msg_atime']=pe_date($v['msg_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/admin/message/message_list.html'));
	break;
}
?>