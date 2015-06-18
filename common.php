<?php
//#####################@ 系统核心函数 @#####################//
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('PRC');
header('Content-Type: text/html; charset=utf-8');

//改写不安全的register_global和防sql注入处理
if (@ini_get('register_globals')) {
	foreach($_REQUEST as $name => $value){unset($$name);}
}

//定义ROOT_PATH网站根目录
define( "PATH_ROOT", str_replace( "common.php", "", str_replace( "\\", "/", __FILE__ ) ) );
//定义网站URL;
define( "PATH_URL", "http://".$_SERVER['HTTP_HOST']."/" );

//包含常用类-函数文件
require( PATH_ROOT."include/class/template.class.php" );
require( PATH_ROOT."include/class/page.class.php" );
require( PATH_ROOT."include/class/auth.class.php" );
require( PATH_ROOT."config/config.php" );
if ( !defined( "IN_Aaron" ) )
{
		exit( "Hacking attempt" );
}
require( PATH_ROOT."config/var.inc.php" );
require( PATH_ROOT."include/class/db.class.php" );
$db = new db($db_host, $db_user, $db_pw, $db_name, $db_coding);
require( PATH_ROOT."include/functions/template.func.php" );
$options = array(
    'template_dir' => PATH_ROOT.'templates/', //指定模板文件存放目录
    'cache_dir' => PATH_ROOT.'data/cache', //指定缓存文件存放目录
    'auto_update' => true, //当模板文件有改动时重新生成缓存 [关闭该项会快一些]
    'cache_lifetime' => 1, //缓存生命周期(分钟)，为 0 表示永久 [设置为 0 会快一些]
);

$template = Template::getInstance(); //使用单件模式实例化模板类

$template->setOptions($options); //设置模板参数


//url路由配置
$module = $mod = $act = 'index';

$mod = $_POST['mod'] ? $_POST['mod'] : ($_GET['mod'] ? $_GET['mod'] : $mod);
$act = $_POST['act'] ? $_POST['act'] : ($_GET['act'] ? $_GET['act'] : $act);

if ($_SERVER['PATH_INFO']) {
	$module = 'index';
	$_pathinfo = explode('/', str_ireplace('.html', '', trim($_SERVER['PATH_INFO'], '/')));

	$mod = $_pathinfo[0] ? $_pathinfo[0] : $mod;
	$act = $_pathinfo[1] ? $_pathinfo[1] : $act;

	if ($_pathinfo[1]) {
		$querystr = explode('-', $_pathinfo[1]);
		$querystr[0] && $act = $querystr[0];
		//预设3个参数值
		$querystr[1] && $_g_urlarg[1] = $querystr[1];
		$querystr[2] && $_g_urlarg[2] = $querystr[2];
		$querystr[3] && $_g_urlarg[3] = $querystr[3];
	}
}
else {
	$module = basename($_SERVER['SCRIPT_NAME'], '.php');
}
	!empty($_GET) && extract($_GET,EXTR_PREFIX_ALL,'_g');
	!empty($_POST) && extract($_POST,EXTR_PREFIX_ALL,'_p');
	session_start();
	!empty($_SESSION) && extract($_SESSION,EXTR_PREFIX_ALL,'_s');
	!empty($_COOKIE) && extract($_COOKIE,EXTR_PREFIX_ALL,'_c');

//#####################@ 杂项函数 @#####################//
//转换日期
function pe_date($time, $type = 'Y-m-d')
{
	return $time ? date($type, $time) : '';
}
//跳转函数	
function goto($url = '', $type = 'default')
{
	global $pe;
	if ($type == 'dialog') {
		$url = $url ? "top.location.href = '{$url}'" : "top.location.reload()";	
	}
	else {
		$url = $url ? $url : $_SERVER['HTTP_REFERER'];
		$url = "window.location.href='{$url}'";
	}
	echo "<script type='text/javascript'>{$url}</script>";
	die();
}
//url处理函数
function updateurl($k, $v='')
{
	$querystr = $_SERVER['QUERY_STRING'];
	$url = $v === ''
		? preg_replace('/'.$k.'=[^&]*/', '', $querystr)
		: (stripos($querystr, $k.'=') === false ? "{$querystr}&{$k}={$v}" : preg_replace('/'.$k.'=[^&]*/', "$k=$v", $querystr));
	$url = trim($url, '&');
	return $url ? "?{$url}" : '?';
}

//url批量处理函数
function updateurl_arr($arr)
{
	$querystr = $_SERVER['QUERY_STRING'];
	foreach ($arr as $val) {
		$k = $val[0];
		$v = $val[1];
		$querystr = $v === ''
			? preg_replace('/'.$k.'=[^&]*/', "", $querystr)
			: (stripos($querystr, $k.'=') === false ? "{$querystr}&{$k}={$v}" : preg_replace('/'.$k.'=[^&]*/', "$k=$v", $querystr));
		$querystr = trim($querystr, '&');
	}
	return $querystr ? '?'.$querystr : '';
}

	function foundinarr($s_strarr,$s_tofind,$s_strsplit){
		$s_flag = false;
			$arrtemp = explode($s_strsplit,$s_strarr);
			for($s_i=0;$s_i<count($arrtemp);$s_i++){
				$s_value = trim($arrtemp[$s_i]);
				if($s_value==$s_tofind){
					$s_flag = true;
					break;
				}
			}
		return $s_flag;
	}

	function db_select($inputvalue,$selectname,$dbtable){//,$text="超级管理员"
		$obj=NULL;
		$obj = $GLOBALS['db'];
		if($dbtable=="authgroup"){
			$fieldopvalue = "groupid";
			$fieldoptext  = "groupname";
			$where        = " ORDER BY groupid ASC";
		} 
		$temp  = "<select name='$selectname' id='$selectname'>";
		//$temp .= "<option value='0'>$text</option>";
		$sel_sql	= "SELECT $fieldopvalue,$fieldoptext FROM ".dbpre.$dbtable.$where;
		$sel		= $obj->selectall($sel_sql);
		$loop		= "";
		foreach($sel as $key=>$value){
			$loop .= "<option value=\"".$value[$fieldopvalue]."\"";
			if(trim($inputvalue)==trim($value[$fieldopvalue])){
				$loop .= " selected";
			}
			$loop .= ">".$value[$fieldoptext]."</option>";
		}
		$temp .= $loop."</select>";
		return $temp;
	}

	function get($cachename)
	{
		global $pe;
		global $db;
		$cache_arr = array();
		if (!array_key_exists($cachename, $cache_arr)) {
			$sql  = "select * from `".dbpre."setting`";
			$cache = $db->selectall($sql);
			$cache_arr[$cachename] = $cache;
		}
		return $cache_arr[$cachename];
	}

//获取ip
function pe_ip()
{
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    return $realip;
}
?>
