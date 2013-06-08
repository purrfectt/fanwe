<?php if ($this->_var['list']): ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#data_page").find("a").bind("click",function(){
			var ajax_url = $(this).attr("href");		
			$.ajax({ 
				url: ajax_url,
				type: "POST",
				cache:false,		
				success:function(result){
					$(".detail_cnt").find("#extra_info").html(result);
				},
				error:function(o){
					//alert(o.responseText);
				}
			});
			return false;
		});
	});
</script>
<div class="data_content">
	<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ditem');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ditem']):
?>
	<div class="data_item" <?php if ($this->_var['key'] % 4 == 3): ?>style="margin-right:0px;"<?php endif; ?>>
		<div class="inner">
		<a href="<?php echo $this->_var['ditem']['url']; ?>" title="<?php echo $this->_var['ditem']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['ditem']['image'],
  'w' => '165',
  'h' => '120',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>"  alt="<?php echo $this->_var['ditem']['name']; ?>"/></a>
		<div class="blank"></div>
		<a href="<?php echo $this->_var['ditem']['url']; ?>" title="<?php echo $this->_var['ditem']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['ditem']['name'],
  'b' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
		</div>
	</div>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="blank"></div>
<div class="pages" id="data_page"><?php echo $this->_var['pages']; ?></div>
<?php endif; ?>