<?php if ($this->_var['inc_var']['list']): ?>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['inc_var']['title']; ?><span class="f_r more"><a href="<?php echo $this->_var['inc_var']['url']; ?>" title="<?php echo $this->_var['LANG']['MORE']; ?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span></div>
	<div class="inc_main cf">
		<?php $_from = $this->_var['inc_var']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
		<div class="goods_item">
			<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['name']; ?>" class="goods_img_box"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['item']['icon'],
  'w' => '160',
  'h' => '160',
);
echo $k['name']($k['v'],$k['w'],$k['h']);
?>" width=160 height=160  class="lazy"  alt="<?php echo $this->_var['item']['name']; ?>"/></a>
			<div class="blank5"></div>
			<div class="tc">
			<span class="s_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['item']['current_price'],
);
echo $k['name']($k['v']);
?></span>
			&nbsp;&nbsp;
			<span class="m_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['item']['origin_price'],
);
echo $k['name']($k['v']);
?></span>
			</div>
			<div class="blank5"></div>
			<a href="<?php echo $this->_var['item']['url']; ?>" class="goods_item_title" title="<?php echo $this->_var['item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['item']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			<div class="blank5"></div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<div class="blank"></div>
	</div>
	<div class="inc_foot"></div>
</div>
<div class="blank"></div>
<?php endif; ?>
