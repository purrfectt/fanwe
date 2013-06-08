<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['groupcss'][] = $this->_var['TMPL_REAL']."/css/group.css";
$this->_var['groupjs'][] = $this->_var['TMPL_REAL']."/js/group.js";
$this->_var['cpgroupjs'][] = $this->_var['TMPL_REAL']."/js/group.js";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['groupjs'],
  'c' => $this->_var['cpgroupjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['groupcss'],
);
echo $k['name']($k['v']);
?>" />
<div class="blank"></div>
<?php if ($this->_var['rec_topic_list']): ?>
<?php echo $this->fetch('inc/rec_forum_topic.html'); ?> 
<?php endif; ?>
<div class="long f_l">
	<div class="goods_detail_box" style="padding:0px; margin:0px;">
	<ul class="detail_nav">
		<li class="act">活跃小组</li>		
	</ul>
	</div>
	<div class="blank"></div>
	<div class="hot_group">
		<?php $_from = $this->_var['hot_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
		<div class="group_item">
			<div class="group_icon f_l">
			<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>">
			<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group']['icon'],
  'w' => '100',
  'h' => '100',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['group']['name']; ?>" />
			</a>
			</div>
			<div class="group_info f_l">
				<div class="group_title"><a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>"><?php echo $this->_var['group']['name']; ?></a></div>
				<div class="group_count">
					<span><?php echo $this->_var['group']['user_count']; ?></span> 成员&nbsp;&nbsp;
					<span><?php echo $this->_var['group']['topic_count']; ?></span> 分享 				
				</div>
				<div class="group_memo">
					<?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group']['memo'],
  'b' => '0',
  'e' => '35',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?>
				</div>
			</div>
			
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div class="blank"></div>
	<div class="goods_detail_box" style="padding:0px; margin:0px;">
	<ul class="detail_nav">
		<li <?php if ($this->_var['cate_id'] == 0): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|group|"."".""); 
?>">全部</a></li>
		<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
		<li <?php if ($this->_var['cate_id'] == $this->_var['cate_item']['id']): ?>class="act"<?php endif; ?>><a href="<?php
echo parse_url_tag("u:shop|group|"."id=".$this->_var['cate_item']['id']."".""); 
?>"><?php echo $this->_var['cate_item']['name']; ?></a></li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
	</ul>
	</div>
	<div class="blank"></div>
	
	<div class="hot_group">
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
		<div class="group_item">
			<div class="group_icon f_l">
			<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>">
			<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group']['icon'],
  'w' => '100',
  'h' => '100',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['group']['name']; ?>" />
			</a>
			</div>
			<div class="group_info f_l">
				<div class="group_title"><a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>"><?php echo $this->_var['group']['name']; ?></a></div>
				<div class="group_count">
					<span><?php echo $this->_var['group']['user_count']; ?></span> 成员&nbsp;&nbsp;
					<span><?php echo $this->_var['group']['topic_count']; ?></span> 分享 				
				</div>
				<div class="group_memo">
					<?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group']['memo'],
  'b' => '0',
  'e' => '35',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?>
				</div>
			</div>
			
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div class="blank"></div>
	<div class="pages"><?php echo $this->_var['pages']; ?></div>
</div><!--end long-->
<div class="short f_r">

	<div class="create_group"><a href="<?php
echo parse_url_tag("u:shop|group#create|"."".""); 
?>" title="申请创建小组"></a></div>
	<div class="blank"></div>

	
	<div class="inc">
	<div class="inc_top">优秀小组长</div>
	<div class="inc_main">
		
		<?php $_from = $this->_var['group_adm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
		<div class="group_adm">
			<div class="avatar">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'v' => $this->_var['group']['user_id'],
);
echo $k['name']($k['v']);
?>
			</div>
			<div class="info">
				<a href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>" class="group_name"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group']['name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
				<div class="blank1"></div>
				<span class="user_count"><?php echo $this->_var['group']['user_count']; ?>个成员</span>
				<div class="blank1"></div>
				<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['group']['user_id'],
);
echo $k['name']($k['v']);
?>
				
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	<div class="inc_foot"></div>
	</div>
	
	</div>
	<div class="blank"></div>

	
	<div class="inc">
	<div class="inc_top">最新主题</div>
	<div class="inc_main">
		
		<?php $_from = $this->_var['new_topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['topic']):
?>
		<div class="new_topic_row">
		<a class="topic_title" title="<?php echo $this->_var['topic']['forum_title']; ?>" href="<?php
echo parse_url_tag("u:shop|topic|"."id=".$this->_var['topic']['id']."".""); 
?>"> <?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
		<div class="blank5"></div>
		<a title="<?php echo $this->_var['topic']['group_name']; ?>" href="<?php
echo parse_url_tag("u:shop|group#forum|"."id=".$this->_var['topic']['group_id']."".""); 
?>" class="topic_group_title"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['group_name'],
  'b' => '0',
  'e' => '12',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	<div class="inc_foot"></div>
	</div>
	
	</div>
	
	

<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>