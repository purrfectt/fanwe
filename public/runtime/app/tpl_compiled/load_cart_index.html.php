<?php if ($this->_var['cart_list']): ?>
<?php echo $this->fetch('inc/inc_cart_list.html'); ?>			
<div style="text-align: right;" class="form-submit">
								<?php if ($this->_var['is_lottery']): ?>	
										<strong><?php echo $this->_var['LANG']['LOTTERY_MOBILE']; ?></strong>
										<?php if ($this->_var['lottery_mobile'] != '' && $this->_var['is_verify']): ?>
											<span id="lottery_mobile_word">
												<?php echo $this->_var['lottery_mobile']; ?>
											</span>
											<span id="lottery_mobile_input" style="display:none;">
												<input type="text" class="f-input" name="lottery_mobile" value="<?php echo $this->_var['lottery_mobile']; ?>">	
												<?php if (app_conf ( "SMS_ON" ) && app_conf ( "LOTTERY_SMS_VERIFY" )): ?>
												<input type="button" class="formbutton" name="buy" value="<?php echo $this->_var['LANG']['GET_VERIFY_CODE']; ?>" onclick="get_verify_code(this);" >		
												<input type="text" class="f-input" style="width:50px;" name="verify_code">			
												<?php endif; ?>
											</span>
											<a href="javascript:void(0);" id="modify_bind"><?php echo $this->_var['LANG']['MODIFY_BIND']; ?></a>
										<?php else: ?>
											<input type="text" class="f-input" name="lottery_mobile" value="<?php echo $this->_var['lottery_mobile']; ?>">	
											<?php if (app_conf ( "SMS_ON" ) && app_conf ( "LOTTERY_SMS_VERIFY" )): ?>
											<input type="button" class="formbutton" name="buy" value="<?php echo $this->_var['LANG']['GET_VERIFY_CODE']; ?>" onclick="get_verify_code(this);" >		
											<input type="text" class="f-input" style="width:50px;" name="verify_code">			
											<?php endif; ?>
										<?php endif; ?>
										
								<?php endif; ?>
								&nbsp;&nbsp;
								<input type="button" onclick="location.href='<?php echo $this->_var['APP_ROOT']; ?>/';" value="<?php echo $this->_var['LANG']['KEEP_BUYING']; ?>" class="formbutton2">
								<input type="button" onclick="submit_cart();" value="<?php echo $this->_var['LANG']['CONFIRM_BUY']; ?>" name="buy" class="formbutton">
</div>		
<?php else: ?>
					<div class="blank"></div>
					<div class="nogoodsbg">
						<div class="nogoodsimg"><img src="<?php echo $this->_var['TMPL']; ?>/images/nogoods.jpg"></div>
						<div class="nogoodstxt"><p class="empty"><?php echo $this->_var['LANG']['CART_EMPTY_TIP']; ?></p>
						<p class="color_blue"><?php echo $this->_var['LANG']['GO_TO_PICK']; ?>[ <a href="<?php echo $this->_var['APP_ROOT']; ?>/"><?php echo $this->_var['LANG']['PICK_GOODS_TO_CART']; ?></a> ]，<?php echo $this->_var['LANG']['OR_GO_TO']; ?> [ <a href="<?php
echo parse_url_tag("u:shop|uc_collect|"."".""); 
?>"><?php echo $this->_var['LANG']['MY_COLLECT']; ?></a> ] <?php echo $this->_var['LANG']['FOR_CHECK']; ?>。
							<br></p><br><br><br><br></div> 
						<div class="blank"></div>
					</div>
<?php endif; ?>