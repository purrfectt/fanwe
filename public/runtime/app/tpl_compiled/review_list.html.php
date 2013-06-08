<script type="text/javascript">
	$(document).ready(function(){
		$("#dp-filter-select").bind("change",function(){
			var sort = $(this).val();
			load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'<?php echo $this->_var['filter']; ?>',sort);
		});
		
		$("#review_pages").find("a").bind("click",function(){
			var ajax_url = $(this).attr("href");		
			$.ajax({ 
				url: ajax_url,
				type: "POST",
				dataType: "json",		
				cache:false,		
				success:function(result){
					$("#store_dp").html(result.html);
				},
				error:function(o){
					//alert(o.responseText);
				}
			});
			return false;
		});
	});
	
	
</script>
<div class="k2-fix-float" id="dp-tab">
        <ul>
        	<li <?php if ($this->_var['is_best'] == 1): ?>class="current"<?php endif; ?>><a href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,1,'','');">精华点评<em>(<?php echo $this->_var['is_best_count']; ?>)</em></a></li>
          	<li <?php if ($this->_var['is_best'] != 1): ?>class="current"<?php endif; ?>><a href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,0,'','');">全部点评<em>(<?php echo $this->_var['total_count']; ?>)</em></a></li>
        </ul>       
</div>
<div class="k2-fix-float" id="dp-filter">
        <label>筛选：</label>
	        <a <?php if ($this->_var['filter'] == 'good'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'good','<?php echo $this->_var['sort']; ?>');">[好评]</a>	        
	        <a <?php if ($this->_var['filter'] == 'bad'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'bad','<?php echo $this->_var['sort']; ?>');">[差评]</a>	        
	        <a <?php if ($this->_var['filter'] == 'is_buy'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'is_buy','<?php echo $this->_var['sort']; ?>');">[消费者点评]</a>	
			<a <?php if ($this->_var['filter'] == 'tuan'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'tuan','<?php echo $this->_var['sort']; ?>');">[团购点评]</a>	        
	        <a <?php if ($this->_var['filter'] == 'daijin'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'daijin','<?php echo $this->_var['sort']; ?>');">[代金券点评]</a>
			<a <?php if ($this->_var['filter'] == 'youhui'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'youhui','<?php echo $this->_var['sort']; ?>');">[优惠券点评]</a>	  	        	        
	        <a <?php if ($this->_var['filter'] == 'event'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'event','<?php echo $this->_var['sort']; ?>');">[活动点评]</a>	        
	        <a <?php if ($this->_var['filter'] == 'shop'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'shop','<?php echo $this->_var['sort']; ?>');">[商城购物点评]</a>	        
	                
	        <!--<a <?php if ($this->_var['filter'] == 'img'): ?>class="current"<?php endif; ?> href="javascript:void(0);" onclick="load_store_dp(<?php echo $this->_var['supplier_location_id']; ?>,<?php echo $this->_var['is_best']; ?>,'img','<?php echo $this->_var['sort']; ?>');">图文</a>-->
        <p class="filter-select">
         	 排序：
			<select id="dp-filter-select">
	     		<option value="create_time" <?php if ($this->_var['sort'] == 'create_time'): ?>selected="selected"<?php endif; ?> >发布时间</option>
	            <option value="good_count" <?php if ($this->_var['sort'] == 'good_count'): ?>selected="selected"<?php endif; ?>>鲜花总数</option>
	            <option value="reply_count" <?php if ($this->_var['sort'] == 'reply_count'): ?>selected="selected"<?php endif; ?>>回应总数</option>
			</select>
        </p>

</div>
<div class="blank"></div>
<?php if ($this->_var['review_list']): ?>
<?php $_from = $this->_var['review_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'review_item');if (count($_from)):
    foreach ($_from AS $this->_var['review_item']):
?>
<div class="review_item">
	
		<div class="hd">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['review_item']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			<div class="user_name">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['review_item']['user_id'],
);
echo $k['name']($k['value']);
?> 
			</div>
		</div>
		<div class="review_content">
			<div class="review_point">
				<span class="point_title">总评：</span> <span class="point_result"><?php echo $this->_var['review_item']['point_lang']; ?></span>
				<?php $_from = $this->_var['review_item']['group_point']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
				<span class="point_title"><?php echo $this->_var['group']['name']; ?>：</span> <span class="point_result"><?php echo $this->_var['group']['point']; ?></span>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php if ($this->_var['review_item']['avg_price'] > 0): ?>
				<span class="point_title">人均：</span> <span class="point_result">￥<?php 
$k = array (
  'name' => 'round',
  'val' => $this->_var['review_item']['avg_price'],
  'p' => '2',
);
echo $k['name']($k['val'],$k['p']);
?></span>
				<?php endif; ?>
				
				
				
				<?php if ($this->_var['review_item']['is_best']): ?>
				<span class="is_best_ico"></span>
				<?php endif; ?>
				<?php if ($this->_var['review_item']['reply_count'] > 50): ?>
				<span class="is_hot_ico"></span>
				<?php endif; ?>
				<?php if ($this->_var['review_item']['is_top']): ?>
				<span class="is_top_ico"></span>
				<?php endif; ?>
			</div>
			
			<div class="review_title">
				<?php if ($this->_var['review_item']['title'] != ""): ?>
				<a href="<?php
