<div class="inc">
	<div class="inc_main cf">
		<ul class="relate_help">
			<?php $_from = $this->_var['deal_help']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
			<li class="inc_top"><?php echo $this->_var['cate']['title']; ?></li>
			<?php $_from = $this->_var['cate']['help_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<li <?php if ($this->_var['item']['id'] == $this->_var['article']['id']): ?>class="act"<?php endif; ?>><a href="<?php echo $this->_var['item']['url']; ?>" <?php if ($this->_var['item']['new'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['item']['title']; ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>	
</div>
