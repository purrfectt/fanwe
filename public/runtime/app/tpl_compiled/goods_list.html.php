<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="short f_l">
	<?php echo $this->fetch('inc/cate_tree.html'); ?>
	<div class="blank"></div>
		<?php 
$k = array (
  'name' => 'load_sale_list',
  'cate_id' => $this->_var['cate_id'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> 
</div>
<div class="long f_r">
	<?php 
$k = array (
  'name' => 'load_filter_goods_list',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> 
</div>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>