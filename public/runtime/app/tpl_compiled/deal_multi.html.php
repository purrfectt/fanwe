<?php echo $this->fetch('inc/header.html'); ?> 
<div id="bdw" class="bdw">
	<div id="bd" class="cf">
		<div id="deal-default">
		<?php if (app_conf ( "LIST_TYPE" ) == 0): ?>
		
			<div style="float:left; width:722px;">
			<?php $_from = $this->_var['deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'deal');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['deal']):
?>
			<?php echo $this->fetch('inc/multi_share.html'); ?> 
			<div id="content"  style="position:relative;">				
				<div class="deal-intro-top"></div>
				<div class="no"><?php echo $this->_var['key']+1;?></div>
				<div id="deal-intro" class="cf">				
					<h1>
						<span class='sub_title'>
							<?php if (count ( $this->_var['deal_city_list'] ) > 1): ?>
							<?php echo $this->_var['deal_city']['name']; ?>
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_type'] == 0): ?>
								<?php echo $this->_var['LANG']['DEAL_CURRENT']; ?>
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_type'] == 2): ?>
								<?php echo $this->_var['LANG']['DEAL_ORDER']; ?>
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_type'] == 3): ?>
								<?php echo $this->_var['LANG']['DEAL_SECOND']; ?>
							<?php endif; ?>				
							
						</span> <a href="<?php if ($this->_var['deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['id']."".""); 
?><?php endif; ?>" title="<?php echo $this->_var['deal']['name']; ?>" style="color:#000;"><?php echo $this->_var['deal']['name']; ?></a>		
					</h1>
					<div class="main">
						<div class="deal-buy">
							<div class="deal-price-tag"></div>
							<p class="deal-price" id="deal-price">
								<strong><?php echo $this->_var['deal']['current_price_format']; ?></strong>
								<!--begin button status-->
								<?php if ($this->_var['deal']['time_status'] == 0): ?> 
								<span>		
									<a href="javascript:void(0);">					
										<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-wait-text.gif">	
									</a>								
								</span>
								<?php endif; ?>
								<?php if ($this->_var['deal']['time_status'] == 1): ?>
									<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
									<span>
										<a href="javascript:void(0);">
											<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-soldout-text.gif">
										</a>
									</span>
									<?php else: ?>
									<span>
										<a href="javascript:void(0);" onclick="add_cart(<?php echo $this->_var['deal']['id']; ?>)">
											<?php if ($this->_var['deal']['is_lottery'] == 1 && $this->_var['deal']['current_price'] == 0): ?>
												<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-lottery.gif">
											<?php else: ?>	
												<?php if ($this->_var['deal']['buy_type'] == 0): ?>
													<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-buy.gif">
												<?php endif; ?>
												<?php if ($this->_var['deal']['buy_type'] == 2): ?>
													<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-order.gif">
												<?php endif; ?>
												<?php if ($this->_var['deal']['buy_type'] == 3): ?>
													<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-second.gif">
												<?php endif; ?>
											<?php endif; ?>
										</a>
									</span>
									<?php endif; ?>
								<?php endif; ?>
								<?php if ($this->_var['deal']['time_status'] == 2): ?> 
									<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
									<span>
											<a href="javascript:void(0);">
												<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-soldout-text.gif">
											</a>
										</span>
									<?php else: ?>
									<span>		
										<a href="javascript:void(0);">					
											<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-expired-text.gif">	
										</a>								
									</span>
									<?php endif; ?>
								<?php endif; ?>
								<!--end button status-->		
							</p>
						</div>
						<table class="deal-discount">
							<tbody>
								<tr>
									<th><?php echo $this->_var['LANG']['ORIGIN_PRICE']; ?></th>
									<th><?php echo $this->_var['LANG']['DISCOUNT']; ?></th>
									<th><?php echo $this->_var['LANG']['SAVE_PRICE']; ?></th>
								</tr>
								<tr>
									<td><?php echo $this->_var['deal']['origin_price_format']; ?></td>
									<td><?php echo $this->_var['deal']['discount']; ?><?php echo $this->_var['LANG']['DISCOUNT_OFF']; ?></td>
									<td><?php echo $this->_var['deal']['save_price_format']; ?></td>
								</tr>

							</tbody>
						</table>
						<?php if (( $this->_var['deal']['begin_time'] != 0 && $this->_var['deal']['time_status'] == 0 ) || ( $this->_var['deal']['end_time'] != 0 && $this->_var['deal']['time_status'] == 1 )): ?> 
						<div id="deal-timeleft-box">
							<div id="deal-timeleft" class="deal-box deal-timeleft deal-on">
								<h3><?php echo $this->_var['LANG']['TIME_LEFT']; ?></h3>
								<div class="limitdate">
									<ul class="counter" endTime="<?php if ($this->_var['deal']['time_status'] == 0): ?><?PHP echo to_date($this->_var['deal']['begin_time'],'r');?><?php else: ?><?PHP echo to_date($this->_var['deal']['end_time'],'r');?><?php endif; ?>"></ul>
								</div>
							</div>						
						</div>
						<?php endif; ?>

						<div id=deal-status class="deal-box deal-status deal-status-open">
							
						<?php if ($this->_var['deal']['time_status'] == 0): ?>
							<?php echo $this->_var['LANG']['DEAL_NOT_BEGIN']; ?>
							<br />
							<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['DEAL_BEGIN_FORMAT'],
  'value' => $this->_var['deal']['begin_time_format'],
);
echo $k['name']($k['format'],$k['value']);
?>
						<?php endif; ?>
						<?php if ($this->_var['deal']['time_status'] == 1): ?> 
							<?php if ($this->_var['deal']['buy_status'] == 0): ?> 
								<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
								<p class="deal-buy-tip-notice"><?php echo $this->_var['LANG']['DEAL_LIMIT_TIP']; ?></p>
								<div class="progress-pointer" style="padding-left:<?php echo $this->_var['deal']['current_bought'] / $this->_var['deal']['min_bought'] * 194 -5; ?>px;"><span></span></div>
								<div class="progress-bar">
							
									<div class="progress-left" style="width:<?php echo $this->_var['deal']['current_bought'] / $this->_var['deal']['min_bought'] * 194; ?>px;"></div>
									<div class="progress-right "></div>
								</div>
								<div class="cf">
									<div class="min">0</div>
									<div class="max"><?php echo $this->_var['deal']['min_bought']; ?></div>
								</div>
								<p class="deal-buy-tip-btm"><?php echo $this->_var['deal']['success_less']; ?></p>
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_status'] == 1): ?> 
								<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
								<p class="deal-buy-tip-notice">
									<?php if ($this->_var['deal']['is_lottery'] == 0): ?>
									<?PHP
									$c_deal = $this->_var['deal'];
									if($c_deal['max_bought'] != 0 && $c_deal['max_bought'] - $c_deal['buy_count'] <= 10)
									{
										echo sprintf($GLOBALS['lang']['REMAIN_TIP'],$c_deal['max_bought'] - $c_deal['buy_count']);
									}
									?>
									<?php echo $this->_var['LANG']['DEAL_LIMIT_TIP']; ?>
									<?php else: ?>
									<?php 
