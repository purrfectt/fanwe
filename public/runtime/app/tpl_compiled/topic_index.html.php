<?php echo $this->fetch('inc/header.html'); ?> 
<?php if ($this->_var['group_info']): ?>
<?php echo $this->fetch('inc/group_title.html'); ?>
<?php endif; ?>
<div class="blank"></div>
<div class="long f_l">
<div class="message-list">
		<div class="message-row">
										<table class="msg_row">
											<tr>
												<td style="width:60px; text-align:left;">
													<div class="avatar_small">
													<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['message_item']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
													</div>													
												</td>
												<td>
													<div class="item">	
														<p class="f_l">															
																<?php if ($this->_var['message_item']['fav_id'] > 0): ?>
																	<strong>
																	<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
);
echo $k['name']($k['value']);
?> 
																	</strong>&nbsp;&nbsp;
																	<span style="font-size:12px; color:#999;">
																	<?php echo sprintf($GLOBALS['lang']['USER_FAV_THIS'],pass_date($this->_var['message_item']['create_time']));?>
																	</span>
																<?php elseif ($this->_var['message_item']['relay_id'] > 0): ?>	
																	<strong>
																	<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
);
echo $k['name']($k['value']);
?> 
																	</strong>&nbsp;&nbsp;
																	<span style="font-size:12px; color:#999;">
																	<?php echo sprintf($GLOBALS['lang']['USER_RELAY_THIS'],pass_date($this->_var['message_item']['create_time']));?>
																	</span>
																<?php else: ?>							
																	<strong>
																	<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
);
echo $k['name']($k['value']);
?> 
																	</strong>&nbsp;&nbsp;
																	<span style="font-size:12px; color:#999;">
																	<?php echo sprintf($GLOBALS['lang']['SUPPLIER_COMMENT_SAY'],pass_date($this->_var['message_item']['create_time']));?>
																	</span>
																<?php endif; ?>
																
																
																
															</p>
															<p class="f_r" style="color:#ccc;">
															来自：
															<?php if ($this->_var['message_item']['source_type'] == 0): ?>
															<?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'SHOP_TITLE',
);
echo $k['name']($k['v']);
?><?php echo $this->_var['message_item']['source_name']; ?>
															<?php else: ?>
																<?php if ($this->_var['message_item']['source_url'] != ''): ?>
																<a href="<?php echo $this->_var['message_item']['source_url']; ?>" target="_blank" title="<?php echo $this->_var['message_item']['source_name']; ?>"><?php echo $this->_var['message_item']['source_name']; ?></a>
																<?php else: ?>
																<?php echo $this->_var['message_item']['source_name']; ?>
																<?php endif; ?>
															<?php endif; ?>
															
															</p>		
															<div class="blank5"></div>											
															<span class="topic_title_row"><?php echo $this->_var['message_item']['forum_title']; ?><?php if ($this->_var['message_item']['group_id'] > 0): ?>
															&nbsp;&nbsp;
															<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['message_item']['group_id']."".""); 
?>" title="<?php echo $this->_var['message_item']['group_name']; ?>" style="font-weight:normal; color:#999;">[<?php echo $this->_var['message_item']['group_name']; ?>]</a><?php endif; ?></span>
															<div class="blank5"></div>
															<?php if ($this->_var['message_item']['rel_url'] != ""): ?>
															<a href="<?php echo $this->_var['message_item']['rel_url']; ?>" class="topic_title_link"><?php echo $this->_var['message_item']['title']; ?></a>
															<?php else: ?>
															<span class="topic_title_row"><?php echo $this->_var['message_item']['title']; ?></span>
															<?php endif; ?>
															<div class="blank"></div>
															<div class="text">							
																<span class="quote_begin"></span><?php echo $this->_var['message_item']['content']; ?><span class="quote_end"></span>
															</div>
															<div class="blank"></div>
															<?php $_from = $this->_var['message_item']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?>
															<span class='toogle_topic_image_box'><a href="<?php echo $this->_var['img']['o_path']; ?>" target="_blank" title="查看原图"><img  src='<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '525',
  'h' => '0',
  'g' => '0',
  'p' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g'],$k['p']);
