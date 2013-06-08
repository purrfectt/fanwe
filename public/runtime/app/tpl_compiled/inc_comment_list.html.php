<?php 
$k = array (
  'name' => 'load_comment_list',
);
echo $k['name']();
?>	
<?php if ($this->_var['user_info']): ?>
<div class="goods_comment_form">
<form name="comment" id="consult-add-form" action="<?php echo $this->_var['APP_ROOT']; ?>/shop.php" method="post"  onsubmit="return check_content(this);" >
<span id="comment_box">
<?php if ($this->_var['is_buy'] == 1): ?>
<?php echo $this->_var['LANG']['COMMENT']; ?>：
<?php endif; ?>
<span id="comment_input">
<input type="hidden" name="point" value="0" />
</span>
</span>

<div class="blank"></div>
<?php if ($this->_var['is_image'] == 1): ?>
<?php 
$k = array (
  'name' => 'show_topic_form',
  'text_name' => 'content',
  'width' => $this->_var['width'],
  'height' => $this->_var['height'],
);
echo $k['name']($k['text_name'],$k['width'],$k['height']);
?>	
<?php else: ?> 
<textarea class="f-textarea pubform" name="content" style="width:<?php echo $this->_var['width']; ?>; height:<?php echo $this->_var['height']; ?>;" ></textarea>
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
<input type="hidden" value="<?php echo $this->_var['rel_id']; ?>" name="rel_id" />
<input type="hidden" value="<?php echo $this->_var['rel_table']; ?>" name="rel_table" />
<input type="hidden" value="<?php echo $this->_var['is_effect']; ?>" name="is_effect" />
<input type="hidden" value="comment" name="ctl" />
<input type="hidden" value="add" name="act" />
<input type="submit" value="<?php echo $this->_var['LANG']['OK_POST']; ?>" name="commit" class="msg_btn" />
</form>
</div>
<?php else: ?>
<?php echo $this->_var['message_login_tip']; ?>			
<?php endif; ?>