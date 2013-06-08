<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['storejs'][] = $this->_var['TMPL_REAL']."/js/store.js";
$this->_var['cpstorejs'][] = $this->_var['TMPL_REAL']."/js/store.js";
$this->_var['reviewcss'][] = $this->_var['TMPL_REAL']."/css/review.css";
$this->_var['reviewcss'][] = $this->_var['TMPL_REAL']."/css/review_form.css";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['storejs'],
  'c' => $this->_var['cpstorejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['reviewcss'],
);
echo $k['name']($k['v']);
?>" />
<div class="blank"></div>
<div class="long f_l">
	
	<div class="store_detail_box">
			<div class="store_info_logo f_l">
				<img src="<?php echo $this->_var['store_info']['preview']; ?>" alt="<?php echo $this->_var['store_info']['name']; ?>" class="clearfix" />
				<div class="clearfix image_count">
					<a href="<?php if ($this->_var['store_info']['image_count'] > 0): ?><?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."".""); 
?><?php else: ?>javascript:;<?php endif; ?>" class="blue">共(<?php echo $this->_var['store_info']['image_count']; ?>)张图片</a>
				</div>
			</div>
			<div class="store_info_info f_r">
				 <b class="store_title_row">
				 	<?php echo $this->_var['store_info']['name']; ?>
					<?php if ($this->_var['store_info']['is_verify'] == 1): ?>&nbsp;&nbsp;<font class="verify_store" title="认证商家"></font><?php endif; ?>
					
				</b> 				
				 <div class="blank"></div>
			 	<div class="store_info_item clearfix">
			 		<span class="starsBarBig f_l">
			 			<span class="s s<?php echo intval($this->_var['store_info']['avg_point']); ?>"></span>
			 		</span>
					<span class="sc_ori f_l"><?php echo round($this->_var['store_info']['avg_point'],1); ?></span>
			 		<div class="f_l">
			 		&nbsp;&nbsp;
					人均：<span class="ori_font"><?php echo round($this->_var['store_info']['ref_avg_price'],2); ?>元 </span>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="#store_dp" class="blue"><?php echo $this->_var['store_info']['dp_count']; ?>封点评</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="join_store('<?php
