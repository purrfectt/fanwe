<?php echo $this->fetch('inc/header.html'); ?> 
<style type="text/css">
.filter_box .filter_title{display:inline-block; padding:2px 5px; width:60px;}
.filter_box .filter_content{width:640px;}
</style>
<div class="blank"></div>
<div class="long f_l">
	<?php if ($this->_var['supplier_info']): ?>	 
	<div class="supplier_info_logo f_l"> <img src="<?php echo $this->_var['supplier_info']['preview']; ?>" /></div>
	<div class="supplier_info_info f_r"> <b><?php echo $this->_var['supplier_info']['name']; ?></b> <br /> <?php echo $this->_var['supplier_info']['content']; ?></div>
	<div class="blank"></div>
	<?php endif; ?>
	
	<div class="inc filter_box">
	<div class="inc_top"><?php echo $this->_var['LANG']['STORE_FILTER']; ?></div>
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
		
		<?php if ($this->_var['tag_group']): ?>
		<?php $_from = $this->_var['tag_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
		<?php if (count ( $this->_var['group']['tags'] ) > 1): ?>
		<div class="filter_title f_l"><?php echo $this->_var['group']['name']; ?>：</div>
		<div class="filter_content  f_l">
			<?php $_from = $this->_var['group']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
			<a href="<?php echo $this->_var['tag']['url']; ?>" title="<?php echo $this->_var['tag']['name']; ?>" <?php if ($this->_var['tag']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['tag']['name']; ?></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</div>
		<div class="blank"></div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		<?php endif; ?>

	</div>
	<div class="inc_foot"></div>
	</div>
	<div class="blank"></div>
	<div class="nav_box">

			<div class="f_r filter_search_row">			
			<form action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php">	
				<input type="text" name="minprice" style="width:50px;" class="filter_keyword" value="<?php echo $this->_var['minprice']; ?>"><span class="f_l" style=" font-weight:normal; line-height:17px;">元 - </span>
				<input type="text" name="maxprice"  style="width:50px;"  class="filter_keyword" value="<?php echo $this->_var['maxprice']; ?>"><span class="f_l" style=" font-weight:normal; line-height:17px;">元 </span>
				<input type="text" name="keyword" class="filter_keyword" value="<?php echo $this->_var['keyword']; ?>">
				<input type="submit" name="submit" value="" class="filter_btn" />
				<input type="hidden" name="is_redirect" value="1" />
				<input type="hidden" name="ctl" value="store" />
				<input type="hidden" name="act" value="index" />
				<?php $_from = $this->_var['url_param']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'param');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['param']):
?>
				<?php if ($this->_var['key'] <> "keyword" && $this->_var['key'] <> "minprice" && $this->_var['key'] <> "maxprice"): ?>
				<input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['param']; ?>" />
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</form>
			</div>

	
	<ul class="filter_sub_nav">
	<li class="current"><a title="<?php echo $this->_var['LANG']['STORE_LIST']; ?>" href="javascript:void(0);"><?php echo $this->_var['LANG']['STORE_LIST']; ?></a></li>
	</ul>
	</div>
	<div class="inc">
	<div class="inc_top">
		<span class="f_l filter_store">
			<a onfocus="this.blur();" href="<?php echo $this->_var['filter_url']['has_youhui']; ?>" <?php if ($this->_var['filter_url_param']['has_youhui'] == 1): ?>class="act"<?php endif; ?>>有优惠</a>
			<a onfocus="this.blur();" href="<?php echo $this->_var['filter_url']['has_daijin']; ?>" <?php if ($this->_var['filter_url_param']['has_daijin'] == 1): ?>class="act"<?php endif; ?>>有代金券</a>
			<a onfocus="this.blur();" href="<?php echo $this->_var['filter_url']['has_tuan']; ?>" <?php if ($this->_var['filter_url_param']['has_tuan'] == 1): ?>class="act"<?php endif; ?>>有团购</a>
			<a onfocus="this.blur();" href="<?php echo $this->_var['filter_url']['has_event']; ?>" <?php if ($this->_var['filter_url_param']['has_event'] == 1): ?>class="act"<?php endif; ?>>有活动</a>
			<a onfocus="this.blur();" href="<?php echo $this->_var['filter_url']['has_goods']; ?>" <?php if ($this->_var['filter_url_param']['has_goods'] == 1): ?>class="act"<?php endif; ?>>有商品</a>
			<a onfocus="this.blur();" href="<?php echo $this->_var['filter_url']['is_verify']; ?>" <?php if ($this->_var['filter_url_param']['is_verify'] == 1): ?>class="act"<?php endif; ?>>认证商户</a>
		</span>
	
		<div class="f_r " style="font-weight:normal; padding-right:10px;">
			<span class="f_l " style="height:30px; line-height:30px;">排序：</span>
			<a class="f_l sort_icon <?php if ($this->_var['sort_field'] == 'default'): ?>sort_desc<?php else: ?>sort_gray<?php endif; ?>" onclick="set_store_sort('default')" href="javascript:void(0);">默认</a> 
			<a class="f_l sort_icon <?php if ($this->_var['sort_field'] == 'dp_count'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>" onclick="set_store_sort('dp_count')" href="javascript:void(0);">点评数</a> 
			<a class="f_l sort_icon <?php if ($this->_var['sort_field'] == 'avg_point'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>" onclick="set_store_sort('avg_point')" href="javascript:void(0);">好评率</a> 
			<a class="f_l sort_icon <?php if ($this->_var['sort_field'] == 'ref_avg_price'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>" onclick="set_store_sort('ref_avg_price')" href="javascript:void(0);">人均</a> 
			
		</div>
	</div>
	<?php if ($this->_var['list']): ?>
	<div class="inc_main">
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['store']):
?>
		<div class="store_item">
			<div class="store_info_logo f_l">
				<a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store']['id']."".""); 
