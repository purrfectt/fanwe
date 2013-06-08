<?php if ($this->_var['sale_list']['list']): ?>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['sale_list']['title']; ?><span class="f_r more"><a href="<?php echo $this->_var['sale_list']['url']; ?>" title="<?php echo $this->_var['LANG']['MORE']; ?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span></div>
	<div class="inc_main sale_list_main">
		<?php $_from = $this->_var['sale_list']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		<?php if ($this->_var['key'] < 3): ?>
		<div class="sale_goods_item">
			<div class="sale_goods_img f_l">
			<div class="sale_list_tag"><?php echo ($this->_var['key']+1);?></div>
			<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['item']['icon'],
  'w' => '75',
  'h' => '75',
);
echo $k['name']($k['v'],$k['w'],$k['h']);
?>"  alt="<?php echo $this->_var['item']['name']; ?>"/></a>
			</div>
			<div class="sale_goods_info f_l">
			<a href="<?php echo $this->_var['item']['url']; ?>" class="goods_item_title" title="<?php echo $this->_var['item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['item']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			<div class="m_price"><?php echo $this->_var['LANG']['ORIGIN_PRICE']; ?><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['item']['origin_price'],
);
echo $k['name']($k['v']);
?></div>
			<div class="s_price"><?php echo $this->_var['LANG']['CURRENT_PRICE']; ?><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['item']['current_price'],
);
echo $k['name']($k['v']);
?></div>
			</div>
		</div>
		<?php else: ?>
		<div class="sale_goods_item">
		<span class="sale_list_count sale_count_<?php echo ($this->_var['key']+1);?>"><?php echo ($this->_var['key']+1);?></span>
		<a href="<?php echo $this->_var['item']['url']; ?>" class="goods_item_title_row" title="<?php echo $this->_var['item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['item']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
		</div>
		<?php endif; ?>
		<div class="split_dash"></div>		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
	</div>
	<div class="inc_foot"></div>
</div>
<div class="blank"></div>
<?php endif; ?>
