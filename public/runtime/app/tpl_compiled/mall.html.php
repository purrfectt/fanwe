<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="short f_l">
	<?php echo $this->fetch('inc/index_cate_tree.html'); ?>
	<div class="blank"></div>
	<?php 
$k = array (
  'name' => 'load_today_deal',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> 
	<?php 
$k = array (
  'name' => 'load_sale_list',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> 
	<?php echo $this->fetch('inc/mail_submit.html'); ?>
</div>
<div class="long f_r">
<div class="middle f_l">
	
	<div id="main_adv_box" class="mall_adv_box">
				<div id="main_adv_img" class="mall_adv_img">
					<span rel="1"><adv adv_id="商城首页广告位1" /></span>
					<span rel="2"><adv adv_id="商城首页广告位2" /></span>
					<span rel="3"><adv adv_id="商城首页广告位3" /></span>					
				</div>
				<div id="main_adv_ctl" class="mall_adv_ctl">
					<ul>
						<li rel="1">1</li>
						<li rel="2">2</li>
						<li rel="3">3</li>
					</ul>
				</div>
				<script type="text/javascript" src="<?php echo $this->_var['TMPL']; ?>/js/index_adv.js"></script>
	</div>
</div>
<div class="short f_r">
	<?php echo $this->fetch('inc/index_notice.html'); ?>
</div>
<div class="blank"></div>
	<?php echo $this->_var['hot_span_goods_html']; ?>

	<?php echo $this->_var['new_span_goods_html']; ?>

	<?php echo $this->_var['best_span_goods_html']; ?>
</div>
<div class="blank"></div>
<adv adv_id="首页通栏广告位" />
<div class="blank"></div>
<?php if ($this->_var['recommend_cate_html']): ?>
<div><!--通栏-->
<?php echo $this->_var['recommend_cate_html']; ?>
</div><!--通栏-->
<?php endif; ?>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>