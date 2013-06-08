<div class="sbox side-inner side-invite">
	<div class=sbox-top><H2><?php echo $this->_var['LANG']['INVITE_REFERRALS']; ?></H2></div>
	<div class=sbox-content>
		<div class="tip ctip">

			
			<div class="text">
				<?php echo $this->_var['invite_referrals_tip']; ?>		
			</div>
			<div class="link">
				<?php if ($this->_var['deal']['buy_type'] == 1): ?>
				<a href="<?php
echo parse_url_tag("u:tuan|referral|"."".""); 
?>" >&raquo; <?php echo $this->_var['LANG']['CLICK_GET_REFERRALS']; ?></a>
				<?php else: ?>
				<a href="<?php
echo parse_url_tag("u:tuan|referral|"."id=".$this->_var['deal']['id']."".""); 
?>">&raquo; <?php echo $this->_var['LANG']['CLICK_GET_REFERRALS']; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class=sbox-bottom></div>
</div>