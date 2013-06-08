<?php
class synclogin
{
	public function index()
	{		
		//$func_name = strim($GLOBALS['request']['type'])."_".strim($GLOBALS['request']['login_type']);
		$func_name = strim($GLOBALS['request']['login_type']);
		$func_name();
	}	
}

function Tencent()
{
		es_session::start();		
		require_once APP_ROOT_PATH.'system/api_login/Tencent/Tencent.php';
		OAuth::init($GLOBALS['m_config']['tencent_app_key'],$GLOBALS['m_config']['tencent_app_secret']);

		$openid = trim($GLOBALS['request']['openid']);
		$openkey = trim($GLOBALS['request']['openkey']);
		
		if($GLOBALS['m_config']['tencent_bind_url']=="")
		{
			$app_url = get_domain().APP_ROOT."/api_callback.php?c=Tencent";
		}
		else
		{
			$app_url = $GLOBALS['m_config']['tencent_bind_url'];
		}
        $access_token =  trim($GLOBALS['request']['access_token']);

		es_session::set("t_access_token",$access_token);
		es_session::set("t_openid",$openid);
		es_session::set("t_openkey",$openkey);
		
		if (es_session::get("t_access_token")|| (es_session::get("t_openid")&&es_session::get("t_openkey"))) 
		{
  			
			$r = Tencent::api('user/info');
			$r = json_decode($r,true);
    		$name =  $r['data']['name'];
			$user_data = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user where tencent_id = '".$name."' and tencent_id <> ''");	
			
			if($user_data)
			{
				if($user_data['is_effect']==0||$user_data['is_delete']==1)
				{
					$result['resulttype'] = 0;
				}
				else
				{
					$user_current_group = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user_group where id = ".intval($user_data['group_id']));
					$user_group = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user_group where score <=".intval($user_data['score'])." order by score desc");
					if($user_current_group['score']<$user_group['score'])
					{
						$user_data['group_id'] = intval($user_group['id']);
					}
					$GLOBALS['db']->query("update ".DB_PREFIX."user set t_access_token ='".$access_token."',t_openkey = '".$openkey."',t_openid = '".$openid."', login_ip = '".get_client_ip()."',login_time= ".get_gmtime().",group_id=".intval($user_data['group_id'])." where id =".$user_data['id']);				
					$GLOBALS['db']->query("update ".DB_PREFIX."deal_cart set user_id = ".intval($user_data['id'])." where session_id = '".es_session::id()."'");
					
					$result['user_pwd'] = $user_data['user_pwd'];
					$result['uid'] = $user_data['id'];
					$result['email'] = $user_data['email'];
					$result['user_avatar'] = get_abs_img_root(get_muser_avatar($user_data['id'],"big"));
					$name = $user_data['user_name'];
					$result['resulttype'] = 1;
				}					
			}
			else
			{
				$result['resulttype'] = -1;
			}
   			
		}
		
		$result['openid'] = $openid;
		$result['openkey'] = $openkey;
		$result['access_token'] = $access_token;
		
		
		$result['tencent_id'] = $name;
		$result['user_name'] = $name;
		$result['act'] = "synclogin";
		$result['login_type'] = "Tencent";
		output($result);
}



function Sina()
{
		es_session::start();		

		$sina_id = trim($GLOBALS['request']['sina_id']);
		$access_token = trim($GLOBALS['request']['access_token']);
		

			$user_data = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user where sina_id = '".$sina_id."' and sina_id <> '' and sina_id <> 0");	
			
			if($user_data)
			{
				if($user_data['is_effect']==0||$user_data['is_delete']==1)
				{
					$result['resulttype'] = 0;
				}
				else
				{
					$user_current_group = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user_group where id = ".intval($user_data['group_id']));
					$user_group = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."user_group where score <=".intval($user_data['score'])." order by score desc");
					if($user_current_group['score']<$user_group['score'])
					{
						$user_data['group_id'] = intval($user_group['id']);
					}
					$GLOBALS['db']->query("update ".DB_PREFIX."user set sina_token ='".$access_token."', login_ip = '".get_client_ip()."',login_time= ".get_gmtime().",group_id=".intval($user_data['group_id'])." where id =".$user_data['id']);				
					$GLOBALS['db']->query("update ".DB_PREFIX."deal_cart set user_id = ".intval($user_data['id'])." where session_id = '".es_session::id()."'");
					
					$result['user_pwd'] = $user_data['user_pwd'];
					$result['uid'] = $user_data['id'];
					$result['email'] = $user_data['email'];
					$result['user_avatar'] = get_abs_img_root(get_muser_avatar($user_data['id'],"big"));
					$name = $user_data['user_name'];
					$result['resulttype'] = 1;
				}					
			}
			else
			{
				$result['resulttype'] = -1;
			}
   			
		
		

		$result['access_token'] = $access_token;
		
		
		$result['sina_id'] = $sina_id;
		$result['user_name'] = $name;
		$result['act'] = "synclogin";
		$result['login_type'] = "Sina";
		output($result);
}
?>