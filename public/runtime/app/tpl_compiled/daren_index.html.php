<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['darencss'][] = $this->_var['TMPL_REAL']."/css/daren.css";
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
<div class="daren_recommend_box">
	<div class="darenshow_tag"></div>
	<div class="t"></div>
	<div class="m">
		<div class="daren_list">
		<?php if (count ( $this->_var['rnd_daren_list'] ) < 42): ?>
		<img src="<?php echo $this->_var['TMPL']; ?>/images/demo_daren.jpg" />
		<?php else: ?>
		<?php $_from = $this->_var['rnd_daren_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'daren_0_20353400_1345512896');if (count($_from)):
    foreach ($_from AS $this->_var['daren_0_20353400_1345512896']):
?>
		<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['daren_0_20353400_1345512896']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php endif; ?>
		</div>
		<div class="daren_submit">
			<a href="<?php
echo parse_url_tag("u:shop|daren#submit|"."".""); 
?>"><img src="<?php echo $this->_var['TMPL']; ?>/images/darensubmit.png" /></a>
		</div>
		<div class="blank1"></div>
	</div>
	<div class="b"></div>
</div>

<div class="blank"></div>

					<div class="show-nav" id="rel_nav">
					<!--{start: 达人导航 -->
						<ul>
							<li class="first on" data-category="0"><a href="javascript:;">热门推荐</a></li>
							<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item_0_20378500_1345512896');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item_0_20378500_1345512896']):
        $this->_foreach['cateloop']['iteration']++;
?>							
							<li data-category="<?php echo $this->_var['cate_item_0_20378500_1345512896']['id']; ?>" <?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>class="last"<?php endif; ?>><a href="javascript:;"><?php echo $this->_var['cate_item_0_20378500_1345512896']['name']; ?></a></li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					<!--}end: 达人导航 -->
					</div>
<div class="blank"></div>
<div class="blank"></div>
					
<!--list-->
<?php echo $this->_var['daren_html']; ?>
<!--end list-->

<div style="display:none;" class="fix-nav">
	<!--{start: 浮动导航 -->
		<div class="show-nav">
					<!--{start: 达人导航 -->
						<ul>
							<li class="first on" data-category="0"><a href="javascript:;">热门推荐</a></li>
							<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item_0_20398400_1345512896');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item_0_20398400_1345512896']):
        $this->_foreach['cateloop']['iteration']++;
?>							
							<li data-category="<?php echo $this->_var['cate_item_0_20398400_1345512896']['id']; ?>" <?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>class="last"<?php endif; ?>><a href="javascript:;"><?php echo $this->_var['cate_item_0_20398400_1345512896']['name']; ?></a></li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					<!--}end: 达人导航 -->
	</div>
	<!--}end: 达人导航 -->
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>