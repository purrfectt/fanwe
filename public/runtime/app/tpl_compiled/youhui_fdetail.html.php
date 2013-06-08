<?php echo $this->fetch('inc/header.html'); ?> 
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['TMPL']; ?>/css/youhui.css" />

<div class="blank"></div>

<div class="long f_l">
		<div class="fdetail_box clearfix">
			<div class="fdetail_box_top"><?php echo $this->_var['youhui_info']['name']; ?></div>
			<div class="clearfix">
				<div class="blank"></div>
				<div class="youhui_stitle" style="text-align:center"><?php echo $this->_var['youhui_info']['name']; ?></div>
				<div class="blank"></div>
				<div class="youhui_time_box">	
					有效期：<?php if ($this->_var['youhui_info']['end_time'] > 0): ?><?php if ($this->_var['youhui_info']['begin_time'] > 0): ?><?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui_info']['begin_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?><?php endif; ?>
					至 <?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui_info']['end_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?><?php else: ?><?php echo $this->_var['LANG']['NO_END_TIME']; ?><?php endif; ?>	
					 | 
					<span style="color:#de2b2c;font-weight:bolder; font-family:verdana;"><?php echo intval($this->_var['youhui_info']['sms_count'] + $this->_var['youhui_info']['print_count']); ?></span> 人已领取
				</div>
				<div class="cut_line"></div>
				<div class="youhui_sfun">
					&nbsp;&nbsp;
					<?php if ($this->_var['youhui_info']['is_print'] == 1): ?>
					<a href="<?php
echo parse_url_tag("u:youhui|fdetail#fprint|"."id=".$this->_var['youhui_info']['id']."".""); 
?>" target="_blank" class="free_youhui_p_btn"><?php echo $this->_var['LANG']['YOUHUI_PRINT']; ?></a>
					<?php endif; ?>
					
					<?php if ($this->_var['youhui_info']['is_sms'] == 1): ?>
					<a href="javascript:void(0);" onclick="sms_download(<?php echo $this->_var['youhui_info']['id']; ?>);" class="free_youhui_s_btn"><?php echo $this->_var['LANG']['SMS_DOWNLOAD']; ?></a>
					<?php endif; ?>
				</div>
				<div class="blank"></div>
				<div class="lazy tc">
					<?php echo $this->_var['youhui_info']['description']; ?>
				</div>
				<div class="blank"></div>
				<div class="youhui_count">
					<div class="count_box f_l">
						<b><?php echo $this->_var['youhui_info']['view_count']; ?></b>
						<span>浏览次数</span>
					</div>
					<div class="count_box f_r">
						<b><?php echo intval($this->_var['youhui_info']['sms_count'] + $this->_var['youhui_info']['print_count']); ?></b>
						<span>下载次数</span>
					</div>
				</div>
			</div>
			<div class="cut_line"></div>
			<div style="padding:15px;">
				<b>注意事项</b><br>
				<?php 
$k = array (
  'name' => 'nl2br',
  'v' => $this->_var['youhui_info']['brief'],
);
echo $k['name']($k['v']);
?>
			</div>
			<div class="pd10">
				<div class="blank"></div>
			<div class="youhui_time_box1">
				该优惠有效期：<?php if ($this->_var['youhui_info']['end_time'] > 0): ?><?php if ($this->_var['youhui_info']['begin_time'] > 0): ?><?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui_info']['begin_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?><?php endif; ?>
				至 <?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui_info']['end_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?><?php else: ?><?php echo $this->_var['LANG']['NO_END_TIME']; ?><?php endif; ?>
			</div>
			<?php if ($this->_var['youhui_info']['is_sms'] == 1): ?>
			<div class="sms_box_tip">
				<span>短信优惠券：（短信下载完全免费，我们会严格保密您的手机号码）</span>
				<div><?php echo $this->_var['youhui_info']['sms_content']; ?></div>
			</div>
			<div class="blank"></div>
			<?php endif; ?>
			<div class="youhui_sfun">
				&nbsp;&nbsp;
				<?php if ($this->_var['youhui_info']['is_print'] == 1): ?>
				<a href="<?php
