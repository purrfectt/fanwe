<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($this->_var['page_title']): ?><?php echo $this->_var['page_title']; ?> - <?php endif; ?><?php if ($this->_var['show_city_title']): ?> <?php echo $this->_var['shop_info']['SHOP_TITLE']; ?><?php if ($this->_var['city_title']): ?> - <?php echo $this->_var['city_title']; ?><?php echo $this->_var['LANG']['SITE']; ?><?php endif; ?><?php endif; ?> - <?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_SEO_TITLE',
);
echo $k['name']($k['value']);
?></title>
<meta name="keywords" content="<?php if ($this->_var['page_keyword']): ?><?php echo $this->_var['page_keyword']; ?><?php endif; ?><?php echo $this->_var['shop_info']['SHOP_KEYWORD']; ?>" />
<meta name="description" content="<?php if ($this->_var['page_description']): ?><?php echo $this->_var['page_description']; ?><?php endif; ?><?php echo $this->_var['shop_info']['SHOP_DESCRIPTION']; ?>" />
<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/weebox.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jquery.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/lazyload.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/op.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/op.js";
if(app_conf("APP_MSG_SENDER_OPEN")==1)
{
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/msg_sender.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/msg_sender.js";
}
if($this->_var['APP_INDEX']=='tuan')
{
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/tuan.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/tuan.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/tuan.js";
}
else
{
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/main.css";
}
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['pagecss'],
);
echo $k['name']($k['v']);
?>" />

<script type="text/javascript">
var APP_ROOT = '<?php echo $this->_var['APP_ROOT']; ?>';
var CART_URL = '<?php
echo parse_url_tag("u:shop|cart|"."".""); 
?>';
var CART_CHECK_URL = '<?php
echo parse_url_tag("u:shop|cart#check|"."".""); 
?>';
var LOADER_IMG = '<?php echo $this->_var['TMPL']; ?>/images/lazy_loading.gif';
var ERROR_IMG = '<?php echo $this->_var['TMPL']; ?>/images/image_err.gif';
<?php if (app_conf ( "APP_MSG_SENDER_OPEN" ) == 1): ?>
var send_span = <?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'SEND_SPAN',
);
echo $k['name']($k['v']);
?>000;
<?php endif; ?>
</script>
<script type="text/javascript" src="<?php echo $this->_var['APP_ROOT']; ?>/public/runtime/app/lang.js"></script>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['pagejs'],
  'c' => $this->_var['cpagejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>

</head>

<body>
<?php if ($this->_var['vote']): ?>
<a id="vote" href="<?php
echo parse_url_tag("u:shop|vote|"."".""); 
?>" target="_blank"></a>
<?php endif; ?>
<div id="dropdown">	
	<a href="javascript:void(0);" ctl="fcate" act="index" action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" id="search_fcate"><?php echo $this->_var['LANG']['SEARCH_TYPE_YOUHUI']; ?></a>
	<a href="javascript:void(0);" ctl="ycate" act="index" action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" id="search_ycate">搜代金</a>
	<a href="javascript:void(0);" ctl="tuan" act="index" action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" id="search_tuan">搜团购</a>
	<a href="javascript:void(0);" ctl="store" act="index" action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" id="search_store">搜商家</a>
	<a href="javascript:void(0);" ctl="event" act="index" action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" id="search_event">搜活动</a>
	<a href="javascript:void(0);" ctl="ss" act="pick" action="<?php echo $this->_var['APP_ROOT']; ?>/shop.php" id="search_ss" ><?php echo $this->_var['LANG']['SEARCH_TYPE_GOODS']; ?></a>
	<a href="javascript:void(0);" ctl="topic" act="search" action="<?php echo $this->_var['APP_ROOT']; ?>/shop.php" id="search_topic"><?php echo $this->_var['LANG']['SEARCH_TYPE_TOPIC']; ?></a>
</div>	
	<div class="header">
		<div class="top_nav">
			<div class="wrap">
				<div class="f_l">
				<?php echo $this->_var['LANG']['WELCOME']; ?><?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_TITLE',
);
echo $k['name']($k['value']);
?>&nbsp;				
				</div>
				<div class="f_r">
					<span id="user_head_tip">
					<?php 
