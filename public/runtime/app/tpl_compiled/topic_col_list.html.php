<div>
	<?php $_from = $this->_var['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'col_list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['col_list']):
?>
	<div class="feed_col_<?php echo $this->_var['key']; ?> feed_col">
		
		<?php $_from = $this->_var['col_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'message_item');if (count($_from)):
    foreach ($_from AS $this->_var['message_item']):
?>
		<div>
		<div class="col_msg_item">
		<?php if ($this->_var['message_item']['title']): ?>
			<?php if ($this->_var['message_item']['rel_url'] != ""): ?>
			<a href="<?php echo $this->_var['message_item']['rel_url']; ?>" class="topic_title_link"><?php echo $this->_var['message_item']['title']; ?></a>
			<?php else: ?>
			<span class="topic_title_row"><?php echo $this->_var['message_item']['title']; ?></span>
			<?php endif; ?>
			<div class="blank"></div>
		<?php endif; ?>
		<?php $_from = $this->_var['message_item']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?>
		<?php if ($this->_var['key'] < 3): ?>
		<?php if ($this->_var['key'] == 0): ?>
		<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '204',
);
echo $k['name']($k['v'],$k['w']);
?>" width="204" class="lazy" /></a>
		<div class="blank5"></div>
		<?php else: ?>			
			<?php if ($this->_var['message_item']['images_count'] == 2): ?>			
			<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '204',
);
echo $k['name']($k['v'],$k['w']);
?>" width="204" class="lazy" /></a>
			<?php else: ?>			
			<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '100',
  'h' => '100',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width="100" <?php if ($this->_var['key'] == 1): ?>class="f_l"<?php else: ?>class="f_r"<?php endif; ?> class="lazy" /></a>
			<?php endif; ?>
		<?php endif; ?>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		<div class="blank5"></div>
		<?php echo $this->_var['message_item']['short_content']; ?>
		<div class="blank5"></div>
		<?php if ($this->_var['message_item']['id'] != $this->_var['message_item']['origin_id']): ?>
			<?php if ($this->_var['message_item']['origin']): ?>
				<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['origin']['id']."".""); 
?>"  class="origin_topic_title"><?php echo $this->_var['LANG']['ORIGIN_TOPIC']; ?></a>
				<div class="blank5"></div>
				<?php $_from = $this->_var['message_item']['origin']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'origin_img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['origin_img']):
?>
				<?php if ($this->_var['key'] < 3): ?>
				<?php if ($this->_var['key'] == 0): ?>
				<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['origin']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['origin_img']['o_path'],
  'w' => '204',
);
echo $k['name']($k['v'],$k['w']);
?>" width="204" class="lazy" /></a>
				<div class="blank5"></div>	
				<?php else: ?>							
					<?php if ($this->_var['message_item']['origin']['images_count'] == 2): ?>
					<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['origin']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['origin_img']['o_path'],
  'w' => '204',
);
echo $k['name']($k['v'],$k['w']);
?>" width="204" class="lazy" /></a>
					<?php else: ?>
					<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['origin']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['origin_img']['o_path'],
  'w' => '100',
  'h' => '100',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width="100" <?php if ($this->_var['key'] == 1): ?>class="f_l"<?php else: ?>class="f_r"<?php endif; ?> class="lazy" /></a>
					<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div class="blank5"></div>
				<?php echo $this->_var['message_item']['origin']['short_content']; ?>
				<?php else: ?>
				<div class="origin_delete"><?php echo $this->_var['LANG']['ORIGIN_DELETE']; ?></div>
			<?php endif; ?>
		<?php endif; ?>
		<div class="blank"></div>	
		<?php if ($this->_var['message_item']['user_id'] == $this->_var['user_info']['id']): ?>
		<div class="f_l">
			<a href="javascript:void(0);" onclick="delete_topic(<?php echo $this->_var['message_item']['id']; ?>,$(this).parent().parent().parent());"><?php echo $this->_var['LANG']['DELETE']; ?></a>
		</div>		
		<?php elseif ($this->_var['user_auth'] [ 'topic' ] [ 'del' ]): ?>
		<div class="f_l">
			<a href="javascript:void(0);" onclick="op_topic_del(<?php echo $this->_var['message_item']['id']; ?>)"><?php echo $this->_var['LANG']['DELETE']; ?></a>
		</div>	
		<?php elseif ($this->_var['user_auth'] [ 'group' ] [ 'del' ] [ $this->_var['message_item'] [ 'group_id' ] ]): ?>
			<a href="javascript:void(0);" onclick="op_group_del(<?php echo $this->_var['message_item']['id']; ?>)"><?php echo $this->_var['LANG']['DELETE']; ?></a>
		<?php endif; ?>
		<div class="f_r">			
			<a href="javascript:void(0);" onclick="reply_topic(<?php echo $this->_var['message_item']['id']; ?>,this);"><?php echo $this->_var['LANG']['TOPIC_ITEM_REPLY']; ?> (<span id="topic_reply_<?php echo $this->_var['message_item']['id']; ?>"><?php echo $this->_var['message_item']['reply_count']; ?></span>) </a>
			<a href="javascript:void(0);" onclick="fav_topic(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['FAV_TOPIC']; ?> (<span id="topic_fav_<?php echo $this->_var['message_item']['id']; ?>"><?php echo $this->_var['message_item']['fav_count']; ?></span>) </a>
			<a href="javascript:void(0);" onclick="relay_topic(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['RELAY_TOPIC']; ?> (<span id="topic_relay_<?php echo $this->_var['message_item']['id']; ?>"><?php echo $this->_var['message_item']['relay_count']; ?></span>)</a>
			<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>"><?php echo $this->_var['LANG']['VIEW_DETAIL']; ?></a>
		</div>
		<div class="blank1"></div>	
		<div class="col_item_reply_box"></div>
		<div class="blank5"></div>	
		</div>
		<div class="topic_user_info" style="background:#f0efef; border-top:#e3e3e3 solid 1px; padding:5px;">
			<div class="blank5"></div>	
			<div class="avatar_small_30 f_l">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['message_item']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>			
			</div>		
			<div class="topic_date_time f_l">		
				<?php if ($this->_var['message_item']['fav_id'] > 0): ?>
				<strong>
					<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
  'show_tag' => '0',
);
echo $k['name']($k['value'],$k['show_tag']);
?> 
				</strong>
				<span style="font-size:12px; color:#999;">
				<?php echo sprintf($GLOBALS['lang']['USER_FAV_THIS'],pass_date($this->_var['message_item']['create_time']));?>
				</span>
				<?php elseif ($this->_var['message_item']['relay_id'] > 0): ?>	
				<strong>
					<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
  'show_tag' => '0',
);
echo $k['name']($k['value'],$k['show_tag']);
?> 
				</strong>
				<span style="font-size:12px; color:#999;">
				<?php echo sprintf($GLOBALS['lang']['USER_RELAY_THIS'],pass_date($this->_var['message_item']['create_time']));?>
				</span>
				<?php else: ?>							
				<strong>
					<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
  'show_tag' => '0',
);
echo $k['name']($k['value'],$k['show_tag']);
?> 
				</strong>
				<span style="font-size:12px; color:#999;">
				<?php echo sprintf($GLOBALS['lang']['SUPPLIER_COMMENT_SAY'],pass_date($this->_var['message_item']['create_time']));?>
				</span>
				<?php endif; ?>
			</div>
			<div class="blank1"></div>
		</div><!--end topic_user_info-->
		<div class="blank"></div>
		</div>		
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
	</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

<div class="blank"></div>							
<div class="pages"><?php echo $this->_var['pages']; ?></div>	

