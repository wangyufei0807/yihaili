<?php
/*
后台权限组选择类
*/
class Core_Auth{
	protected static $obj = NULL;
	public static function auth_checkbox($inputvalue,$checkname,$trnum=5,$width="98%",$css="hback"){
		$temp = $loop = "";
		$vars	= array();
		$vars   = $GLOBALS['AuthVars'];
		$i      =0;
		foreach($vars as $key=>$value){
			$loop = $loop ." <td class='".$css."' width='20%'>";
			$loop = $loop ." <input type='checkbox' name='".$checkname."[]' id='".$checkname."[]' value='".trim($key)."'";
			if($inputvalue){
				if(foundinarr($inputvalue,trim($key),",")){
					$loop .= " checked";
				}
			}
			$loop .= " /> ".trim($value)."";
			$loop .= " </td>";
			if(($i+1)%($trnum)==0){
				$loop .= "</tr><tr>";
			}
			$i = $i+1;
		}
		$temp  = "<table width=$width border='0' align='left' cellpadding='0' cellspacing='0'>";
		$temp .= "  <tr>";
		$temp .= $loop;
		$temp .= "  </tr>";
		$temp .= "</table>";
		return $temp;
	}

	public static function checkauth($auth){
	session_start();
	$super=$_SESSION['super'];
	$auths=$_SESSION['auths'];
		if($super==1){
		}else{
			$str=strstr($auths,$auth);
			if($str==""){
				echo "<script language='javascript'>alert('对不起，你没有执行&nbsp;[".$GLOBALS['AuthVars'][$auth]."]&nbsp;操作权限！');window.location.href='admin.php';</script>";
				exit();
			}
		}
	}
}
?>