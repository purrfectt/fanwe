<?php
// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------

$api_lang = array(
	'name'	=>	'QQ登录插件',
	'app_key'	=>	'QQAPI应用appid',
	'app_secret'	=>	'QQAPI应用appkey',
);

$config = array(
	'app_key'	=>	array(
		'INPUT_TYPE'	=>	'0',
	), //腾讯API应用的KEY值
	'app_secret'	=>	array(
		'INPUT_TYPE'	=>	'0'
	), //腾讯API应用的密码值
);

/* 模块的基本信息 */
if (isset($read_modules) && $read_modules == true)
{
	if(ACTION_NAME=='install')
	{
		//更新字段
		$GLOBALS['db']->query("ALTER TABLE `".DB_PREFIX."user`  ADD COLUMN `qq_id`  varchar(255) NOT NULL",'SILENT');
	}
    $module['class_name']    = 'Qq';

    /* 名称 */
    $module['name']    = $api_lang['name'];

	$module['config'] = $config;
	
	$module['lang'] = $api_lang;
    
    return $module;
}

// QQ的api登录接口
require_once(APP_ROOT_PATH.'system/libs/api_login.php');
class Qq_api implements api_login {
	
	private $api;
	
	public function __construct($api)
	{
		$api['config'] = unserialize($api['config']);
		$this->api = $api;
	}
	
	public function get_api_url()
	{
		es_session::start();
		$callback = get_domain().APP_ROOT."/api_callback.php?c=Qq";
		$url = get_domain().APP_ROOT."/system/api_login/qq/redirect_to_login.php?appid=".$this->api['config']['app_key']."&appkey=".$this->api['config']['app_secret']."&callback=".urlencode($callback);	
		$str = "<a href='".$url."' title='".$this->api['name']."'><img src='".$this->api['icon']."' alt='".$this->api['name']."' /></a>&nbsp;";
		return $str;
	}
	
	public function get_big_api_url()
	{
		es_session::start();
		$callback = get_domain().APP_ROOT."/api_callback.php?c=Qq";
		$url = get_domain().APP_ROOT."/system/api_login/qq/redirect_to_login.php?appid=".$this->api['config']['app_key']."&appkey=".$this->api['config']['app_secret']."&callback=".urlencode($callback);	
		$str = "<a href='".$url."' title='".$this->api['name']."'><img src='".$this->api['bicon']."' alt='".$this->api['name']."' /></a>&nbsp;";
		return $str;
	}
		
