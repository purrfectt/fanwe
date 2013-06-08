<?php echo $this->fetch('inc/vote_header.html'); ?> 
<body style="background:#ECECEC;">
	<div class="vote_box">
		<div class="vote_box_top"></div>
		<div class="vote_box_main">
			<div class="vote_main">
						<div class="vote_head">
							<?php echo $this->_var['vote']['name']; ?>
						</div>
						<div class="blank"></div>
						<div class="vote_desc"><?php echo $this->_var['vote']['description']; ?></div>
						<div class="blank"></div>
						<form action="<?php
echo parse_url_tag("u:shop|vote#dovote|"."".""); 
?>" method="post">
								<ol class="vote-list">
									<?php $_from = $this->_var['vote_ask']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ask');if (count($_from)):
    foreach ($_from AS $this->_var['ask']):
?>
									<li>
										<h4><?php echo $this->_var['ask']['name']; ?></h4>
										<div class="choices">
											<?php $_from = $this->_var['ask']['val_scope']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
											<?php if ($this->_var['val'] != ''): ?>
											<label><input type="<?php if ($this->_var['ask']['type'] != 2 && $this->_var['ask']['type'] != 5): ?>radio<?php endif; ?><?php if ($this->_var['ask']['type'] != 1 && $this->_var['ask']['type'] != 4): ?>checkbox<?php endif; ?>" name="name[<?php echo $this->_var['ask']['id']; ?>][]" value="<?php echo $this->_var['val']; ?>" class="choice" /> <?php echo $this->_var['val']; ?> </label>
											<?php endif; ?>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											<?php if ($this->_var['ask']['type'] == 3 || $this->_var['ask']['type'] == 4 || $this->_var['ask']['type'] == 5): ?>
											<?php echo $this->_var['LANG']['OTHER_VOTE']; ?>: <input type="text" name="name[<?php echo $this->_var['ask']['id']; ?>][]" class="f-text" />
											<?php endif; ?>
										</label>
										</div>
										<div class="blank"></div>
									</li>		
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>						
								</ol>
								<div class="blank"></div>
								<div class="commit">
									<input type="hidden" value="<?php echo $this->_var['vote']['id']; ?>" name="vote_id">
									<input type="submit" value="<?php echo $this->_var['LANG']['OK_AND_SUBMIT']; ?>" name="submit" class="formbutton">
								</div>
							</form>
												
				
					
			</div>
		</div><!--end vote_box_main-->
		<div class="vote_box_foot"></div>
	</div><!--vote_box-->	
</body>
<html>