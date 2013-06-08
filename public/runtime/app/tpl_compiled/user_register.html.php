<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>

	<div class="inc">
		<div class="user_inc_top"><?php echo $this->_var['page_title']; ?></div>
		<div class="inc_main pd10 clearfix">
			<div class="user-lr-box-left f_l" style="width:600px">
								<!--注册表单-->
								<form action="<?php
echo parse_url_tag("u:shop|user#doregister|"."".""); 
?>" method="post" id="signup-user-form">
								<div class="field email">
									<label for="signup-email-address"><?php echo $this->_var['LANG']['USER_TITLE_EMAIL']; ?></label>
									<input type="text" value="" class="f-input ipttxt" id="signup-email-address" name="email" size="30">
									<span class="f-input-tip"></span> 
									<span class="hint"><?php echo $this->_var['LANG']['USER_TITLE_EMAIL_TIP']; ?></span> 
								</div>
								<div class="blank1"></div>
								<div class="field username">
									<label for="signup-username"><?php echo $this->_var['LANG']['USER_TITLE_USER_NAME']; ?></label>
									<input type="text" value="<?php echo $this->_var['reg_name']; ?>" class="f-input ipttxt" id="signup-username" name="user_name" size="30">
									<span class="f-input-tip"></span> 
									<span class="hint"><?php echo $this->_var['LANG']['USER_TITLE_USER_NAME_TIP']; ?></span> 
								</div>
								<div class="blank1"></div>
								<div class="field password">
									<label for="signup-password"><?php echo $this->_var['LANG']['USER_TITLE_USER_PWD']; ?></label>
									<input type="password" class="f-input ipttxt" id="signup-password" name="user_pwd" size="30">
									<span class="f-input-tip"></span> 
									<span class="hint"><?php echo $this->_var['LANG']['USER_TITLE_USER_PWD_TIP']; ?></span> 
								</div>
								<div class="blank1"></div>
								<div class="field password">
									<label for="signup-password-confirm"><?php echo $this->_var['LANG']['USER_TITLE_USER_CONFIRM_PWD']; ?></label>
									<input type="password" class="f-input ipttxt" id="signup-password-confirm" name="user_pwd_confirm" size="30">
									<span class="f-input-tip"></span> 
								</div>
								<div class="blank1"></div>
								<div class="field mobile">
									<label for="signup-mobile"><?php echo $this->_var['LANG']['USER_TITLE_MOBILE']; ?></label>
									<input type="text" value="" class="f-input ipttxt" id="settings-mobile" name="mobile" size="30">
									<span class="f-input-tip"></span> 
									<span class="hint"> <?php echo $this->_var['LANG']['USER_TITLE_MOBILE_TIP']; ?></span>
								</div>			
								<div class="blank1"></div>
								
								
								<?php $_from = $this->_var['field_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field_item');if (count($_from)):
    foreach ($_from AS $this->_var['field_item']):
?>
								<div class="field">
									<label id="<?php echo $this->_var['field_item']['field_name']; ?>_label"><?php echo $this->_var['field_item']['field_show_name']; ?></label>
									<?php if ($this->_var['field_item']['input_type'] == 0): ?>
									<input type="text" value="" class="f-input ipttxt" id="settings-<?php echo $this->_var['field_item']['field_name']; ?>" name="<?php echo $this->_var['field_item']['field_name']; ?>" size="30">
									<?php endif; ?>
									
									<?php if ($this->_var['field_item']['input_type'] == 1): ?>
									<select id="settings-<?php echo $this->_var['field_item']['field_name']; ?>" name="<?php echo $this->_var['field_item']['field_name']; ?>">
										<?php $_from = $this->_var['field_item']['value_scope']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value_item');if (count($_from)):
    foreach ($_from AS $this->_var['value_item']):
?>
										<option value="<?php echo $this->_var['value_item']; ?>"><?php echo $this->_var['value_item']; ?></option>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</select>
									<?php endif; ?>
									<span class="f-input-tip"></span> 
								</div>
								<div class="blank1"></div>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								<?php if (app_conf ( "VERIFY_IMAGE" ) == 1): ?>
								<div class="field autologin">
									<div class="verify_row">								
									<input type="text" value="" class="f-input" name="verify" />	
									<img src="<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand=<?php 
