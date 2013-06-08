<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['storejs'][] = $this->_var['TMPL_REAL']."/js/store_photos.js";
$this->_var['cpstorejs'][] = $this->_var['TMPL_REAL']."/js/store_photos.js";
$this->_var['reviewcss'][] = $this->_var['TMPL_REAL']."/css/store_photos.css";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['storejs'],
  'c' => $this->_var['cpstorejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['reviewcss'],
);
echo $k['name']($k['v']);
?>" />
<div class="blank"></div>
<div class="long f_l">
	<?php 
$k = array (
  'name' => 'load_store_photo_list',
  'store_info' => $this->_var['store_info'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
</div>
<div class="short f_r">
	<div class="store_info">
		<div class="infos">
			<div class="img"><a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store_info']['id']."".""); 
?>"><img src="<?php echo $this->_var['store_info']['preview']; ?>" alt="<?php echo $this->_var['store_info']['name']; ?>" /></a></div>
			<div class="detail">
					<?php if ($this->_var['store_info']['address']): ?>
					地　址：<span><?php echo $this->_var['store_info']['address']; ?></span><br>
					<?php endif; ?>
					<?php if ($this->_var['store_info']['tel']): ?>
					电　话：<span><?php echo $this->_var['store_info']['tel']; ?></span><br>
					<?php endif; ?>
					<?php if ($this->_var['store_info']['open_time']): ?>
					营业时间：<span><?php echo $this->_var['store_info']['open_time']; ?></span><br>
					<?php endif; ?>
				</div>
				<div class="dp">
					<a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store_info']['id']."".""); 
?>#review_form"><img src="<?php echo $this->_var['TMPL']; ?>/images/store/dp.jpg" /></a>
					<div class="blank"></div>
					<div class="dp_count">共有<span><?php echo $this->_var['store_info']['dp_count']; ?></span>条点评</div>
				</div>
				<div class="blank"></div>
		</div>
	</div>
	<div class="blank"></div>
	<style type="text/css">
		#container{height:193px; width: 193px; border:#ccc solid 1px;}  
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script> 
	<script type="text/javascript">
		function draw_map(xpoint,ypoint)
		{
			var map = new BMap.Map("container"); 
	        var opts = {type: BMAP_NAVIGATION_CONTROL_ZOOM}  
	        map.addControl(new BMap.NavigationControl());  
	        // map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  
	        // 创建地理编码服务实例  
	        var point = new BMap.Point(xpoint,ypoint);
	        
	        // 将结果显示在地图上，并调整地图视野  
	        map.centerAndZoom(point, 16);  
	        map.addOverlay(new BMap.Marker(point));
		}
		
		$(document).ready(function(){
			draw_map('<?php echo $this->_var['store_info']['xpoint']; ?>','<?php echo $this->_var['store_info']['ypoint']; ?>');
		});
	</script>
	<div id="container"></div>
</div>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>