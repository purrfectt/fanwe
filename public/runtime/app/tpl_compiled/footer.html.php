</div>
<div class="blank"></div>
<div id="ftw">
        <div id="ft">
            <ul class="cf">
            	<?php $_from = $this->_var['deal_help']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cate');$this->_foreach['help_cate'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_cate']['total'] > 0):
    foreach ($_from AS $this->_var['help_cate']):
        $this->_foreach['help_cate']['iteration']++;
?>
				<li class="col hp<?php echo $this->_foreach['help_cate']['iteration']; ?>">
                    <h3><?php echo $this->_var['help_cate']['title']; ?></h3>
                    <ul class="sub-list">
						<?php $_from = $this->_var['help_cate']['help_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_item');if (count($_from)):
    foreach ($_from AS $this->_var['help_item']):
?>
						<li><a href="<?php echo $this->_var['help_item']['url']; ?>" <?php if ($this->_var['help_item']['new'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['help_item']['title']; ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>             
					</ul>
                </li>  
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>            
				<li class="col end">
                    <div class=logo-footer>
                    	<a href="<?php echo $this->_var['APP_ROOT']; ?>/" title="<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_TITLE',
);
echo $k['name']($k['value']);
?>">
                    	<?php
							$this->_var['logo_image'] = app_conf("FOOTER_LOGO");
						?>
						<?php 
$k = array (
  'name' => 'load_page_png',
  'v' => $this->_var['logo_image'],
);
echo $k['name']($k['v']);
?>
						</a>
					</div>
                </li>
            </ul>
			<div class="blank"></div>
			<?php if ($this->_var['f_link_data']): ?>
			<div class="flink">
			<?php $_from = $this->_var['f_link_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link_group');if (count($_from)):
    foreach ($_from AS $this->_var['link_group']):
?>			
				<span style="color:#ccc; float:left; padding:5px 10px 5px 0px;"><?php echo $this->_var['link_group']['name']; ?></span>
				<?php $_from = $this->_var['link_group']['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
					<a href="http://<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php if ($this->_var['link']['description']): ?><?php echo $this->_var['link']['description']; ?><?php else: ?><?php echo $this->_var['link']['name']; ?><?php endif; ?>"><?php if ($this->_var['link']['img'] != ''): ?><img src='<?php echo $this->_var['link']['img']; ?>' alt="<?php if ($this->_var['link']['description']): ?><?php echo $this->_var['link']['description']; ?><?php else: ?><?php echo $this->_var['link']['name']; ?><?php endif; ?>" /><?php else: ?><?php echo $this->_var['link']['name']; ?><?php endif; ?></a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div class="blank1"></div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>		
			<div class="blank"></div>
			<?php endif; ?>
			<div class="tc">
			<?php $_from = $this->_var['system_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'sys_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['sys_item']):
?>
			<?php if ($this->_var['key'] > 0): ?>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?><a href="<?php echo $this->_var['sys_item']['url']; ?>" title="<?php echo $this->_var['sys_item']['title']; ?>"><?php echo $this->_var['sys_item']['title']; ?></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
            <div class=copyright>
            	<?php if (app_conf ( "SHOP_TEL" ) != ''): ?>
				<?php echo $this->_var['LANG']['TEL']; ?>：<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_TEL',
);
echo $k['name']($k['value']);
?> <?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'ONLINE_TIME',
);
echo $k['name']($k['value']);
?>  
				&nbsp;&nbsp;
				<?php endif; ?>				
				<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'ICP_LICENSE',
);
echo $k['name']($k['value']);
?>&nbsp;&nbsp;
				<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'COUNT_CODE',
);
echo $k['name']($k['value']);
?>
				<div class="blank1"></div>	
				<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_FOOTER',
);
echo $k['name']($k['value']);
?> 
				<div class="blank"></div>				
				<?php if (app_conf ( "ONLINE_QQ" ) != '' || app_conf ( "ONLINE_MSN" ) != ''): ?>
				<?php $_from = $this->_var['online_msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'msn');if (count($_from)):
    foreach ($_from AS $this->_var['msn']):
?>
				<?php if ($this->_var['msn'] != ''): ?>
				<a id=service-msn-help href="msnim:chat?contact=<?php echo $this->_var['msn']; ?>" target=_blank>
					<img src="<?php echo $this->_var['TMPL']; ?>/images/button-custom-msn.gif">
				</a> 
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php $_from = $this->_var['online_qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qq');if (count($_from)):
    foreach ($_from AS $this->_var['qq']):
?>
				<?php if ($this->_var['qq'] != ''): ?>
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['qq']; ?>&site=qq&menu=yes" target=_blank>
					<img alt="" src="<?php echo $this->_var['TMPL']; ?>/images/button-custom-qq.gif">
				</a>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>				
				<div class="blank1"></div>
				<?php endif; ?>
				
            </div>
        </div>
    </div>


	<div id="gotop"></div>
</body>
</html>