<?php if ($this->_var['hot_tag_list']): ?>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['HOT_TAG']; ?></div>
	<div class="inc_main">
		<ul class="tag_list">
		<?php $_from = $this->_var['hot_tag_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'hot_tag');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['hot_tag']):
?>
		<li><span class="tiny_count_box" <?php if ($this->_var['key'] == 0): ?>style="color:#fff; background:#f27900;"<?php elseif ($this->_var['key'] == 1): ?>style="color:#fff; background:#f2a200;"<?php elseif ($this->_var['key'] == 2): ?>style="color:#fff; background:#f2ca00;"<?php endif; ?> ><?php echo intval($this->_var['key'])+1;?></span> <a href="<?php
echo parse_url_tag("u:shop|topic#search|"."keyword=".$this->_var['hot_tag']['name']."".""); 
?>" title="<?php echo $this->_var['hot_tag']['name']; ?>"><span <?php if ($this->_var['hot_tag']['color'] != ''): ?>style="color:<?php echo $this->_var['hot_tag']['color']; ?>;"<?php endif; ?>><?php echo $this->_var['hot_tag']['name']; ?></span></a></li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div>
<div class="blank"></div>
<?php endif; ?>
<?php if ($this->_var['hot_title_list']): ?>
<div class="inc">
	<div class="inc_top"><?php echo $this->_var['LANG']['HOT_TITLE']; ?></div>
	<div class="inc_main">
		<ul class="tag_list">
		<?php $_from = $this->_var['hot_title_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'hot_title');if (count($_from)):
    foreach ($_from AS $this->_var['hot_title']):
?>
		<li><a href="<?php
echo parse_url_tag("u:shop|topic#search|"."keyword=".$this->_var['hot_title']['name']."&type=3".""); 
?>" title="<?php echo $this->_var['hot_title']['name']; ?>"><span <?php if ($this->_var['hot_title']['color'] != ''): ?>style="color:<?php echo $this->_var['hot_title']['color']; ?>;"<?php endif; ?>><?php echo $this->_var['hot_title']['name']; ?></span></a></li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</div>
<div class="blank"></div>
<?php endif; ?>
<?php if ($this->_var['recommend_topic']): ?>
<div class="tc">
<?php $_from = $this->_var['recommend_topic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rtopic');if (count($_from)):
    foreach ($_from AS $this->_var['rtopic']):
?>
<?php if ($this->_var['rtopic']['has_image']): ?>
<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['rtopic']['id']."".""); 
?>" title="<?php echo $this->_var['rtopic']['title']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['rtopic']['images']['0']['o_path'],
  'w' => '204',
  'h' => '204',
);
echo $k['name']($k['v'],$k['w'],$k['h']);
?>" width="160" /></a>
<div class="blank"></div>
<?php endif; ?>
<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['rtopic']['id']."".""); 
?>" title="<?php echo $this->_var['rtopic']['title']; ?>"><?php echo $this->_var['rtopic']['title']; ?></a>	
<div class="blank"></div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>