<div class="user-step-top">
	<h3><?php echo sprintf($this->_var['LANG']['STEP_HEAD_TIP'],$this->_var['user_info']['user_name'],app_conf('SHOP_TITLE')); ?></h3>
	<div class="tip"><?php echo sprintf($this->_var['LANG']['STEP_ALL_TIP'],app_conf('SHOP_TITLE')); ?></div>
</div>
<div class="user-step-nav clearfix">
	<div class="step <?php if ($_REQUEST['act'] == 'stepone'): ?>cur <?php endif; ?>f_l">
		<b>1</b>
		<span><?php echo $this->_var['LANG']['STEP_ONE']; ?></span>
	</div>
	<div class="step <?php if ($_REQUEST['act'] == 'steptwo'): ?>cur <?php endif; ?>f_l">
		<b>2</b>
		<span><?php echo $this->_var['LANG']['STEP_TWO']; ?></span>
	</div>
	<div class="step <?php if ($_REQUEST['act'] == 'stepthree'): ?>cur <?php endif; ?>f_l">
		<b>3</b>
		<span><?php echo $this->_var['LANG']['STEP_THREE']; ?></span>
	</div>
</div>
