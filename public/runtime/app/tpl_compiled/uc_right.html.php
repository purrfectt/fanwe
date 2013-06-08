<div class="uc_right">
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['YOU_MAY_FOCUS']; ?>
	<span class="f_r more"><a title="<?php echo $this->_var['LANG']['MORE']; ?>" href="<?php
echo parse_url_tag("u:shop|uc_center#mayfocus|"."".""); 
?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span>
	</div>
	<div class="inc_main user_list">
		<div class="blank"></div>
		<?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_item');if (count($_from)):
    foreach ($_from AS $this->_var['user_item']):
?>
		
		<span>
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['user_item']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:70px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['user_item']['id'],
);
echo $k['name']($k['value']);
?> 
			<br />
			<?php if ($this->_var['user_item']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['user_item']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['user_item']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>
		</span>	
		<div class="blank"></div>									
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
	</div>
	
	
</div>
<?php if ($this->_var['fans_list']): ?>
<div class="blank"></div>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['MY_FANS']; ?>
	<span class="f_r more"><a title="<?php echo $this->_var['LANG']['MORE']; ?>" href="<?php
echo parse_url_tag("u:shop|uc_center#fans|"."".""); 
?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span>
	</div>
	<div class="inc_main user_list">
		<div class="blank"></div>
		<?php $_from = $this->_var['fans_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_item');if (count($_from)):
    foreach ($_from AS $this->_var['user_item']):
?>
		
		<span>
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['user_item']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:70px; overflow:hidden;">
				<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['user_item']['id'],
);
echo $k['name']($k['value']);
?> 
				<br />
			<?php if ($this->_var['user_item']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['user_item']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['user_item']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>
		</span>	
		<div class="blank"></div>									
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	
	
</div>
<?php endif; ?>
<?php if ($this->_var['focus_list']): ?>
<div class="blank"></div>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['MY_FOCUS']; ?>
	<span class="f_r more"><a title="<?php echo $this->_var['LANG']['MORE']; ?>" href="<?php
echo parse_url_tag("u:shop|uc_center#focus|"."".""); 
?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span>
	</div>
	<div class="inc_main user_list">
		<div class="blank"></div>
		<?php $_from = $this->_var['focus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_item');if (count($_from)):
    foreach ($_from AS $this->_var['user_item']):
?>
		
		<span>
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['user_item']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:70px; overflow:hidden;">
				<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['user_item']['id'],
);
echo $k['name']($k['value']);
?> 
				<br />

			<?php if ($this->_var['user_item']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['user_item']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['user_item']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>
		</span>	
		<div class="blank"></div>									
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	
	
</div>
<?php endif; ?>
<div class="blank"></div>
<?php echo $this->fetch('inc/topic_right.html'); ?>
</div>