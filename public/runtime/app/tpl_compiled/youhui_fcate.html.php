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
		<?php if ($this->_var['scate_list']): ?>
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
<!--begin list-->
<div class="nav_box">

<form action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" method="post">
		<div class="f_r filter_search_row">
			
			<input type="text"  name="keyword" class="filter_keyword" value="<?php echo $this->_var['keyword']; ?>">
			<input type="submit" value="" class="filter_btn" />
			<input type="hidden" name="is_redirect" value="1" />
			<input type="hidden" name="ctl" value="fcate" />
			<input type="hidden" name="act" value="index" />
			<?php $_from = $this->_var['url_param']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'param');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['param']):
?>
			<input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['param']; ?>" />
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
		</div>
</form>
	
<?php echo $this->fetch('inc/filter_sub_nav.html'); ?>
</div>
<?php if ($this->_var['list']): ?>
<div class="inc">
	<div class="inc_top">
		<?php if ($this->_var['page_title']): ?><?php echo $this->_var['page_title']; ?><?php else: ?><?php echo $this->_var['LANG']['YOUHUI_LIST']; ?><?php endif; ?>		
	</div>
	<div class="inc_main cf">
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui_item');if (count($_from)):
    foreach ($_from AS $this->_var['youhui_item']):
?>
		<div class="row_list">
			<div class="row_image f_l youhui_row">
			<div class="youhui_tag_<?php echo $this->_var['youhui_item']['youhui_type']; ?>"></div>
			<a href="<?php echo $this->_var['youhui_item']['url']; ?>" title="<?php echo $this->_var['youhui_item']['name']; ?>" class="goods_img_box"><img  class="lazy" width=160 height=100 src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui_item']['icon'],
  'w' => '160',
  'h' => '100',
  'gen' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['gen']);
?>"  alt="<?php echo $this->_var['youhui_item']['name']; ?>"/></a>
			</div>
			<div class="row_info f_l">
				<div class="row_title"><a href="<?php echo $this->_var['youhui_item']['url']; ?>" title="<?php echo $this->_var['youhui_item']['name']; ?>"><?php echo $this->_var['youhui_item']['name']; ?></a></div>
				<div class="blank"></div>
				<div class="row_info_2"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui_item']['list_brief'],
  'b' => '0',
  'e' => '50',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
				<div class="blank"></div>
				<div class="row_info_4">
					<?php if ($this->_var['youhui_item']['end_time'] == 0): ?>
					<?php echo $this->_var['LANG']['NO_END_TIME']; ?>
					<?php else: ?>
					<?php echo $this->_var['LANG']['END_TIME']; ?>：<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui_item']['end_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?>
					<?php endif; ?>
				</div>
			</div>
			<div class="row_data f_l">&nbsp;</div>
			<div class="row_btn f_l">
				<a href="<?php echo $this->_var['youhui_item']['url']; ?>" class="row_btn_link"><?php echo $this->_var['LANG']['VIEW_DETAIL_INFO']; ?></a>
				<span class="row_btn_info"><?php echo $this->_var['youhui_item']['view_count']; ?><?php echo $this->_var['LANG']['HAS_VIEW']; ?></span>
			</div>
			<div class="blank1"></div>
		</div>		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		<div class="blank"></div>
	</div>
	<div class="inc_foot"></div>
</div>
<?php else: ?>
<div class="pd10"><?php echo $this->_var['LANG']['NO_YOUHUI_LIST']; ?></div>
<?php endif; ?>

<!--end list-->
<div class="blank"></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>	
</div>
<div class="short f_r">
	
	<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['HOT_YOUHUI_LIST']; ?></div>
	<div class="inc_main">
		<?php $_from = $this->_var['free_youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui_item');if (count($_from)):
    foreach ($_from AS $this->_var['youhui_item']):
?>
	
		
		<div class="hot_sale_item pd10">
				<div class="f_l hot_sale_icon">
					<a href="<?php echo $this->_var['youhui_item']['url']; ?>" title="<?php echo $this->_var['youhui_item']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui_item']['icon'],
  'w' => '50',
  'h' => '50',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width=50 height=50 /></a>
				</div>
				<div class="f_l hot_sale_cnt">
						<a href="<?php echo $this->_var['youhui_item']['url']; ?>" title="<?php echo $this->_var['youhui_item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui_item']['name'],
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
	<div class="inc_foot"></div>
	</div>


	
</div>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>