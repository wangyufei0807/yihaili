<?php
$menumark = 'jingdiananli_list';
switch ($act) {
	//#####################@ 经典案例增加 @#####################//
	case 'add':
		Core_Auth::checkauth("jingdiananli_add"); //经典案例增加
		//商品分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('jingdiananli');
		
		//经典案例标签
		$tag_arr = array();
		$$info['jingdiananli_text']=htmlspecialchars($info['jingdiananli_text']);
		$action = 'admin.php?mod=jingdiananli&act=addsql';
		include($template->getfile('default/admin/jingdiananli/jingdiananli_add.html'));
	break;
	//#####################@ 经典案例增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("jingdiananli_add"); //经典案例增加
		if ($_FILES['jingdiananli_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['jingdiananli_logo']);
			$_p_info['jingdiananli_logo'] = $upload->fileurl;
		}
		$_p_info['jingdiananli_atime'] = $_p_info['jingdiananli_atime'] ? strtotime($_p_info['jingdiananli_atime']) : time();

			$sql="insert into `".dbpre."jingdiananli` (jingdiananli_id,jingdiananli_name,jingdiananli_text,jingdiananli_logo,jingdiananli_atime,jingdiananli_clicknum,category_id,jingdiananli_tuijian,jingdiananli_cuxiao) values (NULL,'".$_p_info['jingdiananli_name']."','".$_p_info['jingdiananli_text']."','".$_p_info['jingdiananli_logo']."','".$_p_info['jingdiananli_atime']."','".$_p_info['jingdiananli_clicknum']."','".$_p_info['category_id']."','".$_p_info['jingdiananli_tuijian']."','".$_p_info['jingdiananli_cuxiao']."')";

		if ($jingdiananli_id = $db->insert($sql)) {
			//更新标签
			if (is_array($_p_tag_id)) {
				foreach ($_p_tag_id as $v){
					$sql="insert into `".dbpre."tag` (jingdiananli_id,tag_name) values ('$jingdiananli_id','$v')";
					$db->insert($sql);
				}
			}
			echo "<script language='javascript'>alert('发布成功');window.location.href='admin.php?mod=jingdiananli&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('发布失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 经典案例修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("jingdiananli_edit"); //编辑经典案例
		//经典案例分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('jingdiananli');

		$sql  = "select * from `".dbpre."jingdiananli` where jingdiananli_id='$_g_id'";
		$info = $db->select($sql);

		$info['jingdiananli_atime']=pe_date($info['jingdiananli_atime']);
		$action = "admin.php?mod=jingdiananli&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/jingdiananli/jingdiananli_add.html'));
	break;
	//#####################@ 经典案例修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("jingdiananli_edit"); //编辑经典案例
		if ($_FILES['jingdiananli_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['jingdiananli_logo']);
			$_p_info['jingdiananli_logo'] = $upload->fileurl;
		}
		$_p_info['jingdiananli_atime'] = $_p_info['jingdiananli_atime'] ? strtotime($_p_info['jingdiananli_atime']) : time();
		$_p_info['jingdiananli_logo'] && $sqlwhere .= " ,jingdiananli_logo='".$_p_info['jingdiananli_logo']."'"; 

		$sql="update `".dbpre."jingdiananli` set jingdiananli_name='".$_p_info['jingdiananli_name']."',jingdiananli_text='".$_p_info['jingdiananli_text']."',jingdiananli_atime='".$_p_info['jingdiananli_atime']."',category_id='".$_p_info['category_id']."',jingdiananli_tuijian='".$_p_info['jingdiananli_tuijian']."',jingdiananli_cuxiao='".$_p_info['jingdiananli_cuxiao']."'".$sqlwhere." where jingdiananli_id='$_g_id'";

		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=jingdiananli&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 经典案例删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("jingdiananli_del"); //删除经典案例
		$jingdiananli_id = is_array($_p_jingdiananli_id) ? $_p_jingdiananli_id : $_g_id;
		if (is_array($jingdiananli_id)) {
			foreach ($jingdiananli_id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$jingdiananli_id;
		}
		if ($db->delete("delete from `".dbpre."jingdiananli` where jingdiananli_id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=jingdiananli&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;

	//#####################@ 经典案例列表 @#####################//
	default :
		Core_Auth::checkauth("jingdiananli_list"); //查看经典案例
		//经典案例分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('jingdiananli');
		/* $_g_state && $sqlwhere &&在这里是短路操作符 
				如果$_g_state为真
				先把.=进行赋值 然后 操作 $sqlwhere
		*/
		$_g_keyword && $sqlwhere .= " and a.jingdiananli_name like '%$_g_keyword%'";
		$_g_category_id && $sqlwhere .= " and `a.category_id` = '$_g_category_id'"; 
		$sqlwhere .= " order by a.jingdiananli_id desc";
		$sql  = "select a.*,b.* from `".dbpre."jingdiananli` as a,`".dbpre."category` as b where a.category_id=b.category_id".$sqlwhere;

		$info_list = $db->selectall($sql, array(20, $page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['jingdiananli_atime']=pe_date($v['jingdiananli_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/admin/jingdiananli/jingdiananli_list.html'));
	break;
}
?>