?>'  class="lazy" /></a></span>
															<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
															
										
															
															<?php if ($this->_var['message_item']['id'] != $this->_var['message_item']['origin_id']): ?>
																<?php if ($this->_var['message_item']['origin']): ?>
																	<div class="topic_origin">
																		
																		<span class="avatar_small">
																		<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['message_item']['origin']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
																		</span>
																		
																		<?php if ($this->_var['message_item']['origin']['fav_id'] > 0): ?>
																			<strong>
																			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['origin']['user_id'],
);
echo $k['name']($k['value']);
?> 
																			</strong>&nbsp;&nbsp;
																			<span style="font-size:12px; color:#999;">
																			<?php echo sprintf($GLOBALS['lang']['USER_FAV_THIS'],pass_date($this->_var['message_item']['origin']['create_time']));?>
																			</span>
																		<?php elseif ($this->_var['message_item']['origin']['relay_id'] > 0): ?>	
																			<strong>
																			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['origin']['user_id'],
);
echo $k['name']($k['value']);
?> 
																			</strong>&nbsp;&nbsp;
																			<span style="font-size:12px; color:#999;">
																			<?php echo sprintf($GLOBALS['lang']['USER_RELAY_THIS'],pass_date($this->_var['message_item']['origin']['create_time']));?>
																			</span>
																		<?php else: ?>							
																			<strong>
																			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['origin']['user_id'],
);
echo $k['name']($k['value']);
?> 
																			</strong>&nbsp;&nbsp;
																			<span style="font-size:12px; color:#999;">
																			<?php echo sprintf($GLOBALS['lang']['SUPPLIER_COMMENT_SAY'],pass_date($this->_var['message_item']['origin']['create_time']));?>
																			</span>
																		<?php endif; ?>
																		
																		<a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['origin']['id']."".""); 
?>"  class="origin_topic_title"><?php echo $this->_var['LANG']['ORIGIN_TOPIC']; ?></a>
																		<div class="blank5"></div>
																		<?php echo $this->_var['message_item']['origin']['content']; ?>
																		<div class="blank5"></div>
																		<?php $_from = $this->_var['message_item']['origin']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?>
																		<span class='toogle_topic_image_box'><a href="<?php echo $this->_var['img']['o_path']; ?>" target="_blank" title="查看原图"><img  src='<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '525',
  'h' => '0',
  'g' => '0',
  'p' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g'],$k['p']);
