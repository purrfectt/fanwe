<div id="deal-share">
	<div class="deal-share-top">
		<div class="deal-share-links">
			<h4><?php echo $this->_var['LANG']['SHARE_TO']; ?>：</h4>
			<ul class="cf">
			<input type="hidden" value="<?php echo $this->_var['deal']['share_url']; ?>" id="share_url" />
			<li>
				<a id="shart_im" class="im" href="javascript:share_url(this);" >MSN/QQ</a>
			</li>
			<?php echo $this->fetch('inc/share_to_site.html'); ?>				
			</ul>
		</div>
	</div>
	<div class="deal-share-fix"></div>
	<div id="deal-share-im-c">
						<div class="deal-share-im-b">
							<h3><?php echo $this->_var['LANG']['SHARE_LINK']; ?>：</h3>
							<p>
								<input id="share-copy-text" class="f-input" value="" size="30">
								<input class="formbutton" id="share-copy-button" value="<?php echo $this->_var['LANG']['COPY']; ?>" type="button">
							</p>
						</div>
	</div>
</div>
<script type="text/javascript">
								function share_url(obj)
								{
									if ($("#deal-share-im-c").css("display") == "none") {			
										$("#share-copy-text").val($("#share_url").val());
										$("#deal-share-im-c").show();
									}
									else 
										$("#deal-share-im-c").hide();
								}
</script>