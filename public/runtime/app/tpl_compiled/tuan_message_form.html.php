<?php if ($this->_var['rel_table'] != 'seller'): ?>
<div class="cf" id="content" style="margin-left:0px;">				
				<div class="box cf">
					<div class="box-top"></div>
					<div class="box-content"  id="uc">
						<div class="head">
							<h2><?php echo $this->_var['post_title']; ?></h2>	
							
							<?php if ($this->_var['deal']): ?>
							<ul class="filter">
								<li <?php if ($this->_var['is_buy'] != 1): ?>class="current"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:tuan|message#deal|"."id=".$this->_var['rel_id']."&is_buy=0".""); 
?>"><?php echo $this->_var['LANG']['BEFORE_BUY']; ?></a></li>
								<li <?php if ($this->_var['is_buy'] == 1): ?>class="current"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:tuan|message#deal|"."id=".$this->_var['rel_id']."&is_buy=1".""); 
?>"><?php echo $this->_var['LANG']['AFTER_BUY']; ?></a></li>
							</ul>	
							<?php endif; ?>				
						</div>
						<div class="sect consult-list">
							<?php 
$k = array (
  'name' => 'load_message_list',
);
echo $k['name']();
?>
						</div>
					</div>
					<div class="box-bottom"></div>
				</div>
</div>
<div class="blank"></div>
<?php endif; ?>
<div class="box cf">
						<div class="box-top"></div>
						<div class="box-content">
							<form method="post" id="consult-add-form" action="<?php
