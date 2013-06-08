<?php 
// +----------------------------------------------------------------------
// | EaseTHINK 易想团购系统 mapi 插件
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------

require '../system/common.php';
require '../app/Lib/common.php';
require './lib/functions.php';
//缓存的名称以MAPI_开头


if (isset($_REQUEST['i_type']))
{
	$i_type = intval($_REQUEST['i_type']);
}

if ($i_type == 1)
{
	$request = $_REQUEST;
}
else
{
	if (isset($_REQUEST['requestData']))
	{
		if ($i_type == 2)
		{
			$request = json_decode(trim($_REQUEST['requestData']), 1);		
		}else
		{			
			//$_REQUEST['requestData'] ="eyJjb250ZW50Ijoi5Y+96YeM5ZGx5ZWm5ZuWIiwicHdkIjoiZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2UiLCJpc19zeW5jX3RlbmNlbnQiOjEsInR5cGUiOiJhbmRyb2lkIiwic291cmNlIjoi5p2l6IeqQW5kcm9pZOWuouaIt+erryIsImFjdCI6ImFkZHNoYXJlIiwiZW1haWwiOiIxMjM0NTZANzg5LmNvbSJ9";
			$request = base64_decode((trim($_REQUEST['requestData'])));		
			$request = json_decode($request, 1);
		}
	}else
	{
		$request = $_REQUEST;
	}
}


$m_config = getMConfig();//初始化手机端配置
define('VERSION',1); //接口版本号,float 类型
define("CACHE_TIME",60); //动态数据缓存时间，300秒
if (intval($m_config['page_size']) == 0){
	define('PAGE_SIZE',20); //分页的常量
}else{
	define('PAGE_SIZE',intval($m_config['page_size'])); //分页的常量
}
//echo $request['act']; exit;
$class = strtolower(strim($request['act']));
$act2 = strtolower(strim($request['act_2']))?strtolower(strim($request['act_2'])):"";
$city_id = intval($request['city_id']);
define('ACT',$class); //act常量
define('ACT_2',$act2);


if(false) 
{
	$url = get_domain().APP_ROOT."/index.php?requestData=".$_REQUEST['requestData']."&r_type=2";
	$api_log = array();
	$api_log['api'] = $url;
	$api_log['act'] = $class;
	$GLOBALS['db']->autoExecute(DB_PREFIX."api_log", $api_log, 'INSERT');
}


//公共初始化
if(file_exists("./lib/".$class.".action.php"))
{
	require_once "./lib/".$class.".action.php";	
	if(class_exists($class))
	{
		$obj = new $class;		
		if(method_exists($obj,"index"))
		{
			$obj->index();
		}
		else
		{
			header("Content-Type:text/html; charset=utf-8");
			exit("Hack attemp!");
		}
	}
	else
	{
		header("Content-Type:text/html; charset=utf-8");
		exit("Hack attemp!");
	}
}
else
{
	header("Content-Type:text/html; charset=utf-8");
	exit("Hack attemp!".ACT);
}

?>