$k = array (
  'name' => 'rand',
);
echo $k['name']();
?>" onclick="this.src='<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand='+ Math.random();" title="看不清楚？换一张" />			
									</div>
								</div>
								<?php endif; ?>
								
								<div class="blank"></div>
								
								<div class="act">
									<input type="submit" class="reg-submit-btn" id="signup-submit" name="commit" value="<?php echo $this->_var['LANG']['REGISTER']; ?>">				
								</div>
							</form>
				</div>
				<div class="user-lr-box-right f_r">
					<div class="app_login_box">
					<div class="blank10"></div>
					<?php 
$k = array (
  'name' => 'get_app_login',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
					</div>
				</div>
			</div>		
			<div class="inc_foot"></div>
		</div>



<script type="text/javascript">

$(document).ready(function(){

	$("#signup-submit").click(function(){
		if($.trim($("#signup-email-address").val()).length == 0)
		{
			$("#signup-email-address").focus();
			$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['EMPTY_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_EMAIL'],
);
echo $k['name']($k['format'],$k['value']);
?>");
			
			return false;
		}
		
		if(!$.checkEmail($("#signup-email-address").val()))
		{
			$("#signup-email-address").focus();			
			$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_EMAIL'],
);
echo $k['name']($k['format'],$k['value']);
?>");
			return false;
		}
		
		if(!$.minLength($("#signup-username").val(),3,true))
		{
			$("#signup-username").focus();
			$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_USER_NAME'],
);
echo $k['name']($k['format'],$k['value']);
?>");		
			return false;
		}
		
		if(!$.maxLength($("#signup-username").val(),16,true))
		{
			$("#signup-username").focus();
			$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_USER_NAME'],
);
echo $k['name']($k['format'],$k['value']);
?>");			
			return false;
		}
		
		if(!$.minLength($("#signup-password").val(),4,false))
		{
			$("#signup-password").focus();
			$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_USER_PWD'],
);
echo $k['name']($k['format'],$k['value']);
?>");	
			return false;
		}
		
		if($("#signup-password-confirm").val() != $("#signup-password").val())
		{
			$("#signup-password-confirm").focus();
			$.showErr("<?php echo $this->_var['LANG']['USER_PWD_CONFIRM_ERROR']; ?>");			
			return false;
		}

		if(!$.checkMobilePhone($("#settings-mobile").val()))
		{
			$("#settings-mobile").focus();			
			$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_MOBILE'],
);
echo $k['name']($k['format'],$k['value']);
?>");	
			return false;
		}	

		<?php if (app_conf ( "MOBILE_MUST" ) == 1): ?>
			if($.trim($("#settings-mobile").val()).length == 0)
			{
				$("#settings-mobile").focus();
				$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['EMPTY_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_MOBILE'],
);
echo $k['name']($k['format'],$k['value']);
?>");
				
				return false;
			}
		<?php endif; ?>
		

		<?php $_from = $this->_var['field_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field_item');if (count($_from)):
    foreach ($_from AS $this->_var['field_item']):