echo parse_url_tag("u:youhui|fdetail#fprint|"."id=".$this->_var['youhui_info']['id']."".""); 
?>" target="_blank" class="free_youhui_p_btn"><?php echo $this->_var['LANG']['YOUHUI_PRINT']; ?></a>
				<?php endif; ?>
				
				<?php if ($this->_var['youhui_info']['is_sms'] == 1): ?>
				<a href="javascript:void(0);" onclick="sms_download(<?php echo $this->_var['youhui_info']['id']; ?>);" class="free_youhui_s_btn"><?php echo $this->_var['LANG']['SMS_DOWNLOAD']; ?></a>
				<?php endif; ?>
			</div>
			<div class="blank"></div>
			<div class="youhui-bottom clearfix">
				<div class="f_l">最终解释权归商家所有。除特殊注明外，本优惠不能与其他优惠同时享受。</div>
				<div class="f_r">
					<!-- JiaThis Button BEGIN -->
					<div id="ckepop">
						<span class="jiathis_txt">分享到：</span>
						<a class="jiathis_button_icons_1"></a>
						<a class="jiathis_button_icons_2"></a>
						<a class="jiathis_button_icons_3"></a>
						<a class="jiathis_button_icons_4"></a>
					</div>
					<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
					<!-- JiaThis Button END -->
				</div>
			</div>
			<div class="blank"></div>
			</div>
		</div>
		
		
		
	<div class="blank"></div>
	<?php if ($this->_var['youhui_info']['is_effect'] == 1): ?>
	<?php 
$k = array (
  'name' => 'load_comment',
  'rel_table' => 'youhui',
  'is_effect' => '1',
  'is_image' => '1',
  'width' => '725px',
  'height' => '80px',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> 
	<?php endif; ?>
</div>

<div class="short f_r">
	<?php echo $this->fetch('inc/side_supplier_info.html'); ?>
	<?php if ($this->_var['near_youhui_list']): ?>
	<div class="inc">
		<div class="inc_top"><?php echo $this->_var['LANG']['NEAR_YOUHUI']; ?></div>
		<div class="inc_main">
			<?php $_from = $this->_var['near_youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui_item');if (count($_from)):
    foreach ($_from AS $this->_var['youhui_item']):
?>
			<div class="hot_youhui_item">
			<a href="<?php
echo parse_url_tag("u:youhui|fdetail|"."id=".$this->_var['youhui_item']['id']."".""); 
?>" title="<?php echo $this->_var['youhui_item']['name']; ?>"><?php echo $this->_var['youhui_item']['name']; ?></a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="inc_foot"></div>
	</div>
	<div class="blank"></div>
	<?php endif; ?>	
	<?php if ($this->_var['rec_youhui_list']): ?>
	<div class="inc">
		<div class="inc_top">猜您还喜欢</div>
		<div class="inc_main">
			<?php $_from = $this->_var['rec_youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui_item');if (count($_from)):
    foreach ($_from AS $this->_var['youhui_item']):
?>
			<div class="hot_youhui_item">
			<a href="<?php
echo parse_url_tag("u:youhui|fdetail|"."id=".$this->_var['youhui_item']['id']."".""); 
?>" title="<?php echo $this->_var['youhui_item']['name']; ?>"><?php echo $this->_var['youhui_item']['name']; ?></a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="inc_foot"></div>
	</div>
	<?php endif; ?>	
</div>
<script>
	$(".youhui-tabs em").click(function(){
		$("#youhui-c-box-0").hide();
		$("#youhui-c-box-1").hide();
		$(".youhui-tabs em").removeClass("cur");
		$(this).addClass("cur");
		if($(this).attr("rel")=="0")
		{
			$("#youhui-c-box-0").show();
		}
		else{
			$("#youhui-c-box-1").show();
		}
		
	});
</script>

<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>