<?php if ($this->_var['today_deal']): ?>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['TODAY_DEAL']; ?></div>
	<div class="inc_main">
		
		<a href="<?php if ($this->_var['today_deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['today_deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['today_deal']['id']."".""); 
?><?php endif; ?>" title="<?php echo $this->_var['today_deal']['name']; ?>" class="today_deal_title"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['today_deal']['name'],
  's' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['s'],$k['e']);
?></a>
		
		<div class="today_deal_img">
			<a href="<?php if ($this->_var['today_deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['today_deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['today_deal']['id']."".""); 
?><?php endif; ?>" title="<?php echo $this->_var['today_deal']['name']; ?>">
				<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['today_deal']['img'],
  'w' => '170',
  'h' => '130',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
			</a>
		</div>
		<div class="blank"></div>
		<a href="<?php if ($this->_var['today_deal']['uname']): ?><?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['today_deal']['uname']."".""); 
?><?php else: ?><?php
echo parse_url_tag("u:tuan|deal|"."id=".$this->_var['today_deal']['id']."".""); 
?><?php endif; ?>" class="tuan_price">
			<?php 
$k = array (
  'name' => 'format_price',
  'value' => $this->_var['today_deal']['current_price'],
);
echo $k['name']($k['value']);
?>
		</a>
		<div class="blank1"></div>
		<div class="tuan_footer">
		<div class="today_deal_info f_l">
				<?php 
$k = array (
  'name' => 'sprintf',
  'value' => $this->_var['LANG']['SUCCESS_BUY_COUNT'],
  'p' => $this->_var['today_deal']['buy_count'],
);
echo $k['name']($k['value'],$k['p']);
?>			
		</div>		
		<div class="today_deal_time f_r">
			<ul class="counter" endTime="<?php if ($this->_var['today_deal']['time_status'] == 0): ?><?PHP echo to_date($this->_var['today_deal']['begin_time'],'r');?><?php else: ?><?PHP echo to_date($this->_var['today_deal']['end_time'],'r');?><?php endif; ?>"></ul>	
		</div>
		</div>
	</div>
	<div class="inc_foot"></div>
</div>

<script type="text/javascript">
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
<div class="blank"></div>
<?php endif; ?>