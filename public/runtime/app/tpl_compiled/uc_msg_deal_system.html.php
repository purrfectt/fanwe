<div class="inc">
	<div class="inc_top"><?php echo $this->_var['page_title']; ?></div>
	<div class="inc_main">
		<div class="pm_form">
			<div class="blank"></div>
			<div class="pm_title tc pd10">
				<?php echo $this->_var['LANG']['SYSTEM_PM']; ?>:<?php echo $this->_var['pm']['title']; ?> &nbsp;&nbsp;<span class="date" style="color:#999; font-size:12px;"><?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['pm']['create_time'],
);
echo $k['name']($k['v']);
?></span>	
			</div>
			<div class="blank"></div>
			<div style="padding:20px 50px; line-height:25px;">			
				<?php 
$k = array (
  'name' => 'nl2br',
  'v' => $this->_var['pm']['content'],
);
echo $k['name']($k['v']);
?>
			</div>			
		</div>
		<div class="blank"></div>
	</div>
	<div class="inc_foot"></div>
</div>

