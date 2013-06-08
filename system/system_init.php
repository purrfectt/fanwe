<?php
 
@set_magic_quotes_runtime (0);
define('MAGIC_QUOTES_GPC',get_magic_quotes_gpc()?True:False);
error_reporting(E_ALL ^E_NOTICE ^E_WARNING);
if(!defined('IS_CGI'))
define('IS_CGI',substr(PHP_SAPI,0,3)=='cgi'?1 : 0 );
if(!defined('_PHP_FILE_')) {
if(IS_CGI) {
$_temp  = explode('.php',$_SERVER["PHP_SELF"]);
define('_PHP_FILE_',rtrim(str_replace($_SERVER["HTTP_HOST"],'',$_temp[0].'.php'),'/'));
}else {
define('_PHP_FILE_',rtrim($_SERVER["SCRIPT_NAME"],'/'));
}
}
if(!defined('APP_ROOT')) {
$_root = dirname(_PHP_FILE_);
$_root = (($_root=='/'||$_root=='\\')?'':$_root);
$_root = str_replace("/system","",$_root);
define('APP_ROOT',$_root  );
}
if(!defined('APP_ROOT_PATH')) 
define('APP_ROOT_PATH',str_replace('system/system_init.php','',str_replace('\\','/',__FILE__)));
define("MAX_DYNAMIC_CACHE_SIZE",1000);
require APP_ROOT_PATH.'system/utils/es_cookie.php';
require APP_ROOT_PATH.'system/utils/es_session.php';
es_session::start();
if (!isset($_SERVER['REQUEST_URI']))
{
if (isset($_SERVER['argv']))
{
$uri = $_SERVER['PHP_SELF'] .'?'.$_SERVER['argv'][0];
}
else
{
$uri = $_SERVER['PHP_SELF'] .'?'.$_SERVER['QUERY_STRING'];
}
$_SERVER['REQUEST_URI'] = $uri;
}
filter_request($_GET);
filter_request($_POST);
if(!file_exists(APP_ROOT_PATH."public/install.lock"))
{
app_redirect(APP_ROOT."/install/index.php");
}
$sys_config = require APP_ROOT_PATH.'system/config.php';
function app_conf($name)
{
return stripslashes($GLOBALS['sys_config'][$name]);
}
function get_http()
{
return (isset($_SERVER['HTTPS']) &&(strtolower($_SERVER['HTTPS']) != 'off')) ?'https://': 'http://';
}
function get_domain()
{
$protocol = get_http();
if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
{
$host = $_SERVER['HTTP_X_FORWARDED_HOST'];
}
elseif (isset($_SERVER['HTTP_HOST']))
{
$host = $_SERVER['HTTP_HOST'];
}
else
{
if (isset($_SERVER['SERVER_PORT']))
{
$port = ':'.$_SERVER['SERVER_PORT'];
if ((':80'== $port &&'http://'== $protocol) ||(':443'== $port &&'https://'== $protocol))
{
$port = '';
}
}
else
{
$port = '';
}
if (isset($_SERVER['SERVER_NAME']))
{
$host = $_SERVER['SERVER_NAME'] .$port;
}
elseif (isset($_SERVER['SERVER_ADDR']))
{
$host = $_SERVER['SERVER_ADDR'] .$port;
}
}
return $protocol .$host;
}
function get_host()
{
if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
{
$host = $_SERVER['HTTP_X_FORWARDED_HOST'];
}
elseif (isset($_SERVER['HTTP_HOST']))
{
$host = $_SERVER['HTTP_HOST'];
}
else
{
if (isset($_SERVER['SERVER_NAME']))
{
$host = $_SERVER['SERVER_NAME'];
}
elseif (isset($_SERVER['SERVER_ADDR']))
{
$host = $_SERVER['SERVER_ADDR'];
}
}
return $host;
}
if(app_conf("URL_MODEL")==1)
{
$current_url = APP_ROOT;
$current_file = explode("/",_PHP_FILE_);
$current_file = $current_file[count($current_file)-1];
if($current_file=='index.php'||$current_file=='shop.php')
$app_index = "";
else 
$app_index = str_replace(".php","",$current_file);
if($app_index!="")
$current_url = $current_url."/".$app_index;
$rewrite_param = $_REQUEST['rewrite_param'];
$rewrite_param = explode("/",$rewrite_param);
foreach($rewrite_param as $k=>$param_item)
{
if($param_item!='')
$rewrite_param_array[] = $param_item;
}
foreach ($rewrite_param_array as $k=>$v)
{
if(substr($v,0,1)=='-')
{
$v = substr($v,1);
$ext_param = explode("-",$v);
foreach($ext_param as $kk=>$vv)
{
if($kk%2==0)
{
if(preg_match("/(\w+)\[(\w+)\]/",$vv,$matches))
{
$_GET[$matches[1]][$matches[2]] = $ext_param[$kk+1];
}
else
$_GET[$ext_param[$kk]] = $ext_param[$kk+1];
if($ext_param[$kk]!="p")
{
$current_url.=$ext_param[$kk];
$current_url.="-".$ext_param[$kk+1]."-";
}
}
}
}
elseif($k==0)
{
$ctl_act = explode("-",$v);
if($ctl_act[0]!='id'&&$ctl_act[0]!='aid'&&$ctl_act[0]!='qid')
{
$_GET['ctl'] = $ctl_act[0];
$_GET['act'] = $ctl_act[1];
$current_url.="/".$ctl_act[0];
if($ctl_act[1]!="")
$current_url.="-".$ctl_act[1]."/";
else
$current_url.="/";
}
else
{
$ext_param = explode("-",$v);
foreach($ext_param as $kk=>$vv)
{
if($kk%2==0)
{
if(preg_match("/(\w+)\[(\w+)\]/",$vv,$matches))
{
$_GET[$matches[1]][$matches[2]] = $ext_param[$kk+1];
}
else
$_GET[$ext_param[$kk]] = $ext_param[$kk+1];
if($ext_param[$kk]!="p")
{
if($kk==0)$current_url.="/";
$current_url.=$ext_param[$kk];
$current_url.="-".$ext_param[$kk+1]."-";
}
}
}
}
}elseif($k==1)
{
$ext_param = explode("-",$v);
foreach($ext_param as $kk=>$vv)
{
if($kk%2==0)
{
if(preg_match("/(\w+)\[(\w+)\]/",$vv,$matches))
{
$_GET[$matches[1]][$matches[2]] = $ext_param[$kk+1];
}
else
$_GET[$ext_param[$kk]] = $ext_param[$kk+1];
if($ext_param[$kk]!="p")
{
$current_url.=$ext_param[$kk];
$current_url.="-".$ext_param[$kk+1]."-";
}
}
}
}
}
$current_url = substr($current_url,-1)=="-"?substr($current_url,0,-1):$current_url;
$domain = get_host();
if(strpos($domain,".".app_conf("DOMAIN_ROOT")))
{
$city = str_replace(".".app_conf("DOMAIN_ROOT"),"",$domain);
if($city!='')
$_GET['city'] = $city;
}
}
unset($_REQUEST['rewrite_param']);
unset($_GET['rewrite_param']);
if(function_exists('date_default_timezone_set'))
date_default_timezone_set(app_conf('DEFAULT_TIMEZONE'));
require APP_ROOT_PATH.'system/cache/Cache.php';
$cache = CacheService::getInstance();
require_once APP_ROOT_PATH."system/cache/CacheFileService.php";
$fcache = new CacheFileService();
$fcache->set_dir(APP_ROOT_PATH."public/runtime/data/");
require APP_ROOT_PATH.'system/db/db.php';
define('DB_PREFIX',app_conf('DB_PREFIX'));
if(!file_exists(APP_ROOT_PATH.'public/runtime/app/db_caches/'))
mkdir(APP_ROOT_PATH.'public/runtime/app/db_caches/',0777);
$pconnect = false;
$db = new mysql_db(app_conf('DB_HOST').":".app_conf('DB_PORT'),app_conf('DB_USER'),app_conf('DB_PWD'),app_conf('DB_NAME'),'utf8',$pconnect);
require  APP_ROOT_PATH.'system/template/template.php';
if(!file_exists(APP_ROOT_PATH.'public/runtime/app/tpl_caches/'))
mkdir(APP_ROOT_PATH.'public/runtime/app/tpl_caches/',0777);
if(!file_exists(APP_ROOT_PATH.'public/runtime/app/tpl_compiled/'))
mkdir(APP_ROOT_PATH.'public/runtime/app/tpl_compiled/',0777);
$tmpl = new AppTemplate;
$_REQUEST = array_merge($_GET,$_POST);
filter_request($_REQUEST);
$lang = require APP_ROOT_PATH.'/app/Lang/'.app_conf("SHOP_LANG").'/lang.php';
?>