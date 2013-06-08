<?php echo $this->fetch('inc/header.html'); ?> 
<div class="blank"></div>
<div class="inc">
	<?php echo $this->fetch('inc/step_nav.html'); ?>
	<div class="step-inc-main clearfix">
		<form>
		<table>
			<tr>
				<th colspan="2" style="text-align:left;padding-bottom:13px"><?php echo $this->_var['LANG']['STEP_NOW_AVATAR']; ?></th>
				<th style="text-align:left;;padding-bottom:13px"><?php echo $this->_var['LANG']['STEP_UP_AVATAR']; ?></th>
			</tr>
			<tr>
			<td valign="top" width="191">
					<img id="avatar_big" src="<?php 
$k = array (
  'name' => 'get_user_avatar',
  'uid' => $this->_var['user_info']['id'],
  'type' => 'big',
);
echo $k['name']($k['uid'],$k['type']);
?>" style="width:182px; height:182px; border:2px solid #f2f2f2;" />						
			</td>
			<td width="151">
				<img id="avatar_middle" src="<?php 
$k = array (
  'name' => 'get_user_avatar',
  'uid' => $this->_var['user_info']['id'],
  'type' => 'middle',
);
echo $k['name']($k['uid'],$k['type']);
?>" style="width:120px; height:120px; border:2px solid #f2f2f2;" />	
				<div class="blank"></div>
				<img id="avatar_small" src="<?php 
$k = array (
  'name' => 'get_user_avatar',
  'uid' => $this->_var['user_info']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>" style="width:48px; height:48px; border:2px solid #f2f2f2;" />	
			</td>
			<td valign="top">
					<label class="fileupload" onclick="upd_file(this,'avatar_file',<?php echo $this->_var['user_info']['id']; ?>);">
					<input type="file" class="filebox" name="avatar_file" id="avatar_file"/>
					
					</label>
				<label class="fileuploading hide" ></label>	
				<div class="clear"></div>
				<div class="step_allow_type"><?php echo sprintf($this->_var['LANG']['STEP_UP_AVATAR_TYPE'],app_conf("ALLOW_IMAGE_EXT")); ?></div>
			</td>
			</tr>
		</table>
		<div class="blank10"></div>
		<div class="blank10"></div>
		<div class="act" style="margin-left:0;padding-left:5px">
			<input type="button" class="ok-next-btn f_l" value="<?php echo $this->_var['LANG']['MODIFY']; ?>" onclick="window.location.href='<?php
echo parse_url_tag("u:shop|user#stepthree|"."".""); 
?>'">
			<span class="next-href f_l"><a href="javascript:void(0);" onclick="skip_user_profile();"><?php echo $this->_var['LANG']['STEP_NEXT']; ?></a></span>
		</div>
		<div class="clear"></div>
		</form>
	</div>
</div>
<script type="text/javascript" src="<?php echo $this->_var['TMPL']; ?>/js/ajaxupload.js"></script>
<script type="text/javascript">
function upd_file(obj,file_id,uid)
{	
	$("input[name='"+file_id+"']").bind("change",function(){			
		$(obj).hide();
		$(obj).parent().find(".fileuploading").removeClass("hide");
		$(obj).parent().find(".fileuploading").removeClass("show");
		$(obj).parent().find(".fileuploading").addClass("show");
		  $.ajaxFileUpload
		   (
			   {
				    url:APP_ROOT+'/index.php?ctl=avatar&act=upload&uid='+uid,
				    secureuri:false,
				    fileElementId:file_id,
				    dataType: 'json',
				    success: function (data, status)
				    {
				   		$(obj).show();
				   		$(obj).parent().find(".fileuploading").removeClass("hide");
						$(obj).parent().find(".fileuploading").removeClass("show");
						$(obj).parent().find(".fileuploading").addClass("hide");
				   		if(data.status==1)
				   		{
				   			document.getElementById("avatar_big").src = data.big_url+"?r="+Math.random();
							document.getElementById("avatar_middle").src = data.middle_url+"?r="+Math.random();
							document.getElementById("avatar_small").src =  data.small_url+"?r="+Math.random();
				   		}
				   		else
				   		{
				   			$.showErr(data.msg);
				   		}
				   		
				    },
				    error: function (data, status, e)
				    {
						$.showErr(data.responseText);;
				    	$(obj).show();
				    	$(obj).parent().find(".fileuploading").removeClass("hide");
						$(obj).parent().find(".fileuploading").removeClass("show");
						$(obj).parent().find(".fileuploading").addClass("hide");
				    }
			   }
		   );
		  $("input[name='"+file_id+"']").unbind("change");
	});	
}
</script>
<?php echo $this->fetch('inc/footer.html'); ?>