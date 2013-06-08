
<div class="card_info">
	<div class="f_l">
		<a href="<?php
echo parse_url_tag("u:shop|space|"."id=".$this->_var['card_info']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_user_avatar',
  'v' => $this->_var['card_info']['id'],
  't' => 'small',
);
echo $k['name']($k['v'],$k['t']);
?>" /></a>
	</div>
	<div class="f_l" style="padding-left:10px;">
		<a href="<?php
echo parse_url_tag("u:shop|space|"."id=".$this->_var['card_info']['id']."".""); 
?>" style="color:#fe7000; font-weight:bolder;"><?php echo $this->_var['card_info']['user_name']; ?></a>
		<?php if ($this->_var['card_info']['is_merchant']): ?>
		<font class='is_merchant' title="认证商家"></font>
		<?php endif; ?>
		<?php if ($this->_var['card_info']['is_daren']): ?>
		<font class='is_daren' title='<?php echo $this->_var['card_info']['daren_title']; ?>'></font>
		<?php endif; ?>
		<div class="blank"></div>
		<a href="<?php
echo parse_url_tag("u:shop|space#fans|"."id=".$this->_var['card_info']['id']."".""); 
?>"><?php echo $this->_var['LANG']['FANS']; ?>:<?php echo $this->_var['card_info']['focused_count']; ?></a>
		<a href="<?php
echo parse_url_tag("u:shop|space#focus|"."id=".$this->_var['card_info']['id']."".""); 
?>"><?php echo $this->_var['LANG']['FOCUS']; ?>:<?php echo $this->_var['card_info']['focus_count']; ?></a>
	</div>
	<div class="blank5"></div>
	<?php if ($this->_var['card_info']['my_intro']): ?>
	<span title="<?php echo $this->_var['card_info']['my_intro']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['card_info']['my_intro'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></span>
	<?php else: ?>
	这家伙太懒了，什么都没留下
	<?php endif; ?>
	<?php if ($this->_var['card_info']['point_level'] || $this->_var['card_info']['medal_list']): ?>
	<div class="blank5"></div>
	<span style="color:#fe7000;"><?php echo $this->_var['card_info']['point_level']; ?></span>&nbsp;&nbsp;
	<?php $_from = $this->_var['card_info']['medal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'medal');if (count($_from)):
    foreach ($_from AS $this->_var['medal']):
?>
	<a href="<?php
echo parse_url_tag("u:shop|uc_medal|"."".""); 
?>" title="<?php echo $this->_var['medal']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['medal']['icon'],
  'w' => '20',
  'h' => '20',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" align="absmiddle" /></a>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php endif; ?>	
</div>
<div class="usercard_focus">
	<?php if ($this->_var['card_info']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['card_info']['id']; ?>,this);" class="remove_focus" style="margin:0px 5px; _margin-top:-1px;"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
	<?php else: ?>
			<?php if ($this->_var['card_info']['id'] == $this->_var['user_info']['id']): ?>
			&nbsp;&nbsp;自己都不认识了？
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['card_info']['id']; ?>,this);" class="add_focus"  style="margin:0px 5px;  _margin-top:-1px;"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
	<?php endif; ?>
</div>
