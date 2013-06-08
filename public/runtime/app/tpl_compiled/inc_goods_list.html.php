
<div class="inc">
	<div class="inc_top">
		<?php echo $this->_var['LANG']['GOODS_LIST']; ?>
		<div class="f_r more">
			<div class="f_l">
			<?php echo $this->_var['LANG']['SORT_BY']; ?>：
			<a href="javascript:void(0);" onclick="set_sort('buy_count')" class="sort_icon <?php if ($this->_var['sort_field'] == 'buy_count'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">销量</a> 
			<?php if ($this->_var['MODULE_NAME'] == 'rec' && $this->_var['ACTION_NAME'] == 'rsale'): ?><?php else: ?>
			<a href="javascript:void(0);" onclick="set_sort('current_price')" class="sort_icon <?php if ($this->_var['sort_field'] == 'current_price'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">价格</a> 
			<a href="javascript:void(0);" onclick="set_sort('update_time')" class="sort_icon <?php if ($this->_var['sort_field'] == 'update_time'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">时间</a> 
			<a href="javascript:void(0);" onclick="set_sort('avg_point')" class="sort_icon <?php if ($this->_var['sort_field'] == 'avg_point'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">好评</a>
			<?php endif; ?>
			</div>
			<div class="f_l"><?php echo $this->_var['LANG']['PRICE']; ?>：</div>
			<?php if ($this->_var['MODULE_NAME'] == 'cate'): ?>
			<div class="f_l">
			<form action="<?php echo $this->_var['APP_ROOT']; ?>/shop.php" method="post" class="filter_price_form">
				<input type="text" class="filter_txt" name="min_price" value="<?php if ($this->_var['min_price'] > 0): ?><?php echo $this->_var['min_price']; ?><?php endif; ?>" /> 
				<?php echo $this->_var['LANG']['TO']; ?> 
				<input type="text" class="filter_txt" name="max_price" value="<?php if ($this->_var['max_price'] > 0): ?><?php echo $this->_var['max_price']; ?><?php endif; ?>" />
				<input type="submit" name="search_price" class="filter_price" value="" />
				<input type="hidden" name="is_redirect" value="1" />
				<input type="hidden" name="ctl" value="cate" />
				<input type="hidden" name="act" value="index" />
				<?php $_from = $this->_var['url_param']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'param');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['param']):
?>
				<?php if ($this->_var['key'] != 'min_price' && $this->_var['key'] != 'max_price'): ?>
				<input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['param']; ?>" />
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</form>
			</div>
			<?php endif; ?>
			<div class="f_l list_type_box">
			<?php echo $this->_var['LANG']['STYLE_LIST']; ?>：
			<span class="list_type <?php if ($this->_var['list_type'] == 1): ?>grid_enable<?php else: ?>grid_disable<?php endif; ?>" onclick="switch_style('grid');"></span>
			<span class="list_type <?php if ($this->_var['list_type'] == 0): ?>line_enable<?php else: ?>line_disable<?php endif; ?>" onclick="switch_style('line');"></span>
			</div>
		</div><!--排序-->
	</div>
	<?php if ($this->_var['list']): ?>
	<div class="inc_main cf">
		<?php if ($this->_var['list_type'] == 1): ?>
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');if (count($_from)):
    foreach ($_from AS $this->_var['goods_item']):
?>
		<div class="goods_item">
			<a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo $this->_var['goods_item']['name']; ?>"  class="goods_img_box"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['goods_item']['icon'],
  'w' => '160',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>"  class="lazy" width=160 height=160 alt="<?php echo $this->_var['goods_item']['name']; ?>"/></a>
			<div class="blank5"></div>
			<div class="tc">
			<span class="s_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['goods_item']['current_price'],
);
echo $k['name']($k['v']);
?></span>
			&nbsp;&nbsp;
			<span class="m_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['goods_item']['origin_price'],
);
echo $k['name']($k['v']);
?></span>
			</div>
			<a href="<?php echo $this->_var['goods_item']['url']; ?>" class="goods_item_title" title="<?php echo $this->_var['goods_item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['goods_item']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			<div class="blank5"></div>
			<div class="starico">
			<?php
					for($i=0;$i<$this->_var['goods_item']['avg_point'];$i++)
					{
				?>
				<img src="<?php echo $this->_var['TMPL']; ?>/images/star_on.jpg" />
				<?php
					}
				?>
				<?php
					$off_count = 5 - intval($this->_var['goods_item']['avg_point']);
					for($i=0;$i<$off_count;$i++)
					{
				?>
				<img src="<?php echo $this->_var['TMPL']; ?>/images/star_off.jpg" />
				<?php
					}
				?>
			</div>
			<div class="blank5"></div>	
			<input type="button" value="<?php echo $this->_var['LANG']['BUY_NOW']; ?>" class="s_buy_btn" onclick="add_cart(<?php echo $this->_var['goods_item']['id']; ?>);" /> 
			<input type="button" value="<?php echo $this->_var['LANG']['COLLECT']; ?>" class="s_collect_btn" onclick="collect_goods(<?php echo $this->_var['goods_item']['id']; ?>);"/>
		</div>		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php else: ?>
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');if (count($_from)):
    foreach ($_from AS $this->_var['goods_item']):
?>
		<div class="goods_row">
			<div class="goods_img f_l">
			<a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo $this->_var['goods_item']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['goods_item']['icon'],
  'w' => '80',
  'h' => '80',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>"  class="lazy" width=80 height=80  alt="<?php echo $this->_var['goods_item']['name']; ?>"/></a>
			
			</div>
			<div class="goods_name f_l">
				<a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo $this->_var['goods_item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['goods_item']['name'],
  'b' => '0',
  'e' => '2000',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
				<div class="blank5"></div>
				<div class="starico">
			<?php
					for($i=0;$i<$this->_var['goods_item']['avg_point'];$i++)
					{
				?>
				<img src="<?php echo $this->_var['TMPL']; ?>/images/star_on.jpg" />
				<?php
					}
				?>
				<?php
					$off_count = 5 - intval($this->_var['goods_item']['avg_point']);
					for($i=0;$i<$off_count;$i++)
					{
				?>
				<img src="<?php echo $this->_var['TMPL']; ?>/images/star_off.jpg" />
				<?php
					}
				?>
			</div>
			
			</div>
			<div class="goods_price f_r tr">
				<span class="m_price"><?php echo $this->_var['LANG']['ORIGIN_PRICE']; ?><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['goods_item']['origin_price'],
);
echo $k['name']($k['v']);
?></span>
				<span class="s_price"><?php echo $this->_var['LANG']['CURRENT_PRICE']; ?><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['goods_item']['current_price'],
);
echo $k['name']($k['v']);
?></span>
				<div class="blank5"></div>	
				<input type="button" value="<?php echo $this->_var['LANG']['BUY_NOW']; ?>" class="s_buy_btn" onclick="add_cart(<?php echo $this->_var['goods_item']['id']; ?>);" /> 
				
				<input type="button" value="<?php echo $this->_var['LANG']['COLLECT']; ?>" class="s_collect_btn" onclick="collect_goods(<?php echo $this->_var['goods_item']['id']; ?>);"/>
			</div>
		</div>	
		<div class="blank1"></div>	
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php endif; ?>
		<div class="blank"></div>
	</div>
	<?php else: ?>
	<div class="pd10"><?php echo $this->_var['page_title']; ?><?php echo $this->_var['LANG']['NO_GOODS']; ?></div>
	<?php endif; ?>
	<div class="inc_foot"></div>
</div>

