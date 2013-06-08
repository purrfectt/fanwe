<?php
$this->_var['dpjs'][] = $this->_var['TMPL_REAL']."/js/review.js";
$this->_var['cpdpjs'][] = $this->_var['TMPL_REAL']."/js/review.js";
?>
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['dpjs'],
  'c' => $this->_var['cpdpjs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<form name="review_form" id="review_form">
<div class="review_form_box pub_box" style="padding:0px;">
	<div class="form_title">发表点评</div>
	<p class="dp_bar">
        <span class="title"><span class="em">* </span>总体评价：</span>
        <span>
        	<span class="starsBar">
        		<span class="frontBk_red">
					<input type="hidden" value="0" name="dp_point">
				</span>
			</span>
		</span>
        <span class="score_tips" id="score_tips"><span>点击星星为商家打分，最高5颗星</span></span>
        <span class="error_tips" id="dp_point_tips" style="display:none;">请为商家评分</span>
     </p>
	 
	 <?php $_from = $this->_var['store_info']['point_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
	 <p class="dp_bar dp_sub_bar" id="group_<?php echo $this->_var['group']['id']; ?>">
          <span class="title"><span class="em">* </span><?php echo $this->_var['group']['name']; ?>：</span>
		  <span class="data_bar">
		  	<span class="data_bar_width">
			<input type="hidden" value="0" name="dp_point_group[<?php echo $this->_var['group']['id']; ?>]" class="f-input" />
			</span>          	
		  </span>
		  <span class="data_bar_tags"></span>
          <span class="error_tips"  style="display:none;">请为<?php echo $this->_var['group']['name']; ?>打分</span>
    </p>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	<p class="dp_bar">
          <span class="title"><span class="em">* </span>标题：</span>
		  <span>
		  	<input type="text" name="dp_title" size="50" maxlength="50" class="f-input" />
		  </span>
          <span><span class="em none">* </span>人均：</span>
		  <span>
		  	<input type="text" name="avg_price" class="f-input" size="5" />
		   </span>
    </p>
	
	<?php $_from = $this->_var['store_info']['dp_tag_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
	<p class="dp_bar tag_bar">
     	<label class="title"><span class="em none">* </span><?php echo $this->_var['group']['name']; ?>：</label>
        <input type="text" class="f-input tag_text" name="dp_tags[<?php echo $this->_var['group']['id']; ?>]"  />
        <span class="tag_notice">多个标签请用空格分开</span>
        <span class="tag_tips">
        	<?php $_from = $this->_var['group']['preset_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
			<?php if ($this->_var['tag'] != ""): ?>
	          <a href="javascript:void(0);" onclick="set_tag(this);"><?php echo $this->_var['tag']; ?></a>
			  <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </span>
   </p>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	<div class="dp_bar">
          <span class="title f_l" style="display:inline-block;"><span class="em">* </span>内容：</span>
		  <?php 
$k = array (
  'name' => 'show_topic_form',
  'text_name' => 'content',
  'width' => '600px',
  'height' => '80px',
  'is_img' => '0',
  'is_topic' => '0',
  'is_event' => '0',
  'id' => 'main_topic_form_textarea',
  'show_btn' => '0',
  'show_tag' => '0',
);
echo $k['name']($k['text_name'],$k['width'],$k['height'],$k['is_img'],$k['is_topic'],$k['is_event'],$k['id'],$k['show_btn'],$k['show_tag']);
?>				
    </div>	
	<?php if (app_conf ( "VERIFY_IMAGE" ) == 1): ?>
	<div class="verify_row" style="padding-left:90px">								
	<input type="text" value="" class="f-input" name="verify" />	
	<img src="<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand=<?php 
$k = array (
  'name' => 'rand',
);
echo $k['name']();
?>" onclick="this.src='<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand='+ Math.random();" title="看不清楚？换一张" />			
	</div>	
	<div class="blank"></div>
	<?php endif; ?>
	<p style="padding-left:30px">
		<input type="hidden" name="supplier_location_id" value="<?php echo $this->_var['store_info']['id']; ?>" />
		<input type="hidden" name="deal_cate_id" value="<?php echo $this->_var['store_info']['deal_cate_id']; ?>" />
        <button type="button" class="comment_btn" id="comment_btn">提交点评</button>
    </p>
	<div class="blank"></div>
</div>
</form>

