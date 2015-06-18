<?php
switch ($act) {
	//#####################@ 增加分类 @#####################//
	case 'add':
		Core_Auth::checkauth("category_add"); //增加分类
		$type=$_GET['type'];
		$menumark = "category_".$type."";
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist($type);
		$action = "admin.php?mod=category&act=addsql&type={$type}";
		include($template->getfile('default/admin/category_add.html'));
	break;
	//#####################@ 增加分类sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("category_add"); //增加分类
		$type=$_GET['type'];
		$info=$_POST['info'];
		$info['category_type'] = $type;
		$sql="insert into `".dbpre."category` (category_type,category_name,category_pid) values ('".$info['category_type']."','".$info['category_name']."','".$info['category_pid']."')";
		if ($db->insert($sql)) {
			echo "<script language='javascript'>alert('分类增加成功');window.location.href='admin.php?mod=category&act=list&type=".$type."';</script>";
			;
		}
		else {
			echo "<script language='javascript'>alert('分类增加失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 修改分类 @#####################//
	case 'edit':
		Core_Auth::checkauth("category_edit"); //修改分类
		$id=$_GET['id'];
		$sql  = "select * from `".dbpre."category` where  category_id='$id'";
		$info = $db->select($sql);

		$menumark = "category_".$info['category_type']."";
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist($info['category_type']);
		//不允许移动到的分类id数组
		$category = new category();
		$category_noid = $category->getcid_arr($category_treelist, $info['category_id']);
		$category_noid[] = $info['category_id'];

		$action = "admin.php?mod=category&act=editsql&id={$id}&type={$info['category_type']}";
		include($template->getfile('default/admin/category_add.html'));
	break;
	//#####################@ 修改分类sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("category_edit"); //修改分类
		$id=$_GET['id'];
		$type=$_GET['type'];
		$info=$_POST['info'];
		$info['category_type'] = $type;
		$sql="update `".dbpre."category` set category_name='$info[category_name]',category_pid='$info[category_pid]' where category_id='$id'";
		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('分类修改成功');window.location.href='admin.php?mod=category&act=list&type=".$type."';</script>";
		}
		else {
			echo "<script language='javascript'>alert('分类修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 分类排序sql @#####################//
	case 'ordersql':
		Core_Auth::checkauth("category_edit"); //修改分类
		$type=$_GET['type'];
		$category_order=$_POST['category_order'];
		foreach ($category_order as $k=>$v) {
			$result = $db->pe_update('category', array('category_id'=>$k), array('category_order'=>$v));
		}
		if ($result) {
			echo "<script language='javascript'>alert('分类排序成功');window.location.href='admin.php?mod=category&act=list&type=".$type."';</script>";
		}
		else {
			echo "<script language='javascript'>alert('分类排序失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 删除分类 @#####################//
	case 'delsql':
		Core_Auth::checkauth("category_del"); //删除分类
		$type=$_GET['type'];
		$category_id = is_array($_POST['category_id']) ? $_POST['category_id'] : $_GET['id'];
		if (is_array($category_id)) {
			foreach ($category_id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$category_id;
		}

	    $sql="delete from `".dbpre."category` where category_id in(".$new.")";
		if ($db->delete($sql)) {
			echo "<script language='javascript'>alert('分类删除成功');window.location.href='admin.php?mod=category&act=list&type=".$type."';</script>";
		}
		else {
			echo "<script language='javascript'>alert('分类删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 分类列表 @#####################//
	default :
		Core_Auth::checkauth("category_list"); //查看分类列表
		$type=$_GET['type'];
		$menumark = "category_".$type."";
		include_once(PATH_ROOT.'hook/category.hook.php');
		$info_list = category_treelist($type);
		include($template->getfile('default/admin/category_list.html'));
	break;
}
?>