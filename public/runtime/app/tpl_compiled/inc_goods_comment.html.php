<?php if ($this->_var['user_info']): ?>
<div class="goods_comment_form">
<form name="comment" id="consult-add-form" action="<?php echo $this->_var['APP_ROOT']; ?>/shop.php" method="post"  onsubmit="return check_content(this);" >
<span id="comment_box">
<?php if ($this->_var['is_buy'] == 1): ?>
<?php echo $this->_var['LANG']['COMMENT']; ?>：
<?php endif; ?>
<span id="comment_input">
	<?php if ($this->_var['is_buy'] == 0): ?>
	<input type="hidden" name="point" value="0" />
	<?php else: ?>
	<select name="point" ><option value="5"><?php echo $this->_var['LANG']['COMMENT5']; ?></option><option value="3"><?php echo $this->_var['LANG']['COMMENT3']; ?></option><option value="1"><?php echo $this->_var['LANG']['COMMENT1']; ?></option></select>
	<?php echo $this->_var['LANG']['BUY_COMMENT_TIP']; ?>
	<?php endif; ?>
</span>
</span>

<div class="blank"></div>
<?php if ($this->_var['is_buy'] == 1): ?>
<?php 
$k = array (
  'name' => 'show_topic_form',
  'text_name' => 'content',
  'width' => '700px',
);
echo $k['name']($k['text_name'],$k['width']);
?>	
<?php else: ?>
<div class="topic_pub_form">
<textarea class="f-textarea" name="content" style="width:700px;height:80px;"></textarea>
</div>
<?php endif; ?>
<div class="blank"></div>
<?php if (app_conf ( "VERIFY_IMAGE" ) == 1): ?>
	<div class="verify_row">								
	<input type="text" value="" class="f-input" name="verify" />	
	<img src="<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand=<?php 
$k = array (
  'name' => 'rand',
);
echo $k['name']();
?>" onclick="this.src='<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand='+ Math.random();" title="看不清楚？换一张" />			
	</div>
	<div class="blank"></div>
<?php endif; ?>
<input type="hidden" value="1" name="ajax" />
<input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" name="rel_id" />
<input type="hidden" value="deal" name="rel_table" />
<input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" name="goods_id" />
<input type="hidden" value="<?php echo $this->_var['is_buy']; ?>" name="is_buy" />
<input type="hidden" value="comment" name="ctl" />
<input type="hidden" value="add" name="act" />
<input type="submit" value="<?php echo $this->_var['LANG']['OK_POST']; ?>" name="commit" class="msg_btn" />
</form>
</div>
<?php else: ?>
<?php echo $this->_var['message_login_tip']; ?>			
<?php endif; ?>