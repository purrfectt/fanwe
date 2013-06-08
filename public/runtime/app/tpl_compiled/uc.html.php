<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="short_uc f_l">
	<div>
		<div class="f_l" style="width:50px;">
		<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['user_info']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
		</div>
		<div class="f_r" style="width:65px;">
				<?php echo $this->_var['user_info']['user_name']; ?>	
				<div class="blank5"></div>		
				<?php if ($this->_var['user_info']['is_merchant']): ?>			
				<span class="is_merchant"  title="认证商家"></span>
				<?php endif; ?>
				<?php if ($this->_var['user_info']['is_daren']): ?>			
				<span class="is_daren"  title="<?php echo $this->_var['user_info']['daren_title']; ?>"></span>			
				<?php endif; ?>			
		</div>
		<div class="blank5"></div>
		<div class="tc my_counter">
			<a href="<?php
echo parse_url_tag("u:shop|uc_center#fans|"."".""); 
?>" class="count_big"><?php echo $this->_var['user_info']['focused_count']; ?></a><br />
			<?php echo $this->_var['LANG']['FANS']; ?>
		</div>
		<div class="tc my_counter">
			<a href="<?php
echo parse_url_tag("u:shop|uc_center#focus|"."".""); 
?>" class="count_big"><?php echo $this->_var['user_info']['focus_count']; ?></a><br />
			<?php echo $this->_var['LANG']['FOCUS']; ?>
		</div>
		<div class="tc my_counter">
			<a href="<?php
echo parse_url_tag("u:shop|uc_center#myfav|"."".""); 
?>" class="count_big"><?php echo $this->_var['user_info']['fav_count']; ?></a><br />
			<?php echo $this->_var['LANG']['FAV']; ?>
		</div>
							
	</div>
	<div class="blank"></div>
	<?php if (app_conf ( "USER_LOGIN_MONEY" ) > 0 || app_conf ( "USER_LOGIN_SCORE" ) > 0 || app_conf ( "USER_LOGIN_POINT" ) > 0): ?>
	<div class="user_sign tc">
		<?php if ($this->_var['t_sign_data']): ?>
			您在今天<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['t_sign_data']['sign_date'],
  'f' => 'H:i:s',
);
echo $k['name']($k['v'],$k['f']);
?>已经签到过了
		<?php else: ?>
			<?php if ($this->_var['y_sign_data']): ?>
				您已经连续签到<?php echo $this->_var['sign_day']; ?>天<br />继续努力
				<div class="blank"></div>
				<a href="javascript:void(0);" onclick="user_sign();" title="<?php echo $this->_var['sign_tip']; ?>" class="sign_in_button" style="display:inline-block; line-height:28px; text-decoration:none; color:#fff;"></a>
			<?php else: ?>
				您昨天忘记签到了<br />重头来吧。
				<div class="blank"></div>
				<a href="javascript:void(0);" onclick="user_sign();"  title="<?php echo $this->_var['sign_tip']; ?>" class="sign_in_button" style="display:inline-block; line-height:28px; text-decoration:none; color:#fff;"></a>
			<?php endif; ?>
		<?php endif; ?>
		<div class="blank"></div>
	</div>
	<?php endif; ?>
	<?php echo $this->fetch('inc/uc/uc_cate.html'); ?>
</div>
<div class="<?php if ($this->_var['has_right'] == 1): ?>middle_uc<?php else: ?>long_uc<?php endif; ?> f_l">
	<?php echo $this->fetch($this->_var['inc_file']); ?>
</div>

<?php if ($this->_var['has_right'] == 1): ?>
<div class="right_uc f_r">
	<?php echo $this->fetch('inc/uc/uc_right.html'); ?>
</div>
<?php endif; ?>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>