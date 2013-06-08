<?php echo $this->fetch('inc/header.html'); ?> 
<?php if ($this->_var['stay'] == 0): ?>
<meta http-equiv="refresh" content="3;URL=<?php echo $this->_var['jump']; ?>" />
<?php endif; ?>
<div class="msg_box error_box">
							<h2>
								<div class="icon"><i></i></div>
								<span class="tip"><?php echo $this->_var['LANG']['ERROR_TITLE']; ?></span>
							</h2>
							
							<div class="notice">
								<p>
								<?php echo $this->_var['msg']; ?>	
								</p>
								<p>
									<?php if ($this->_var['stay'] == 0): ?>
									<?php 
$k = array (
  'name' => 'sprintf',
  'format' => $this->_var['LANG']['JUMP_TIP'],
  'value' => $this->_var['jump'],
);
echo $k['name']($k['format'],$k['value']);
?>
									<?php endif; ?>
								</p>
							</div>

</div>	
</div>						
<div style="background:#f2f2f2; padding:30px;">
	<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_FOOTER',
);
echo $k['name']($k['value']);
?> 
</div>