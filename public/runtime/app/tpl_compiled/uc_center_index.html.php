<div class="ucenter_topic_form">
<form method="post" onsubmit="return check_content(this);" action="<?php
echo parse_url_tag("u:shop|uc_topic#add|"."".""); 
?>" name="message">
	<?php if ($this->_var['user_info']): ?>	

				<?php 
$k = array (
  'name' => 'show_topic_form',
  'text_name' => 'content',
  'width' => '625px',
  'height' => '50px',
  'is_img' => '1',
  'is_topic' => '1',
  'is_event' => '1',
  'id' => 'main_topic_form_textarea',
  'show_btn' => '1',
  'show_tag' => '1',
);
echo $k['name']($k['text_name'],$k['width'],$k['height'],$k['is_img'],$k['is_topic'],$k['is_event'],$k['id'],$k['show_btn'],$k['show_tag']);
?>		
									
	<?php else: ?>
				<?php echo $this->_var['message_login_tip']; ?>
	<?php endif; ?>	
	<input type="hidden" name="ajax_url" value="<?php echo url("shop","uc_center#".$this->_var['ACTION_NAME']);?>" />						
</form>
</div>
<div class="blank"></div>	
<ul class="uc_topic_nav">
	<li <?php if ($this->_var['ACTION_NAME'] == 'index'): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|uc_center#index|"."".""); 
?>"><?php echo $this->_var['LANG']['UC_CENTER_INDEX']; ?></a></li>
	<li <?php if ($this->_var['ACTION_NAME'] == 'mytopic'): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|uc_center#mytopic|"."".""); 
?>"><?php echo $this->_var['LANG']['UC_CENTER_MYTOPIC']; ?></a></li>
	<li <?php if ($this->_var['ACTION_NAME'] == 'myfav'): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|uc_center#myfav|"."".""); 
?>"><?php echo $this->_var['LANG']['UC_CENTER_MYFAV']; ?></a></li>
	<li <?php if ($this->_var['ACTION_NAME'] == 'mycomment'): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|uc_center#mycomment|"."".""); 
?>"><?php echo $this->_var['LANG']['UC_CENTER_MYCOMMENT']; ?></a></li>
	<li <?php if ($this->_var['ACTION_NAME'] == 'atme'): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|uc_center#atme|"."".""); 
?>"><?php echo $this->_var['LANG']['UC_CENTER_ATME']; ?></a></li>
</ul>
<div class="blank"></div>	
<div id="col_list">
<?php echo $this->_var['list_html']; ?>
</div>

