<?php if ($this->_var['inc_var']['list']): ?>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['inc_var']['title']; ?>
		<span class="f_r more">
			<span class="recommend_cate_brand">
			<?php $_from = $this->_var['inc_var']['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
			<a href="<?php echo $this->_var['brand']['url']; ?>" title="<?php echo $this->_var['brand']['name']; ?>"><?php echo $this->_var['brand']['name']; ?></a>&nbsp;&nbsp;
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</span>
			<a href="<?php echo $this->_var['inc_var']['url']; ?>" title="<?php echo $this->_var['LANG']['MORE']; ?>"><?php echo $this->_var['LANG']['MORE']; ?></a>
		</span>
	</div>
	<div class="inc_main cf">
		<div class="rec_adv_span f_l">
			<adv adv_id="首页商品分类的广告位" rel_table="shop_cate" rel_id="<?php echo $this->_var['inc_var']['id']; ?>" />
		</div>
		<div class="rec_goods_span f_l">
		<?php $_from = $this->_var['inc_var']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_79756900_1345533998');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_79756900_1345533998']):
?>
		<div class="goods_item">
			<a href="<?php echo $this->_var['item_0_79756900_1345533998']['url']; ?>" title="<?php echo $this->_var['item_0_79756900_1345533998']['name']; ?>"  class="goods_img_box"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['item_0_79756900_1345533998']['icon'],
  'w' => '160',
  'h' => '160',
);
echo $k['name']($k['v'],$k['w'],$k['h']);
?>" width=160 height=160  class="lazy"  alt="<?php echo $this->_var['item_0_79756900_1345533998']['name']; ?>"/></a>
			<div class="blank5"></div>
			<div class="tc">
			<span class="s_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['item_0_79756900_1345533998']['current_price'],
);
echo $k['name']($k['v']);
?></span>
			&nbsp;&nbsp;
			<span class="m_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['item_0_79756900_1345533998']['origin_price'],
);
echo $k['name']($k['v']);
?></span>
			</div>
			<div class="blank5"></div>
			<a href="<?php echo $this->_var['item_0_79756900_1345533998']['url']; ?>" class="goods_item_title" title="<?php echo $this->_var['item_0_79756900_1345533998']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['item_0_79756900_1345533998']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			<div class="blank5"></div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="blank1"></div>
	</div>
	<div class="inc_foot"></div>
</div>
<div class="blank"></div>
<?php endif; ?>