	public function callback()
	{
		es_session::start();	
		require_once APP_ROOT_PATH.'system/api_login/qq/get_access_token.php';
		
		//申请到的appid
		es_session::set("appid",$this->api['config']['app_key']);
		
		//申请到的appkey
		es_session::set("appkey",$this->api['config']['app_secret']);
				
		/**
		 * Tips：
		 * QQ互联登录，授权成功后会回调注册的callback地址
		 * 必须要用授权的request token换取access token
		 * 访问QQ互联的任何资源都需要access token
		 * 目前access token是长期有效的，除非用户解除与第三方绑定
		 * 如果第三方发现access token失效，请引导用户重新登录QQ互联，授权，获取access token
		 */

		
		//用户使用QQ登录，并授权成功后，会返回用户的openid。此时需要检查返回的openid是否是合法id
		//我们不建议开发者使用该openid，而是使用获取access token之后返回的openid。
		if (!is_valid_openid($_REQUEST["openid"], $_REQUEST["timestamp"], $_REQUEST["oauth_signature"]))
		{
		    //demo对错误简单处理
		    echo "###invalid openid\n";
		    echo "sig:".$_REQUEST["oauth_signature"]."\n";
		    exit;
		}
		
		//Tips
		//这里已经获取到了openid，可以处理第三方账户与openid的绑定逻辑。
		//但是我们建议第三方等到获取access token之后在做绑定逻辑
		
		//用授权的request token换取access token
		$access_str = get_access_token(es_session::get("appid"), es_session::get("appkey"), $_REQUEST["oauth_token"], es_session::get("secret"), $_REQUEST["oauth_vericode"]);
		//echo "access_str:$access_str\n";
		$result = array();
		parse_str($access_str, $result);
		
		//print_r($result);
		
		//错误处理
		if (isset($result["error_code"]))
		{
		    echo "get access token error<br>";
		    echo "error msg: $request_token<br>";
		    echo "点击<a href=\"http://wiki.opensns.qq.com/wiki/%E3%80%90QQ%E7%99%BB%E5%BD%95%E3%80%91%E5%85%AC%E5%85%B1%E8%BF%94%E5%9B%9E%E7%A0%81%E8%AF%B4%E6%98%8E\" target=_blank>查看错误码</a>";
		    exit;
		}
		
		
		//将access token，openid保存起来！！！
		//在demo演示中，直接保存在全局变量中.
		//正式网站运营环境中，我们强烈建议你将这两个值保存在MySQL或者其他永久的存储中以便于后续使用
		//尤其是在网站不止一台服务器的情况下，两次请求的sessoin信息可能不会保存再同一台服务器导致访问出错
		es_session::set("token",$result["oauth_token"]);
		es_session::set("secret",$result["oauth_token_secret"]);
		es_session::set("openid",$result["openid"]);

		
		
		$arr = get_qquser_info(es_session::get("appid"), es_session::get("appkey"), es_session::get("token"),es_session::get("secret"), es_session::get("openid"));

		
		$msg['field'] = 'qq_id';
		$msg['id'] = $result["openid"];
		$msg['name'] = $arr["nickname"];
		es_session::set("api_user_info",$msg);

		$user_data = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user where qq_id = '".$result["openid"]."' and qq_id <> ''");	
		if($user_data)
		{
				$user_current_group = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user_group where id = ".intval($user_data['group_id']));
				$user_group = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user_group where score <=".intval($user_data['score'])." order by score desc");
				if($user_current_group['score']<$user_group['score'])
				{
					$user_data['group_id'] = intval($user_group['id']);
				}
				es_session::set("user_info",$user_data);
				$GLOBALS['db']->query("update ".DB_PREFIX."user set login_ip = '".get_client_ip()."',login_time= ".get_gmtime().",group_id=".intval($user_data['group_id'])." where id =".$user_data['id']);				
				$GLOBALS['db']->query("update ".DB_PREFIX."deal_cart set user_id = ".intval($user_data['id'])." where session_id = '".es_session::id()."'");
				es_session::delete("api_user_info");
				app_recirect_preview();
		}
		else
		app_redirect(url("shop","user#api_login"));
		
	}
	
	public function get_title()
	{
		return 'QQ登录接口，需要php_curl扩展的支持';
	}
	public function create_user()
	{
		$s_api_user_info = es_session::get("api_user_info");
		$user_data['user_name'] = $s_api_user_info['name'];
		$user_data['user_pwd'] = md5(rand(100000,999999));
		$user_data['create_time'] = get_gmtime();
		$user_data['update_time'] = get_gmtime();
		$user_data['login_ip'] = get_client_ip();
		$user_data['group_id'] = $GLOBALS['db']->getOne("select id from ".DB_PREFIX."user_group order by score asc limit 1");
		$user_data['is_effect'] = 1;
		$user_data['qq_id'] = $s_api_user_info['id'];
		$origin_username = $user_data['user_name'];
		$count = 0;
		do{
			if($count>0)
			$user_data['user_name'] = $origin_username.get_gmtime();
			if($user_data['qq_id'])
			$GLOBALS['db']->autoExecute(DB_PREFIX."user",$user_data,"INSERT",'','SILENT');
			$rs = $GLOBALS['db']->insert_id();
			$count++;
		}while(intval($rs)==0&&$user_data['qq_id']);
		
		$user_info = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user where id = ".intval($rs));
		es_session::set("user_info",$user_info);
		es_session::delete("api_user_info");
	}	
}
?>