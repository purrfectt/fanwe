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
		<a href="<?php echo $this->_var['cate']['url']; ?>" title="<?php echo $this->_var['cate']['name']; ?>" <?php if ($this->_var['cate']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['cate']['name']; ?></a>
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
		<a href="<?php echo $this->_var['area']['url']; ?>" title="<?php echo $this->_var['area']['name']; ?>" <?php if ($this->_var['area']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['area']['name']; ?></a>
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
		<a href="<?php echo $this->_var['area']['url']; ?>" title="<?php echo $this->_var['area']['name']; ?>" <?php if ($this->_var['area']['act'] == 1): ?>class="act"<?php endif; ?>><?php echo $this->_var['area']['name']; ?></a>
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
			<input type="text"  name="keyword" class="filter_keyword" value="<?php echo $this->_var['keyword']; ?>">
			<input type="submit" value="" class="filter_btn" />
			<input type="hidden" name="is_redirect" value="1" />
			<input type="hidden" name="ctl" value="event" />
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
	<form action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" method="post">
	<div class="inc_top">
		<?php if ($this->_var['page_title']): ?><?php echo $this->_var['page_title']; ?><?php else: ?><?php echo $this->_var['LANG']['TUAN_LIST']; ?><?php endif; ?>
		<div class="f_r more">
			<?php echo $this->_var['LANG']['SORT_BY']; ?>：
			<a href="javascript:void(0);" onclick="set_event_sort('sort')" class="sort_icon sort_gray">默认</a> 
			<a href="javascript:void(0);" onclick="set_event_sort('event_end_time')" class="sort_icon <?php if ($this->_var['sort_field'] == 'event_end_time'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">活动时间</a> 
			<a href="javascript:void(0);" onclick="set_event_sort('submit_count')" class="sort_icon <?php if ($this->_var['sort_field'] == 'submit_count'): ?>sort_<?php echo $this->_var['sort_type']; ?><?php else: ?>sort_gray<?php endif; ?>">报名量</a> 		
		</div><!--排序-->		
	</div>
	</form>
	<div class="inc_main cf">
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'event');if (count($_from)):
    foreach ($_from AS $this->_var['event']):
?>
		
		<div class="row_list">
			<div class="row_image f_l">
			<a href="<?php
echo parse_url_tag("u:youhui|edetail|"."id=".$this->_var['event']['id']."".""); 
?>" title="<?php echo $this->_var['event']['name']; ?>" class="goods_img_box"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['event']['icon'],
  'w' => '160',
  'h' => '100',
  'gen' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['gen']);
?>"   width=160 height=100  class="lazy" alt="<?php echo $this->_var['event']['name']; ?>"/></a>
			</div>
			<div class="row_info f_l">
				<div class="row_title"><a href="<?php
echo parse_url_tag("u:youhui|edetail|"."id=".$this->_var['event']['id']."".""); 
?>" title="<?php echo $this->_var['event']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['event']['name'],
  'b' => '0',
  'e' => '40',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
				<div class="blank"></div>
				<div class="row_info_2"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['event']['brief'],
  'b' => '0',
  'e' => '30',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
				<div class="blank"></div>
				<div class="row_info_3">
				<?php echo $this->_var['LANG']['EVENT_TIME']; ?>：
				<?php if ($this->_var['event']['event_begin_time'] == 0): ?>
				<?php else: ?>
				<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['event']['event_begin_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?> 
				<?php endif; ?>	
					
				<?php if ($this->_var['event']['event_end_time'] == 0): ?>
				<?php echo $this->_var['LANG']['NO_END_TIME']; ?>
				<?php else: ?>
				<?php echo $this->_var['LANG']['TO']; ?> <?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['event']['event_end_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?>
				<?php endif; ?>
				</div>
			
			</div>
			<div class="row_data f_l">
			    <?php echo $this->_var['event']['submit_count']; ?><?php echo $this->_var['LANG']['SUBMIT_COUNTED']; ?>
				<br />
				<span style="color:#666;"><?php echo $this->_var['event']['reply_count']; ?><?php echo $this->_var['LANG']['REPLY_COUNTED']; ?></span>
			</div>
			<div class="row_btn f_l">
				<a href="<?php
echo parse_url_tag("u:youhui|edetail|"."id=".$this->_var['event']['id']."".""); 
?>" class="row_btn_link"><?php echo $this->_var['LANG']['VIEW_DETAIL_INFO']; ?></a>
			</div>
			<div class="blank1"></div>
		</div>		
		
		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
			
		
		<div class="blank"></div>
	</div>
	<div class="inc_foot"></div>
</div>
<?php else: ?>
<?php echo $this->_var['LANG']['NO_TUAN_LIST']; ?>
<?php endif; ?>

<!--end_list-->
<div class="blank"></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>	
</div>
<div class="short f_r">
	<!--map api-->
	<style type="text/css">
		#container{height:193px; width: 193px; border:#ccc solid 1px;}  
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script> 
	<script type="text/javascript">
		var map;
		function init_map()
		{
			map = new BMap.Map("container"); 
	        var opts = {type:BMAP_NAVIGATION_CONTROL_ZOOM}
	        map.addControl(new BMap.NavigationControl());
	        /*map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  */
			
			<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'event');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['event']):
?>
	        	create_mark("<?php echo $this->_var['event']['name']; ?>","<?php echo $this->_var['event']['xpoint']; ?>","<?php echo $this->_var['event']['ypoint']; ?>","<?php
echo parse_url_tag("u:youhui|edetail|"."id=".$this->_var['event']['id']."".""); 
?>");
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		}
		
		function create_mark(name,xpoint,ypoint,url){
			/*创建地理编码服务实例  */
	        var point = new BMap.Point(xpoint,ypoint)
	        /*将结果显示在地图上，并调整地图视野*/  
	        map.centerAndZoom(point, 13);  			
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
	<!--end map api-->
</div>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>