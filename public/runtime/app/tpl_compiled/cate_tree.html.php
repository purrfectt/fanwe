<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['GOODS_CATE']; ?></div>
	<div class="inc_main">
		<ul class="inner_cate_tree">
		<?php $_from = $this->_var['cate_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
		<li style="text-indent:<?php echo $this->_var['cate_item']['level']; ?>em;" <?php if ($this->_var['cate_id'] == $this->_var['cate_item']['id']): ?>class="act"<?php endif; ?>><a href="<?php echo $this->_var['cate_item']['url']; ?>" title="<?php echo $this->_var['cate_item']['name']; ?>"><?php echo $this->_var['cate_item']['name']; ?>(<?php echo $this->_var['cate_item']['count']; ?>)</a></li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
	<div class="inc_foot"></div>
</div>