$k = array (
  'name' => 'load_user_tip',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
					</span>
					<?php if (app_conf ( "SMS_ON" ) == 1): ?>
					<a href="javascript:void(0)" onclick="submit_sms();"><?php echo $this->_var['LANG']['SMS_SUBSCRIBE']; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="javascript:void(0)" onclick="unsubmit_sms();"><?php echo $this->_var['LANG']['SMS_UNSUBSCRIBE']; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<?php endif; ?>
					<?php if (app_conf ( "MAIL_ON" ) == 1): ?>
					<a href="<?php
echo parse_url_tag("u:tuan|subscribe#mail|"."".""); 
?>">邮件订阅</a>&nbsp;&nbsp;|&nbsp;&nbsp;					
					<?php endif; ?>
					<span class="cart_ico"><a href="<?php
echo parse_url_tag("u:shop|cart|"."".""); 
?>"><?php echo $this->_var['LANG']['SHOP_CART']; ?> <span class="cart_count" id="cart_count"><?php 
$k = array (
  'name' => 'load_cart_count',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?></span> 件</a></span>
				</div>
			</div>
		</div><!--end top_nav-->
		<div class="blank1"></div>
		<div class="wrap logo_row">
			<div class="logo f_l">
			<a class="link" href="<?php echo $this->_var['APP_ROOT']; ?>/">
				<?php
					$this->_var['logo_image'] = app_conf("SHOP_LOGO");
				?>
				<?php 
$k = array (
  'name' => 'load_page_png',
  'v' => $this->_var['logo_image'],
);
echo $k['name']($k['v']);
?>
			</a>
			</div>
			<div class="f_l" style="padding-top:20px; margin-left:10px;">
				<?php if (count ( $this->_var['deal_city_list'] ) > 1): ?>         			 
					 <a href="<?php
echo parse_url_tag("u:shop|city|"."".""); 
?>" class="switch_city"><?php echo $this->_var['deal_city']['name']; ?></a>
					 <br />
					<div style="color:#999;"> 我要切换城市</div>
 				<?php endif; ?>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					<?php if ($this->_var['MODULE_NAME'] == 'mall' || $this->_var['MODULE_NAME'] == 'cate' || $this->_var['MODULE_NAME'] == 'goods'): ?>
					$("#search_ss").click();
					<?php elseif ($this->_var['MODULE_NAME'] == 'topic' || $this->_var['MODULE_NAME'] == 'discover' || $this->_var['MODULE_NAME'] == 'group' || $this->_var['MODULE_NAME'] == 'daren'): ?>
					$("#search_topic").click();
					<?php elseif ($this->_var['APP_INDEX'] == 'tuan'): ?>
					$("#search_tuan").click();
					<?php elseif ($this->_var['MODULE_NAME'] == 'index' && $this->_var['ACTION_NAME'] == 'daijin_index'): ?>
					$("#search_ycate").click();
					<?php else: ?>
					$("#search_<?php echo $this->_var['MODULE_NAME']; ?>").click();
					<?php endif; ?>
					
				});
			</script>
						
			<form id="header_search_box" action="<?php echo $this->_var['APP_ROOT']; ?>/youhui.php" method="post">
				<div class="search_box f_r">					
					<div class="search_input f_l">						
					<span class="search_type_select" id="select_search_type">
						<?php echo $this->_var['LANG']['SEARCH_TYPE_YOUHUI']; ?>
					</span>									
					<input type="text" class="search_txt" name="keyword" id="header_kw" value="<?php 
