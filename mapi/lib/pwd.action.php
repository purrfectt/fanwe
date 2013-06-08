<?php
class pwdMapi
{
	public function run()
	{
		global $_FANWE;	
		
		$root = array();
		$root['return'] = 0;

		if($_FANWE['uid'] == 0)
		{
			$root['info'] = "请先登陆";
			m_display($root);
		}

		$user = FS("User")->getUserById($_FANWE['uid']);

		$data = array(
			'oldpassword'       => $_FANWE['requestData']['oldpassword'],
			'newpassword'       => $_FANWE['requestData']['newpassword'],
		);

		$vservice = FS('Validate');
		$validate = array(
			array('oldpassword','required','请输入现在的密码'),
			array('newpassword','range_length','请输入正确的新密码',6,32),
		);

		if(!$vservice->validation($validate,$data))
		{
			$root['info'] = $vservice->getError();
			m_display($root);
		}
		else
		{
			if(md5($data['oldpassword']) != $user['password'])
			{
				$root['info'] = '原密码不正确';
				m_display($root);
			}
			else
			{
				FDB::update('user',array('password'=>md5($data['newpassword'])),'uid = '.$_FANWE['uid']);
				$root['info'] = '修改成功';
				$user_field = $_FANWE['setting']['integrate_field_id'];
				$sql = "SELECT {$user_field} FROM ".FDB::table('user')." WHERE uid = '{$_FANWE['uid']}'";
				$integrate_id = intval(FDB::resultFirst($sql));
				if ($integrate_id > 0 ){
					FS("Integrate")->editUser($integrate_id, $data['newpassword'],'','');
				}
			}
		}
		$root['return'] = 1;
		m_display($root);
	}
}
?>