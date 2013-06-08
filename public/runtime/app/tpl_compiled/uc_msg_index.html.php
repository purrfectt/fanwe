<?php
$this->_var['pmjs'][] = $this->_var['TMPL_REAL']."/js/pm.js";
$this->_var['cpmjs'][] = $this->_var['TMPL_REAL']."/js/pm.js";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['pmjs'],
  'c' => $this->_var['cpmjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['page_title']; ?></div>
	<div class="inc_main">
		
		<div class="uc-table">
		<div class="f_l">
		<?php echo $this->_var['LANG']['SELECT_ALL']; ?><input type="checkbox" name="checkall" /> <input type="button" value="<?php echo $this->_var['LANG']['DELETE']; ?>" name="del_pm" class="remove_msg_btn" />
		</div>
		<div class="f_r">
			<input type="button" value="<?php echo $this->_var['LANG']['WRITE_PM']; ?>"  class="remove_msg_btn" onclick="location.href='<?php
echo parse_url_tag("u:shop|uc_msg#deal|"."".""); 
?>';" />
		</div>
		<div class="blank"></div>
		<table cellspacing="0" cellpadding="0" border="0" class="uc-msg-table" >
		<form name="pm_list">
			<?php $_from = $this->_var['msg_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'pm');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['pm']):
?>
			<tr class="pm_row">
				<td width=15>					
					<input type="checkbox" value="<?php echo $this->_var['pm']['group_key']; ?>" name="pm_key[]" />					
				</td>
				<td width=15>
					<?php if ($this->_var['pm']['system_msg_id'] != 0 || $this->_var['pm']['is_notice']): ?><span class="pm_pic"></span><?php endif; ?>
					<?php if ($this->_var['pm']['system_msg_id'] == 0 && $this->_var['pm']['is_notice'] == 0): ?>
						<?php if ($this->_var['pm']['to_user_id'] == $this->_var['user_info']['id']): ?>
						<?php 
$k = array (
  'name' => 'show_avatar',
  'v' => $this->_var['pm']['from_user_id'],
  't' => 'small',
);
echo $k['name']($k['v'],$k['t']);
?>
						<?php endif; ?>
						<?php if ($this->_var['pm']['from_user_id'] == $this->_var['user_info']['id']): ?>
						<?php 
$k = array (
  'name' => 'show_avatar',
  'v' => $this->_var['pm']['to_user_id'],
  't' => 'small',
);
echo $k['name']($k['v'],$k['t']);
?>
						<?php endif; ?>
					<?php endif; ?>
				</td>
				
				<td style="text-align:left;">
					
					<?php if ($this->_var['pm']['type'] == 0 && $this->_var['pm']['is_read'] == 0): ?><span class="new_pm"></span><?php endif; ?>
					
					<?php if ($this->_var['pm']['system_msg_id'] != 0 || $this->_var['pm']['is_notice']): ?><?php if ($this->_var['pm']['is_notice']): ?>系统通知<?php else: ?><?php echo $this->_var['LANG']['SYSTEM_PM']; ?><?php endif; ?>：<span style="color:#f60; font-weight:bolder;"><?php echo $this->_var['pm']['title']; ?></span>
					<?php endif; ?>
					<?php if ($this->_var['pm']['system_msg_id'] == 0 && $this->_var['pm']['is_notice'] == 0): ?>
		
						<?php if ($this->_var['pm']['from_user_id'] == $this->_var['user_info']['id']): ?><?php echo $this->_var['LANG']['I']; ?><?php else: ?><?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['pm']['from_user_id'],
  's' => '0',
);
echo $k['name']($k['v'],$k['s']);
?><?php endif; ?>
						<?php echo $this->_var['LANG']['SAYTO']; ?>
						<?php if ($this->_var['pm']['to_user_id'] == $this->_var['user_info']['id']): ?><?php echo $this->_var['LANG']['I']; ?><?php else: ?><?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['pm']['to_user_id'],
  's' => '0',
);
echo $k['name']($k['v'],$k['s']);
?><?php endif; ?>
						<?php echo $this->_var['LANG']['SAY']; ?>：
				
					<?php endif; ?>
					<br />
					<a href="<?php
echo parse_url_tag("u:shop|uc_msg#deal|"."id=".$this->_var['pm']['group_key']."".""); 
?>">
					<?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['pm']['content'],
  'b' => '0',
  'e' => '100',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?>
					</a>&nbsp;&nbsp;
					<a href="<?php
echo parse_url_tag("u:shop|uc_msg#deal|"."id=".$this->_var['pm']['group_key']."".""); 
?>" class="view_pm">
						<?php if ($this->_var['pm']['system_msg_id'] == 0 && $this->_var['pm']['type'] == 0 && $this->_var['pm']['is_notice'] == 0): ?>
						[<?php echo $this->_var['LANG']['VIEW_AND_REPLY']; ?>]
						<?php else: ?>
						[<?php echo $this->_var['LANG']['VIEW']; ?>]			
						<?php endif; ?>			
					</a>
					
				</td>
				<td width=100 style="text-align:right;">
					<?php 
$k = array (
  'name' => 'sprintf',
  'f' => $this->_var['LANG']['TOTAL_PM'],
  'v' => $this->_var['pm']['total'],
);
echo $k['name']($k['f'],$k['v']);
?>
					<br />
					<?php 
$k = array (
  'name' => 'pass_date',
  'v' => $this->_var['pm']['create_time'],
);
echo $k['name']($k['v']);
?>
				</td>
			</tr>				
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</form>
		</table>
						
		<div class="blank"></div>
		<div class="pages" style="padding:0px; margin:0px;"><?php echo $this->_var['pages']; ?></div>
		</div><!--end uc-table-->
	</div>
	<div class="inc_foot"></div>
</div>

