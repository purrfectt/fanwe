<?php echo $this->fetch('inc/header.html'); ?> 
<div id="bdw" class="bdw">
	<div id="bd" class="cf">
		<div id="deal-default">
			<div id="content" style="width:100%; float:none; margin:0px;">		
	
			<div class="box">				
				<div class="cf">
					<div class="box-top"></div>
					<div class="box-content">
						<div class="head">
							<h2><?php echo $this->_var['page_title']; ?></h2>
						</div>
						<div class="sect">
								<div class="notice">
									<?php echo $this->_var['deal_city']['description']; ?>
								</div>	
								<div class="notice">							
								没有相关的团购信息							
								</div>	
												
						</div>
					</div>
					<div class="box-bottom"></div>
				</div>
			</div>
			</div>
		
	</div>
	<!-- bd end -->
</div></div>

<?php echo $this->fetch('inc/footer.html'); ?>