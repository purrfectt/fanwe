<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['darencss'][] = $this->_var['TMPL_REAL']."/css/storebrand.css";
$this->_var['darenjs'][] = $this->_var['TMPL_REAL']."/js/darenshow.js";
$this->_var['cpdarenjs'][] = $this->_var['TMPL_REAL']."/js/darenshow.js";
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['darencss'],
);
echo $k['name']($k['v']);
?>" />
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['darenjs'],
  'c' => $this->_var['cpdarenjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<div class="blank"></div>
<adv adv_id="品牌商户页广告" />
<div class="blank"></div>

					<div class="show-nav" id="rel_nav">
					<!--{start: 达人导航 -->
						<ul>				
							<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
							<li data-category="<?php echo $this->_var['cate_item']['id']; ?>" <?php if (($this->_foreach['cateloop']['iteration'] <= 1)): ?>class="first on"<?php endif; ?> <?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>class="last"<?php endif; ?>><a href="javascript:;"><?php echo $this->_var['cate_item']['name']; ?></a></li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					<!--}end: 达人导航 -->
					</div>
<div class="blank"></div>
<div class="blank"></div>
					
<!--list-->
<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
<div data-category="<?php echo $this->_var['cate_item']['id']; ?>" class="cate_topic">
	<div class="cate_title"><?php echo $this->_var['cate_item']['name']; ?></div>
	<div class="blank"></div>
	<div class="store_box clearfix">
	<?php for($i=0;$i<15;$i++){
		$this->_var['key'] = $i;
		$this->_var['store_item'] = $this->_var['cate_item']['store_list'][$i];
	?>
	<div class="store_item_box" <?php if ($this->_var['key'] % 5 == 4): ?>style="border-right:none;"<?php endif; ?>>
		<?php if ($this->_var['store_item']): ?>
			<div class="store_img_row"><a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store_item']['id']."".""); 
?>"  title="<?php echo $this->_var['store_item']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['store_item']['preview'],
  'w' => '190',
  'h' => '150',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width=190 height=150 /></a></div>
			<div class="store_name_row"><a href="<?php
echo parse_url_tag("u:youhui|store#view|"."id=".$this->_var['store_item']['id']."".""); 
?>"  title="<?php echo $this->_var['store_item']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['store_item']['name'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
		<?php else: ?>
		<div class="welcome_store">
			<?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'SHOP_TEL',
);
echo $k['name']($k['v']);
?>
		</div>
		<?php endif; ?>
	</div>
	<?php }?>
	<div class="blank1"></div>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<!--end list-->

<div style="display:none;" class="fix-nav">
	<!--{start: 浮动导航 -->
		<div class="show-nav">
					<!--{start: 达人导航 -->
						<ul>
							<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
							<li data-category="<?php echo $this->_var['cate_item']['id']; ?>" <?php if (($this->_foreach['cateloop']['iteration'] <= 1)): ?>class="first on"<?php endif; ?> <?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>class="last"<?php endif; ?>><a href="javascript:;"><?php echo $this->_var['cate_item']['name']; ?></a></li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					<!--}end: 达人导航 -->
	</div>
	<!--}end: 达人导航 -->
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>