<?php echo $this->fetch('inc/header.html'); ?> 
<div id="bdw" class="bdw">
	<div id="bd" class="cf">
		<div id="deal-default">
			
			<?php if ($this->_var['articles']): ?>
			<div id="dashboard" class="dashboard cf">
					<ul>
						<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
						<li <?php if ($this->_var['article_item']['current'] == 1): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_var['article_item']['url']; ?>"><?php echo $this->_var['article_item']['title']; ?></a>
						<span></span>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>													
					</ul>
			</div>
			<?php endif; ?>
			
			<div id="content">
					
			<div class="box">				
				<div class="box">
					<div class="box-top"></div>
					<div class="box-content">
						<div class="head">
							<h2><?php echo $this->_var['page_title']; ?></h2>							
						</div>
						<div class="sect">
							<?php echo $this->_var['article']['content']; ?>
						</div>
					</div>
					<div class="box-bottom"></div>
				</div>
			</div>
			</div>
			<?php echo $this->fetch('inc/side.html'); ?> 
	</div>
	<!-- bd end -->
</div></div>
<?php echo $this->fetch('inc/footer.html'); ?>