$k = array (
  'name' => 'sprintf',
  'f' => $this->_var['LANG']['TOTAL_LOTTERY_COUNT'],
  'p' => $this->_var['deal']['lottery_count'],
);
echo $k['name']($k['f'],$k['p']);
?>
									<br /> <a href="<?php
echo parse_url_tag("u:shop|uc_order#lottery|"."".""); 
?>" style="color:#f30;"><?php echo $this->_var['LANG']['INVITE_LOTTERY_DEAL_TIP']; ?></a>
									<?php endif; ?>
								</p>
								<p class=deal-buy-on><?php echo $this->_var['LANG']['DEAL_SUCCESS_CONTINUE_BUY']; ?></p>
								<p class=deal-buy-tip-btm><?php echo $this->_var['deal']['success_time_tip']; ?></p>
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
							<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-sold-out.gif">
							<?php endif; ?>							
						<?php endif; ?>
						<?php if ($this->_var['deal']['time_status'] == 2): ?> 
							<?php if ($this->_var['deal']['buy_status'] == 0): ?> 
							<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-expired-fail.gif">
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_status'] == 1): ?> 
							<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-expired-success.gif">
							<?php endif; ?>
							<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
							<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-sold-out.gif">
							<?php endif; ?>
						<?php endif; ?>
						
						</div>
					</div>
					<div class=side>
						<div id="goods_imgs" class="deal-buy-cover-img">
							<div class="mid">
								<ul>
								<?php $_from = $this->_var['deal']['image_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'image');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['image']):
?>
								<li <?php if ($this->_var['key'] == 0): ?>class="first"<?php endif; ?>>
								<a href="<?php if ($this->_var['deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['id']."".""); 
?><?php endif; ?>" title="<?php echo $this->_var['deal']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['image']['img'],
  'w' => '450',
  'h' => '0',
  'g' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width=450  class="lazy" alt="<?php echo $this->_var['deal']['name']; ?>" /></a>
								</li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>								
								</ul>

							</div>
						</div>					
						<div class=digest>
							<?php echo $this->_var['deal']['brief']; ?>
						</div>
					</div>
					
				</div>
				<div class="deal-intro-bottom"></div>
				</div>
				<div class="blank"></div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
			<?php unset($this->_var['deal']);?>
			<div class="clear"></div>
			<div class="pages idx-pages"><?php echo $this->_var['pages']; ?></div>
			</div>
			<div style="float:right; padding-top:30px;">
			<?php echo $this->fetch('inc/side.html'); ?> 
			</div>
		<?php else: ?>
			
			<?php $_from = $this->_var['deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'deal');$this->_foreach['deal_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_item']['total'] > 0):
    foreach ($_from AS $this->_var['deal']):
        $this->_foreach['deal_item']['iteration']++;
?>
			<div class="goods_item <?php if ($this->_foreach['deal_item']['iteration'] % 3 == 0): ?>gr_no<?php endif; ?>">
				<div class="img">
					<a href="<?php if ($this->_var['deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['id']."".""); 
?><?php endif; ?>" title="<?php echo $this->_var['deal']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['deal']['image_list']['0']['img'],
  'w' => '287',
  'h' => '179',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width=287 height=179 class="lazy" alt="<?php echo $this->_var['deal']['name']; ?>" /></a>
				</div>
				<h1><a href="<?php if ($this->_var['deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['id']."".""); 
?><?php endif; ?>" title="<?php echo $this->_var['deal']['name']; ?>"><span><?php echo $this->_var['deal']['discount']; ?><?php echo $this->_var['LANG']['DISCOUNT_OFF']; ?>：</span><?php 
$k = array (
  'name' => 'msubstr',
  'a' => $this->_var['deal']['name'],
  'b' => '0',
  'c' => '32',
);
echo $k['name']($k['a'],$k['b'],$k['c']);
?></a></h1>
				<div class="blank8"></div>
				<div class="price fl">
					<strong><?php echo $this->_var['deal']['current_price_format']; ?></strong>
				</div>
				<a href="<?php if ($this->_var['deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal#index|"."id=".$this->_var['deal']['id']."".""); 
?><?php endif; ?>" class="buy fr">
					<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
					<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/item-sold-out.gif">
					<?php else: ?>
					<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/item-sold.gif">
					<?php endif; ?>
					</a>
				<div class="blank8"></div>
				<table class="disc">
					<tr>
						<td><?php echo $this->_var['LANG']['ORIGIN_PRICE']; ?>:<?php echo $this->_var['deal']['origin_price_format']; ?></td>
						<td style="text-align:center;"><?php echo $this->_var['LANG']['SAVE_PRICE']; ?>:<?php echo $this->_var['deal']['save_price_format']; ?></td>
						<td style="text-align:right;"><?php echo $this->_var['deal']['deal_success_num']; ?></td>
				</table>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php unset($this->_var['deal']);?>
			<div class="blank"></div>
			<div class="pages idx-pages"><?php echo $this->_var['pages']; ?></div>
			<div class="blank"></div>
		<?php endif; ?>
	</div>
	<!-- bd end -->
</div></div>
<script type="text/javascript">
	
	function share_url(id)
	{
		if ($("#deal-share-im-c-"+id).css("display") == "none") {			
			$("#share-copy-text-"+id).val($("#share_url_"+id).val());
			$("#deal-share-im-c-"+id).show();
		}
		else 
			$("#deal-share-im-c-"+id).hide();
	}
	function copy_text(id)
	{
		$.copyText('#share-copy-text-'+id);
	}
	
var updEndNowTime = <?PHP echo (get_gmtime()+ (intval(app_conf("TIME_ZONE"))*3600))."000";?>;
function updateEndTime()
{

	var time = updEndNowTime;
	$(".counter").each(function(i){
		var endDate =new Date(this.getAttribute("endTime"));
		var endTime = endDate.getTime();
		var lag = (endTime - time) / 1000;
		if(lag > 0)
		{
			var second = Math.floor(lag % 60);     
			var minite = Math.floor((lag / 60) % 60);
			var hour = Math.floor((lag / 3600) % 24);
			var day = Math.floor((lag / 3600) / 24);
			var timeHtml = "<span>"+hour+"</span>"+LANG['HOUR']+"<span>"+minite+"</span>"+LANG['MIN']+"";
			if(day > 0)
				timeHtml ="<span>"+day+"</span>"+LANG['DAY']+"" + timeHtml;
			timeHtml+="<span>"+second+"</span>"+LANG['SEC']+"";
			$(this).html(timeHtml);
		}
		else
			$(this).html("");
	});
	updEndNowTime+=1000;
	setTimeout("updateEndTime()",1000);
}
updateEndTime();
</script>
<?php echo $this->fetch('inc/footer.html'); ?>