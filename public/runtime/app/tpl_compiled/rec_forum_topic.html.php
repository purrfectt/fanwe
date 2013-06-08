<div class="rec_forum_topic">
	<div class="rec_image_topic" id="rec_topic">
		<div class="img_topic_tab">
		<?php $_from = $this->_var['rec_topic_list']['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
		<div class="rec_image_topic_item" style="display:none;" rel="<?php echo intval($this->_var['key'])+1; ?>" >
			<div>
				<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank">
				<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['images']['0']['o_path'],
  'w' => '340',
  'h' => '185',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
				</a>
			</div>
			<div class="topic_title"><a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '20',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
			<div class="topic_group_title"><a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank"><?php echo $this->_var['topic']['group_info']['name']; ?></a></div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="blank1"></div>
		<div class="tr rec_img_count">
		<?php $_from = $this->_var['rec_topic_list']['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
		<span class="img_ico" rel="<?php echo intval($this->_var['key'])+1; ?>"><?php echo intval($this->_var['key'])+1; ?></span>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="blank1"></div>
	</div>
	
	<div class="rec_list_topic">
		<?php $_from = $this->_var['rec_topic_list']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
			<div class="rec_list_topic_item" <?php if ($this->_var['key'] % 2 == 1): ?>style="margin-left:10px;"<?php endif; ?>>
				<?php if ($this->_var['key'] < 2): ?>
				<div class="f_l">
						<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank">
						<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['group_info']['icon'],
  'w' => '80',
  'h' => '80',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
						</a>
					</div>
					<div class="f_l" style="padding-left:10px;">
						<div class="list_topic_title"><a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
						<div class="list_topic_group_title"><a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['group_info']['name'],
  'b' => '0',
  'e' => '15',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
						<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['v']);
?>
					</div>
					
				
				<?php else: ?>
					<div class="f_l topic_user_icon">
						<?php 
$k = array (
  'name' => 'show_avatar',
  'v' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['v']);
?>
					</div>
					<div class="f_l topic_info_row">
						<div class="rec_row_topic_title"><a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '16',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
						<div class="rec_row_topic_group_title"><a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank"><?php echo $this->_var['topic']['group_info']['name']; ?></a></div>
					</div>
				<?php endif; ?>
				<div class="blank5"></div>
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<div class="blank"></div>