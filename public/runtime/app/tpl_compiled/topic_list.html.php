<div  class="message-list">
		
							<ul>
								<?php $_from = $this->_var['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'message_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['message_item']):
?>
									<li class="message-row">
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
															
															<!--<p class="f_r">
																<?php echo $this->_var['LANG']['REPLY']; ?>：<?php echo $this->_var['message_item']['reply_count']; ?> &nbsp;&nbsp;												
																<a href='javascript:;' onclick="vote_topic(<?php echo $this->_var['message_item']['id']; ?>,'good',this);"><span class="comment_word comment_5"><?php echo $this->_var['LANG']['TOPIC_GOOD']; ?><?php echo $this->_var['message_item']['good_count']; ?></span></a> &nbsp;&nbsp;
																<a href='javascript:;' onclick="vote_topic(<?php echo $this->_var['message_item']['id']; ?>,'bad',this);"><span class="comment_word comment_1"><?php echo $this->_var['LANG']['TOPIC_BAD']; ?><?php echo $this->_var['message_item']['bad_count']; ?></span></a>
															</p>-->
															
															<div class="blank5"></div>
															<?php if ($this->_var['message_item']['rel_url'] != ""): ?>
															<a href="<?php echo $this->_var['message_item']['rel_url']; ?>" class="topic_title_link"><?php echo $this->_var['message_item']['title']; ?></a>
															<?php else: ?>
															<span class="topic_title_row"><?php echo $this->_var['message_item']['title']; ?></span>
															<?php endif; ?>
															<div class="blank"></div>
															<div class="text">							
																<span class="quote_begin"></span><?php echo $this->_var['message_item']['short_content']; ?><span class="quote_end"></span>
															</div>
															<div class="blank"></div>
															<?php $_from = $this->_var['message_item']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?>
															<span class='toogle_topic_image_box'><img onclick='zoom(this);' src='<?php echo $this->_var['img']['path']; ?>' o='<?php echo $this->_var['img']['o_path']; ?>' b='<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '525',
  'h' => '0',
  'g' => '0',
  'p' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g'],$k['p']);
?>' s = '<?php echo $this->_var['img']['path']; ?>' w='<?php echo $this->_var['img']['width']; ?>' h='<?php echo $this->_var['img']['height']; ?>' tag='s' class="lazy" width=100 /></span>
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
																		<?php echo $this->_var['message_item']['origin']['short_content']; ?>
																		<div class="blank5"></div>
																		<?php $_from = $this->_var['message_item']['origin']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?>
																		<span class='toogle_topic_image_box'><img onclick='zoom(this);' src='<?php echo $this->_var['img']['path']; ?>' o='<?php echo $this->_var['img']['o_path']; ?>' b='<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img']['o_path'],
  'w' => '525',
  'h' => '0',
  'g' => '0',
  'p' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g'],$k['p']);
?>' s = '<?php echo $this->_var['img']['path']; ?>' w='<?php echo $this->_var['img']['width']; ?>' h='<?php echo $this->_var['img']['height']; ?>' tag='s' /></span>
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
											<?php elseif ($this->_var['user_auth'] [ 'topic' ] [ 'del' ]): ?>
											<span class="msg_row_ico_del">								
											<a href="javascript:void(0);" onclick="op_topic_del(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['DELETE']; ?></a>
											</span>	
											<?php elseif ($this->_var['user_auth'] [ 'group' ] [ 'del' ] [ $this->_var['message_item'] [ 'group_id' ] ]): ?>
											<span class="msg_row_ico_del">								
											<a href="javascript:void(0);" onclick="op_group_del(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['DELETE']; ?></a>
											</span>	
											<?php endif; ?>	
		
											
											<span class="msg_row_ico_reply"><a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>#reply"><?php echo $this->_var['LANG']['TOPIC_COMMENT']; ?> (<?php echo $this->_var['message_item']['reply_count']; ?>)</a></span>
											<span class="msg_row_ico_fav"><a href="javascript:void(0);" onclick="fav_topic(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['FAV_TOPIC']; ?> (<?php echo $this->_var['message_item']['fav_count']; ?>) </a></span>
											<span class="msg_row_ico_relay"><a href="javascript:void(0);" onclick="relay_topic(<?php echo $this->_var['message_item']['id']; ?>);"><?php echo $this->_var['LANG']['RELAY_TOPIC']; ?> (<?php echo $this->_var['message_item']['relay_count']; ?>)</a></span>
											<span class="msg_row_ico_view"><a href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['message_item']['id']."".""); 
?>"><?php echo $this->_var['LANG']['VIEW_DETAIL']; ?></a></span>
										</div>
										<div class="blank1"></div>	
									</li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>							
							</ul>
							
							
							<div class="blank"></div>							
							<div class="pages"><?php echo $this->_var['pages']; ?></div>	
		</div><!--end message-list-->	