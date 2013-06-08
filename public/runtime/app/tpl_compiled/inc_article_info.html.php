<div class="inc">
	<div class="inc_top"><?php echo $this->_var['page_title']; ?></div>
	<div class="inc_main pd10">
		<div class="article_title"><?php echo $this->_var['article']['title']; ?></div>
		<div class="article_time"><?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['article']['update_time'],
);
echo $k['name']($k['v']);
?> </div>
		<div class="article_click"><?php echo $this->_var['LANG']['CLICK_COUNT']; ?>：<?php 
$k = array (
  'name' => 'load_article_click',
  'article_id' => $this->_var['article']['id'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?> </div>
		<div class="article_info">
		<?php echo $this->_var['article']['content']; ?>
		</div>
	</div>
	<div class="inc_foot"></div>
</div>
