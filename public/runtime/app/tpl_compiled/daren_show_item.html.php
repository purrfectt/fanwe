<div data-category="0" class="cate_topic">
	<div class="cate_title">热门推荐</div>
	<div class="blank"></div>
	<?php $_from = $this->_var['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
	<div class="rec_topic_item <?php if ($this->_var['key'] % 2 != 0): ?>r<?php endif; ?>">
	<span>
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['topic']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['value']);
?> 
			<?php if ($this->_var['topic']['user_info']['is_merchant']): ?>
			<font class='is_merchant'></font>
			<?php endif; ?>
			<?php if ($this->_var['topic']['user_info']['is_daren']): ?>
			<font class='is_daren'></font><?php echo $this->_var['topic']['user_info']['daren_title']; ?>
			<?php endif; ?>
			
			<br />
			<?php if ($this->_var['topic']['user_info']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>
			
			<div class="fav_row f_r"><span><?php echo $this->_var['topic']['fav_count']; ?></span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content"><?php echo $this->_var['topic']['content']; ?></div>
	<div class="blank"></div>
	<a href="<?php
echo parse_url_tag("u:shop|topic#view|"."id=".$this->_var['topic']['id']."".""); 
?>" class="topic_view"><img src="<?php if ($this->_var['topic']['daren_page']): ?><?php echo $this->_var['topic']['daren_page']; ?><?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['images']['0']['o_path'],
  'w' => '458',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" /></a>
	</div>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
	
	<?php $_from = $this->_var['daren_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'daren');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['daren']):
?>
	<?php if ($this->_var['key'] < 8): ?>
	<span class="daren_item">
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['daren']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['daren']['id'],
);
echo $k['name']($k['value']);
?> 
			<?php if ($this->_var['daren']['is_merchant']): ?>
			<font class='is_merchant'></font>
			<?php endif; ?>
			<?php if ($this->_var['daren']['is_daren']): ?>
			<font class='is_daren'></font><?php echo $this->_var['daren']['daren_title']; ?>
			<?php endif; ?>
			
			<br />
			<?php if ($this->_var['daren']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>

	</span>	
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
</div><!--end cate_topic-->


<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
<div data-category="<?php echo $this->_var['cate_item']['id']; ?>" class="cate_topic">
	<div class="cate_title"><?php echo $this->_var['cate_item']['name']; ?></div>
	<div class="blank"></div>
	<?php $_from = $this->_var['cate_item']['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
	<div class="rec_topic_item <?php if ($this->_var['key'] % 2 != 0): ?>r<?php endif; ?>">
	<span>
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['topic']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['value']);
?> 
			<?php if ($this->_var['topic']['user_info']['is_merchant']): ?>
			<font class='is_merchant'></font>
			<?php endif; ?>
			<?php if ($this->_var['topic']['user_info']['is_daren']): ?>
			<font class='is_daren'></font><?php echo $this->_var['topic']['user_info']['daren_title']; ?>
			<?php endif; ?>
			
			<br />
			<?php if ($this->_var['topic']['user_info']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>
			
			<div class="fav_row f_r"><span><?php echo $this->_var['topic']['fav_count']; ?></span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content"><?php echo $this->_var['topic']['content']; ?></div>
	<div class="blank"></div>
	<a href="<?php
echo parse_url_tag("u:shop|topic#view|"."id=".$this->_var['topic']['id']."".""); 
?>" class="topic_view"><img src="<?php if ($this->_var['topic']['daren_page']): ?><?php echo $this->_var['topic']['daren_page']; ?><?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['images']['0']['o_path'],
  'w' => '458',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" /></a>
	</div>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
	
	<?php $_from = $this->_var['cate_item']['daren_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'daren');if (count($_from)):
    foreach ($_from AS $this->_var['daren']):
?>
	<span class="daren_item">
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['daren']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['daren']['id'],
);
echo $k['name']($k['value']);
?> 
			<?php if ($this->_var['daren']['is_merchant']): ?>
			<font class='is_merchant'></font>
			<?php endif; ?>
			<?php if ($this->_var['daren']['is_daren']): ?>
			<font class='is_daren'></font><?php echo $this->_var['daren']['daren_title']; ?>
			<?php endif; ?>
			
			<br />
			<?php if ($this->_var['daren']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>

	</span>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>