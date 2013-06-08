<?php if ($this->_var['hide_filter']): ?>
<?php else: ?>

<div class="inc filter_box">
	<div class="inc_top"><?php echo $this->_var['LANG']['GOODS_FILTER']; ?></div>
	<div class="inc_main cf">
		<?php if ($this->_var['brand_list']): ?>
		<div class="filter_title f_l"><?php echo $this->_var['LANG']['BRAND']; ?>：</div>
		<div class="filter_content  f_l">
		<?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
		<a href="<?php echo $this->_var['brand']['url']; ?>" title="<?php echo $this->_var['brand']['name']; ?>" <?php if ($this->_var['brand']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['brand']['name']; ?></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>	
		<div class="blank"></div>
		<?php endif; ?>
		
		<?php $_from = $this->_var['filter_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
		<div class="filter_title f_l"><?php echo $this->_var['group']['name']; ?>：</div>
		<div class="filter_content  f_l">
		<?php $_from = $this->_var['group']['filter_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter');if (count($_from)):
    foreach ($_from AS $this->_var['filter']):
?>
		<a href="<?php echo $this->_var['filter']['url']; ?>" title="<?php echo $this->_var['filter']['name']; ?>" <?php if ($this->_var['filter']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['filter']['name']; ?></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>
		<div class="blank"></div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div class="inc_foot"></div>
</div>

<div class="blank"></div>
<?php endif; ?>
<?php echo $this->fetch('inc/inc_goods_list.html'); ?>
<div class="blank"></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>	