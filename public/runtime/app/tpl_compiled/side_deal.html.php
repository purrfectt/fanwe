	<div class="sbox side-goods-tip">
	<div class="sbox-top"><h2><?php echo $this->_var['LANG']['SIDE_DEAL_LIST']; ?></h2></div>
	<div class="sbox-content">
		<ul class="clearfix">
			<?php $_from = $this->_var['side_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'deal_item');$this->_foreach['deal_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_item']['total'] > 0):
    foreach ($_from AS $this->_var['deal_item']):
        $this->_foreach['deal_item']['iteration']++;
?>
			<li <?php if (($this->_foreach['deal_item']['iteration'] == $this->_foreach['deal_item']['total'])): ?>style="margin-bottom:0;border:0"<?php endif; ?>>
				<a href="<?php echo $this->_var['deal_item']['url']; ?>" class="img" title="<?php echo $this->_var['deal_item']['name']; ?>">
				<img alt="<?php echo $this->_var['deal_item']['name']; ?>" src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['deal_item']['icon'],
  'w' => '220',
  'h' => '0',
  'g' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" class="lazy" width=220 />
				</a>
				<a href="<?php echo $this->_var['deal_item']['url']; ?>" class="title" title="<?php echo $this->_var['deal_item']['name']; ?>" style="font-size:12px; font-weight:normal;">
				<?php 
$k = array (
  'name' => 'msubstr',
  'value' => $this->_var['deal_item']['name'],
  'b' => '0',
  'l' => '33',
);
echo $k['name']($k['value'],$k['b'],$k['l']);
?>			
				</a>
				<br />
				<div class="fl" style="font-size:12px; color:#f30; font-weight:bolder;">
				<?php if ($this->_var['deal']['buy_type'] == 0): ?><?php echo $this->_var['LANG']['CURRENT_PRICE']; ?><?php endif; ?><?php if ($this->_var['deal']['buy_type'] == 2): ?><?php echo $this->_var['LANG']['ORDER_PRICE']; ?><?php endif; ?><?php if ($this->_var['deal']['buy_type'] == 3): ?><?php echo $this->_var['LANG']['SECOND_PRICE']; ?><?php endif; ?>:<?php 
$k = array (
  'name' => 'format_price',
  'value' => $this->_var['deal_item']['current_price'],
);
echo $k['name']($k['value']);
?>
				</div>
				<div class="fr" style="font-size:12px;">
				<?php 
$k = array (
  'name' => 'sprintf',
  'value' => $this->_var['LANG']['SUCCESS_BUY_COUNT'],
  'p' => $this->_var['deal_item']['buy_count'],
);
echo $k['name']($k['value'],$k['p']);
?>
				</div>
				
				<div class="blank1"></div>
			</li>	
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</ul>
	</div>
	<div class="sbox-bottom"></div>
</div>