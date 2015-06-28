<?php
$menumark = 'product_list';
switch ($act) {
	//#####################@ 经典案例增加 @#####################//
	case 'add':
		Core_Auth::checkauth("product_add"); //经典案例增加
		//商品分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('product');
		
		//经典案例标签
		$tag_arr = array();
		$$info['product_text']=htmlspecialchars($info['product_text']);
		$action = 'admin.php?mod=product&act=addsql';
		include($template->getfile('default/admin/product/product_add.html'));
	break;
	//#####################@ 经典案例增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("product_add"); //经典案例增加
		if ($_FILES['product_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['product_logo']);
			$_p_info['product_logo'] = $upload->fileurl;
		}
		$_p_info['product_atime'] = $_p_info['product_atime'] ? strtotime($_p_info['product_atime']) : time();

			$sql="insert into `".dbpre."product` (product_id,product_name,product_text,product_logo,product_atime,product_clicknum,category_id,product_tuijian,product_cuxiao) values (NULL,'".$_p_info['product_name']."','".$_p_info['product_text']."','".$_p_info['product_logo']."','".$_p_info['product_atime']."','".$_p_info['product_clicknum']."','".$_p_info['category_id']."','".$_p_info['product_tuijian']."','".$_p_info['product_cuxiao']."')";

		if ($product_id = $db->insert($sql)) {
			//更新标签
			if (is_array($_p_tag_id)) {
				foreach ($_p_tag_id as $v){
					$sql="insert into `".dbpre."tag` (product_id,tag_name) values ('$product_id','$v')";
					$db->insert($sql);
				}
			}
			echo "<script language='javascript'>alert('发布成功');window.location.href='admin.php?mod=product&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('发布失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 经典案例修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("product_edit"); //编辑经典案例
		//经典案例分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('product');

		$sql  = "select * from `".dbpre."product` where product_id='$_g_id'";
		$info = $db->select($sql);

		$info['product_atime']=pe_date($info['product_atime']);
		$action = "admin.php?mod=product&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/product/product_add.html'));
	break;
	//#####################@ 经典案例修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("product_edit"); //编辑经典案例
		if ($_FILES['product_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['product_logo']);
			$_p_info['product_logo'] = $upload->fileurl;
		}
		$_p_info['product_atime'] = $_p_info['product_atime'] ? strtotime($_p_info['product_atime']) : time();
		$_p_info['product_logo'] && $sqlwhere .= " ,product_logo='".$_p_info['product_logo']."'"; 

		$sql="update `".dbpre."product` set product_name='".$_p_info['product_name']."',product_text='".$_p_info['product_text']."',product_atime='".$_p_info['product_atime']."',category_id='".$_p_info['category_id']."',product_tuijian='".$_p_info['product_tuijian']."',product_cuxiao='".$_p_info['product_cuxiao']."'".$sqlwhere." where product_id='$_g_id'";

		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=product&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 经典案例删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("product_del"); //删除经典案例
		$product_id = is_array($_p_product_id) ? $_p_product_id : $_g_id;
		if (is_array($product_id)) {
			foreach ($product_id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$product_id;
		}
		if ($db->delete("delete from `".dbpre."product` where product_id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=product&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;

	//#####################@ 经典案例列表 @#####################//
	default :
		Core_Auth::checkauth("product_list"); //查看经典案例
		//经典案例分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('product');
		/* $_g_state && $sqlwhere &&在这里是短路操作符 
				如果$_g_state为真
				先把.=进行赋值 然后 操作 $sqlwhere
		*/
		$_g_keyword && $sqlwhere .= " and a.product_name like '%$_g_keyword%'";
		$_g_category_id && $sqlwhere .= " and `a.category_id` = '$_g_category_id'"; 
		$sqlwhere .= " order by a.product_id desc";
		$sql  = "select a.*,b.* from `".dbpre."product` as a,`".dbpre."category` as b where a.category_id=b.category_id".$sqlwhere;

		$info_list = $db->selectall($sql, array(15, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['product_atime']=pe_date($v['product_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/admin/product/product_list.html'));
	break;
}
?>