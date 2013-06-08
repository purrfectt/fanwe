<?php if ($this->_var['cate_tree']): ?>
<div class="cate_tree_inc">
	<div class="inc_main">
		<ul class="cate_tree">
		<?php $_from = $this->_var['cate_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['cate_item']):
?>
		
		<?php if ($this->_var['cate_item']['level'] == 0): ?>
				<?php if ($this->_var['key'] != 0): ?>
				</div>
				<?php endif; ?>
			<div <?php if ($this->_var['cate_item']['is_hide']): ?>style="display:none;"<?php endif; ?>>
		<?php endif; ?>	
			
		<li style="text-indent:<?php echo $this->_var['cate_item']['level']; ?>em;" <?php if ($this->_var['cate_item']['level'] == 0): ?> class="first" <?php else: ?> class="subcate"<?php endif; ?>>
			<a href="<?php echo $this->_var['cate_item']['url']; ?>" title="<?php echo $this->_var['cate_item']['name']; ?>"><?php echo $this->_var['cate_item']['name']; ?></a>
		</li>
		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		</ul>
	</div>
	<div class="inc_foot"></div>
</div>
<?php endif; ?>