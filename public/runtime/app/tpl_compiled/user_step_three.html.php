<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="inc">
	<?php echo $this->fetch('inc/step_nav.html'); ?>
	<div class="step-inc-main clearfix">
		<div class="step-user-follow-tip">
			<?php echo $this->_var['LANG']['STEP_USER_FOLLOW_TIP']; ?>
		</div>
		<form method="post" action="<?php
echo parse_url_tag("u:shop|user#stepsave|"."".""); 
?>">
		<div class="step-follow-list clearfix">
			<ul>
				<?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ulist');if (count($_from)):
    foreach ($_from AS $this->_var['ulist']):
?>
					<li class="selected" dataid="<?php echo $this->_var['ulist']['id']; ?>">
						<div class="avatar">
							<img src="<?php 
$k = array (
  'name' => 'get_user_avatar',
  'uid' => $this->_var['ulist']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>" />
							<div class="select"></div>
						</div>
						<div class="name">
							<?php echo $this->_var['ulist']['user_name']; ?>
						</div>
						<div class="region">
							<?php if ($this->_var['ulist']['province']): ?>
							<?php echo $this->_var['ulist']['province']; ?>
							<?php endif; ?>
							<?php if ($this->_var['ulist']['city']): ?>
							<br /><?php echo $this->_var['ulist']['city']; ?>
							<?php endif; ?>
						</div>
					</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
		<div class="blank10"></div>
		<div class="blank10"></div>
		<div class="act" style="margin-left:0;padding-left:0">
			<input type="hidden" name="user_ids" id="user_ids" value="0<?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ulist');if (count($_from)):
    foreach ($_from AS $this->_var['ulist']):
?>,<?php echo $this->_var['ulist']['id']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>" />
			<input type="submit" class="ok-over-btn f_l" id="settings-submit" name="commit" value="<?php echo $this->_var['LANG']['MODIFY']; ?>">
		</div>
		<div class="clear"></div>
		</form>
	</div>
</div>
<script type="text/javascript">
	
	$(".step-follow-list li").click(function(){
		if($(this).hasClass("selected"))
			$(this).removeClass("selected");
		else{
			$(this).addClass("selected");
		}
		user_ids();
	});
	function user_ids(){
		var ids = 0;
		$(".step-follow-list li").each(function(){
			if($(this).hasClass("selected")){
				ids += ","+$(this).attr("dataid"); 
			}
		});
		$("#user_ids").val(ids);
	}
</script>
<?php echo $this->fetch('inc/footer.html'); ?>