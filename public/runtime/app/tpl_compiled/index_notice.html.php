<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['SHOP_NOTICE']; ?><span class="f_r more"><a href="<?php
echo parse_url_tag("u:shop|notice#list|"."".""); 
?>" title="<?php echo $this->_var['LANG']['MORE']; ?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span></div>
	<div class="inc_main">
		<ul class="notice_list_mall">
		<?php $_from = $this->_var['notice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'notice');if (count($_from)):
    foreach ($_from AS $this->_var['notice']):
?>
		<li><a href="<?php echo $this->_var['notice']['url']; ?>" title="<?php echo $this->_var['notice']['title']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['notice']['title'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
	<div class="inc_foot"></div>
</div>
