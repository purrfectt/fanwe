<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>

	
	<div class="inc cart">
		<div class="inc_top"><?php echo $this->_var['page_title']; ?></div>
		<div class="inc_main pd10">
			<?php 
$k = array (
  'name' => 'load_cart_index',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
		</div><!--end inc_main-->		
		<div class="inc_foot"></div>
	</div>
	

<?php echo $this->fetch('inc/footer.html'); ?>