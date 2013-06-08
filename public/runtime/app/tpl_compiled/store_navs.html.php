<?php $_from = $this->_var['navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'nav_0_74242500_1345531131');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['nav_0_74242500_1345531131']):
?>
<li data="<?php echo $this->_var['nav_0_74242500_1345531131']['type']; ?>" rel="<?php echo $this->_var['nav_0_74242500_1345531131']['location_id']; ?>" <?php if ($this->_var['key'] == 0): ?>class="act"<?php endif; ?> ><?php echo $this->_var['nav_0_74242500_1345531131']['name']; ?>(<?php echo $this->_var['nav_0_74242500_1345531131']['count']; ?>)</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>