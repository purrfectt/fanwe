<div class="pic-main clearfix" id="pic-bd" name="pic-bd">
				<div class="clearfix" id="pic-hd">
				<ul>
				  <li <?php if (! $this->_var['images_group_id']): ?>class="current"<?php endif; ?>>
				  <a href="<?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."".""); 
?>">全部图片<span>(<?php echo $this->_var['total_image']; ?>)</span></a>
				 </li>
				  <?php $_from = $this->_var['images_group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ig_item');if (count($_from)):
    foreach ($_from AS $this->_var['ig_item']):
?>
				 	<li <?php if ($this->_var['images_group_id'] == $this->_var['ig_item']['id']): ?>class="current"<?php endif; ?>>
					  <a href="<?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&images_group_id=".$this->_var['ig_item']['id']."".""); 
?>"><?php echo $this->_var['ig_item']['name']; ?><span>(<?php echo $this->_var['ig_item']['count']; ?>)</span></a>
					</li>
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
	          </div>
				<div class="pic-bd clearfix">
					<div id="pic-bar" class="clearfix"> 
		              <div class="title"><?php echo $this->_var['pic_info']['brief']; ?></div>
		              <p class="fun-btn">
		              	<a id="next-btn" href="<?php if ($this->_var['next_pic']): ?><?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&images_group_id=".$this->_var['images_group_id']."&pid=".$this->_var['next_pic']."".""); 
?><?php endif; ?>#pic-bd">下一张</a>
					 </p>
		              <div id="pic-num"><span><?php echo $this->_var['pic_idx']; ?></span>/<?php 
$k = array (
  'name' => 'count',
  'val' => $this->_var['pic_list'],
);
echo $k['name']($k['val']);
?></div>
		              <p class="fun-btn"><a id="pre-btn" href="<?php if ($this->_var['prev_pic']): ?><?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&images_group_id=".$this->_var['images_group_id']."&pid=".$this->_var['prev_pic']."".""); 
?><?php endif; ?>#pic-bd">上一张</a>	</p>
		              <div class="fun-bar">
			                <input id="auto-play-five" type="radio" name="auto-time" value="5" <?php if ($_REQUEST['auto_play_time'] == "5"): ?>checked="checked"<?php endif; ?>>
			                <label for="auto-play-five">5秒</label>
			                <input id="auto-play-three" type="radio" name="auto-time"  <?php if ($_REQUEST['auto_play_time'] != "5"): ?>checked="checked"<?php endif; ?> value="3">
			                <label for="auto-play-three">3秒</label>
			                <a id="auto-btn" href="#"  <?php if ($_REQUEST['auto_play'] != 1): ?>class="stop"<?php else: ?>class="current"<?php endif; ?>>自动播放</a>
		              </div>
		            </div>
					
					<div id="pic-info" class="clearfix">
						
						<a id="origin-user" href="<?php
echo parse_url_tag("u:biz|publish#add|"."id=".$this->_var['store_info']['id']."".""); 
?>" target="_blank">商家上传</a>
					
						<span id="scan-num">有<b><?php echo $this->_var['pic_info']['click_count']; ?></b>人浏览</span>
						<a id="origin-pic" href="<?php echo $this->_var['pic_info']['image']; ?>" target="_blank">查看原图</a>
					</div>
					<div id="pic-frame">
					  <div class="pic-inline-block">
					  	<?php if ($this->_var['pic_info']): ?>
		                <img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['pic_info']['image'],
  'w' => '695',
  'h' => '0',
  'g' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>">
						<?php endif; ?>
					  </div>
					  <?php if ($this->_var['prev_pic']): ?>
					  <a id="pre-link" href="<?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&images_group_id=".$this->_var['images_group_id']."&pid=".$this->_var['prev_pic']."".""); 
?>#pic-bd" title="上一张">&nbsp;</a>
					  <?php endif; ?>
					  <?php if ($this->_var['next_pic']): ?>
					  <a id="next-link" href="<?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&images_group_id=".$this->_var['images_group_id']."&pid=".$this->_var['next_pic']."".""); 
