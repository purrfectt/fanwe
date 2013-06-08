<?php
$this->_var['groupjs'][] = $this->_var['TMPL_REAL']."/js/group.js";
$this->_var['cpgroupjs'][] = $this->_var['TMPL_REAL']."/js/group.js";
$this->_var['groupcss'][] = $this->_var['TMPL_REAL']."/css/group.css";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['groupjs'],
  'c' => $this->_var['cpgroupjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['groupcss'],
);
echo $k['name']($k['v']);
?>" />
<div class="blank"></div>
<div class="group_bg" style="background:url(<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group_info']['image'],
  'w' => '960',
  'h' => '150',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>);">
	<div class="group_intro">		
			<div class="group_icon f_l"><a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group_info']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group_info']['icon'],
  'w' => '50',
  'h' => '50',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['group_info']['name']; ?>"  width=50 height=50 /></a></div>
			<div class="group_title f_l" style="color:#fff; padding-left:10px;">
			<span style="line-height:24px; font-size:24px; font-weight:bolder; font-family:微软雅黑;"><?php echo $this->_var['group_info']['name']; ?></span>
			<div class="blank1"></div>
			<span style="font-size:12px; font-weight:normal; line-height:22px;">创建于：<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['group_info']['create_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?></span>
			</div>	
			<div class="blank1"></div>	
	</div>
</div>
<div class="blank"></div>	