<?php echo $this->fetch('inc/header.html'); ?> 
<div id="bdw" class="bdw">
	<div id="bd" class="cf">
		<?php if ($this->_var['coupon_data']): ?>
		<?php echo $this->fetch('inc/new_coupon_tip.html'); ?> 
		<?php endif; ?>
		<div id="deal-default">
			<div id="content">
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
						</span> <?php echo $this->_var['deal']['name']; ?>				
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
						
						<div class="deal_info_box" style="margin-top:90px; border:#fed1b2 solid 1px; background:#fdfbee;">
							<div style="padding:5px 20px;">
							<table class="deal-discount">				
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
							</table>	
							</div>
							<div class="dotted_line"></div>	
							<?php if (( $this->_var['deal']['begin_time'] != 0 && $this->_var['deal']['time_status'] == 0 ) || ( $this->_var['deal']['end_time'] != 0 && $this->_var['deal']['time_status'] == 1 )): ?> 
							<div id="deal-timeleft-box" style="padding:5px;">
								<div id="deal-timeleft" class="deal-timeleft deal-on">
									<h3 class="remain_clock"><?php echo $this->_var['LANG']['TIME_LEFT']; ?></h3>
									<div class="limitdate">
										<ul id="counter"></ul>
									</div>
								</div>						
							</div>
							<div class="dotted_line"></div>	
							<?php elseif ($this->_var['deal']['time_status'] == 2): ?>
							<div class="tuan_end_tip">
									<?php echo sprintf($GLOBALS['lang']['TUAN_END_DATETIME'], to_date($this->_var['deal']['end_time']));?>			
							</div>
							<div class="dotted_line"></div>	
							<?php endif; ?>
							<!--status-->
							<div id=deal-status class="deal-status deal-status-open">
							
							<?php if ($this->_var['deal']['time_status'] == 0): ?>
								<div style="font-size:12px;"><?php echo $this->_var['LANG']['DEAL_NOT_BEGIN']; ?></div>								
								<div class="not-begin"></div>
							<?php endif; ?>
							<?php if ($this->_var['deal']['time_status'] == 1): ?> 
								<?php if ($this->_var['deal']['buy_status'] == 0): ?> 
									<p class="deal-buy-tip-notice"><?php echo $this->_var['deal']['deal_success_num']; ?><?php echo $this->_var['deal']['success_less']; ?></p>
									<div class="progress-pointer" style="padding-left:<?php echo $this->_var['deal']['current_bought'] / $this->_var['deal']['min_bought'] * 194 -5; ?>px;"><span></span></div>
									<div class="progress-bar">
								
										<div class="progress-left" style="width:<?php echo $this->_var['deal']['current_bought'] / $this->_var['deal']['min_bought'] * 194; ?>px;"></div>
										<div class="progress-right "></div>
									</div>
									<div class="cf">
										<div class="min">0</div>
										<div class="max"><?php echo $this->_var['deal']['min_bought']; ?></div>
									</div>
									
								<?php endif; ?>
								<?php if ($this->_var['deal']['buy_status'] == 1): ?> 
									<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
									<p class="deal-buy-tip-notice">
										<?php if ($this->_var['deal']['is_lottery'] == 0): ?>
										<?PHP
										$c_deal = $this->_var['deal'];
										if($c_deal['max_bought'] != 0 && $c_deal['max_bought'] - $c_deal['buy_count'] <= 20)
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
									<?php if ($this->_var['deal']['is_lottery'] == 0): ?>
									<p class=deal-buy-on><?php echo $this->_var['LANG']['DEAL_SUCCESS_CONTINUE_BUY']; ?></p>		
									<?php endif; ?>							
								<?php endif; ?>
								<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
								<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
								<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-sold-out.gif">
								<?php endif; ?>							
							<?php endif; ?>
							<?php if ($this->_var['deal']['time_status'] == 2): ?> 
								<?php if ($this->_var['deal']['buy_status'] == 0): ?> 
								<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
								<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-expired-fail.gif">
								<?php endif; ?>
								<?php if ($this->_var['deal']['buy_status'] == 1): ?> 
								<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
								<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-deal-expired-success.gif">
								<?php endif; ?>
								<?php if ($this->_var['deal']['buy_status'] == 2): ?> 
								<p class=deal-buy-tip-top><?php echo $this->_var['deal']['deal_success_num']; ?></p>
								<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/bg-sold-out.gif">
								<?php endif; ?>
							<?php endif; ?>
							
							</div>
							<!--status-->
												
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
								<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['image']['img'],
  'w' => '450',
  'h' => '0',
  'g' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>">
								</li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>								
								</ul>
								<div id="img_list">
									<?php if (count ( $this->_var['deal']['image_list'] ) > 1): ?>
									<?php $_from = $this->_var['deal']['image_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'image');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['image']):
?>
									<a <?php if ($this->_var['key'] == 0): ?>class="active"<?php endif; ?> ref="<?php echo $this->_var['key']+1;?>"><?php echo $this->_var['key']+1;?></a>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
									<?php endif; ?>							
								</div>
							</div>
						</div>					
	
					</div>
					<div class="clear"></div>
					<?php if ($this->_var['deal']['brief']): ?>
					<div id="goods-breif" class="cf">
						<h3>商品简介</h3>
						<div class="detail"><?php echo $this->_var['deal']['brief']; ?></div>
					</div>
					<?php else: ?>
					<div class="blank1"></div>
					<div class="blank1"></div>
					<div class="blank8"></div>
					<?php endif; ?>
				</div>
				
				<div id=deal-stuff class=cf>
					
					<?php echo $this->fetch('inc/share.html'); ?>
					<div class="blank1"></div>					
					<div class="box box-split cf">		
						<div class="box-content cf">
							<ul class="detail_nav">
								<li rel="1" class="current_nav" style="border-left:#ccc solid 1px;">本单详情</li>
								<li rel="2">售前咨询</li>
								<li rel="3">买家点评</li>
							</ul>
							<div class=" lazy box_main" rel="1">
								<?php echo $this->_var['deal']['description']; ?>
							</div>	
							<div class=" box_main consult-list" rel="2" style="display:none;"><?php echo $this->_var['before_message_html']; ?>
							<div class="blank1"></div>
							<div style="text-align:right;">
							<input type="button" value="查看更多" name="commit" class="formbutton" onclick="location.href='<?php
echo parse_url_tag("u:tuan|message#deal|"."id=".$this->_var['deal']['id']."&is_buy=0".""); 
?>';" />
							
							<input type="button" value="我也去咨询" name="commit" class="formbutton" onclick="location.href='<?php
echo parse_url_tag("u:tuan|message#deal|"."id=".$this->_var['deal']['id']."&is_buy=0".""); 
?>#consult-form-head';" />
							</div>
							</div>
							<div class=" box_main consult-list" rel="3" style="display:none;"><?php echo $this->_var['after_message_html']; ?>
							<div class="blank1"></div>
							<div style="text-align:right;">
							<input type="button" value="查看更多" name="commit" class="formbutton" onclick="location.href='<?php
echo parse_url_tag("u:tuan|message#deal|"."id=".$this->_var['deal']['id']."&is_buy=1".""); 
?>';" />
							
							<input type="button" value="我也去点评" name="commit" class="formbutton" onclick="location.href='<?php
echo parse_url_tag("u:tuan|message#deal|"."id=".$this->_var['deal']['id']."&is_buy=1".""); 
?>#consult-form-head';" />
							</div>
							</div>						
							<div class=blank></div>

						</div>
						<div class=box-bottom></div>
					</div>
				</div>
			</div>
			<?php echo $this->fetch('inc/side.html'); ?> 
	</div>
	<!-- bd end -->
</div></div>
<?php if (( $this->_var['deal']['begin_time'] != 0 && $this->_var['deal']['time_status'] == 0 ) || ( $this->_var['deal']['end_time'] != 0 && $this->_var['deal']['time_status'] == 1 )): ?> 
<script type="text/javascript">
<?php if ($this->_var['deal']['time_status'] == 1): ?> 
var endTime = <?php echo $this->_var['deal']['end_time']; ?>000;
var nowTime = <?php 
$k = array (
  'name' => 'get_gmtime',
);
echo $k['name']();
?>000;
var sysSecond = (endTime - nowTime) / 1000;
<?php endif; ?>
<?php if ($this->_var['deal']['time_status'] == 0): ?> 
var beginTime = <?php echo $this->_var['deal']['begin_time']; ?>000;
var nowTime = <?php 
$k = array (
  'name' => 'get_gmtime',
);
echo $k['name']();
?>000;
var sysSecond = (beginTime - nowTime) / 1000;
<?php endif; ?>
var interValObj;
setRemainTime();
function setRemainTime()
{	
	if (sysSecond > 0)
	{
		var second = Math.floor(sysSecond % 60);              // 计算秒     
		var minite = Math.floor((sysSecond / 60) % 60);       //计算分
		var hour = Math.floor((sysSecond / 3600) % 24);       //计算小时
		var day = Math.floor((sysSecond / 3600) / 24);        //计算天
		var timeHtml = "<span>"+hour+"</span>"+LANG['HOUR']+"<span>"+minite+"</span>"+LANG['MIN']+"";
		if(day > 0)
			timeHtml ="<span>"+day+"</span>"+LANG['DAY']+"" + timeHtml;
		
		timeHtml+="<span>"+second+"</span>"+LANG['SEC']+"";
		
		try
		{
			$("#counter").html(timeHtml);
			sysSecond--;
		}
		catch(e){}}
	else
	{window.clearTimeout(interValObj);}
	interValObj = window.setTimeout("setRemainTime()", 1000); 	
}
</script>
<?php endif; ?>
<!--图片轮播-->
<script type="text/javascript">

var errHideTimeOut;
var userMenuTimeOut;
var ecvTimeOut;
var imgListCurr=0;
var imgListNext=0;
var imgListCount=0;
var imgListInterval;

function imagesInit()
{
	imgListCount = $('#img_list a').size();
	
	if(imgListCount < 2)
		return;
	
	imgListInterval = setInterval('imagesRun()',3000);
	 
	$('#goods_imgs li,#img_list a').hover(function(){
		clearInterval(imgListInterval);
	},function(){
		imgListInterval = setInterval('imagesRun()',3000);
	});
	 
	$('#img_list a').click(function(){
		var index = $('#img_list a').index(this);
		if (imgListCurr != index){
			imagesPlay(index);
            imgListCurr = index;
        };
		return false;
    });
}

function imagesRun()
{
	imgListNext = imgListCurr + 1;
    if (imgListCurr == imgListCount - 1)
		imgListNext = 0;
		
	imagesPlay(imgListNext);
	
	imgListCurr++;
	
    if (imgListCurr > imgListCount - 1)
	{
		imgListCurr = 0;
		imgListNext = imgListCurr + 1;
	}
}

function imagesPlay(next)
{
	$('#goods_imgs li').eq(imgListCurr).css({'opacity':'0.5'}).animate({'left':'-440px','opacity':'1'},'slow',function(){
		$(this).css({'left':'440px'});
	}).end().eq(next).animate({'left':'0px','opacity':'1'},'slow',function(){
		$('#img_list a').siblings('a').removeClass('active').end().eq(next).addClass('active');
	});
}
function switch_location()
{
	var location_id = $("#locations_select").val();
	$.ajax({
		url: APP_ROOT+"/tuan.php?ctl=ajax&act=get_supplier_location&id="+location_id,
		success:function(html)
		{
			$("#sp_location").html(html);
		}
	});
}
$(document).ready(function(){
	imagesInit();
	$("#locations_select").bind("change",function(){
		switch_location();
	});
});
</script>
<?php echo $this->fetch('inc/footer.html'); ?>