?>
			<?php if ($this->_var['field_item']['is_must'] == 1): ?>
			if($("#settings-<?php echo $this->_var['field_item']['field_name']; ?>").val()=='')
			{
				$.showErr("<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['EMPTY_ERROR_TIP'],
  'value' => $this->_var['field_item']['field_show_name'],
);
echo $k['name']($k['format'],$k['value']);
?>");	
				$("#settings-<?php echo $this->_var['field_item']['field_name']; ?>").focus();
				return false;
			}
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

		
	});
	
	
	//开始绑定 
	$("#signup-email-address").bind("blur",function(){
		if($.trim($("#signup-email-address").val()).length == 0)
		{
			formError($("#signup-email-address"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['EMPTY_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_EMAIL'],
);
echo $k['name']($k['format'],$k['value']);
?>");			
			return false;
		}
		
		if(!$.checkEmail($("#signup-email-address").val()))
		{
			formError($("#signup-email-address"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_EMAIL'],
);
echo $k['name']($k['format'],$k['value']);
?>");
			return false;
		}	
		
		var ajaxurl = APP_ROOT+"/shop.php?ctl=ajax&act=check_field";
		var query = new Object();
		query.field_name = "email";
		query.field_data = $.trim($(this).val());
		$.ajax({ 
			url: ajaxurl,
			data:query,
			type: "POST",
			dataType: "json",
			success: function(data){
				if(data.status==1)
				{
					formSuccess($("#signup-email-address"),"<?php echo $this->_var['LANG']['CAN_USED']; ?>");
					return false;
				}
				else
				{
					formError($("#signup-email-address"),data.info);
					return false;
				}
			}
		});	
	}); //邮箱验证
	
	
	
	$("#signup-username").bind("blur",function(){
		if(!$.minLength($("#signup-username").val(),3,true))
		{
			formError($("#signup-username"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_USER_NAME'],
);
echo $k['name']($k['format'],$k['value']);
?>");		
			return false;
		}
		
		if(!$.maxLength($("#signup-username").val(),16,true))
		{
			formError($("#signup-username"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_USER_NAME'],
);
echo $k['name']($k['format'],$k['value']);
?>");			
			return false;
		}	
		
		var ajaxurl = APP_ROOT+"/shop.php?ctl=ajax&act=check_field";
		var query = new Object();
		query.field_name = "user_name";
		query.field_data = $.trim($(this).val());
		$.ajax({ 
			url: ajaxurl,
			data:query,
			type: "POST",
			dataType: "json",
			success: function(data){
				if(data.status==1)
				{
					formSuccess($("#signup-username"),"<?php echo $this->_var['LANG']['CAN_USED']; ?>");
					return false;
				}
				else
				{
					formError($("#signup-username"),data.info);
					return false;
				}
			}
		});	
	}); //用户名验证
	
	
	$("#signup-password").bind("blur",function(){
		if(!$.minLength($("#signup-password").val(),4,false))
		{
			formError($("#signup-password"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_USER_PWD'],
);
echo $k['name']($k['format'],$k['value']);
?>");	
			return false;
		}
		formSuccess($("#signup-password"),"<?php echo $this->_var['LANG']['CAN_USED']; ?>");
	}); //密码验证
	
	$("#signup-password-confirm").bind("blur",function(){
		if($("#signup-password-confirm").val() != $("#signup-password").val())
		{
			formError($("#signup-password-confirm"),"<?php echo $this->_var['LANG']['USER_PWD_CONFIRM_ERROR']; ?>");			
			return false;
		}
		formSuccess($("#signup-password-confirm"),"<?php echo $this->_var['LANG']['VERIFY_SUCCESS']; ?>");
	}); //确认密码验证
	
	$("#settings-mobile").bind("blur",function(){
		if(!$.checkMobilePhone($("#settings-mobile").val()))
		{
			formError($("#settings-mobile"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['FORMAT_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_MOBILE'],
);
echo $k['name']($k['format'],$k['value']);
?>");	
			return false;
		}	

		<?php if (app_conf ( "MOBILE_MUST" ) == 1): ?>
			if($.trim($("#settings-mobile").val()).length == 0)
			{				
				formError($("#settings-mobile"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['EMPTY_ERROR_TIP'],
  'value' => $this->_var['LANG']['USER_TITLE_MOBILE'],
);
echo $k['name']($k['format'],$k['value']);
?>");
				return false;
			}
		<?php endif; ?>
		
		var ajaxurl = APP_ROOT+"/shop.php?ctl=ajax&act=check_field";
		var query = new Object();
		query.field_name = "mobile";
		query.field_data = $.trim($(this).val());
		$.ajax({ 
			url: ajaxurl,
			data:query,
			type: "POST",
			dataType: "json",
			success: function(data){
				if(data.status==1)
				{
					if(query.field_data!='')
					formSuccess($("#settings-mobile"),"<?php echo $this->_var['LANG']['CAN_USED']; ?>");
					else
					formSuccess($("#settings-mobile"),"");
					return false;
				}
				else
				{					
					formError($("#settings-mobile"),data.info);
					return false;
				}
			}
		});	
	}); //手机验证
	
	
	
	<?php $_from = $this->_var['field_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field_item');if (count($_from)):
    foreach ($_from AS $this->_var['field_item']):
?>
			<?php if ($this->_var['field_item']['is_must'] == 1): ?>			
			$("#settings-<?php echo $this->_var['field_item']['field_name']; ?>").bind("blur",function(){
				if($("#settings-<?php echo $this->_var['field_item']['field_name']; ?>").val()=='')
				{
					formError($("#settings-<?php echo $this->_var['field_item']['field_name']; ?>"),"<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['EMPTY_ERROR_TIP'],
  'value' => $this->_var['field_item']['field_show_name'],
);
echo $k['name']($k['format'],$k['value']);
?>");	
					return false;
				}
				formSuccess($("#settings-<?php echo $this->_var['field_item']['field_name']; ?>"),"");
			}); //扩展字段		
			<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
});
</script>
<?php echo $this->fetch('inc/footer.html'); ?>