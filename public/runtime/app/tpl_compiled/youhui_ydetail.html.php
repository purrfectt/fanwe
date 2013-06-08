<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="long f_l">
	<div class="youhui_info_box clearfix">
		<div class="youhui_title"><?php echo $this->_var['youhui']['name']; ?></div>
		<div class="blank"></div>
		<div class="youhui_image f_l">
			<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui']['img'],
  'w' => '330',
  'h' => '198',
);
echo $k['name']($k['v'],$k['w'],$k['h']);
?>" />
		</div>
		<div class="youhui_buy_info f_r">
			<ul class="price_tag">
				<li><?php echo $this->_var['LANG']['ORIGIN_PRICE']; ?> <br /> <span class="o_price"> <?php echo $this->_var['youhui']['origin_price_format']; ?></span></li>
				<li><?php echo $this->_var['LANG']['DISCOUNT']; ?> <br /> <span class="d_price"><?php echo $this->_var['youhui']['discount']; ?><?php echo $this->_var['LANG']['DISCOUNT_OFF']; ?></span></li>
				<li><?php echo $this->_var['LANG']['CURRENT_PRICE']; ?> <br /> <span class="c_price"><?php echo $this->_var['youhui']['current_price_format']; ?></span></li>
			</ul>
			<div class="blank"></div>
			<div class="youhui_buy_row">
			<?php echo $this->_var['LANG']['BUY_NUMBER']; ?>：&nbsp;&nbsp;我想买&nbsp;&nbsp;<input type="text" id="buy_number" maxlength="4" name="number" value="1" />&nbsp;&nbsp;张
					
			</div>
			<div class="blank"></div>
			<?php 
$k = array (
  'name' => 'load_youhui_time_status',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
		</div>
		<div class="blank"></div>		
	<div class="youhui_detail_row_title">商品详情</div>
	<div class="blank"></div>
	<div class="lazy"><?php echo $this->_var['youhui']['description']; ?></div>
	<div class="blank"></div>
	<?php if ($this->_var['youhui']['is_effect'] == 1): ?>
	<div class="youhui_detail_row_title" id="detail_box">点评</div>
	<?php 
$k = array (
  'name' => 'load_youhui_comment',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> 
	<?php endif; ?>
	</div><!--end youhui_info_box-->
	
</div>
<div class="short f_r">
	
	<?php echo $this->fetch('inc/side_supplier_info.html'); ?>
	
	<div class="inc">
		<div class="inc_top">周边热卖</div>
		<div class="inc_main sale_list_main">
			<?php $_from = $this->_var['near_youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'youhui_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['youhui_item']):
?>
			
			<div class="sale_goods_item">
			<div class="sale_goods_img f_l">
			<div class="sale_list_tag"><?php echo ($this->_var['key']+1);?></div>
			<a href="<?php echo $this->_var['youhui_item']['url']; ?>" title="<?php echo $this->_var['youhui_item']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui_item']['img'],
  'w' => '75',
  'h' => '75',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>"  alt="<?php echo $this->_var['youhui_item']['name']; ?>"/></a>
			</div>
			<div class="sale_goods_info f_l">
			<a href="<?php echo $this->_var['youhui_item']['url']; ?>" class="goods_item_title" title="<?php echo $this->_var['youhui_item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui_item']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			<div class="m_price"><?php echo $this->_var['LANG']['ORIGIN_PRICE']; ?><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['youhui_item']['origin_price'],
);
echo $k['name']($k['v']);
?></div>
			<div class="s_price"><?php echo $this->_var['LANG']['CURRENT_PRICE']; ?><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['youhui_item']['current_price'],
);
echo $k['name']($k['v']);
?></div>
			</div>
			<div class="blank1"></div>
			</div>
			
			
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="inc_foot"></div>
	</div>
	
	
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>