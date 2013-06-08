<?php echo $this->fetch('inc/header.html'); ?> 

<div class="blank"></div>
<div class="topic_search_box">
			<form name="topic_search" action="<?php
echo parse_url_tag("u:shop|topic#search|"."".""); 
?>" method="post" >
			<span>分享搜索:</span>
			<input type="text" class="search_txt" name="keyword" value="<?php echo $this->_var['keyword']; ?>"  />	
			<input type="submit" class="search_btn" value="" />
			<input type="hidden" name="type" value="<?php echo $this->_var['type']; ?>" />
			<input type="hidden" name="is_redirect" value="1" />
			</form>
			</div>
<div class="blank"></div>
<div class="short_uc f_l">

	<ul class="search_type_nav">
	<?php $_from = $this->_var['type_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?>
	<li <?php if ($this->_var['nav']['act'] == 1): ?>class="act"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" title="<?php echo $this->_var['nav']['name']; ?>"><?php echo $this->_var['nav']['name']; ?></a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>

</div>
<div class="middle_uc f_l">		
<?php if ($this->_var['user_list']): ?>
			<div class="rand_user_box">
			<?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_item');if (count($_from)):
    foreach ($_from AS $this->_var['user_item']):
?>		
			<div class="f_l pd10">
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
				<div class="f_l" style="padding-left:10px;">
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
			</div>												
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<div class="blank1"></div>
			<div class="tr"><a title="<?php echo $this->_var['LANG']['MORE']; ?>" href="<?php
echo parse_url_tag("u:shop|uc_center#mayfocus|"."".""); 
?>"><?php echo $this->_var['LANG']['MORE']; ?></a></div>
			</div>
			<div class="blank"></div>
<?php endif; ?>
			<div class="search_filter_box">
				<ul>
					<?php $_from = $this->_var['filter_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?>
					<li <?php if ($this->_var['nav']['act'] == 1): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" title="<?php echo $this->_var['nav']['name']; ?>"><?php echo $this->_var['nav']['name']; ?></a></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
				</ul>
			</div>
			<div class="blank"></div>
			<?php if ($this->_var['topic_list']): ?>
			<?php echo $this->_var['list_html']; ?>
			<?php else: ?>
			<div class="no_result"><?php echo $this->_var['LANG']['NO_TOPIC_RESULT']; ?> </div>
			<?php endif; ?>	
</div>
<div class="right_uc f_r">
	<div class="uc_right">
<?php echo $this->fetch('inc/topic_right.html'); ?>
</div>
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>