?>' /></a></span>
																		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
																		
																	</div>
																
																<?php else: ?>
																<div class="origin_delete">
																	<?php echo $this->_var['LANG']['ORIGIN_DELETE']; ?>
																</div>
																<?php endif; ?>
															<?php endif; ?>
																		
													</div>
													
												</td>
											</tr>
										</table>
											
										
											
										<div class="blank"></div>
										<?php if ($this->_var['message_item']['tags']): ?>	
										<div class="f_l">
											<span class="msg_row_ico_tag">
											<?php $_from = $this->_var['message_item']['tags_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
											<a href="<?php
echo parse_url_tag("u:shop|topic#search|"."keyword=".$this->_var['tag']."".""); 
?>" title="<?php echo $this->_var['tag']; ?>">
											<?php 
												if(is_array($this->_var['kws_div'])&&in_array($this->_var['tag'],$this->_var['kws_div']))
												{
													echo "<span class='result_match'>".$this->_var['tag']."</span>";
												}
												else
												{
													echo $this->_var['tag'];
												}
											?>
											</a>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</span>
										</div>
										<?php endif; ?>										
										<div class="f_r">																		
											<?php if ($this->_var['message_item']['user_id'] == $this->_var['user_info']['id']): ?>		
											<span class="msg_row_ico_del">								
											<a href="javascript:void(0);" onclick="delete_topic(<?php echo $this->_var['message_item']['id']; ?>,$(this).parent().parent().parent());"><?php echo $this->_var['LANG']['DELETE']; ?></a>
											</span>
											<?php endif; ?>
												
											
											
											<span class="msg_row_ico_reply"><a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>#reply" onclick="load_topic_replys('<?php
echo parse_url_tag("u:shop|ajax#load_topic_replys|"."id=".$this->_var['message_item']['id']."".""); 
?>',true);"><?php echo $this->_var['LANG']['TOPIC_COMMENT']; ?> (<span id="reply_count"><?php echo $this->_var['message_item']['reply_count']; ?></span>)</a></span>
											<span class="msg_row_ico_fav"><a href="javascript:void(0);" onclick="fav_topic(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['FAV_TOPIC']; ?> (<?php echo $this->_var['message_item']['fav_count']; ?>) </a></span>
											<span class="msg_row_ico_relay"><a href="javascript:void(0);" onclick="relay_topic(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['RELAY_TOPIC']; ?> (<?php echo $this->_var['message_item']['relay_count']; ?>)</a></span>
										</div>
										<div class="blank1"></div>	
										<div class="tr">
											<?php if ($this->_var['message_item'] [ 'group_id' ] > 0): ?>
												<?php if ($this->_var['user_auth'] [ 'group' ] [ 'setbest' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'setbest' ] [ $this->_var['message_item'] [ 'group_id' ] ]): ?>
												<span class="">								
												<a href="javascript:void(0);" onclick="op_group_setbest(<?php echo $this->_var['message_item']['id']; ?>);">推荐</a>
												</span>
												<?php endif; ?>
												
												
												<?php if ($this->_var['user_auth'] [ 'group' ] [ 'settop' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'settop' ] [ $this->_var['message_item'] [ 'group_id' ] ]): ?>
												<span class="">								
												<a href="javascript:void(0);" onclick="op_group_settop(<?php echo $this->_var['message_item']['id']; ?>);">置顶</a>
												</span>
												<?php endif; ?>
												
												<?php if ($this->_var['user_auth'] [ 'topic' ] [ 'del' ]): ?>
												<span class="">								
												<a href="javascript:void(0);" onclick="op_topic_del(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['DELETE']; ?></a>
												</span>	
												<?php elseif ($this->_var['user_auth'] [ 'group' ] [ 'del' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'del' ] [ $this->_var['message_item'] [ 'group_id' ] ]): ?>
												<span class="">								
												<a href="javascript:void(0);" onclick="op_group_del(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['DELETE']; ?></a>
												</span>												
												<?php endif; ?>											
											<?php else: ?>
												<?php if ($this->_var['user_auth'] [ 'topic' ] [ 'del' ]): ?>
												<span class="">								
												<a href="javascript:void(0);" onclick="op_topic_del(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['DELETE']; ?></a>
												</span>	
												<?php endif; ?>
											<?php endif; ?>
										</div>
		</div>
</div><!--end message-list-->
<input type="hidden" value="<?php
echo parse_url_tag("u:shop|ajax#load_topic_replys|"."id=".$this->_var['message_item']['id']."".""); 
?>" name="load_url" id="load_url" />
<div class="blank"></div>
<div id="reply">
<div id="topic_page_reply">
<script type="text/javascript">
	load_topic_replys("<?php
echo parse_url_tag("u:shop|ajax#load_topic_replys|"."id=".$this->_var['message_item']['id']."".""); 
?>",false);
</script>
</div>
</div>

</div>
<div class="short f_r">
	<div class="inc">
		<div class="inc_main pd10">
			<div  class="avatar_small f_l">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['message_item']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class=" main_user_name f_l">
				<b><?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
);
echo $k['name']($k['value']);
?> </b>
				
				<div class="blank5"></div>
				<?php if ($this->_var['muser_info']['focused'] == 1): ?>
				<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['message_item']['user_id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
				<?php else: ?>
				<a class="add_focus" onclick="focus_user(<?php echo $this->_var['message_item']['user_id']; ?>,this);" href="javascript:;">关注TA</a>
				<?php endif; ?>
			</div>
			<div class="blank"></div>
			<div style="border-bottom:#e6e6e6 dotted 1px; height:1px; line-height:0px; font-size:0px;"></div>
			<div class="blank"></div>
			<div class="tc my_counter" style="width:50px; border-right:#e6e6e6 solid 1px;">
				<span class="count_big"><?php echo $this->_var['muser_info']['focused_count']; ?></span><br />
				<?php echo $this->_var['LANG']['FANS']; ?>
			</div>
			<div class="tc my_counter" style="width:50px; border-right:#e6e6e6 solid 1px;">
				<span class="count_big"><?php echo $this->_var['muser_info']['focus_count']; ?></span><br />
				<?php echo $this->_var['LANG']['FOCUS']; ?>
			</div>
			<div class="tc my_counter" style="width:50px;">
				<span class="count_big"><?php echo $this->_var['muser_info']['fav_count']; ?></span><br />
				<?php echo $this->_var['LANG']['FAV']; ?>
			</div>
			
			<div class="blank"></div>
			<div class="tc">
			<a href="<?php
echo parse_url_tag("u:shop|space|"."id=".$this->_var['muser_info']['id']."".""); 
?>"><img src="<?php echo $this->_var['TMPL']; ?>/images/go_space.png" /></a>
			</div>
		</div>
	</div>
	<?php if ($this->_var['user_joing_group']): ?>
	<div class="blank"></div>
	<div class="inc">
		<div class="inc_top">TA加入的小组</div>
		<div class="inc_main pd10 clearfix">
			<?php $_from = $this->_var['user_joing_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'join_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['join_group']):
?>
			<div class="join_group_item" <?php if ($this->_var['key'] % 2 == 1): ?>style="margin-right:0px; "<?php endif; ?>>
				<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['join_group']['id']."".""); 
?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['join_group']['icon'],
  'w' => '64',
  'h' => '64',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['join_group']['name']; ?>"  width=64 height=64 /></a>
				<div class="blank1"></div>
				<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['join_group']['id']."".""); 
?>" title="<?php echo $this->_var['join_group']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['join_group']['name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
			<div class="blank1"></div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if ($this->_var['group_topic_rec_list']): ?>
	<div class="blank"></div>
	<div class="inc">
		<div class="inc_top">该小组其他精彩主题</div>
		<div class="inc_main clearfix">
			<?php $_from = $this->_var['group_topic_rec_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['topic']):
?>
			<div class="new_topic_row">
			<a class="topic_title" title="<?php echo $this->_var['topic']['forum_title']; ?>" href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['topic']['id']."".""); 
?>"> <?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			<div class="blank5"></div>
			<a title="<?php echo $this->_var['group_info']['name']; ?>" href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['topic']['group_id']."".""); 
?>" class="topic_group_title"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group_info']['name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
			
		</div>
	</div>
	<?php endif; ?>
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>