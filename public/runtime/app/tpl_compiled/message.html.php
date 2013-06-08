<?php echo $this->fetch('inc/header.html'); ?> 
<div id="bdw" class="bdw">
	<div id="bd" class="cf">
		<div id="deal-buy">
			<div id="content" style="overflow:hidden;">	
			<?php if ($this->_var['deal']): ?>
			<?php echo $this->fetch('inc/share.html'); ?> 
			
			
			<div class="cf" id="deal-intro">
					<div style="height: 100px;">
						<div class="deal-price-tag"></div>
							<p class="deal-price">
								<strong><?php 
$k = array (
  'name' => 'format_price',
  'value' => $this->_var['deal']['current_price'],
);
echo $k['name']($k['value']);
?></strong>
								<span>
									<a href="javascript:void(0);" onclick="add_cart(<?php echo $this->_var['deal']['id']; ?>)">
											<?php if ($this->_var['deal']['buy_type'] == 0): ?>
												<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-buy.gif">
											<?php endif; ?>
											<?php if ($this->_var['deal']['buy_type'] == 2): ?>
												<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-order.gif">
											<?php endif; ?>
											<?php if ($this->_var['deal']['buy_type'] == 3): ?>
												<img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/button-deal-second.gif">
											<?php endif; ?>
									</a>
								</span>							
							</p>
							<span title="<?php echo $this->_var['deal']['name']; ?>" class="comment_goods_name"><?php echo $this->_var['deal']['name']; ?></span>
					</div>
				</div>
						
			<div class="blank"></div>
			<?php endif; ?>
			
			<?php if ($this->_var['message_type_list']): ?>
			<div class="dashboard cf" id="dashboard">
					<ul>
						<?php $_from = $this->_var['message_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'type_item');if (count($_from)):
    foreach ($_from AS $this->_var['type_item']):
?>
						<li <?php if ($this->_var['type_item']['current'] == 1): ?>class="current"<?php endif; ?>><a href="<?PHP echo url("tuan","message#".$this->_var['type_item']['type_name']);?>"><?php echo $this->_var['type_item']['show_name']; ?></a>
						<span></span>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>							
					</ul>
			</div>
			<?php endif; ?>
			
			<?php echo $this->fetch('inc/tuan_message_form.html'); ?>			
			</div>
			<div <?php if ($this->_var['message_type_list'] || $this->_var['deal']): ?>style="padding-top:34px;"<?php endif; ?>>
			<?php echo $this->fetch('inc/side.html'); ?> 
			</div>
	</div>
	<!-- bd end -->
</div></div>
<?php echo $this->fetch('inc/footer.html'); ?>