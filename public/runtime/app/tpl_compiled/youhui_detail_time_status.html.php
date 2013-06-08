<div class="youhui_time_status">			
			
			<!--begin time box-->
			<?php if (( $this->_var['youhui']['begin_time'] != 0 && $this->_var['youhui']['time_status'] == 0 ) || ( $this->_var['youhui']['end_time'] != 0 && $this->_var['youhui']['time_status'] == 1 )): ?> 
						<div id="deal-timeleft-box">
							<div id="deal-timeleft" class="deal-box deal-timeleft deal-on">
						
								<div class="limitdate">
									<?php echo $this->_var['LANG']['TIME_LEFT']; ?><ul id="counter"></ul>
								</div>
							</div>						
						</div>
			<?php endif; ?>
			<script type="text/javascript">
			<?php if ($this->_var['youhui']['time_status'] == 1): ?> 
			var endTime = <?php echo $this->_var['youhui']['end_time']; ?>000;
			var nowTime = <?php 
$k = array (
  'name' => 'get_gmtime',
);
echo $k['name']();
?>000;
			var sysSecond = (endTime - nowTime) / 1000;
			<?php endif; ?>
			<?php if ($this->_var['youhui']['time_status'] == 0): ?> 
			var beginTime = <?php echo $this->_var['youhui']['begin_time']; ?>000;
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
			<!--end time box-->
			</div>
			<div class="blank"></div>
			<div class="youhui_buy_count">
			已有<?php echo $this->_var['youhui']['buy_count']; ?>人购买
			</div>
			<div class="blank"></div>
			<div style="padding-left:30px;">
			<!--begin button status-->
								<?php if ($this->_var['youhui']['time_status'] == 0): ?> 
								<span>		
									未开始								
								</span>
								<?php endif; ?>
								<?php if ($this->_var['youhui']['time_status'] == 1): ?>
									<?php if ($this->_var['youhui']['buy_status'] == 2): ?> 
									<span>
										卖光了
									</span>
									<?php else: ?>
									<input type="button" onclick="add_cart(<?php echo $this->_var['youhui']['id']; ?>);" class="input_youhuicart" name="buy_btn" value="">
									<?php endif; ?>
								<?php endif; ?>
								<?php if ($this->_var['youhui']['time_status'] == 2): ?> 
									<?php if ($this->_var['youhui']['buy_status'] == 2): ?> 
									<span>
										卖光了
									</span>
									<?php else: ?>
									<span>		
										已过期								
									</span>
									<?php endif; ?>
								<?php endif; ?>
			<!--end button status-->
			</div>