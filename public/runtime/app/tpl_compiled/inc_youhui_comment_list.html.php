	<div class="sub_nav">
		<span <?php if ($this->_var['is_buy'] == 0): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:youhui|ydetail|"."id=".$this->_var['goods_id']."&type=comment&is_buy=0".""); 
?>#detail_box" rel="1"><?php echo $this->_var['LANG']['BEFORE_BUY']; ?></a></span>
		<span <?php if ($this->_var['is_buy'] == 1): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:youhui|ydetail|"."id=".$this->_var['goods_id']."&type=comment&is_buy=1".""); 
?>#detail_box" rel="2"><?php echo $this->_var['LANG']['AFTER_BUY']; ?></a></span>
	</div>															
	<?php 
$k = array (
  'name' => 'load_comment_list',
);
echo $k['name']();
?>								
	<div class="goods_comment_box">
		<?php echo $this->fetch('inc/inc_goods_comment.html'); ?>
	</div>