<?php if (app_conf ( "SUPPLIER_DETAIL" ) == 1 && $this->_var['locations']): ?>
		<div class="inc">	
						<div class="inc_main">
						<?php $_from = $this->_var['locations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'location');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['location']):
?>
						<div class="youhui_sp_title" rel="<?php echo $this->_var['key']; ?>"><?php echo $this->_var['location']['name']; ?></div>
						<ul class="youhui_sp_ul" rel="<?php echo $this->_var['key']; ?>" <?php if ($this->_var['key'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>	
							<?php if ($this->_var['location']['is_verify']): ?>
							<li>商家认证：<font title="认证商家" class="verify_store"></font></li>
							<?php endif; ?>				
							<li>商家地址：<?php echo $this->_var['location']['address']; ?></li>
							<li>营业时间：<?php echo $this->_var['location']['open_time']; ?></li>
							<li>预约电话：<?php echo $this->_var['location']['tel']; ?></li>						
							<li class="tr"><a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['location']['id']."".""); 
?>" style="color:blue;">(共有<?php echo $this->_var['location']['dp_count']; ?>封点评)查看</a></li>							
						</ul>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
		</div>
	
			<div class="blank"></div>
			<div class="sp_location_map">
			<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script>
			<!-- 团购地图的容器 -->
			<div id="container"></div>
			<!-- 引用团品插件js文件 -->
			<script type='text/javascript' src='http://api.map.baidu.com/tuan/v1.0/groupPurchase.js'></script>
			<script type='text/javascript'>
			$(document).ready(function(){
				//json对象，存储point信息
				var poiData =<?php echo $this->_var['json_location']; ?>;
				//初始化团购控件
				var gp = new BMapGP.GroupPurchase("container",{
				//启用附近公交/地铁路线功能 
				enableRouteInfo:false,
				//启用从这里来/到这里去 公交路线搜索功能 
				enableRouteSearchBox: false,
				//是否启用展开第一个结果 
				selectFirstResult: false,
				//地图类型 JS_MAP为js类型地图，STATIC_MAP为静态图, IFRAME_MAP为嵌入IFRAME类型
				type: JS_MAP,
				//地图缩放级别，如果多点情况，插件会自动缩放级别，将所有点显示在视野内
				zoom: 16,
				//地图大小 
				mapSize:{width:195 ,height:195},
				pois:poiData
				});
				gp.setRouteInfoHeight(1);
				init_switch_sp_info();
			});
			
			function init_switch_sp_info()
			{
				$(".youhui_sp_title").bind("click",function(){				
					$(".youhui_sp_ul").hide();				
					$(".youhui_sp_ul[rel='"+$(this).attr("rel")+"']").show();
				});
			}
			</script>	
			</div>	
			
			<div class="blank"></div>
	<?php endif; ?>