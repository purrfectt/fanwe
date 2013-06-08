<?php exit;?>a:3:{s:8:"template";a:6:{i:0;s:61:"/home/u113466/o2o/app/Tpl/fanwe/index/index_right_youhui.html";i:1;s:60:"/home/u113466/o2o/app/Tpl/fanwe/index/index_right_store.html";i:2;s:62:"/home/u113466/o2o/app/Tpl/fanwe/inc/recommend_cate_youhui.html";i:3;s:49:"/home/u113466/o2o/app/Tpl/fanwe/youhui_index.html";i:4;s:47:"/home/u113466/o2o/app/Tpl/fanwe/inc/header.html";i:5;s:47:"/home/u113466/o2o/app/Tpl/fanwe/inc/footer.html";}s:7:"expires";i:1345530685;s:8:"maketime";i:1345530085;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 方维o2o商业系统 - 方维o2o商业系统,国内最优秀的PHP开源o2o系统</title>
<meta name="keywords" content="方维o2o商业系统关键词" />
<meta name="description" content="方维o2o商业系统描述" />
<link rel="stylesheet" type="text/css" href="http://o2o.7dit.com/public/runtime/statics/733e3fe9a1e4117f3933b5c48d145845.css" />
<script type="text/javascript">
var APP_ROOT = '';
var CART_URL = '/cart';
var CART_CHECK_URL = '/cart-check';
var LOADER_IMG = 'http://o2o.7dit.com/app/Tpl/fanwe/images/lazy_loading.gif';
var ERROR_IMG = 'http://o2o.7dit.com/app/Tpl/fanwe/images/image_err.gif';
</script>
<script type="text/javascript" src="/public/runtime/app/lang.js"></script>
<script type="text/javascript" src="http://o2o.7dit.com/public/runtime/statics/2205876eee27b79b7896d861bb7df3eb.js"></script>
</head>
<body>
<div id="dropdown">	
	<a href="javascript:void(0);" ctl="fcate" act="index" action="/youhui.php" id="search_fcate">搜优惠</a>
	<a href="javascript:void(0);" ctl="ycate" act="index" action="/youhui.php" id="search_ycate">搜代金</a>
	<a href="javascript:void(0);" ctl="tuan" act="index" action="/youhui.php" id="search_tuan">搜团购</a>
	<a href="javascript:void(0);" ctl="store" act="index" action="/youhui.php" id="search_store">搜商家</a>
	<a href="javascript:void(0);" ctl="event" act="index" action="/youhui.php" id="search_event">搜活动</a>
	<a href="javascript:void(0);" ctl="ss" act="pick" action="/shop.php" id="search_ss" >搜商品</a>
	<a href="javascript:void(0);" ctl="topic" act="search" action="/shop.php" id="search_topic">搜分享</a>
</div>	
	<div class="header">
		<div class="top_nav">
			<div class="wrap">
				<div class="f_l">
				欢迎来到方维o2o商业系统&nbsp;				
				</div>
				<div class="f_r">
					<span id="user_head_tip">
					554fcae493e564ee0dc75bdf2ebf94caload_user_tip|YToxOntzOjQ6Im5hbWUiO3M6MTM6ImxvYWRfdXNlcl90aXAiO30=554fcae493e564ee0dc75bdf2ebf94ca					</span>
															<span class="cart_ico"><a href="/cart">购物车 <span class="cart_count" id="cart_count">554fcae493e564ee0dc75bdf2ebf94caload_cart_count|YToxOntzOjQ6Im5hbWUiO3M6MTU6ImxvYWRfY2FydF9jb3VudCI7fQ==554fcae493e564ee0dc75bdf2ebf94ca</span> 件</a></span>
				</div>
			</div>
		</div><!--end top_nav-->
		<div class="blank1"></div>
		<div class="wrap logo_row">
			<div class="logo f_l">
			<a class="link" href="/">
								<span style='display:inline-block; width:191px; height:60px; background:url(http://o2o.7dit.com/public/attachment/201011/4cdd501dc023b.png) no-repeat; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=http://o2o.7dit.com/public/attachment/201011/4cdd501dc023b.png, sizingMethod=scale);_background-image:none;'></span>			</a>
			</div>
			<div class="f_l" style="padding-top:20px; margin-left:10px;">
							</div>
			<script type="text/javascript">
				$(document).ready(function(){
										$("#search_index").click();
										
				});
			</script>
						
			<form id="header_search_box" action="/youhui.php" method="post">
				<div class="search_box f_r">					
					<div class="search_input f_l">						
					<span class="search_type_select" id="select_search_type">
						搜优惠					</span>									
					<input type="text" class="search_txt" name="keyword" id="header_kw" value="554fcae493e564ee0dc75bdf2ebf94caload_keyword|YToxOntzOjQ6Im5hbWUiO3M6MTI6ImxvYWRfa2V5d29yZCI7fQ==554fcae493e564ee0dc75bdf2ebf94ca" />
					<input type="button" class="search_btn" id="search_btn" value="" />
					</div>
					<div class="blank1"></div>
					<div class="keyword_box f_l">
										<a href="/discover/tag-%E6%9C%8D%E8%A3%85">服装</a>
										<a href="/discover/tag-%E6%89%8B%E6%9C%BA">手机</a>
										<a href="/discover/tag-%E9%9B%B6%E9%A3%9F">零食</a>
										</div>
				</div>		
				<input type="hidden" name="act" id="search_act" value="index" />
				<input type="hidden" name="ctl" id="search_ctl" value="fcate" />				
				<input type="hidden" name="is_redirect" value="1" />
			</form>					
		</div><!--end wrap-->
		<div class="main_bar">
			<div class="wrap">				
				<ul class="main_nav">
											<li >
							<span class="nav_left" ></span>
								<a href="/"  target="">首页</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/tuan"  target="">团购</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/mall"  target="">商城</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/youhui/event"  target="">活动</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/youhui/store"  target="">商家</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/daren"  target="">达人秀</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/group"  target="">小组</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/discover"  target="">发现</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/youhui/store-brand"  target="">品牌商家</a>
							<span class="nav_right" ></span>
						</li>
											<li class="current">
							<span class="nav_left" ></span>
								<a href="/youhui"  target="">优惠券</a>
							<span class="nav_right" ></span>
						</li>
											<li >
							<span class="nav_left" ></span>
								<a href="/daijin"  target="">代金券</a>
							<span class="nav_right" ></span>
						</li>
									</ul>	
				<span class="merchant_join">
				<a href="/biz/join" title="我是商家，我要入驻" target="_blank">我是商家，我要入驻</a>	
				</span>	
			</div>
		</div><!--end main_nav-->
	</div>
	
	
		
<div class="wrap">
	 
<script type="text/javascript" src="/public/runtime/app/deal_cate_conf.js"></script>
<script type="text/javascript" src="/public/runtime/app/deal_region_conf/15.js"></script>
<script type="text/javascript" src="http://o2o.7dit.com/public/runtime/statics/572cf6711491e0d35636305202c6873c.js"></script>
<link rel="stylesheet" type="text/css" href="http://o2o.7dit.com/public/runtime/statics/6cf1a3314484f8b9f53b34020fac24f8.css" />
<div class="blank"></div>
<div class="index_left f_l">
	<div id="main_adv_box" class="main_adv_box">
			<div id="main_adv_img" class="main_adv_img">
				<span rel="1"><img src="http://o2o.7dit.com/public/attachment/201204/01/16/4f7815f501ac1.jpg" alt="" border="0" /></span>
				<span rel="2"><img src="http://o2o.7dit.com/public/attachment/201204/01/16/4f7815f501ac1.jpg" alt="" border="0" /></span>
				<span rel="3"><img src="http://o2o.7dit.com/public/attachment/201204/01/16/4f7815f501ac1.jpg" alt="" border="0" /></span>					
			</div>
			<div id="main_adv_ctl" class="main_adv_ctl">
				<ul>
					<li rel="1">1</li>
					<li rel="2">2</li>
					<li rel="3">3</li>
				</ul>
			</div>
			<script type="text/javascript" src="http://o2o.7dit.com/app/Tpl/fanwe/js/index_adv.js"></script>
	</div>
	<div class="blank"></div>
	<div class="index_left_box">
		<div class="box_top">
			<div class="index_title_tag_box">
				<div class="index_title_tag tag_index_left_youhui"></div>				
			</div>
			<div class="f_r">
				<form name="search_store" id="store_form" method="post" action="/youhui/fcate">
				<div class="index_selectbox" id="bcate_box"></div>
				<div class="index_selectbox" id="scate_box">所有分类</div>
				<div class="index_selectbox" id="area_box">所有地区</div>
				<div class="index_selectsearch" id="search_store_btn"></div>
				<input type="hidden" name="cid" id="bcate_box_v" value="0" />
				<input type="hidden" name="tid" id="scate_box_v" value="0" />
				<input type="hidden" name="aid" id="area_box_v" value="0" />
				<input type="hidden" name="qid" id="quan_box_v" value="0" />
				<input type="hidden" name="is_redirect"  value="1" />
				</form>
			</div>
		</div>
		<div class="box_main clearfix">
			<div class="blank"></div>
			<div class="index_filter" style="border-bottom:#f2f2f2 solid 1px;">
				<div class="filter_title">类别</div>
				<div class="filter_item clearfix">
					<ul>
										<li><a href="/youhui/fcate/cid-17" title="母婴亲子">母婴亲子</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/cid-16" title="医疗健康">医疗健康</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/cid-15" title="我要结婚">我要结婚</a>&nbsp;<span>(1)</span></li>
										<li><a href="/youhui/fcate/cid-14" title="都市丽人">都市丽人</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/cid-13" title="爱车学车">爱车学车</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/cid-12" title="网购精品">网购精品</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/cid-11" title="酒店旅游">酒店旅游</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/cid-10" title="生活服务">生活服务</a>&nbsp;<span>(2)</span></li>
										<li><a href="/youhui/fcate/cid-9" title="休闲娱乐">休闲娱乐</a>&nbsp;<span>(1)</span></li>
										<li><a href="/youhui/fcate/cid-8" title="餐饮美食">餐饮美食</a>&nbsp;<span>(5)</span></li>
										<li><a href="/youhui/fcate/cid-" title="全部">全部</a>&nbsp;<span>(9)</span></li>
										</ul>
				</div>
				<div class="blank"></div>
			</div>
			<div class="blank"></div>
			<div class="index_filter">
				<div class="filter_title">区域</div>
				<div class="filter_item clearfix">
					<ul>
										<li><a href="/youhui/fcate/aid-12" title="马尾区">马尾区</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/aid-11" title="仓山区">仓山区</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/aid-10" title="台江区">台江区</a>&nbsp;<span>(0)</span></li>
										<li><a href="/youhui/fcate/aid-9" title="晋安区">晋安区</a>&nbsp;<span>(1)</span></li>
										<li><a href="/youhui/fcate/aid-8" title="鼓楼区">鼓楼区</a>&nbsp;<span>(5)</span></li>
										<li><a href="/youhui/fcate/aid-0" title="全部">全部</a>&nbsp;<span>(9)</span></li>
										</ul>
				</div>
				<div class="blank1"></div>
			</div>
			<div class="blank"></div>
		</div><!--end box_main-->
	</div>
	<div class="blank"></div>
	<div class="index_left_box">
		<div class="box_top">
			<div class="index_title_tag_box">
				<div class="tag_title">
				我要结婚				</div>
			</div>
			<div class="f_r top_right_nav">
						<a href="/youhui/fcate/cid-15" title="更多">更多</a>&nbsp;&nbsp;
			</div>
		</div>
		<div class="box_main clearfix">
						<div class="sector_4 index_youhui_item"  style=" border-bottom:none;">
				<div class="youhui_tag_0"></div>
				<a href="/youhui/fdetail/id-16" title="唯尊视界婚纱摄影工作室【天通苑店】天通苑婚纱摄影-个人写真底片全送原698元现仅需498元" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201202/16/11/4f3c7acb2ce66_150x110.jpg" width="150" height="110" alt="唯尊视界婚纱摄影工作室【天通苑店】天通苑婚纱摄影-个人写真底片全送原698元现仅需498元" class="lazy" /></a>
				<div class="blank"></div>
				<a href="/youhui/fdetail/id-16" title="唯尊视界婚纱摄影工作室【天通苑店】天通苑婚纱摄影-个人写真底片全送原698元现仅需498元" target="_blank" class="title_link">唯尊视界婚纱摄影…</a>
				<div class="blank"></div>
				<div class="youhui_downcount">本券累计下载 0</div>
			</div>
					</div><!--end box_main-->
</div>
<div class="blank"></div>
<div class="index_left_box">
		<div class="box_top">
			<div class="index_title_tag_box">
				<div class="tag_title">
				休闲娱乐				</div>
			</div>
			<div class="f_r top_right_nav">
						<a href="/youhui/fcate/cid-9-tid-1" title="咖啡">咖啡</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-9-tid-5" title="KTV">KTV</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-9-tid-6" title="自助游">自助游</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-9" title="更多">更多</a>&nbsp;&nbsp;
			</div>
		</div>
		<div class="box_main clearfix">
						<div class="sector_4 index_youhui_item"  style=" border-bottom:none;">
				<div class="youhui_tag_0"></div>
				<a href="/youhui/fdetail/id-17" title="北京真人CS速镭俱乐部-户外野战八一影视基地真人CS拓展" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201202/16/11/4f3c7c0248062_150x110.jpg" width="150" height="110" alt="北京真人CS速镭俱乐部-户外野战八一影视基地真人CS拓展" class="lazy" /></a>
				<div class="blank"></div>
				<a href="/youhui/fdetail/id-17" title="北京真人CS速镭俱乐部-户外野战八一影视基地真人CS拓展" target="_blank" class="title_link">北京真人CS速镭…</a>
				<div class="blank"></div>
				<div class="youhui_downcount">本券累计下载 0</div>
			</div>
					</div><!--end box_main-->
</div>
<div class="blank"></div>
<div class="index_left_box">
		<div class="box_top">
			<div class="index_title_tag_box">
				<div class="tag_title">
				餐饮美食				</div>
			</div>
			<div class="f_r top_right_nav">
						<a href="/youhui/fcate/cid-8-tid-1" title="咖啡">咖啡</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-2" title="闽菜">闽菜</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-3" title="东北菜">东北菜</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-4" title="川菜">川菜</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-26" title="日本料理">日本料理</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-27" title="本帮菜">本帮菜</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-28" title="甜点">甜点</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-29" title="面包">面包</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8-tid-30" title="烧烤">烧烤</a>&nbsp;&nbsp;
						<a href="/youhui/fcate/cid-8" title="更多">更多</a>&nbsp;&nbsp;
			</div>
		</div>
		<div class="box_main clearfix">
						<div class="sector_4 index_youhui_item"  style=" border-bottom:none;">
				<div class="youhui_tag_0"></div>
				<a href="/youhui/fdetail/id-18" title="甜韵西点店-巧克力火锅" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201202/16/11/4f3c7c33ea6e2_150x110.jpg" width="150" height="110" alt="甜韵西点店-巧克力火锅" class="lazy" /></a>
				<div class="blank"></div>
				<a href="/youhui/fdetail/id-18" title="甜韵西点店-巧克力火锅" target="_blank" class="title_link">甜韵西点店-巧克…</a>
				<div class="blank"></div>
				<div class="youhui_downcount">本券累计下载 0</div>
			</div>
						<div class="sector_4 index_youhui_item"  style=" border-bottom:none;">
				<div class="youhui_tag_0"></div>
				<a href="/youhui/fdetail/id-15" title="原价最高142元的闽粤汇经典A、B、C（3选1）双人套餐一份" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201201/4f0110c586c48_150x110.jpg" width="150" height="110" alt="原价最高142元的闽粤汇经典A、B、C（3选1）双人套餐一份" class="lazy" /></a>
				<div class="blank"></div>
				<a href="/youhui/fdetail/id-15" title="原价最高142元的闽粤汇经典A、B、C（3选1）双人套餐一份" target="_blank" class="title_link">原价最高142元…</a>
				<div class="blank"></div>
				<div class="youhui_downcount">本券累计下载 0</div>
			</div>
						<div class="sector_4 index_youhui_item"  style=" border-bottom:none;">
				<div class="youhui_tag_0"></div>
				<a href="/youhui/fdetail/id-11" title="格瑞雅美容院" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201201/4f014006f0a6e_150x110.jpg" width="150" height="110" alt="格瑞雅美容院" class="lazy" /></a>
				<div class="blank"></div>
				<a href="/youhui/fdetail/id-11" title="格瑞雅美容院" target="_blank" class="title_link">格瑞雅美容院</a>
				<div class="blank"></div>
				<div class="youhui_downcount">本券累计下载 0</div>
			</div>
					</div><!--end box_main-->
</div>
<div class="blank"></div>
</div><!--end index_left-->
<div class="index_right f_r">
	<a href="/mobile" target="_blank" title="手机客户端下载" class="index_mobile_download"></a>
	<div class="blank"></div>
	<div class="index_right_box">
	<div class="box_top">
			<div class="f_l">热门优惠券</div>
			<div class="f_r top_more"><a href="/youhui/fcate">更多</a></div>
	</div>
	<div class="box_main clearfix">
					<div class="right_youhui_item">
				<div class="right_youhui_ico">
				<a href="/youhui/fdetail/id-15" title="原价最高142元的闽粤汇经典A、B、C（3选1）双人套餐一份" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201201/4f0110c586c48_50x50.jpg" width="50" height="50" alt="原价最高142元的闽粤汇经典A、B、C（3选1）双人套餐一份" class="lazy" /></a>
				</div>
				<div class="right_youhui_info">					
					<a href="/youhui/fdetail/id-15" title="原价最高142元的闽粤汇经典A、B、C（3选1）双人套餐一份" target="_blank" class="title_link">原价最高142元的闽粤汇经典A、B、…</a>
					<div class="blank1"></div>
					<div class="youhui_downcount"><span style="color:#fe7000; font-weight:bolder; font-family:verdana;">0</span>人已下载</div>		
				</div>
			</div>
					<div class="right_youhui_item">
				<div class="right_youhui_ico">
				<a href="/youhui/fdetail/id-16" title="唯尊视界婚纱摄影工作室【天通苑店】天通苑婚纱摄影-个人写真底片全送原698元现仅需498元" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201202/16/11/4f3c7acb2ce66_50x50.jpg" width="50" height="50" alt="唯尊视界婚纱摄影工作室【天通苑店】天通苑婚纱摄影-个人写真底片全送原698元现仅需498元" class="lazy" /></a>
				</div>
				<div class="right_youhui_info">					
					<a href="/youhui/fdetail/id-16" title="唯尊视界婚纱摄影工作室【天通苑店】天通苑婚纱摄影-个人写真底片全送原698元现仅需498元" target="_blank" class="title_link">唯尊视界婚纱摄影工作室【天通苑店】天…</a>
					<div class="blank1"></div>
					<div class="youhui_downcount"><span style="color:#fe7000; font-weight:bolder; font-family:verdana;">0</span>人已下载</div>		
				</div>
			</div>
					<div class="right_youhui_item">
				<div class="right_youhui_ico">
				<a href="/youhui/fdetail/id-11" title="格瑞雅美容院" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201201/4f014006f0a6e_50x50.jpg" width="50" height="50" alt="格瑞雅美容院" class="lazy" /></a>
				</div>
				<div class="right_youhui_info">					
					<a href="/youhui/fdetail/id-11" title="格瑞雅美容院" target="_blank" class="title_link">格瑞雅美容院</a>
					<div class="blank1"></div>
					<div class="youhui_downcount"><span style="color:#fe7000; font-weight:bolder; font-family:verdana;">0</span>人已下载</div>		
				</div>
			</div>
					<div class="right_youhui_item">
				<div class="right_youhui_ico">
				<a href="/youhui/fdetail/id-17" title="北京真人CS速镭俱乐部-户外野战八一影视基地真人CS拓展" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201202/16/11/4f3c7c0248062_50x50.jpg" width="50" height="50" alt="北京真人CS速镭俱乐部-户外野战八一影视基地真人CS拓展" class="lazy" /></a>
				</div>
				<div class="right_youhui_info">					
					<a href="/youhui/fdetail/id-17" title="北京真人CS速镭俱乐部-户外野战八一影视基地真人CS拓展" target="_blank" class="title_link">北京真人CS速镭俱乐部-户外野战八一…</a>
					<div class="blank1"></div>
					<div class="youhui_downcount"><span style="color:#fe7000; font-weight:bolder; font-family:verdana;">0</span>人已下载</div>		
				</div>
			</div>
					<div class="right_youhui_item">
				<div class="right_youhui_ico">
				<a href="/youhui/fdetail/id-18" title="甜韵西点店-巧克力火锅" target="_blank"><img src="http://o2o.7dit.com/public/attachment/201202/16/11/4f3c7c33ea6e2_50x50.jpg" width="50" height="50" alt="甜韵西点店-巧克力火锅" class="lazy" /></a>
				</div>
				<div class="right_youhui_info">					
					<a href="/youhui/fdetail/id-18" title="甜韵西点店-巧克力火锅" target="_blank" class="title_link">甜韵西点店-巧克力火锅</a>
					<div class="blank1"></div>
					<div class="youhui_downcount"><span style="color:#fe7000; font-weight:bolder; font-family:verdana;">0</span>人已下载</div>		
				</div>
			</div>
			</div>
</div>
<div class="blank"></div>
	<div class="index_right_box">
	<div class="box_top">
			<div class="f_l">好评商家排行</div>
			<div class="f_r top_more"><a href="/youhui/store">更多</a></div>
	</div>
	<div class="box_main clearfix">
				<div class="right_store_item">
			<span class="right_store_num num_1"></span>
			<div class="right_store_info">
				<a href="/youhui/store-view/id-15" title="爱琴海餐厅" target="_blank" class="title_link">爱琴海餐厅</a>
				<div class="blank5"></div>				
				<span class="index_start_bar f_l" title="很好">
					<i style="width:66%;"></i>
				</span>
				<span class="f_l index_dp_count">
				3封点评
				</span>			
			</div><!--end store_info-->
		</div>
				<div class="right_store_item">
			<span class="right_store_num num_2"></span>
			<div class="right_store_info">
				<a href="/youhui/store-view/id-17" title="享客来牛排世家" target="_blank" class="title_link">享客来牛排世家</a>
				<div class="blank5"></div>				
				<span class="index_start_bar f_l" title="没有点评">
					<i style="width:0%;"></i>
				</span>
				<span class="f_l index_dp_count">
				0封点评
				</span>			
			</div><!--end store_info-->
		</div>
				<div class="right_store_item">
			<span class="right_store_num num_3"></span>
			<div class="right_store_info">
				<a href="/youhui/store-view/id-16" title="老刘野生大鱼坊" target="_blank" class="title_link">老刘野生大鱼坊</a>
				<div class="blank5"></div>				
				<span class="index_start_bar f_l" title="没有点评">
					<i style="width:0%;"></i>
				</span>
				<span class="f_l index_dp_count">
				0封点评
				</span>			
			</div><!--end store_info-->
		</div>
				<div class="right_store_item">
			<span class="right_store_num num_4"></span>
			<div class="right_store_info">
				<a href="/youhui/store-view/id-14" title="闽粤汇" target="_blank" class="title_link">闽粤汇</a>
				<div class="blank5"></div>				
				<span class="index_start_bar f_l" title="没有点评">
					<i style="width:0%;"></i>
				</span>
				<span class="f_l index_dp_count">
				0封点评
				</span>			
			</div><!--end store_info-->
		</div>
				<div class="right_store_item">
			<span class="right_store_num num_5"></span>
			<div class="right_store_info">
				<a href="/youhui/store-view/id-18" title="格瑞雅美容院" target="_blank" class="title_link">格瑞雅美容院</a>
				<div class="blank5"></div>				
				<span class="index_start_bar f_l" title="没有点评">
					<i style="width:0%;"></i>
				</span>
				<span class="f_l index_dp_count">
				0封点评
				</span>			
			</div><!--end store_info-->
		</div>
			</div>
</div>
<div class="blank"></div>
		
</div>
<div class="blank"></div>
<!--hidden-->
<div id="bcate_box_drop_down" class="select_drop"></div>
<div id="scate_box_drop_down" class="select_drop"></div>
<div id="area_box_drop_down" class="select_drop"></div>
<div id="quan_box_drop_down" class="select_drop"></div>
<!--hidden-->
</div>
<div class="blank"></div>
<div id="ftw">
        <div id="ft">
            <ul class="cf">
            					<li class="col hp1">
                    <h3>公司信息</h3>
                    <ul class="sub-list">
												<li><a href="/help/id-20" >关于我们</a></li>
												<li><a href="/user-register" target="_blank">加入我们</a></li>
						             
					</ul>
                </li>  
								<li class="col hp2">
                    <h3>获取更新</h3>
                    <ul class="sub-list">
												<li><a href="/tuan/rss" target="_blank">RSS订阅</a></li>
												<li><a href="/tuan/dhapi" target="_blank">开放API</a></li>
						             
					</ul>
                </li>  
								<li class="col hp3">
                    <h3>商务合作</h3>
                    <ul class="sub-list">
												<li><a href="/link" target="_blank">友情链接</a></li>
												<li><a href="/tuan/coupon-supplier_login" target="_blank">商家登录</a></li>
						             
					</ul>
                </li>  
								<li class="col hp4">
                    <h3>用户帮助</h3>
                    <ul class="sub-list">
						             
					</ul>
                </li>  
				            
				<li class="col end">
                    <div class=logo-footer>
                    	<a href="/" title="方维o2o商业系统">
                    							<span style='display:inline-block; width:200px; height:44px; background:url(http://o2o.7dit.com/public/attachment/201011/4cdd50ed013ec.png) no-repeat; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=http://o2o.7dit.com/public/attachment/201011/4cdd50ed013ec.png, sizingMethod=scale);_background-image:none;'></span>						</a>
					</div>
                </li>
            </ul>
			<div class="blank"></div>
						<div class="tc">
						<a href="/sys/id-31" title="公司简介">公司简介</a>
						&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a href="/sys/id-30" title="联系我们">联系我们</a>
						&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a href="/sys/id-29" title="咨询热点">咨询热点</a>
						&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a href="/sys/id-28" title="隐私保护">隐私保护</a>
						&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a href="/sys/id-27" title="免责条款">免责条款</a>
						&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<a href="/sys/id-5" title="如何抽奖">如何抽奖</a>
						</div>
            <div class=copyright>
            					电话：400-800-8888 周一至周六 9:00-18:00  
				&nbsp;&nbsp;
								
				&nbsp;&nbsp;
								<div class="blank1"></div>	
				<div style="text-align:center;">[方维o2o商业系统] <a target="_blank" href="http://www.fanwe.com">http://www.fanwe.com</a><br />
</div> 
				<div class="blank"></div>				
																<a id=service-msn-help href="msnim:chat?contact=msn@fanwe.com" target=_blank>
					<img src="http://o2o.7dit.com/app/Tpl/fanwe/images/button-custom-msn.gif">
				</a> 
																<a id=service-msn-help href="msnim:chat?contact=msn2@fanwe.com" target=_blank>
					<img src="http://o2o.7dit.com/app/Tpl/fanwe/images/button-custom-msn.gif">
				</a> 
																				<a href="http://wpa.qq.com/msgrd?v=3&uin=88888888&site=qq&menu=yes" target=_blank>
					<img alt="" src="http://o2o.7dit.com/app/Tpl/fanwe/images/button-custom-qq.gif">
				</a>
																<a href="http://wpa.qq.com/msgrd?v=3&uin=9999999&site=qq&menu=yes" target=_blank>
					<img alt="" src="http://o2o.7dit.com/app/Tpl/fanwe/images/button-custom-qq.gif">
				</a>
												
				<div class="blank1"></div>
								
            </div>
        </div>
    </div>
	<div id="gotop"></div>
</body>
</html>