echo parse_url_tag("u:tuan|message#add|"."".""); 
?>" name="message">
								<input type="hidden" value="1" name="ajax" />
							<div name="consult-form-head" id="consult-form-head" class="head" <?php if ($this->_var['rel_table'] == 'seller'): ?>style="border:0"<?php endif; ?>>
								<?php if ($this->_var['rel_table'] == 'seller'): ?>
								<div><img src="<?php echo $this->_var['TMPL']; ?>/images/tuan/tgHD.jpg" /></div>
								<?php else: ?><h2><?php echo $this->_var['post_title']; ?></h2><?php endif; ?>
								<?php if ($this->_var['message_group']): ?>
								<span>
									<?php $_from = $this->_var['message_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'type');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['type']):
?>
										<label><?php echo $this->_var['type']; ?>:<input type="radio" name="message_group" value="<?php echo $this->_var['type']; ?>" <?php if ($this->_var['key'] == 0): ?>checked="checked"<?php endif; ?> /></label>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</span>
								<?php endif; ?>
								
								<?php if ($this->_var['deal']): ?>
								<?php if ($this->_var['is_buy'] == 1): ?>
									<input type="hidden" name="is_buy" value="1" />
									<label><input type="radio" name="point" value="5" checked="checked" /><span class="comment_5"><?php echo $this->_var['LANG']['COMMENT5']; ?></span></label>
									<label><input type="radio" name="point" value="3" /><span class="comment_3"><?php echo $this->_var['LANG']['COMMENT3']; ?></span></label>
									<label><input type="radio" name="point" value="1" /><span class="comment_1"><?php echo $this->_var['LANG']['COMMENT1']; ?></span></label>
									<br />
									<span><?php echo $this->_var['LANG']['BUY_COMMENT_TIP']; ?></span>
								<?php endif; ?>
								<?php endif; ?>
							</div>
							<div class="sect consult-form">
								<?php if ($this->_var['rel_table'] == 'seller'): ?>
									<?php if ($this->_var['user_info']): ?>
									<script type="text/javascript">
										$(document).ready(function(){
											$("#consult-add-form").find(".formbutton").bind("click",function(){
												var msg = $.trim(($("#consult-add-form").find("textarea[name='content']").val()));
												if(msg == '')
												{
													$.showErr("<?php echo $this->_var['LANG']['MESSAGE_CONTENT_EMPTY']; ?>");
													return false;
												}
												var title = $.trim(($("#consult-add-form").find("input[name='title']").val()));
												if(title == '')
												{
													$.showErr("<?php echo $this->_var['LANG']['SUPPLIER_NAME_EMPTY']; ?>");
													$("#consult-add-form").find("input[name='title']").focus();
													return false;
												}
												var contact_name = $.trim(($("#consult-add-form").find("input[name='contact_name']").val()));
												if(contact_name == '')
												{
													$.showErr("<?php echo $this->_var['LANG']['CONTACT_NAME_EMPTY']; ?>");
													$("#consult-add-form").find("input[name='contact_name']").focus();
													return false;
												}
												var contact = $.trim(($("#consult-add-form").find("input[name='contact']").val()));
												if(contact == '')
												{
													$.showErr("<?php echo $this->_var['LANG']['CONTACT_EMPTY']; ?>");
													$("#consult-add-form").find("input[name='contact']").focus();
													return false;
												}
																								
											});
										});
									</script>
									<?php endif; ?>
									<div style="font-size:12px">如果您不是商家，那您点错了哦，请 <a href="<?php
echo parse_url_tag("u:tuan|index|"."".""); 
?>">返回首页</a> 以继续查看您需要的信息</div>
									<div style="font-size:12px">如果您是商家，还拥有优秀的产品，并希望为<?php 
$k = array (
  'name' => 'app_conf',
  'val' => 'SHOP_TITLE',
);
echo $k['name']($k['val']);
?>提供产品支持，请您查看一下信息：</div>
									<div class="blank"></div>
									<div class="art_msg_1">
										<h3>供货合作流程</h3>
										<p>
										电邮我们->确定合作意向->提供样品->质量审核->签订合作协议
										</p>
									</div>
									<div  class="art_msg_2">
										<h3>
										合作资质要求
										</h3>
										<p>
										1.对<?php 
$k = array (
  'name' => 'app_conf',
  'val' => 'SHOP_TITLE',
);
echo $k['name']($k['val']);
?>经验模式的深入了解<br>
										2.具有较强的市场运营能力，可以和我们一起共同针对市场需求开发新产品。<br>
										3.保证所提供商品品质优良，有独立完成商品售后服务能力。<br>
										</p>
									</div>
									<div class="art_msg_3">
										<h3>我们的优势与支持</h3>
										<p>
										1.您将拥有一个零成本零风险的高速营销平台。
										2.您将拥有一个准确面向针对人群的网上消费市场渠道。
										3.您将收获强大的广告宣传效果及优质的产品推广服务。
										</p>
									</div>
									<div class="art_msg_4">
									<h3>提供商家信息</h3>
									</div>
									<div class="blank"></div>
									<?php if ($this->_var['user_info']): ?>
									<div class="field">
									<label><?php echo $this->_var['LANG']['SUPPLIER_NAME']; ?></label>
									<input type="text" tabindex="1" size="30" name="title" class="f-input" value="">
									</div>
									<div class="blank1"></div>
									<div class="field">
									<label><?php echo $this->_var['LANG']['CONTACT_NAME']; ?></label>
									<input type="text" tabindex="1" size="30" name="contact_name" class="f-input" value="">
									</div>
									<div class="blank1"></div>
									<div class="field">
									<label><?php echo $this->_var['LANG']['CONTACT']; ?></label>
									<input type="text" tabindex="1" size="30" name="contact" id="login-email-address" class="f-input" value="">
									<span class="hint"><?php echo $this->_var['LANG']['CONTACT_TIP']; ?></span>
									</div>
									<div class="blank1"></div>
									<div class="field">
									<label><?php echo $this->_var['LANG']['DEAL_CITY']; ?></label>
									<select name="city_id">
										<?php $_from = $this->_var['deal_city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'deal_city_item');if (count($_from)):
    foreach ($_from AS $this->_var['deal_city_item']):
?>
										<option value="<?php echo $this->_var['deal_city_item']['id']; ?>"><?php echo $this->_var['deal_city_item']['name']; ?></option>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</select>
									</div>
									<div class="blank1"></div>
									<div class="field">
									<label><?php echo $this->_var['LANG']['DEAL_INFO']; ?></label>
									<textarea name="content" rows="5" cols="60" class="f-textarea"></textarea>
									</div>									
									<div class="blank1"></div>
									<div class="field">
										<label></label>
										<input type="hidden" value="<?php echo $this->_var['rel_table']; ?>" name="rel_table">
										<input type="hidden" value="<?php echo $this->_var['rel_id']; ?>" name="rel_id">
										<input type="submit" class="formbutton" name="commit" value="<?php echo $this->_var['LANG']['OK_POST']; ?>">
									</div>
									<?php endif; ?>
								<?php else: ?>
									<?php if ($this->_var['user_info']): ?>
									<script type="text/javascript">
											$(document).ready(function(){
												$("#consult-add-form").find(".formbutton").bind("click",function(){
													<?php if ($this->_var['is_buy'] == 1): ?>
													if(KE.isEmpty("content"))
													{
														$.showErr("<?php echo $this->_var['LANG']['MESSAGE_CONTENT_EMPTY']; ?>");
														return false;
													}
													<?php else: ?>
													var msg = $.trim(($("#consult-add-form").find("textarea[name='content']").val()));
													if(msg == '')
													{
														$.showErr("<?php echo $this->_var['LANG']['MESSAGE_CONTENT_EMPTY']; ?>");
														return false;
													}
													<?php endif; ?>
													
													if($("input[name='is_buy']:checked").val()==1)
													{
														var rel_id = $("input[name='rel_id']").val();
														var ajaxurl = APP_ROOT+"/tuan.php?ctl=ajax&act=check_buy&id="+rel_id;
														$.ajax({ 
															url: ajaxurl,
															success: function(rs){
																if(rs==0)
																{
																	$.showErr("<?php echo $this->_var['LANG']['AFTER_BUY_MESSAGE_TIP']; ?>");
																	return false;
																}
																else
																{
																	$("#consult-add-form").submit();
																}
															},
															error:function(ajaxobj)
															{
//																if(ajaxobj.responseText!='')
//																alert(ajaxobj.responseText);
//																return false;
															}
														});
													}
													else
													{
														$("#consult-add-form").submit();
													}
													return false;
												});
											});
										</script>
																
									
									<div class="topic_pub_form">
									<textarea style="width:645px;height:80px;" name="content" class="f-textarea"></textarea>
									</div>
									
									<div class="blank"></div>
									<p class="commit">
										<input type="hidden" value="<?php echo $this->_var['rel_table']; ?>" name="rel_table">
										<input type="hidden" value="<?php echo $this->_var['rel_id']; ?>" name="rel_id">
										<input type="submit" class="formbutton" name="commit" value="<?php echo $this->_var['LANG']['OK_POST']; ?>">
									</p>
									<?php endif; ?>
									<div class="blank"></div>
								<?php endif; ?>
								<?php if (! $this->_var['user_info']): ?>
								<?php echo $this->_var['message_login_tip']; ?>
								<?php endif; ?>
							</div>
						</div>
						</form>
						<div class="box-bottom"></div>
</div>

