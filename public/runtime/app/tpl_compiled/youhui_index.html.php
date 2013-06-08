<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['indexjs'][] = $this->_var['TMPL_REAL']."/js/index.js";
$this->_var['cpindexjs'][] = $this->_var['TMPL_REAL']."/js/index.js";
$this->_var['indexcss'][] = $this->_var['TMPL_REAL']."/css/index.css";
?>
<script type="text/javascript" src="<?php echo $this->_var['APP_ROOT']; ?>/public/runtime/app/deal_cate_conf.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['APP_ROOT']; ?>/public/runtime/app/deal_region_conf/<?php echo $this->_var['deal_city']['id']; ?>.js"></script>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['indexjs'],
  'c' => $this->_var['cpindexjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['indexcss'],
);
echo $k['name']($k['v']);
?>" />
<div class="blank"></div>
<div class="index_left f_l">
	<div id="main_adv_box" class="main_adv_box">
			<div id="main_adv_img" class="main_adv_img">
				<span rel="1"><adv adv_id="优惠券首页广告位1" /></span>
				<span rel="2"><adv adv_id="优惠券首页广告位2" /></span>
				<span rel="3"><adv adv_id="优惠券首页广告位3" /></span>					
			</div>
			<div id="main_adv_ctl" class="main_adv_ctl">
				<ul>
					<li rel="1">1</li>
					<li rel="2">2</li>
					<li rel="3">3</li>
				</ul>
			</div>
			<script type="text/javascript" src="<?php echo $this->_var['TMPL']; ?>/js/index_adv.js"></script>
	</div>
	<div class="blank"></div>
	<div class="index_left_box">
		<div class="box_top">
			<div class="index_title_tag_box">
				<div class="index_title_tag tag_index_left_youhui"></div>				
			</div>
			<div class="f_r">
				<form name="search_store" id="store_form" method="post" action="<?php
echo parse_url_tag("u:youhui|fcate|"."".""); 
?>">
				<div class="index_selectbox" id="bcate_box"></div>
				<div class="index_selectbox" id="scate_box">所有分类</div>
				<div class="index_selectbox" id="area_box">所有地区</div>
				<div class="index_selectsearch" id="search_store_btn"></div>
				<input type="hidden" name="cid" id="bcate_box_v" value="0" />
				<input type="hidden" name="tid" id="scate_box_v" value="0" />
				<input type="hidden" name="aid" id="area_box_v" value="0" />
				<input type="hidden" name="qid" id="quan_box_v" value="0" />
				<input type="hidden" name="is_redirect"  value="1" />
				</form>
			</div>
		</div>
		<div class="box_main clearfix">
			<div class="blank"></div>
			<div class="index_filter" style="border-bottom:#f2f2f2 solid 1px;">
				<div class="filter_title">类别</div>
				<div class="filter_item clearfix">
					<ul>
					<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item_0_41777700_1345512916');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item_0_41777700_1345512916']):
?>
					<li><a href="<?php echo $this->_var['cate_item_0_41777700_1345512916']['url']; ?>" title="<?php echo $this->_var['cate_item_0_41777700_1345512916']['name']; ?>"><?php echo $this->_var['cate_item_0_41777700_1345512916']['name']; ?></a>&nbsp;<span>(<?php echo $this->_var['cate_item_0_41777700_1345512916']['count']; ?>)</span></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
				<div class="blank"></div>
			</div>
			<div class="blank"></div>
			<div class="index_filter">
				<div class="filter_title">区域</div>
				<div class="filter_item clearfix">
					<ul>
					<?php $_from = $this->_var['area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area_item');if (count($_from)):
    foreach ($_from AS $this->_var['area_item']):
?>
					<li><a href="<?php echo $this->_var['area_item']['url']; ?>" title="<?php echo $this->_var['area_item']['name']; ?>"><?php echo $this->_var['area_item']['name']; ?></a>&nbsp;<span>(<?php echo $this->_var['area_item']['count']; ?>)</span></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
				<div class="blank1"></div>
			</div>
			<div class="blank"></div>
		</div><!--end box_main-->
	</div>
	<div class="blank"></div>
	<?php echo $this->_var['recommend_cate_html']; ?>
</div><!--end index_left-->
<div class="index_right f_r">
	<a href="<?php
echo parse_url_tag("u:shop|mobile|"."".""); 
?>" target="_blank" title="手机客户端下载" class="index_mobile_download"></a>
	<div class="blank"></div>
	<?php echo $this->_var['right_youhui_html']; ?>
	<?php echo $this->_var['right_store_html']; ?>
	<?php if ($this->_var['down_load_list']): ?>
	<div class="blank"></div>
	<div class="index_right_box">
		<div class="box_top">
				<div class="f_l">最新动态</div>
		</div>
		<div class="box_main right_dp_box" id="right_dp_box" style="height:240px;">			
			<?php $_from = $this->_var['down_load_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'down_item');if (count($_from)):
    foreach ($_from AS $this->_var['down_item']):
?>
				<div class="index_dp_item">
					<div class="blank5"></div>
					<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['down_item']['user_id'],
);
echo $k['name']($k['v']);
?> 下载了<a href="<?php
echo parse_url_tag("u:youhui|fdetail|"."id=".$this->_var['down_item']['youhui_id']."".""); 
?>" style="color:#069;" title="<?php echo $this->_var['down_item']['youhui_name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['down_item']['youhui_name'],
  'b' => '0',
  'e' => '8',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
					<div class="blank1"></div>
					<span style="color:#999;"><?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['down_item']['create_time'],
);
echo $k['name']($k['v']);
?></span>
					<div class="blank5"></div>
				</div>				
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
		</div>
	</div>
	<?php endif; ?>
	
</div>
<div class="blank"></div>

<!--hidden-->
<div id="bcate_box_drop_down" class="select_drop"></div>
<div id="scate_box_drop_down" class="select_drop"></div>
<div id="area_box_drop_down" class="select_drop"></div>
<div id="quan_box_drop_down" class="select_drop"></div>
<!--hidden-->

<?php echo $this->fetch('inc/footer.html'); ?>