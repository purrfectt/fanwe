<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['discovercss'][] = $this->_var['TMPL_REAL']."/css/discover.css";
$this->_var['discoverjs'][] = $this->_var['TMPL_REAL']."/js/discover.js";
$this->_var['cpdiscoverjs'][] = $this->_var['TMPL_REAL']."/js/discover.js";
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['discovercss'],
);
echo $k['name']($k['v']);
?>" />
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['discoverjs'],
  'c' => $this->_var['cpdiscoverjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<div class="blank"></div>
<div class="show-nav" id="rel_nav">
<ul>
	<li class="first <?php if ($this->_var['cid'] == 0): ?>on<?php endif; ?>" data-category="0"><a href="<?php
echo parse_url_tag("u:shop|discover|"."".""); 
?>">全部</a></li>
	<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
	<li class="<?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>last<?php endif; ?> <?php if ($this->_var['cid'] == $this->_var['cate_item'] [ 'id' ]): ?>on<?php endif; ?>"><a href="<?php
echo parse_url_tag("u:shop|discover|"."cid=".$this->_var['cate_item']['id']."".""); 
?>"><?php echo $this->_var['cate_item']['name']; ?></a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<div class="blank"></div>
<div class="discover_col" id="discover_col1">
	<!--标签列表-->
	<div class="discover_tags">
		<div class="discover_tags_top"></div>
		<div class="discover_tags_center">
			<ul>
			<?php $_from = $this->_var['tag_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_item');if (count($_from)):
    foreach ($_from AS $this->_var['tag_item']):
?>
			<li><a <?php if ($this->_var['tag_item']['color'] != '' && $this->_var['tag'] != $this->_var['tag_item']['name']): ?>style="color:<?php echo $this->_var['tag_item']['color']; ?>;"<?php endif; ?> href="<?php
echo parse_url_tag("u:shop|discover|"."cid=".$this->_var['cid']."&tag=".$this->_var['tag_item']['name']."".""); 
?>" <?php if ($this->_var['tag'] == $this->_var['tag_item']['name']): ?>class="act"<?php endif; ?>>
				<?php echo $this->_var['tag_item']['name']; ?>
				</a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			<div class="blank"></div>
		</div>
		<div class="discover_tags_bottom"></div>
	</div>
	<div class="blank"></div>
	<!--end 标签-->
</div>
<div class="discover_col" id="discover_col2">
	
	
	
</div>
<div class="discover_col" id="discover_col3"></div>
<div class="discover_col" id="discover_col4"></div>
<div class="blank"></div>
<input type="hidden" name="cid" id="hd_cid" value="<?php echo $this->_var['cid']; ?>" />
<input type="hidden" name="tag" id="hd_tag" value="<?php echo $this->_var['tag']; ?>" />
<input type="hidden" name="page" id="hd_page" value="<?php echo $this->_var['page']; ?>" />
<input type="hidden" name="step_size" id="hd_step_size" value="<?php echo $this->_var['step_size']; ?>" />
<input type="hidden" name="step" id="hd_step" /> 
<input type="hidden" name="ajax_wait" id="ajax_wait" /> 
<div id="loading"> <span class="loading_span"></span><span>正在加载中......</span></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>