?>" title="<?php echo $this->_var['store']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['store']['preview'],
  'w' => '160',
  'h' => '100',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>"  width=160 height=100  class="lazy" alt="<?php echo $this->_var['store']['name']; ?>" width=96 height=96 /></a>
			</div>
			<div class="store_info_info f_r">
				<div class="store_info_info_l f_l">
				<span class="store_count_bg"><?php echo ($this->_var['key']+1);?></span>  <b class="store_title_row"><a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store']['id']."".""); 
?>" title="<?php echo $this->_var['store']['name']; ?>"><?php echo $this->_var['store']['name']; ?></a> <?php if ($this->_var['store']['is_verify'] == 1): ?><font class="verify_store" title="认证商家"></font><?php endif; ?></b> 
				 <?php if ($this->_var['store']['address']): ?>
				<br />
			 	地址：<span title="<?php echo $this->_var['store']['address']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store']['address'],
  'b' => '0',
  'e' => '20',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></span>
				<?php endif; ?>
				
				<?php if ($this->_var['store']['open_time']): ?>
				<br />
			 	营业时间：<?php echo $this->_var['store']['open_time']; ?>
				<?php endif; ?>
				<?php if ($this->_var['store']['tel']): ?>
				<br />
			 	电话：<span class="tel_blue"><?php echo $this->_var['store']['tel']; ?></span>
				<?php endif; ?>
				
				<?php if ($this->_var['store']['tags']): ?>
				<br />
				标签：<?php $_from = $this->_var['store']['tags_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?><a href="<?php
echo parse_url_tag("u:youhui|store|"."tag=".$this->_var['tag']['name']."".""); 
?>"><span class="tel_blue"><?php echo $this->_var['tag']['name']; ?></span></a>&nbsp;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
				</div>
				<div class="store_info_info_r color_blue f_r">
					<div class="info_item">
					<span>总评：</span><span class="avg_point_<?php 
$k = array (
  'name' => 'intval',
  'val' => $this->_var['store']['avg_point'],
);
echo $k['name']($k['val']);
?>" title="总评：<?php 
$k = array (
  'name' => 'round',
  'val' => $this->_var['store']['avg_point'],
  'p' => '1',
);
echo $k['name']($k['val'],$k['p']);
?>分"></span>
					&nbsp;&nbsp;<span>好评：</span><span style="color:#f60; font-family:verdana;"><?php echo round($this->_var['store']['good_rate']*100,1); ?>%</span>
					</div>
					<div class="info_item">
					<?php $_from = $this->_var['store']['group_point']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
					<span><?php echo $this->_var['group']['name']; ?>:</span><span style="color:#f60; font-family:verdana;"><?php echo $this->_var['group']['avg_point']; ?>&nbsp;</span>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<div class="info_item">
					<span>人均:</span><span style="color:#f60; font-family:verdana;"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['store']['ref_avg_price'],
);
echo $k['name']($k['v']);
?>&nbsp;</span>
					</div>
					<div class="info_item">
					<a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store']['id']."".""); 
?>#store_dp" class="viewdp">查看评价</a>&nbsp;&nbsp;<span>(<?php echo $this->_var['store']['dp_count']; ?>)</span>
					</div>
				</div>
				<div class="blank5"></div>
				<?php if ($this->_var['store']['tuan_count'] > 0): ?>
				<span class="store_tuan">
					<a href="<?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['store']['tuan']['id']."".""); 