echo parse_url_tag("u:biz|join#step2|"."location_id=".$this->_var['store_info']['id']."".""); 
?>');" class="blue">认领该店</a>
					</div>
				</div>
				<div class="blank"></div>
				<?php if ($this->_var['store_info']['contact']): ?>
			 	联系人：<span class="tel_blue"><?php echo $this->_var['store_info']['contact']; ?></span>
				<br />
				<?php endif; ?>
				<?php if ($this->_var['store_info']['tel']): ?>
			 	电话：<span class="tel_blue"><?php echo $this->_var['store_info']['tel']; ?></span>
				<br />
				<?php endif; ?>
				<?php if ($this->_var['store_info']['address']): ?>
			 	地址：<?php echo $this->_var['store_info']['address']; ?>
				<br />
				<?php endif; ?>
				<div class="blank"></div>
				<div class="clearfix">
					<div class="f_l" style="padding-top:8px;">
						<a href="javascript:;" onclick="store_send_form(<?php echo $this->_var['store_info']['id']; ?>);" id="store_send_sms" class="f_l store_sms blue" title="<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_TITLE',
);
echo $k['name']($k['value']);
?>把地址、电话用短信免费发到你的手机，再也不怕找不到店哦，保证安全，请放心使用">免费发送到手机</a>
					</div>
					<div class="f_l" style="padding-top:8px; padding-right:20px;">
						<a href="javascript:void(0);" onclick="sign_location(<?php echo $this->_var['store_info']['id']; ?>);" class="blue store_sms" style="background:none;">签到</a>
					</div>
					<div class="f_l" style="padding-top:8px;">
						<!-- JiaThis Button BEGIN -->
						<div id="ckepop">
							<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt" target="_blank"><img src="http://v2.jiathis.com/code_mini/images/btn/v1/jiathis5.gif" border="0" /></a>
						</div>
						<script type="text/javascript" src="http://v2.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
						<!-- JiaThis Button END -->		
					</div>
					
					<div class="f_r"><a href="#review_form"><img src="<?php echo $this->_var['TMPL']; ?>/images/review/review.jpg"/></a></div>
				</div>
			</div>
			<div class="blank1"></div>
			
	</div>
	<div class="blank"></div>
	<style>
		#ckepop div{margin:0 0 0 0};
	</style>
	<div class="goods_detail_box" style="margin:0px;">
			<ul class="detail_nav">
				<li class="act">商户详情</li>
			</ul>
			<div class="blank"></div>
			<ul>
				<li class="act" id="store_info">
					<?php if ($this->_var['store_info']['open_time']): ?>
					<div class="tag_info_item">
				 	营业时间：<?php echo $this->_var['store_info']['open_time']; ?>
					</div>
					<?php endif; ?>
					<?php if ($this->_var['store_info']['route']): ?>
					<div class="tag_info_item">
				 	交通线路：<?php echo $this->_var['store_info']['route']; ?>
					</div>
					<?php endif; ?>
					<?php if ($this->_var['store_info']['tags']): ?>
					<div class="tag_info_item">
					店铺标签：<?php $_from = $this->_var['store_info']['tags_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?><a href="<?php
echo parse_url_tag("u:youhui|store|"."tag=".$this->_var['tag']['code']."".""); 
?>"><span class="tel_blue"><?php echo $this->_var['tag']['name']; ?></span></a>&nbsp;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<?php endif; ?>
					<?php $_from = $this->_var['store_info']['tag_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_group');if (count($_from)):
    foreach ($_from AS $this->_var['tag_group']):
?>
						<?php if ($this->_var['tag_group']['tags']): ?>
							<?php if ($this->_var['tag_group']['allow_vote']): ?>
								<div class="tag_info_item">
								<?php echo $this->_var['tag_group']['name']; ?>：
								<?php $_from = $this->_var['tag_group']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_item');if (count($_from)):
    foreach ($_from AS $this->_var['tag_item']):
?>
								<span class="tag_vote" onclick="vote_tag('<?php echo $this->_var['tag_item']['name']; ?>',<?php echo $this->_var['tag_group']['id']; ?>,<?php echo $this->_var['store_info']['id']; ?>,this);"><?php echo $this->_var['tag_item']['name']; ?><?php if ($this->_var['tag_item']['total_count'] > 0): ?>(<?php echo $this->_var['tag_item']['total_count']; ?>)<?php endif; ?></span>&nbsp;&nbsp;
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</div>
							<?php else: ?>
								<div class="tag_info_item">
								<?php echo $this->_var['tag_group']['name']; ?>：
								<?php $_from = $this->_var['tag_group']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_item');if (count($_from)):
    foreach ($_from AS $this->_var['tag_item']):
?>
								<a href="<?php echo $this->_var['tag_item']['url']; ?>" target="_blank"><span class="tel_blue"><?php echo $this->_var['tag_item']['name']; ?><?php if ($this->_var['tag_item']['total_count'] > 0): ?>(<?php echo $this->_var['tag_item']['total_count']; ?>)<?php endif; ?></span></a>&nbsp;&nbsp;
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<?php if ($this->_var['store_info']['brief']): ?>
					<h3 class="pd10">店铺介绍</h2>
					<div class="tag_info_item"><?php echo $this->_var['store_info']['brief']; ?></div>
					<?php endif; ?>
				</li>
		
			</ul>
			<div class="blank"></div>
			<ul class="detail_nav ext_nav">
				<?php 
$k = array (
  'name' => 'load_store_navs',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
			</ul>
			<div class="blank"></div>
			<ul class="detail_cnt">
				<li id="extra_info"></li>
			</ul>
		</div>
		
	<div class="blank"></div>
	<div class="blank"></div>
	<div id="store_dp" name="store_dp">
		<script type="text/javascript">
			load_store_dp(<?php echo $this->_var['store_info']['id']; ?>,1,"","");
		</script>
	</div>
	<div class="blank"></div>
	<div id="review_form">
		<?php 
$k = array (
  'name' => 'get_reivew_form',
  'id' => $this->_var['store_info']['id'],
  'deal_cate_id' => $this->_var['store_info']['deal_cate_id'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
	</div>
</div>
<div class="short f_r">
	<style type="text/css">
		#container{height:193px; width: 193px; border:#ccc solid 1px;}  
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script> 
	<script type="text/javascript">
		function draw_map(xpoint,ypoint)
		{
			var map = new BMap.Map("container"); 
	        var opts = {type: BMAP_NAVIGATION_CONTROL_ZOOM}  
	        map.addControl(new BMap.NavigationControl());  
	        // map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  
	        // 创建地理编码服务实例  
	        var point = new BMap.Point(xpoint,ypoint);
	        
	        // 将结果显示在地图上，并调整地图视野  
	        map.centerAndZoom(point, 16);  
	        map.addOverlay(new BMap.Marker(point));
		}
		
		$(document).ready(function(){
			draw_map('<?php echo $this->_var['store_info']['xpoint']; ?>','<?php echo $this->_var['store_info']['ypoint']; ?>');
			
		});
	</script>
	<div id="container"></div>	
	<?php 
$k = array (
  'name' => 'load_recent_sign',
  'id' => $this->_var['store_info']['id'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
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
					<div class="store_addr"><?php echo $this->_var['store']['address']; ?></div>
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