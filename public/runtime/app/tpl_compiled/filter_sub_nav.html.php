<ul class="filter_sub_nav">
<?php $_from = $this->_var['sub_nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_24494500_1345512921');if (count($_from)):
    foreach ($_from AS $this->_var['nav_0_24494500_1345512921']):
?>
<li <?php if ($this->_var['nav_0_24494500_1345512921']['current'] == 1): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav_0_24494500_1345512921']['url']; ?>" title="<?php echo $this->_var['nav_0_24494500_1345512921']['name']; ?>"><?php echo $this->_var['nav_0_24494500_1345512921']['name']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>