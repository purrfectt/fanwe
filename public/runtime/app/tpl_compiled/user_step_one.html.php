<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="inc">
	<?php echo $this->fetch('inc/step_nav.html'); ?>
	<div class="step-inc-main clearfix">
		<form name="step-one-form" id="step-one-form" method="post" action="<?php
echo parse_url_tag("u:shop|uc_account#save|"."".""); 
?>" >
		<table width="100%">
		<tr>
			<td>
				<script type="text/javascript" src="<?php echo $this->_var['APP_ROOT']; ?>/system/region.js"></script>		
				<div class="field">
																
					<label for="settings-region"><?php echo $this->_var['LANG']['USER_REGION']; ?></label>
					
					<?php echo $this->_var['LANG']['USER_PROVINCE']; ?>：<select name="province_id">
							<option value="0">=<?php echo $this->_var['LANG']['SELECT_PLEASE']; ?>=</option>
							<?php $_from = $this->_var['region_lv2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lv2');if (count($_from)):
    foreach ($_from AS $this->_var['lv2']):
?>
							<option <?php if ($this->_var['lv2']['selected'] == 1): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_var['lv2']['id']; ?>"><?php echo $this->_var['lv2']['name']; ?></option>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						  </select>
											
					<?php echo $this->_var['LANG']['USER_CITY']; ?>：<select name="city_id">
							<option value="0">=<?php echo $this->_var['LANG']['SELECT_PLEASE']; ?>=</option>		
							<?php $_from = $this->_var['region_lv3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'lv3');if (count($_from)):
    foreach ($_from AS $this->_var['lv3']):
?>
							<option <?php if ($this->_var['lv3']['selected'] == 1): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_var['lv3']['id']; ?>"><?php echo $this->_var['lv3']['name']; ?></option>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						 </select>
					
				</div>
				<div class="clear"></div>
				<div class="field clearfix">
					<label for="settings-birthday"><?php echo $this->_var['LANG']['USER_BIRTHDAY']; ?></label>
					<div class="f_l">
						<select name="byear">
							<option value="0"><?php echo $this->_var['LANG']['PLEASE_SELECT']; ?></option>
							<?php for($i = date("Y") - 100 ;$i<=date("Y"); $i++){ ?>
							<option value="<?php echo $i; ?>" <?php if($i==$GLOBALS['user_info']['byear']){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
							<?php
							}
							?>
						</select>
						<?php echo $this->_var['LANG']['SUPPLIER_YEAR']; ?>
						<select name="bmonth">
							<option value="0"><?php echo $this->_var['LANG']['PLEASE_SELECT']; ?></option>
							<?php for($i = 1 ;$i<=12; $i++){ ?>
							<option value="<?php echo $i; ?>"  <?php if($i==$GLOBALS['user_info']['bmonth']){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
							<?php
							}
							?>
						</select>
						<?php echo $this->_var['LANG']['SUPPLIER_MON']; ?>
						<select name="bday">
							<option value="0"><?php echo $this->_var['LANG']['PLEASE_SELECT']; ?></option>
							<?php for($i = 1 ;$i<=31; $i++){ ?>
							<option value="<?php echo $i; ?>" <?php if($i==$GLOBALS['user_info']['bday']){echo 'selected="selected"';} ?>><?php echo $i; ?></option>
							<?php
							}
							?>
						</select>
						<?php echo $this->_var['LANG']['SUPPLIER_DAY']; ?>
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="field">
					<label><?php echo $this->_var['LANG']['USER_SEX']; ?></label>
					<select name="sex">
						<option value="-1" <?php if ($this->_var['user_info']['sex'] == - 1): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['LANG']['USER_SEX_NULL']; ?></option>
						<option value="0" <?php if ($this->_var['user_info']['sex'] == 0): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['LANG']['USER_SEX_0']; ?></option>
						<option value="1" <?php if ($this->_var['user_info']['sex'] == 1): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['LANG']['USER_SEX_1']; ?></option>
					</select>
				</div>
				<div class="clear"></div>
				
				<div class="field">
					<label><?php echo $this->_var['LANG']['USER_MY_INTRO']; ?></label>
					<textarea name="my_intro" cols="10" style="width:250px; height:100px; border:#ccc solid 1px;"><?php echo $this->_var['user_info']['my_intro']; ?></textarea>
				</div>
				<div class="clear"></div>

				<?php $_from = $this->_var['field_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field_item');if (count($_from)):
    foreach ($_from AS $this->_var['field_item']):
?>
				<div class="field <?php echo $this->_var['field_item']['field_name']; ?>">
						<label for="<?php echo $this->_var['field_item']['field_name']; ?>"><?php echo $this->_var['field_item']['field_show_name']; ?></label>
						<?php if ($this->_var['field_item']['input_type'] == 0): ?>
						<input type="text" value="<?php echo $this->_var['field_item']['value']; ?>" class="f-input" id="settings-<?php echo $this->_var['field_item']['field_name']; ?>" name="<?php echo $this->_var['field_item']['field_name']; ?>" size="30">
						<?php else: ?>
						<select name ="<?php echo $this->_var['field_item']['field_name']; ?>" id="settings-<?php echo $this->_var['field_item']['field_name']; ?>">
							<?php $_from = $this->_var['field_item']['value_scope']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value_item');if (count($_from)):
    foreach ($_from AS $this->_var['value_item']):
?>
							<option value="<?php echo $this->_var['value_item']; ?>" <?php if ($this->_var['value_item'] == $this->_var['field_item']['value']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['value_item']; ?></option>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</select>
						<?php endif; ?>
				</div>
				<div class="clear"></div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div class="clear"></div>
				<div class="act">
					<input type="hidden" value="<?php echo $this->_var['user_info']['email']; ?>" name="email"/>
					<input type="hidden" value="<?php echo $this->_var['user_info']['user_name']; ?>" name="user_name"/>
					<input type="hidden" value="<?php echo $this->_var['user_info']['mobile']; ?>" name="mobile"/>
					<input type="hidden" value="<?php echo $this->_var['user_info']['id']; ?>" name="id" />
					<input type="submit" class="ok-next-btn f_l" id="settings-submit" name="commit" value="<?php echo $this->_var['LANG']['MODIFY']; ?>">
					<span class="next-href f_l"><a href="javascript:void(0);" onclick="skip_user_profile();"><?php echo $this->_var['LANG']['STEP_NEXT']; ?></a></span>
				</div>
				
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
<script type="text/javascript">
	//切换地区
$(document).ready(function(){
		$("#settings-submit").click(function(){
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
			var query  = $("form#step-one-form").serialize();
			$.ajax({
				url:APP_ROOT+"/shop.php?ctl=uc_account&act=save&is_ajax=1",
				data:query,
				dataType:"post",
				success:function(result){
					window.location.href= "<?php
echo parse_url_tag("u:shop|user#steptwo|"."".""); 
?>";
				}
			});
			return false;
		});
		
		$("select[name='province_id']").bind("change",function(){
			load_city();
		});
	});
	
	function load_city()
	{
		var id = $("select[name='province_id']").val();
		
		var evalStr="regionConf.r"+id+".c";

		if(id==0)
		{
			var html = "<option value='0'>="+LANG['SELECT_PLEASE']+"=</option>";
		}
		else
		{
			var regionConfs=eval(evalStr);
			evalStr+=".";
			var html = "<option value='0'>="+LANG['SELECT_PLEASE']+"=</option>";
			for(var key in regionConfs)
			{
				html+="<option value='"+eval(evalStr+key+".i")+"'>"+eval(evalStr+key+".n")+"</option>";
			}
		}
		$("select[name='city_id']").html(html);

		
	}
</script>
<?php echo $this->fetch('inc/footer.html'); ?>