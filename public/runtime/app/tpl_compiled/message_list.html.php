
							<ul>
								<?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'message_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['message_item']):
?>
									<li class="message-row <?php if ($this->_var['key'] % 2 == 0): ?>alt<?php endif; ?>"  style="position:relative;">
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
													
													<div class="f_l">												
														<strong><?php if($_REQUEST['act']=='seller'){?>[<?php 
$k = array (
  'name' => 'get_deal_city_name',
  'value' => $this->_var['message_item']['city_id'],
);
echo $k['name']($k['value']);
?>]<?php }?><?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
);
echo $k['name']($k['value']);
?> </strong>
														<span style="font-size:12px; color:#999;">
														<?php echo sprintf($GLOBALS['lang']['SUPPLIER_COMMENT_SAY'],pass_date($this->_var['message_item']['create_time']));?>
														</span>
														<?php if ($this->_var['message_item']['point'] > 0): ?><a href="<?php
echo parse_url_tag("u:shop|goods|"."id=".$this->_var['message_item']['rel_id']."".""); 
?>" title="<?php echo $this->_var['message_item']['rel_name']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['message_item']['rel_name'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
														
														<span class="comment_word comment_<?php echo $this->_var['message_item']['point']; ?>"><?php echo $GLOBALS['lang']['COMMENT'.$this->_var['message_item']['point']];?></span> <?php endif; ?>
														
													</div>
													<?php if ($this->_var['user_auth'] [ 'msg' ] [ 'del' ]): ?>
													<div class="f_r">
													<a href="javascript:void(0);" onclick="op_msg_del(<?php echo $this->_var['message_item']['id']; ?>);">删除</a>
													</div>
													<?php endif; ?>
													<div class="blank1"></div>
													<p class="text">
														<?php 
$k = array (
  'name' => 'nl2br',
  'value' => $this->_var['message_item']['content'],
);
echo $k['name']($k['value']);
?>
													</p>
													<?php if ($this->_var['message_item']['admin_reply'] != ''): ?>
													<p class="reply">
													<strong><?php echo $this->_var['LANG']['REPLY']; ?>：</strong><?php 
$k = array (
  'name' => 'nl2br',
  'value' => $this->_var['message_item']['admin_reply'],
);
echo $k['name']($k['value']);
?><br>
													</p>	
													<?php endif; ?>									
												</div>
												</td>
											</tr>
										</table>
									</li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>							
							</ul>
							
							
							<div class="blank"></div>							
							<div class="pages"><?php echo $this->_var['pages']; ?></div>	