$k = array (
  'name' => 'load_keyword',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>" />
					<input type="button" class="search_btn" id="search_btn" value="" />
					</div>
					<div class="blank1"></div>
					<div class="keyword_box f_l">
					<?php $_from = $this->_var['hot_kw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'kw_item');if (count($_from)):
    foreach ($_from AS $this->_var['kw_item']):
?>
					<a href="<?php
echo parse_url_tag("u:shop|discover|"."tag=".$this->_var['kw_item']."".""); 
?>"><?php echo $this->_var['kw_item']; ?></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
					<?php $_from = $this->_var['nav_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_item');if (count($_from)):
    foreach ($_from AS $this->_var['nav_item']):
?>
						<li <?php if ($this->_var['nav_item']['current'] == 1): ?>class="current"<?php endif; ?>>
							<span class="nav_left" ></span>
								<a href="<?php echo $this->_var['nav_item']['url']; ?>"  target="<?php if ($this->_var['nav_item']['blank'] == 1): ?>_blank<?php endif; ?>"><?php echo $this->_var['nav_item']['name']; ?></a>
							<span class="nav_right" ></span>
						</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>	
				<span class="merchant_join">
				<a href="<?php
echo parse_url_tag("u:biz|join|"."".""); 
?>" title="我是商家，我要入驻" target="_blank">我是商家，我要入驻</a>	
				</span>	
			</div>
		</div><!--end main_nav-->
	</div>
	
	
	<?php if ($this->_var['is_index'] == 1 && $this->_var['APP_INDEX'] == 'tuan'): ?>
	<script type="text/javascript">
		function set_sort(type)
		{
			var ajaxurl = APP_ROOT+"/tuan.php?ctl=ajax&act=set_sort_idx&type="+type;
			$.ajax({ 
				url: ajaxurl,
				success: function(text){
					location.reload();
				},
				error:function(ajaxobj)
				{
//					if(ajaxobj.responseText!='')
//					alert(ajaxobj.responseText);
				}
			});
		}
	</script>
	<div class="blank"></div>
	<div class="filter_contain cf">
		<div class="cate_row cf">
			<b class="fl"><?php echo $this->_var['LANG']['CATE_DEAL']; ?>：&nbsp;</b>
			<span class="row fl">
			<?php $_from = $this->_var['bcate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bcate');if (count($_from)):
    foreach ($_from AS $this->_var['bcate']):
?>
			<a href="<?php echo $this->_var['bcate']['url']; ?>" title="<?php echo $this->_var['bcate']['name']; ?>" <?php if ($this->_var['bcate']['current'] == 1): ?>class="current"<?php endif; ?>><?php echo $this->_var['bcate']['name']; ?>(<?php echo $this->_var['bcate']['count']; ?>)</a>			
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</span>
		</div>
		<div class="blank1"></div>
		<?php if ($this->_var['scate_list']): ?>		
		<div class="sub_cate_row">
			<?php $_from = $this->_var['scate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'scate');if (count($_from)):
    foreach ($_from AS $this->_var['scate']):
?>		
			<a href="<?php echo $this->_var['scate']['url']; ?>" title="<?php echo $this->_var['scate']['name']; ?>" <?php if ($this->_var['scate']['current'] == 1): ?>class="current"<?php endif; ?>><?php echo $this->_var['scate']['name']; ?>(<?php echo $this->_var['scate']['count']; ?>)</a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endif; ?>
		
		<?php if (count ( $this->_var['bquan_list'] ) > 1): ?>
		<div class="quan_row cf">
			<b class="fl"><?php echo $this->_var['LANG']['AREA_LIST']; ?>：&nbsp;</b>
			<span class="row fl">
				<?php $_from = $this->_var['bquan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bquan');if (count($_from)):
    foreach ($_from AS $this->_var['bquan']):
?>
				<a href="<?php echo $this->_var['bquan']['url']; ?>" title="<?php echo $this->_var['bquan']['name']; ?>" <?php if ($this->_var['bquan']['current'] == 1): ?>class="current"<?php endif; ?>><?php echo $this->_var['bquan']['name']; ?>(<?php echo $this->_var['bquan']['count']; ?>)</a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</span>
		</div>
		<?php endif; ?>
		<div class="blank1"></div>
		<?php if ($this->_var['squan_list']): ?>		
		<div class="sub_cate_row">
			<?php $_from = $this->_var['squan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'squan');if (count($_from)):
    foreach ($_from AS $this->_var['squan']):
?>		
			<a href="<?php echo $this->_var['squan']['url']; ?>" title="<?php echo $this->_var['squan']['name']; ?>" <?php if ($this->_var['squan']['current'] == 1): ?>class="current"<?php endif; ?>><?php echo $this->_var['squan']['name']; ?>(<?php echo $this->_var['squan']['count']; ?>)</a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endif; ?>
		<?php if (! $this->_var['hide_sort']): ?>
		<div class="sort_row">
			<b><?php echo $this->_var['LANG']['SORT_TYPE']; ?>：</b>
			<a href="javascript:void(0);" onclick="set_sort('begin_time');" class="asc_gray <?php if ($this->_var['sort_field'] == 'begin_time'): ?>current idx_<?php echo $this->_var['sort_type']; ?><?php endif; ?>"><?php echo $this->_var['LANG']['SORT_BEGIN_TIME']; ?></a>
			<a href="javascript:void(0);" onclick="set_sort('current_price');" class="desc_gray <?php if ($this->_var['sort_field'] == 'current_price'): ?>current idx_<?php echo $this->_var['sort_type']; ?><?php endif; ?>"><?php echo $this->_var['LANG']['SORT_CURRENT_PRICE']; ?></a>
			<a href="javascript:void(0);" onclick="set_sort('buy_count');" class="asc_gray <?php if ($this->_var['sort_field'] == 'buy_count'): ?>current idx_<?php echo $this->_var['sort_type']; ?><?php endif; ?>"><?php echo $this->_var['LANG']['SORT_BUY_COUNT']; ?></a>
			<a href="javascript:void(0);" onclick="set_sort('sort');" class="desc_gray <?php if ($this->_var['sort_field'] == 'sort'): ?>current idx_<?php echo $this->_var['sort_type']; ?><?php endif; ?>"><?php echo $this->_var['LANG']['SORT_SORT']; ?></a>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	
<div class="wrap">
	<?php if ($this->_var['site_nav']): ?>
	<div class="blank"></div>
	<div class="site_nav">
		<?php $_from = $this->_var['site_nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['nav']):
?>
		<?php if ($this->_var['key'] > 0): ?> - <?php endif; ?><a href="<?php echo $this->_var['nav']['url']; ?>" title="<?php echo $this->_var['nav']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['nav']['name'],
);
echo $k['name']($k['v']);
?></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>	
	<?php endif; ?>
