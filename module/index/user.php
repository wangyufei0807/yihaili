<?php
switch($act) {
	//#####################@ 用户登录 @#####################//
	case 'login':
		if($_s_user_id_key!=''){
		echo "<script language='javascript'>window.location.href='/';</script>";
		}
		$action = "index.php?mod=user&act=loginsql&from=".urlencode($_SERVER['HTTP_REFERER']);
		include($template->getfile('default/index/user_login.html'));
	break;
	//#####################@ 用户登录sql @#####################//
	case 'loginsql':
		$_p_user_pw = md5($_p_user_pw);
		if ($info = $db->select("select * from `".dbpre."user` where user_name='$_p_user_name' and user_pw='$_p_user_pw'")) {
			$db->update("update `".dbpre."user` set user_ltime=".time()." where user_id='".$info['user_id']."'");
			$_SESSION['user_id_key'] = md5(PATH_ROOT.time());
			$_SESSION['user_id'] = $info['user_id'];
			$_SESSION['user_name'] = $info['user_name'];
			$_SESSION['user_ltime'] = pe_date($info['user_ltime']);
			
			//未登录时的购物车列表入库
			if (is_array($cart_list = unserialize(stripslashes($_c_cart_list)))) {
				$cart_rows = $db->selectall("select * from `".dbpre."cart` where user_id='".$info['user_id']."'");
				foreach ($cart_list as $k => $v) {
					if (array_key_exists($k, $cart_rows)) {
						
						$db->update("update `".dbpre."cart` set ".$cart_rows[$k]['product_num']+$cart_list[$k]['product_num']." where cart_id='".$cart_rows[$k]['cart_id']."'");
					}
					else {
						$cart_info['cart_atime'] = time();
						$cart_info['product_id'] = $k;
						$cart_info['product_num'] = $v['product_num'];
						$cart_info['user_id'] = $info['user_id'];
						$sql="insert into `".dbpre."cart` (cart_atime,product_id,product_num,user_id) values ('".$cart_info['cart_atime']."','".$cart_info['product_id']."','".$cart_info['product_num']."','".$cart_info['user_id']."')";
						$db->insert($sql);
					}
				}
				setcookie('cart_list', '', time()-3600);
			}
			$db->update("update `".dbpre."user` set user_ltime=".time()." where user_id='".$info['user_id']."'");
			

			echo "<script language='javascript'>alert('用户登录成功！');window.location.href='/';</script>";
		}
		else {
			echo "<script language='javascript'>alert('用户名或密码错误...');history.go(-1);</script>";
		}
	break;
	//#####################@ 用户退出 @#####################//
	case 'logout':
		unset($_SESSION['user_id_key'], $_SESSION['user_id'], $_SESSION['user_name']);
		echo "<script language='javascript'>alert('用户退出成功！');window.location.href='/';</script>";
	break;
	//#####################@ 用户注册 @#####################//
	case 'register':
		$action = "index.php?mod=user&act=registersql";
		include($template->getfile('default/index/user_register.html'));
	break;
	//#####################@ 用户注册sql @#####################//
	case 'registersql':
			$_p_user_pw = md5($_p_user_pw);
			$_p_user_atime = time();
			$sql="insert into `".dbpre."user` (user_id,user_name,user_pw,user_email,user_atime) values (NULL,'$_p_user_name','$_p_user_pw','$_p_user_email','$_p_user_atime')";
			if ($user_id = $db->insert($sql)) {
				$info = $db->select("select * from `".dbpre."user` where user_id='$user_id'");
				$_SESSION['user_id_key'] = md5(PATH_ROOT.time());
				$_SESSION['user_id'] = $info['user_id'];
				$_SESSION['user_name'] = $info['user_name'];
				echo "<script language='javascript'>alert('用户注册成功！');window.location.href='/';</script>";
			}
			else {
				echo "<script language='javascript'>alert('用户注册失败...');history.go(-1);</script>";
			}

	break;
	//#####################@ 订单列表 @#####################//
	case 'orderlist':
		$info_list = $db->selectall("select * from `".dbpre."order` where user_id='".$_s_user_id."' order by order_id desc", array(10, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['product_list'] = $db->selectall("select * from `".dbpre."orderdata` where order_id='".$v['order_id']."'");
			$info_list[$k]['order_atime'] = pe_date($info_list[$k]['order_atime']);
			$info_list[$k]['order_ptime'] = pe_date($info_list[$k]['order_ptime']);
			$info_list[$k]['order_stime'] = pe_date($info_list[$k]['order_stime']);
		};
		$nowpath = "<a href='/'>首页</a> > 会员中心 > 我的订单";
		$page=$db->page->html;
		include($template->getfile('default/index/user_orderlist.html'));
	break;
	//#####################@ 订单收货信息 @#####################//
	case 'ordersh':
		$info = $db->select("select * from `".dbpre."order` where order_id='$_g_id' and user_id='".$_s_user_id."' order by order_id desc");
		include($template->getfile('default/index/user_ordersh.html'));
	break;
	//#####################@ 订单删除sql @#####################//
	case 'orderdelsql':
		$rows = $db->select("select * from `".dbpre."order` where order_id='$_g_id' and user_id='".$_s_user_id."' and order_state='notpay'");
		if ($rows['order_id']) {
			if ($db->delete("delete from `".dbpre."order` where order_id ='".$rows['order_id']."'")) {
				//更新商品库存数
				include_once(PATH_ROOT.'hook/product.hook.php');
				product_num('num', $rows['order_id'], 'add');
				//删除订单子表数据
				$db->delete("delete from `".dbpre."orderdata` where order_id ='".$rows['order_id']."'");
				echo "<script language='javascript'>alert('订单删除成功！');window.location.href='/';</script>";
			}
			else {
				echo "<script language='javascript'>alert('订单删除失败...');history.go(-1);</script>";
			}
		}
		else {
			echo "<script language='javascript'>alert('抱歉，已付款订单不能删除...');history.go(-1);</script>";
		}
	break;
	//#####################@ 收藏列表 @#####################//
	case 'collectlist':
		$sql = "select * from `".dbpre."collect` a, `".dbpre."product` b where a.`product_id` = b.`product_id` and a.`user_id` = '".$_s_user_id."' order by a.`collect_id` desc";
		$info_list = $db->selectall($sql, array(10, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['collect_atime'] = pe_date($v['collect_atime']);
		}
		$nowpath = "<a href='/'>首页</a> > 会员中心 > 我的收藏";
		$page=$db->page->html;
		include($template->getfile('default/index/user_collectlist.html'));
	break;
	//#####################@ 收藏删除sql @#####################//
	case 'collectdel':
		if ($db->delete("delete from `".dbpre."collect` where collect_id ='$_g_id' and user_id='".$_s_user_id."'")) {
			echo "<script language='javascript'>alert('商品收藏删除成功！');window.location.href='/';</script>";
		}
		else {
			echo "<script language='javascript'>alert('商品收藏删除失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 咨询列表 @#####################//
	case 'asklist':
		$sql = "select * from `".dbpre."ask` a, `".dbpre."product` b where a.`product_id` = b.`product_id` and a.`user_id` = '".$_s_user_id."' order by a.`ask_id` desc";
		$info_list = $db->selectall($sql, array(10, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['ask_atime'] = pe_date($v['ask_atime']);
			$info_list[$k]['ask_replytime'] = pe_date($v['ask_replytime']);
		}
		$nowpath = "<a href='/'>首页</a> > 会员中心 > 我的咨询";
		$page=$db->page->html;
		include($template->getfile('default/index/user_asklist.html'));
	break;
	//#####################@ 评价列表 @#####################//
	case 'commentlist':
		$sql = "select * from `".dbpre."comment` a, `".dbpre."product` b where a.`product_id` = b.`product_id` and a.`user_id` = '".$_s_user_id."' order by a.`comment_id` desc";
		$info_list = $db->selectall($sql, array(10, $_g_page));
		foreach ($info_list as $k => $v) {
			$info_list[$k]['comment_atime'] = pe_date($v['comment_atime']);
		}
		$nowpath = "<a href='/'>首页</a> > 会员中心 > 我的评价";
		$page=$db->page->html;
		include($template->getfile('default/index/user_commentlist.html'));
	break;
	//#####################@ 基本信息 @#####################//
	case 'base':
		$info = $db->select("select * from `".dbpre."user` where user_id='".$_s_user_id."'");
		$info['user_atime']=pe_date($info['user_atime']);
		$nowpath = "<a href='/'>首页</a> > 会员中心 > 基本信息";

		$action = "index.php?mod=user&act=basesql";
		include($template->getfile('default/index/user_base.html'));
	break;
	//#####################@ 基本信息sql @#####################//
	case 'basesql':
		if ($db->update("update `".dbpre."user` set user_address='".$_p_info['user_address']."',user_tname='".$_p_info['user_tname']."',user_phone='".$_p_info['user_phone']."',user_email='".$_p_info['user_email']."' where user_id='".$_s_user_id."'")) {
			echo "<script language='javascript'>alert('基本信息修改成功！');history.go(-1);</script>";
		}
		else {
			echo "<script language='javascript'>alert('基本信息修改失败...');history.go(-1);</script>";
		}
	break;
	//#####################@ 密码修改  @#####################//
	case 'pw':
		$info = $db->select("select * from `".dbpre."user` where user_id='".$_s_user_id."'");
	
		$nowpath = "<a href='/'>首页</a> > 会员中心 > 修改密码";

		$action = "index.php?mod=user&act=pwsql";
		include($template->getfile('default/index/user_pw.html'));
	break;
	//#####################@ 密码修改sql @#####################//
	case 'pwsql':
		$user_pw=md5($_p_user_pw);
		$sql="update `".dbpre."user` set user_pw='$user_pw' where user_id='".$_s_user_id."'";
		if ($db->update($sql)) {
			unset($_SESSION['user_id_key'], $_SESSION['user_id'], $_SESSION['user_name']);
			echo "<script language='javascript'>alert('密码修改成功！');window.location.href='index.php?mod=user&act=login';</script>";
		}
		else {
			echo "<script language='javascript'>alert('密码修改失败...');history.go(-1);</script>";
		}
	break;
}
?>