?>#pic-bd" title="下一张">&nbsp;</a>
					  <?php endif; ?>
					</div>
					
				</div>
				
				<div id="pic-ft" class="clearfix">
				<?php if ($this->_var['pic_idx'] == 1): ?>
				<a id="album-pre" title="左滚动" class="none" ><span></span></a>
				<?php else: ?>
				<a id="album-pre" title="左滚动"><span></span></a>
				<?php endif; ?>
				<!--不能有空格-->
		        <div id="album-main">
			        <ul id="pic-album">
			         <?php $_from = $this->_var['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic_item');$this->_foreach['pic_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pic_item']['total'] > 0):
    foreach ($_from AS $this->_var['pic_item']):
        $this->_foreach['pic_item']['iteration']++;
?>
					 <?php if ($this->_var['pic_item']['id'] <= $this->_var['pic_info']['id'] && $this->_foreach['pic_item']['iteration'] <= 6): ?>
					 <li class="<?php if ($this->_var['pic_item']['id'] == $this->_var['pic_info']['id']): ?>current<?php endif; ?><?php if ($this->_foreach['pic_item']['iteration'] % 6 == 0): ?> last<?php endif; ?>"><div><a href="<?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&image_type=".$this->_var['images_group_id']."&pid=".$this->_var['pic_item']['id']."".""); 
?>#pic-bd"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['pic_item']['image'],
  'w' => '90',
  'h' => '70',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['pic_item']['brief']; ?>"></a></div></li>
					 <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
		        </div>
				<?php if (count($this->_var['pic_list']) - intval($this->_var['pic_idx']) <= 6){ ?>
				<a id="album-next" title="右滚动" class="none"><span></span></a>
				<?php }else{ ?>
				<a id="album-next" title="右滚动"><span></span></a>
				<?php }?>
				</div>
				<div style="display:none;">
					<form name="auto_play_form" id="auto_play_form" action="" method="post">
						<input name="auto_play" id="auto_play" value="<?php if ($_REQUEST['auto_play']): ?><?php echo $_REQUEST['auto_play']; ?><?php else: ?>0<?php endif; ?>">
						<input name="auto_play_time" id="auto_play_time" value="<?php if ($_REQUEST['auto_play_time']): ?><?php echo $_REQUEST['auto_play_time']; ?><?php else: ?>3<?php endif; ?>">
						<?php if ($this->_var['images_group_id']): ?>
						<input name="images_group_id" id="images_group_id" value="<?php echo $this->_var['images_group_id']; ?>">
						<?php endif; ?>
					</form>
				</div>
			</div>
<script>
	var normal_url = $("#pic-album li.current a").attr("href");
	var piclist = [
	<?php $_from = $this->_var['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic_item');$this->_foreach['pic_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pic_item']['total'] > 0):
    foreach ($_from AS $this->_var['pic_item']):
        $this->_foreach['pic_item']['iteration']++;
?>
		{
			"idx" : <?php echo ($this->_foreach['pic_item']['iteration'] - 1); ?>,
			"id" : <?php echo $this->_var['pic_item']['id']; ?>,
			"url" : "<?php
echo parse_url_tag("u:youhui|store#photos|"."id=".$this->_var['store_info']['id']."&images_group_id=".$this->_var['images_group_id']."&pid=".$this->_var['pic_item']['id']."".""); 
?>#pic-bd",
			"img" : "<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['pic_item']['image'],
  'w' => '90',
  'h' => '70',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>",
			"brief":"<?php 
$k = array (
  'name' => 'htmlspecialchars',
  'val' => $this->_var['pic_item']['brief'],
);
echo $k['name']($k['val']);
?>"
		}
		<?php if (! ($this->_foreach['pic_item']['iteration'] == $this->_foreach['pic_item']['total'])): ?>
		,
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	];
</script>