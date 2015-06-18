<?php
//侧栏商品列表
function product_hotlist($num=10) {
	global $pe,$db;
	$sql  = "select * from `".dbpre."product` order by product_clicknum desc";
	return $db->selectall($sql, array($num));
}
//侧栏商品列表
function product_selllist($num) {
	global $pe,$db;
	$sql  = "select * from `".dbpre."product` order by product_sellnum desc";
	return $db->selectall($sql, array($num));
}
//商品统计更新
function product_num($type, $id, $change = 'add') {
	global $db;
	$id = intval($id);
	switch ($type) {
		case 'num':
			$sql  = "select * from `".dbpre."orderdata` where order_id='$id'";
			$orderdata_list = $db->selectall($sql);
			if ($change == 'add') {
				foreach ($orderdata_list as $v) {
				$product_num=$v['product_num'];
				$sql="update `".dbpre."product` set product_num=product_num+'$product_num' where product_id='$v[product_id]'";
				$db->update($sql);
				}
			}
			else {
				foreach ($orderdata_list as $v) {
				$product_num=$v['product_num'];
				$sql="update `".dbpre."product` set product_num=product_num-'$product_num' where product_id='$v[product_id]'";
				$db->update($sql);
				}
			}
		break;
		case 'sellnum':
			$sql  = "select * from `".dbpre."orderdata` where order_id='$id'";
			$orderdata_list = $db->selectall($sql);
			foreach ($orderdata_list as $v) {
				$product_num=$v['product_num'];
				$sql="update `".dbpre."product` set product_sellnum=product_sellnum+'$product_num' where product_id='$v[product_id]'";
				$db->update($sql);
			}
		break;
		case 'clicknum':
			$sql="update `".dbpre."product` set product_clicknum=product_clicknum+'1' where product_id='$id'";
			$db->update($sql);
		break;
		default:
			if (in_array($type, array('collectnum', 'asknum', 'commentnum'))) {
				$num = $db->pe_num(substr($type, 0, -3), array('product_id' => $id));
				$sql="update `".dbpre."product` set product_'$type' => $num where product_id='$id'";
				return $db->update($sql);
			}
		break;
	}
}
?>