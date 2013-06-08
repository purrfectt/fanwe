<?php if ($this->_var['youhui_list']): ?>
<div class="index_left_box">
		<div class="box_top">
			<div class="index_title_tag_box">
				<div class="tag_title">
				<?php echo $this->_var['bcate_item']['name']; ?>
				</div>
			</div>
			<div class="f_r top_right_nav">
			<?php $_from = $this->_var['scate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
			<a href="<?php
echo parse_url_tag("u:youhui|fcate|"."cid=".$this->_var['bcate_item']['id']."&tid=".$this->_var['cate_item']['id']."".""); 
?>" title="<?php echo $this->_var['cate_item']['name']; ?>"><?php echo $this->_var['cate_item']['name']; ?></a>&nbsp;&nbsp;
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<a href="<?php
echo parse_url_tag("u:youhui|fcate|"."cid=".$this->_var['bcate_item']['id']."".""); 
?>" title="更多">更多</a>&nbsp;&nbsp;
			</div>
		</div>
		<div class="box_main clearfix">
			<?php $_from = $this->_var['youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'youhui_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['youhui_item']):
?>
			<div class="sector_4 index_youhui_item"  style="<?php if ($this->_var['key'] % 4 == 3): ?>border-right:none; width:177px;<?php endif; ?> <?php if ($this->_var['key'] > ( count ( $this->_var['youhui_list'] ) - 1 - ( count ( $this->_var['youhui_list'] ) % 4 ) )): ?>border-bottom:none;<?php endif; ?>">
				<div class="youhui_tag_<?php echo $this->_var['youhui_item']['youhui_type']; ?>"></div>
				<a href="<?php
echo parse_url_tag("u:youhui|fdetail|"."id=".$this->_var['youhui_item']['id']."".""); 
?>" title="<?php echo $this->_var['youhui_item']['name']; ?>" target="_blank"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui_item']['icon'],
  'w' => '150',
  'h' => '110',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" width="150" height="110" alt="<?php echo $this->_var['youhui_item']['name']; ?>" class="lazy" /></a>
				<div class="blank"></div>
				<a href="<?php
echo parse_url_tag("u:youhui|fdetail|"."id=".$this->_var['youhui_item']['id']."".""); 
?>" title="<?php echo $this->_var['youhui_item']['name']; ?>" target="_blank" class="title_link"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui_item']['name'],
  'b' => '0',
  'e' => '8',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
				<div class="blank"></div>
				<div class="youhui_downcount">本券累计下载 <?php echo intval($this->_var['youhui_item']['sms_count'])+intval($this->_var['youhui_item']['print_count']);?></div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div><!--end box_main-->
</div>
<div class="blank"></div>
<?php endif; ?>
<adv adv_id="优惠券首页分类的广告位" rel_table="deal_cate" rel_id="<?php echo $this->_var['bcate_item']['id']; ?>" />