echo parse_url_tag("u:youhui|review#detail|"."id=".$this->_var['review_item']['id']."".""); 
?>" title="<?php echo $this->_var['review_item']['title']; ?>"><?php echo $this->_var['review_item']['title']; ?></a>
				<?php endif; ?>
				<?php if ($this->_var['review_item']['from_data'] != ''): ?>
					<a href="<?php echo $this->_var['review_item']['rel_url']; ?>" target="_blank" style="font-size:12px; font-weight:normal; font-family:arial;">[查看<?php echo $this->_var['review_item']['rel_name']; ?>]</a>
				<?php endif; ?>
			</div>
			
			
			<?php if (count ( $this->_var['review_item']['imgs'] ) > 0): ?>
			<div class="imgbox" style="overflow:hidden;">
				<img src="<?php echo $this->_var['review_item']['imgs']['0']['image']; ?>"  />
				<div class="blank"></div>
				<?php echo $this->_var['review_item']['imgs']['0']['brief']; ?>
			</div>			
			<div class="blank"></div>
			<?php endif; ?>
			<?php echo nl2br(msubstr($this->_var['review_item']['content'],0,500)); ?> <a class="viewall" href="<?php
echo parse_url_tag("u:youhui|review#detail|"."id=".$this->_var['review_item']['id']."".""); 
?>" title="查看全文">[查看全文 <?php if ($this->_var['review_item']['img_count'] > 0): ?>(图<?php echo $this->_var['review_item']['img_count']; ?>)<?php endif; ?>]</a>
			<div class="blank"></div>
			<div class="store_tag_info">
			<?php $_from = $this->_var['review_item']['group_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
				<div class="tag_info_item">
				<?php echo $this->_var['group']['name']; ?>：
				<?php $_from = $this->_var['group']['tags_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_item');if (count($_from)):
    foreach ($_from AS $this->_var['tag_item']):
?>
				<a href="<?php echo $this->_var['tag_item']['url']; ?>" target="_blank"><?php echo $this->_var['tag_item']['name']; ?></a>&nbsp;&nbsp;
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			
			
			<div class="blank"></div>
			<div class="review_date">
				<?php echo $this->_var['review_item']['user_name']; ?> 在 <?php echo $this->_var['review_item']['create_time_format']; ?> 发表了点评
			</div>
			<div class="blank0"></div>
			<div class="response">
				<span>这篇点评怎么样？</span>
				<p class="response-good"><a onclick="$.Vote_Flower(this,'good_count',<?php echo $this->_var['review_item']['id']; ?>,'有用','dp',DpVoteUpdate);" href="javascript:void(0);">有用</a><b>(<?php echo $this->_var['review_item']['good_count']; ?>)</b></p>
				<p class="response-bad"><a onclick="$.Vote_Flower(this,'bad_count',<?php echo $this->_var['review_item']['id']; ?>,'没用','dp',DpVoteUpdate);" href="javascript:void(0);">没用</a><b>(<?php echo $this->_var['review_item']['bad_count']; ?>)</b></p>
			
				<div class="funcbox">
					<?php if ($this->_var['user_auth'] [ dp ] [ setbest ]): ?><a href="javascript:void(0);" onclick="op_dp_setbest(<?php echo $this->_var['review_item']['id']; ?>);">推荐</a> | <?php endif; ?>
					<?php if ($this->_var['user_auth'] [ dp ] [ del ]): ?><a href="javascript:void(0);" onclick="op_dp_del(<?php echo $this->_var['review_item']['id']; ?>);">删除</a> | <?php endif; ?>
					<a href="<?php
echo parse_url_tag("u:youhui|review#detail|"."id=".$this->_var['review_item']['id']."".""); 
?>">详情</a> | 
					<a href="<?php
echo parse_url_tag("u:youhui|review#detail|"."id=".$this->_var['review_item']['id']."".""); 
?>#reply">回应</a>
					<!--<a href="javascript:void(0);" onclick="$.User_Report('dp',<?php echo $this->_var['review_item']['id']; ?>);">举报</a>-->
				</div>
			</div>
		</div>
		
		<div class="blank"></div>

</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>

还没有任何人发表点评。 我要第一个 [<a href="#review_form" style="color:#416AC2;">发表点评</a>]

<?php endif; ?>
<div class="blank"></div>
<div class="pages" id="review_pages">
	<?php echo $this->_var['pages']; ?>
</div>
<script type="text/javascript">
function DpVoteUpdate(obj,result)
{
	if(result.status)
	$(obj).parent().find("b").html("("+result.message+")");
	else
	$.showErr(result.message);
}
</script>
