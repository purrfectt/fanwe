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
				<span rel="1"><adv adv_id="首页广告位1" /></span>
				<span rel="2"><adv adv_id="首页广告位2" /></span>
				<span rel="3"><adv adv_id="首页广告位3" /></span>					
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
				<div class="index_title_tag tag_search_store"></div>				
			</div>
			<div class="f_r">
				<form name="search_store" id="store_form" method="post" action="<?php
echo parse_url_tag("u:youhui|store|"."".""); 
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
					<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item_0_27230900_1345512889');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item_0_27230900_1345512889']):
?>
					<li><a href="<?php echo $this->_var['cate_item_0_27230900_1345512889']['url']; ?>" title="<?php echo $this->_var['cate_item_0_27230900_1345512889']['name']; ?>"><?php echo $this->_var['cate_item_0_27230900_1345512889']['name']; ?></a>&nbsp;<span>(<?php echo $this->_var['cate_item_0_27230900_1345512889']['count']; ?>)</span></li>
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
	<?php echo $this->_var['left_html']; ?>
	<div class="blank"></div>
	<div class="index_active_group_box">
		<div class="box_top"></div>
		<div class="box_main">
			<?php $_from = $this->_var['hot_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
			<div class="sector_2 index_group_item">
				<div class="group_icon f_l">
				<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>">
				<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group']['icon'],
  'w' => '80',
  'h' => '80',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['group']['name']; ?>" width="80" height="80" />
				</a>
				</div>
				<div class="group_info f_l">
					<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>" class="title_link"><?php echo $this->_var['group']['name']; ?></a>
					<div class="group_count">
						<span><?php echo $this->_var['group']['user_count']; ?></span> 成员&nbsp;&nbsp;
						<span><?php echo $this->_var['group']['topic_count']; ?></span> 分享 				
					</div>
					<div class="group_memo">
						<?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group']['memo'],
  'b' => '0',
  'e' => '35',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?>
					</div>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	</div>
</div><!--end index_left-->
<div class="index_right f_r">
	<a href="<?php
echo parse_url_tag("u:shop|mobile|"."".""); 
?>" target="_blank" title="手机客户端下载" class="index_mobile_download"></a>
	<div class="blank"></div>
	<?php if ($this->_var['notice_list']): ?>
	<div class="index_right_box">
		<div class="box_top">
			<div class="f_l">最新动态</div>
			<div class="f_r top_more"><a href="<?php
echo parse_url_tag("u:shop|notice#list|"."".""); 
?>">更多</a></div>
		</div>
		<div class="box_main">
			<ul class="notice_list">
				<?php $_from = $this->_var['notice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'notice');if (count($_from)):
    foreach ($_from AS $this->_var['notice']):
?>
				<li><a href="<?php echo $this->_var['notice']['url']; ?>" title="<?php echo $this->_var['notice']['title']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['notice']['title'],
  'b' => '0',
  'e' => '17',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			<div class="blank5"></div>
		</div>
	</div><!--end right_box-->
	<div class="blank"></div>
	<?php endif; ?>
	<?php 
$k = array (
  'name' => 'load_index_daren_list',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
	<?php echo $this->_var['right_html']; ?>
	<?php echo $this->_var['right_dp_html']; ?>
	
</div>
<div class="blank"></div>

<!--hidden-->
<div id="bcate_box_drop_down" class="select_drop"></div>
<div id="scate_box_drop_down" class="select_drop"></div>
<div id="area_box_drop_down" class="select_drop"></div>
<div id="quan_box_drop_down" class="select_drop"></div>
<!--hidden-->

<?php echo $this->fetch('inc/footer.html'); ?>