<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>

<div class="long f_l">
<?php if ($this->_var['hide_filter']): ?>
<?php else: ?>

<div class="inc filter_box">

	<div class="inc_main cf">
		<?php if (count ( $this->_var['cate_list'] ) > 1): ?>
		<div class="filter_title f_l"><?php echo $this->_var['LANG']['CATE_DEAL']; ?>：</div>
		<div class="filter_content  f_l">
		<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
		<a href="<?php echo $this->_var['cate']['url']; ?>" title="<?php echo $this->_var['cate']['name']; ?>" <?php if ($this->_var['cate']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['cate']['name']; ?><span>(<?php echo $this->_var['cate']['count']; ?>)</span></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>	
		<div class="blank"></div>
		<?php endif; ?>
		<?php if (count ( $this->_var['scate_list'] ) > 1): ?>
		<div class="filter_title f_l"></div>
		<div class="filter_content  f_l">
			<?php $_from = $this->_var['scate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'scate');if (count($_from)):
    foreach ($_from AS $this->_var['scate']):
?>
			<a href="<?php echo $this->_var['scate']['url']; ?>" title="<?php echo $this->_var['scate']['name']; ?>" <?php if ($this->_var['scate']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['scate']['name']; ?><span>(<?php echo $this->_var['scate']['count']; ?>)</span></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>
		<div class="blank"></div>
		<?php endif; ?>
		
		<?php if (count ( $this->_var['area_list'] ) > 1): ?>
		<div class="filter_title f_l"><?php echo $this->_var['LANG']['AREA_LIST']; ?>：</div>
		<div class="filter_content  f_l">
		<?php $_from = $this->_var['area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');if (count($_from)):
    foreach ($_from AS $this->_var['area']):
?>
		<a href="<?php echo $this->_var['area']['url']; ?>" title="<?php echo $this->_var['area']['name']; ?>" <?php if ($this->_var['area']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['area']['name']; ?><span>(<?php echo $this->_var['area']['count']; ?>)</span></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>	
		<div class="blank"></div>
		<?php endif; ?>
		<?php if (count ( $this->_var['quan_list'] ) > 1): ?>
		<div class="filter_title f_l"><?php echo $this->_var['LANG']['QUAN_LIST']; ?>：</div>
		<div class="filter_content  f_l">
		<?php $_from = $this->_var['quan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');if (count($_from)):
    foreach ($_from AS $this->_var['area']):
?>
		<a href="<?php echo $this->_var['area']['url']; ?>" title="<?php echo $this->_var['area']['name']; ?>" <?php if ($this->_var['area']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['area']['name']; ?><span>(<?php echo $this->_var['area']['count']; ?>)</span></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>	
		<div class="blank"></div>
		<?php endif; ?>
		
		
	</div>
</div>

<div class="blank"></div>
<?php endif; ?>
<!--begin_list-->
<div class="nav_box">

<form action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" method="post">
		<div class="f_r filter_search_row">
			<input type="text" class="filter_keyword" style="width:50px;" name="min_price" value="<?php if ($this->_var['min_price'] > 0): ?><?php echo $this->_var['min_price']; ?><?php endif; ?>" /> 
			<div class="f_l" style="margin-left:5px;">元<?php echo $this->_var['LANG']['TO']; ?></div>
			<input type="text" class="filter_keyword" style="width:50px;"  name="max_price" value="<?php if ($this->_var['max_price'] > 0): ?><?php echo $this->_var['max_price']; ?><?php endif; ?>" />	
			<div class="f_l" style="margin-left:5px;">元</div> 
			<input type="text"  name="keyword" class="filter_keyword" value="<?php echo $this->_var['keyword']; ?>">
			<input type="submit" value="" class="filter_btn" />
			<input type="hidden" name="is_redirect" value="1" />
			<input type="hidden" name="ctl" value="tuan" />
			<input type="hidden" name="act" value="index" />
			<?php $_from = $this->_var['url_param']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'param');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['param']):
?>
			<?php if ($this->_var['key'] != 'min_price' && $this->_var['key'] != 'max_price'): ?>
			<input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['param']; ?>" />
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
		</div>
</form>

<?php echo $this->fetch('inc/filter_sub_nav.html'); ?>
</div>
<?php if ($this->_var['list']): ?>
<div class="inc">
	<form action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" method="post">
	<div class="inc_top">
		<?php if ($this->_var['page_title']): ?><?php echo $this->_var['page_title']; ?><?php else: ?><?php echo $this->_var['LANG']['TUAN_LIST']; ?><?php endif; ?>
		<div class="f_r more">
			<?php echo $this->_var['LANG']['SORT_BY']; ?>：
			<a href="javascript:void(0);" onclick="set_sort('buy_count')" class="sort_icon <?php if ($this->_var['sort_field'] == 'buy_count'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">销量</a> 
			<a href="javascript:void(0);" onclick="set_sort('current_price')" class="sort_icon <?php if ($this->_var['sort_field'] == 'current_price'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">价格</a> 
			<a href="javascript:void(0);" onclick="set_sort('update_time')" class="sort_icon <?php if ($this->_var['sort_field'] == 'update_time'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">上架时间</a> 
			<a href="javascript:void(0);" onclick="set_sort('avg_point')" class="sort_icon <?php if ($this->_var['sort_field'] == 'avg_point'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">好评度</a>
			
		</div><!--排序-->		
	</div>
	</form>
	<div class="inc_main cf">
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tuan_item');if (count($_from)):
    foreach ($_from AS $this->_var['tuan_item']):
?>
		
		<div class="row_list">
			<div class="row_image f_l">
			<a href="<?php echo $this->_var['tuan_item']['url']; ?>" title="<?php echo $this->_var['tuan_item']['name']; ?>" class="goods_img_box"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['tuan_item']['icon'],
  'w' => '160',
  'h' => '100',
  'gen' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['gen']);
?>"   width=160 height=100 alt="<?php echo $this->_var['tuan_item']['name']; ?>"  class="lazy"/></a>
			</div>
			<div class="row_info f_l">
				<div class="row_title"><a href="<?php echo $this->_var['tuan_item']['url']; ?>" title="<?php echo $this->_var['tuan_item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['tuan_item']['name'],
  'b' => '0',
  'e' => '40',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
				<div class="blank"></div>
				<div class="row_info_2"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['tuan_item']['brief'],
  'b' => '0',
  'e' => '50',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
				<div class="blank"></div>
				<div class="row_info_3">
				<?php if ($this->_var['tuan_item']['end_time'] == 0): ?>
				<?php echo $this->_var['LANG']['NO_END_TIME']; ?>
				<?php else: ?>
				<?php echo $this->_var['LANG']['END_TIME']; ?>：<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['tuan_item']['end_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?>
				<?php endif; ?>
				</div>
				<div class="blank"></div>
				<div class="row_info_4">
					<div class="starico">
					<?php
						for($i=0;$i<$this->_var['youhui_item']['avg_point'];$i++)
						{
					?>
					<img src="<?php echo $this->_var['TMPL']; ?>/images/star_on.jpg" />
					<?php
						}
					?>
					<?php
						$off_count = 5 - intval($this->_var['youhui_item']['avg_point']);
						for($i=0;$i<$off_count;$i++)
						{
					?>
					<img src="<?php echo $this->_var['TMPL']; ?>/images/star_off.jpg" />
					<?php
						}
					?>
				</div>
				</div>
			</div>
			<div class="row_data f_l">
			<span class="s_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['tuan_item']['current_price'],
);
echo $k['name']($k['v']);
?></span>
			<br />
			<span class="m_price"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['tuan_item']['origin_price'],
);
echo $k['name']($k['v']);
?></span>
			</div>
			<div class="row_btn f_l">
				<a href="<?php echo $this->_var['tuan_item']['url']; ?>" class="row_btn_link"><?php echo $this->_var['LANG']['VIEW_DETAIL_INFO']; ?></a>
				<span class="row_btn_info"><?php echo $this->_var['tuan_item']['buy_count']; ?><?php echo $this->_var['LANG']['HAS_BUY']; ?></span>
			</div>
			<div class="blank1"></div>
		</div>		
		
		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
			
		
		<div class="blank"></div>
	</div>
	<div class="inc_foot"></div>
</div>
<?php else: ?>
<div class="pd10"><?php echo $this->_var['LANG']['NO_TUAN_LIST']; ?></div>
<?php endif; ?>

<!--end_list-->
<div class="blank"></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>	
</div>
<div class="short f_r">
	<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['REC_TUAN']; ?></div>	
	<div class="inc_main">
		<div class="hot_sale_list">
			<?php $_from = $this->_var['hot_sale_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<div class="hot_sale_item pd10">
				<div class="f_l hot_sale_icon">
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['item']['icon'],
  'w' => '50',
  'h' => '50',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width=50 height=50 /></a>
				</div>
				<div class="f_l hot_sale_cnt">
						<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['item']['name'],
  'b' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
				</div>
				<div class="blank1"></div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	</div>
	</div>
</div>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>