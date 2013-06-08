<?php if ($this->_var['user_info']): ?>	
<form method="post" onsubmit="return check_content(this);" action="<?php
echo parse_url_tag("u:shop|topic#reply|"."".""); 
?>" name="message" >
																
									<span id="reply_topic"></span>
									<div class="blank"></div>
									<?php 
$k = array (
  'name' => 'show_reply_form',
  'text_name' => 'content',
  'width' => '720px',
  'height' => '50px',
  'id' => 'reply_text_box',
  'show_btn' => '1',
  'js_func' => 'ajax_submit_reply_form_topic_page',
);
echo $k['name']($k['text_name'],$k['width'],$k['height'],$k['id'],$k['show_btn'],$k['js_func']);
?>						
									<input type="hidden" name="topic_id" value="<?php echo $this->_var['topic_id']; ?>" />
									<input type="hidden" name="reply_id" value="0" />				
									<div class="blank"></div>
								
</form>
<!--end reply_form-->
<?php endif; ?>
<?php if ($this->_var['reply_list']): ?>
<div class="blank"></div>
<script type="text/javascript">
	function set_reply(id,user_name)
	{
		$("form[name='message']").find("input[name='reply_id']").val(id);
		if(user_name!='')
		$("textarea[name='content']").val(LANG.REPLY+"@"+user_name+":");											
	}
</script>
<?php 
$k = array (
  'name' => 'load_reply_list',
);
echo $k['name']();
?>
<?php endif; ?>