?>" title="<?php echo $this->_var['store']['tuan']['name']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store']['tuan']['name'],
  'b' => '0',
  'e' => '18',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
				</span>
				<?php endif; ?>
				<?php if ($this->_var['store']['youhui_count'] > 0): ?>
				<span class="store_youhui">
					<a href="<?php
echo parse_url_tag("u:youhui|fdetail|"."id=".$this->_var['store']['youhui']['id']."".""); 
?>" title="<?php echo $this->_var['store']['youhui']['name']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store']['youhui']['name'],
  'b' => '0',
  'e' => '18',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
				</span>
				<?php endif; ?>
			</div>
			<div class="blank1"></div>
			
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<?php endif; ?>
	<div class="inc_foot"></div>
	</div>
	<?php if ($this->_var['list']): ?>
	<div class="blank"></div>
	<div class="pages"><?php echo $this->_var['pages']; ?></div>
	<?php else: ?>
	<?php echo $this->_var['LANG']['NO_STORE_LIST']; ?>
	<?php endif; ?>
</div>
<div class="short f_r">
	<style type="text/css">
		#container{height:193px; width: 193px; border:#ccc solid 1px;}  
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script> 
	<script type="text/javascript">
		var map;
		function init_map()
		{
			map = new BMap.Map("container"); 
	        var opts = {type: BMAP_NAVIGATION_CONTROL_ZOOM}  
	        map.addControl(new BMap.NavigationControl());  
	        /*map.centerAndZoom(new BMap.Point(116.404, 39.915), 11); */
			<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['store']):
?>
				create_mark("<?php echo $this->_var['store']['name']; ?>","<?php echo $this->_var['store']['xpoint']; ?>","<?php echo $this->_var['store']['ypoint']; ?>","<?php echo $this->_var['store']['url']; ?>");
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		}
		function create_mark(name,xpoint,ypoint,url){
			/*创建地理编码服务实例  */
	        var point = new BMap.Point(xpoint,ypoint)
	        /*将结果显示在地图上，并调整地图视野*/  
	        map.centerAndZoom(point, 12);  			
			var marker = new BMap.Marker(new BMap.Point(xpoint,ypoint));
			var label=create_lable(name);
			marker.setLabel(label);
			marker.getLabel().hide();
			map.addOverlay(marker);
			marker.addEventListener('mouseover',function(){
            map.panTo(new BMap.Point(xpoint,ypoint));
	             marker.getLabel().show();
	        }); 
			marker.addEventListener('mouseout',function(){
		           marker.getLabel().hide();
		        }); 
		 	marker.addEventListener('click',function(){            
		           window.open(url);
		        }); 
		}
		$(document).ready(function(){			
			init_map();
		});
		function create_lable(name){
			var label = new BMap.Label(name,{"offset":new BMap.Size(-8,-10)});
			label.setStyle({
                borderColor:"#808080",
                color:"#333",
                cursor:"pointer"
            });
            return label;
		}
	</script>
	<div id="container"></div>
	<?php if ($this->_var['new_stores']): ?>
	<div class="blank"></div>
	<div class="inc">
		<div class="inc_top">最新加入</div>
		<div class="inc_main clearfix">
		
			<?php $_from = $this->_var['new_stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['store']):
?>
				<div class="new_store_row">
					<span><?php echo intval($this->_var['key']+1);?></span>
					<a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store']['id']."".""); 
?>" title="<?php echo $this->_var['store']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store']['name'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
					<div class="blank1"></div>
					<div class="store_addr">地址：<font title="<?php echo $this->_var['store']['address']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store']['address'],
  'b' => '0',
  'e' => '20',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></font></div>
				</div>
			
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
		</div>
	</div>
	<?php endif; ?>

	<?php if ($this->_var['rec_stores']): ?>
	<div class="blank"></div>
	<div class="inc">
		<div class="inc_top">推荐商户</div>
		<div class="inc_main clearfix">
		
			<?php $_from = $this->_var['rec_stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['store']):
?>
				<div class="new_store_row">
					<span><?php echo intval($this->_var['key']+1);?></span>
					<a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store']['id']."".""); 
?>" title="<?php echo $this->_var['store']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store']['name'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
					<div class="blank5"></div>
					<div class="avg_point_<?php 
$k = array (
  'name' => 'intval',
  'v' => $this->_var['store']['avg_point'],
);
echo $k['name']($k['v']);
?> f_l"></div>
					<div class="f_r store_addr"><?php echo $this->_var['store']['dp_count']; ?>条点评</div>
					<div class="blank1"></div>
				</div>
			
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
		</div>
	</div>
	<?php endif; ?>
</div>

<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>