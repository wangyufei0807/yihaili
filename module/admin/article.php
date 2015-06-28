<?php
$menumark = 'article_list';
switch ($act) {
	//#####################@ 文章增加 @#####################//
	case 'add':
		Core_Auth::checkauth("article_add"); //文章增加
		//商品分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('article');
		
		//文章标签
		$tag_arr = array();
		$$info['article_text']=htmlspecialchars($info['article_text']);
		$action = 'admin.php?mod=article&act=addsql';
		include($template->getfile('default/admin/article/article_add.html'));
	break;
	//#####################@ 文章增加sql @#####################//
	case 'addsql':
		Core_Auth::checkauth("article_add"); //文章增加
		if ($_FILES['article_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['article_logo']);
			$_p_info['article_logo'] = $upload->fileurl;
		}
		$_p_info['article_atime'] = $_p_info['article_atime'] ? strtotime($_p_info['article_atime']) : time();

			$sql="insert into `".dbpre."article` (article_id,article_name,article_text,article_logo,article_atime,article_clicknum,category_id,article_tuijian,article_cuxiao) values (NULL,'".$_p_info['article_name']."','".$_p_info['article_text']."','".$_p_info['article_logo']."','".$_p_info['article_atime']."','".$_p_info['article_clicknum']."','".$_p_info['category_id']."','".$_p_info['article_tuijian']."','".$_p_info['article_cuxiao']."')";

		if ($article_id = $db->insert($sql)) {
			//更新标签
			if (is_array($_p_tag_id)) {
				foreach ($_p_tag_id as $v){
					$sql="insert into `".dbpre."tag` (article_id,tag_name) values ('$article_id','$v')";
					$db->insert($sql);
				}
			}
			echo "<script language='javascript'>alert('发布成功');window.location.href='admin.php?mod=article&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('发布失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 文章修改 @#####################//
	case 'edit':
		Core_Auth::checkauth("article_edit"); //编辑文章
		//文章分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('article');

		$sql  = "select * from `".dbpre."article` where article_id='$_g_id'";
		$info = $db->select($sql);

		$info['article_atime']=pe_date($info['article_atime']);
		$action = "admin.php?mod=article&act=editsql&id={$_g_id}";
		include($template->getfile('default/admin/article/article_add.html'));
	break;
	//#####################@ 文章修改sql @#####################//
	case 'editsql':
		Core_Auth::checkauth("article_edit"); //编辑文章
		if ($_FILES['article_logo']['size']) {
			include_once(PATH_ROOT.'include/class/upload.class.php');
			$upload = new upload($_FILES['article_logo']);
			$_p_info['article_logo'] = $upload->fileurl;
		}
		$_p_info['article_atime'] = $_p_info['article_atime'] ? strtotime($_p_info['article_atime']) : time();
		$_p_info['article_logo'] && $sqlwhere .= " ,article_logo='".$_p_info['article_logo']."'"; 

		$sql="update `".dbpre."article` set article_name='".$_p_info['article_name']."',article_text='".$_p_info['article_text']."',article_atime='".$_p_info['article_atime']."',category_id='".$_p_info['category_id']."',article_tuijian='".$_p_info['article_tuijian']."',article_cuxiao='".$_p_info['article_cuxiao']."'".$sqlwhere." where article_id='$_g_id'";

		if ($db->update($sql)) {
			echo "<script language='javascript'>alert('修改成功');window.location.href='admin.php?mod=article&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 文章删除sql @#####################//
	case 'delsql':
		Core_Auth::checkauth("article_del"); //删除文章
		$article_id = is_array($_p_article_id) ? $_p_article_id : $_g_id;
		if (is_array($article_id)) {
			foreach ($article_id as $k => $v) {
				$where_arr[] = $v;
				$new= implode(',',$where_arr); 
			}
		}else{
		        $new=$article_id;
		}
		if ($db->delete("delete from `".dbpre."article` where article_id in(".$new.")")) {
			echo "<script language='javascript'>alert('删除成功!');window.location.href='admin.php?mod=article&act=list';</script>";
		}
		else {
			echo "<script language='javascript'>alert('删除失败...');history.go(-1);</script>";
		}
	break;

	//#####################@ 文章列表 @#####################//
	default :
		Core_Auth::checkauth("article_list"); //查看文章
		//文章分类
		include_once(PATH_ROOT.'hook/category.hook.php');
		$category_treelist = category_treelist('article');
		/* $_g_state && $sqlwhere &&在这里是短路操作符 
				如果$_g_state为真
				先把.=进行赋值 然后 操作 $sqlwhere
		*/
		$_g_keyword && $sqlwhere .= " and a.article_name like '%$_g_keyword%'";
		$_g_category_id && $sqlwhere .= " and `a.category_id` = '$_g_category_id'"; 
		$sqlwhere .= " order by a.article_id desc";
		$sql  = "select a.*,b.* from `".dbpre."article` as a,`".dbpre."category` as b where a.category_id=b.category_id".$sqlwhere;

		$info_list = $db->selectall($sql, array(15, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['article_atime']=pe_date($v['article_atime']);
		}
		$page=$db->page->html;
		include($template->getfile('default/admin/article/article_list.html'));
	break;
}
?>