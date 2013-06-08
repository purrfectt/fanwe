<div class="topic_pub_form">
<textarea class="f-textarea pubform" name="<?php echo $this->_var['text_name']; ?>" id="<?php echo $this->_var['box_id']; ?>" style="width:<?php echo $this->_var['width']; ?>; height:<?php echo $this->_var['height']; ?>;"></textarea>
<div class="blank"></div>
<div class="f_l">
<?php if ($this->_var['is_img']): ?>
<span class="form_album form_ico"><?php echo $this->_var['LANG']['ALBUM']; ?></span>
<?php endif; ?>
<span class="form_face form_ico form_face_<?php echo $this->_var['box_id']; ?>"><?php echo $this->_var['LANG']['FACE']; ?></span>
<?php if ($this->_var['is_topic']): ?>
<span class="form_topic form_ico"><?php echo $this->_var['LANG']['FORM_TOPIC']; ?></span>
<?php endif; ?>
<?php if ($this->_var['is_event']): ?>
<?php $_from = $this->_var['fetch_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fetch');if (count($_from)):
    foreach ($_from AS $this->_var['fetch']):
?>
	<span class="form_ico" style="background:url(<?php echo $this->_var['fetch']['icon']; ?>) no-repeat;" onclick="fetch_<?php echo $this->_var['fetch']['class_name']; ?>(this,'<?php echo $this->_var['fetch']['class_name']; ?>','<?php echo $this->_var['fetch']['show_name']; ?>');"><?php echo $this->_var['fetch']['show_name']; ?></span>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<input type="hidden" name="type" value="" />
<input type="hidden" name="group" value="" />
<input type="hidden" name="group_data" value="" />
</div>
<?php if ($this->_var['show_btn']): ?>
<div class="f_r verify_row">
	<?php if ($this->_var['is_event']): ?>
	<span class="f_l">
	<?php 
$k = array (
  'name' => 'get_syn_class',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
	<label>同步到微博<input type="checkbox" name="syn_weibo" value="1" checked="checked" /></label>
	<a href="<?php
echo parse_url_tag("u:shop|uc_center#setweibo|"."".""); 
?>">设置</a>
	</span>
	<?php endif; ?>
	<?php if (app_conf ( "VERIFY_IMAGE" ) == 1): ?>
		<input type="text" value="" class="f-input" name="verify"   style="margin-left:10px;" />	
		<img src="<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand=<?php 
$k = array (
  'name' => 'rand',
);
echo $k['name']();
?>" onclick="this.src='<?php echo $this->_var['APP_ROOT']; ?>/verify.php?rand='+ Math.random();" title="看不清楚？换一张" />			
	<?php endif; ?>
	&nbsp;&nbsp;
	<input type="button" onclick="ajax_submit_form(this);" class="topic_form_button" name="commit" value="<?php echo $this->_var['LANG']['SUBMIT_FORM']; ?>">			
</div>
<?php endif; ?>
<div class="blank1"></div>
<?php if ($this->_var['show_tag']): ?>
	<?php echo $this->_var['LANG']['TOPIC_TAG']; ?>：
	<?php $_from = $this->_var['tag_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_0_84748100_1345531131');if (count($_from)):
    foreach ($_from AS $this->_var['tag_0_84748100_1345531131']):
?>
	<span class="tag_item"><span><?php echo $this->_var['tag_0_84748100_1345531131']['name']; ?></span><input type="hidden" name="tag[]" /></span>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<label>
	<?php echo $this->_var['LANG']['OTHER_TAG']; ?><input type="checkbox" name="other_tag" />
	</label>
	<span class="other_tag" style="display:none;">
	<input type="text" name="tag[]" />
	<?php echo $this->_var['LANG']['OTHER_TAG_TIP']; ?>
	</span>
	<div class="blank5"></div>
<?php endif; ?>
<div id="image_box"></div>
<div class="blank1"></div>
<script type="text/javascript" src="<?php echo $this->_var['TMPL']; ?>/js/ajaxupload.js"></script>
<script type="text/javascript">
	
	<?php if ($this->_var['is_topic']): ?>
	 //高亮显示  
	 function chooseText(target,content)  
	 {  
	     var target = document.getElementById(target);  
		 var origin_content = target.value;
	     var start = origin_content.indexOf(content);		
		 var l = target.value.length;
	     if(target.createTextRange){//IE浏览器  
	         var range = target.createTextRange();	         
	         range.moveEnd("character",-l);                  
	         range.moveEnd("character",content.length+origin_content.indexOf(content));
	         range.moveStart("character", start);
	         range.select();  
	     }else{  
	         target.setSelectionRange(start,start+content.length);  
	         target.focus();  
	     }  
	 }  
	 <?php endif; ?>
	function valid_length()
		{
			var c = $("#<?php echo $this->_var['box_id']; ?>").val();
			if(c.length>5000)
			{
				$("#<?php echo $this->_var['box_id']; ?>").val(c.substr(0,5000));
			}
		}
	$(document).ready(function(){		
		init_<?php echo $this->_var['box_id']; ?>_form();
	});

function init_<?php echo $this->_var['box_id']; ?>_form()
{
	$("#<?php echo $this->_var['box_id']; ?>").bind("change keyup",function(){
			valid_length();
		});	
		$(".form_album").bind("click",function(){
			var html= '<label class="fileuploading hide" style="float:left;" ></label><label class="fileupload" onclick="upd_file(this,\'topic_image\');" style="float:left;"><input type="file" class="filebox" name="topic_image" id="topic_image"/></label><label style="height:24px; line-height:24px; display:inline-block; float:left; margin-left:10px;"><?php echo $this->_var['LANG']['TOPIC_IMAGE_TIP']; ?></label>';
			var obj = this;
			$.weeboxs.open(
				html, 
				{
					boxid:'form_pop_box',
					contentType:'text',
					position:'element',
					trigger:obj,
					draggable:false,
					modal:false,
					showButton:false,
					title:"<?php echo $this->_var['LANG']['ALBUM']; ?>",
					width:350
				});
		});
		
		<?php if ($this->_var['show_tag']): ?>		
		$(".other_tag").hide();
		$("input[name='other_tag']").attr("checked",false);
		$("input[name='other_tag']").bind("click",function(){
			if($(this).attr("checked"))
			{
				$(".other_tag").show();
			}
			else
			{
				$(".other_tag").hide();
				$(this).parent().find("input[name='tag[]']").val("");
			}
		});		
		$("input[name='tag[]']").val("");
		$(".tag_item").bind("click",function(){
			var tag = $(this).find("span").html();
			var tag_box = $(this).find("input[name='tag[]']");
			if($(tag_box).val()=='')
			{
				$(tag_box).val(tag);
				$(this).addClass("tag_item_c");
			}
			else
			{
				$(tag_box).val("");
				$(this).removeClass("tag_item_c");
			}
		});
		<?php endif; ?>
		
		<?php if ($this->_var['is_topic']): ?>
		$(".form_topic").bind("click",function(){
			var obj = this;
			var cnt = $("#<?php echo $this->_var['box_id']; ?>").val();
			var topic_append = "#<?php echo $this->_var['LANG']['SEND_TOPIC_TIP']; ?>#";
			var topic_prepare = "<?php echo $this->_var['LANG']['SEND_TOPIC_TIP']; ?>";
			if(cnt.indexOf(topic_append)==-1)
			insert_<?php echo $this->_var['box_id']; ?>_cnt(topic_append);			
			$("#<?php echo $this->_var['box_id']; ?>").parent().find("input[name='group']").val("share");
			chooseText("<?php echo $this->_var['box_id']; ?>",topic_prepare);
			valid_length();
		});
		<?php endif; ?>
		
		
		
		$(".form_face_<?php echo $this->_var['box_id']; ?>").bind("click",function(){
			var obj = this;
			var face_html = $("#face_box_hd_<?php echo $this->_var['box_id']; ?>").html();
			var face_tab_html = $("#face_box_tab_<?php echo $this->_var['box_id']; ?>").html();
			$.weeboxs.open(
				face_html, 
				{
					boxid:'form_pop_box',
					contentType:'text',
					position:'element',
					trigger:obj,
					draggable:false,
					modal:false,
					showButton:false,
					title:face_tab_html,
					width:405
				});
			bind_<?php echo $this->_var['box_id']; ?>_set_expression();
		});
		
//		var txt = $("#<?php echo $this->_var['box_id']; ?>");
//		txt.attr({"position":txt.val().length});
//			
//		txt.bind('click', function(){
//				txt.attr({"position":$(this).position()});
//		});
//			
//		txt.bind('keyup', function(){
//				txt.attr({"position":$(this).position()});
//		});
	
}
	
	
<?php $_from = $this->_var['fetch_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fetch');if (count($_from)):
    foreach ($_from AS $this->_var['fetch']):
?>
			function fetch_<?php echo $this->_var['fetch']['class_name']; ?>(obj,class_name,show_name)
			{
				var html= '<div id="pop_cnt_<?php echo $this->_var['fetch']['class_name']; ?>">请输入完整的URL<br /><input type="text" name="fetch_<?php echo $this->_var['fetch']['class_name']; ?>" style="border:#ccc solid 1px; width:230px;" /> <input type="button" class="topic_form_button" value="确定" onclick="do_fetch(\'<?php echo $this->_var['fetch']['class_name']; ?>\');" /></div>';
				$.weeboxs.open(
					html, 
					{
						boxid:'form_pop_box',
						contentType:'text',
						position:'element',
						trigger:obj,
						draggable:false,
						modal:false,
						showButton:false,
						title:show_name,
						width:350
					});
			}
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

//执行采集
function do_fetch(class_name)
{
	var input_name = "fetch_"+class_name;
	var url = $("input[name='"+input_name+"']").val();
	if(url=="")
	{
		$.showErr("请输入URL地址");
	}
	else
	{
		$("#pop_cnt_"+class_name).html("正在加载中，请稍候......");
		var query = new Object();
		query.class_name = class_name;
		query.url = url;
		var ajaxurl = APP_ROOT+"/shop.php?ctl=ajax&act=do_fetch";
		$.ajax({ 
			url: ajaxurl,
			data:query,
			type: "POST",
			dataType: "json",
			success: function(ajaxobj){
				$(".dialog-close").click();
				if(ajaxobj.status)
				{
					//返回结构
					/**
					 *  array("group"=>"","group_data"=>"","content"=>"","tags"=>"","images"=>array("id"=>"","url"=>""));
					 */
					//采集成功，执行操作 1:保存图片 2:获取内容 3:获取标签 4:保存group即接口名 5:保存group_data 6:类型
					$("input[name='group']").val(ajaxobj.group);
					$("input[name='group_data']").val(ajaxobj.group_data);
					$("input[name='type']").val(ajaxobj.type);
					$("textarea[name='content']").val(ajaxobj.content);
					if(ajaxobj.tags!="")
					{
						$("input[name='other_tag']").attr("checked",true);
						$(".other_tag").find("input[name='tag[]']").val(ajaxobj.tags);
						$(".other_tag").show();
					}
					if(ajaxobj.images.length>0)
					{
						$("#image_box").html("");
						for(var i = 0;i<ajaxobj.images.length;i++)
						{
							data = ajaxobj.images[i];							
							pos = parseInt($("#image_box").find(".image_item").length) + 1;
							var html = "<div class='image_item'><input type='hidden' name='topic_image_idx["+pos+"]' value='"+pos+"' /><input type='hidden' name='topic_image_id["+pos+"]' value='"+data.id+"' /><input type='hidden' name='topic_image_url["+pos+"]' value='"+data.url+"' /><span class='del_image' onclick='del_img(this);'>x</span><img src='"+APP_ROOT+"/"+data.url+"' /></div>";
							$("#image_box").html($("#image_box").html()+html);							
						}
					}					
				}
				else
				{
					$.showErr(ajaxobj.info);
				}
			},
			error:function(ajaxobj)
			{
//				if(ajaxobj.responseText!='')
//				alert(LANG['REFRESH_TOO_FAST']);
			}
		});	
	}
}
		
function upd_file(obj,file_id)
{	
	$("input[name='"+file_id+"']").bind("change",function(){	
		if($("#image_box").find(".image_item").length==5)
		{
			$.showErr("每个主题上传的图片不要超过5张");
			return;
		}		
		$(obj).hide();
		$(obj).parent().parent().find(".fileuploading").removeClass("hide");
		$(obj).parent().parent().find(".fileuploading").removeClass("show");
		$(obj).parent().parent().find(".fileuploading").addClass("show");
		  $.ajaxFileUpload
		   (
			   {
				    url:APP_ROOT+'/upload.php',
				    secureuri:false,
				    fileElementId:file_id,
				    dataType: 'json',
				    success: function (data, status)
				    {
				   		$(obj).show();
				   		$(obj).parent().parent().find(".fileuploading").removeClass("hide");
						$(obj).parent().parent().find(".fileuploading").removeClass("show");
						$(obj).parent().parent().find(".fileuploading").addClass("hide");
				   		if(data.error==0)
				   		{
							var pos = parseInt($("#image_box").find(".image_item").length) + 1;
							//var html = "<div class='image_item'><input type='hidden' name='topic_image_idx["+pos+"]' value='"+pos+"' /><input type='hidden' name='topic_image_id["+pos+"]' value='"+data.id+"' /><input type='hidden' name='topic_image_url["+pos+"]' value='"+data.message+"' /><span class='del_image' onclick='del_img(this);'>x</span><a href='javascript:;' onclick='set_img_pos("+data.id+")' title='点击图片可在指定位置插入该图片' ><img src='"+APP_ROOT+"/"+data.message+"' /></a></div>";
							var html = "<div class='image_item'><input type='hidden' name='topic_image_idx["+pos+"]' value='"+pos+"' /><input type='hidden' name='topic_image_id["+pos+"]' value='"+data.id+"' /><input type='hidden' name='topic_image_url["+pos+"]' value='"+data.message+"' /><span class='del_image' onclick='del_img(this);'>x</span><img src='"+APP_ROOT+"/"+data.message+"' /></div>";
							$("#image_box").html($("#image_box").html()+html);
				   			$("#form_pop_box").hide();
							//$("textarea[name='<?php echo $this->_var['text_name']; ?>']").val($("textarea[name='<?php echo $this->_var['text_name']; ?>']").val()+"[img]"+data.id+"[/img]");
				   		}
				   		else
				   		{
				   			$.showErr(data.message);
				   		}
				   		
				    },
				    error: function (data, status, e)
				    {
						$.showErr(data.responseText);;
				    	$(obj).show();
				    	$(obj).parent().parent().find(".fileuploading").removeClass("hide");
						$(obj).parent().parent().find(".fileuploading").removeClass("show");
						$(obj).parent().parent().find(".fileuploading").addClass("hide");
				    }
			   }
		   );
		  $("input[name='"+file_id+"']").unbind("change");
	});	
}
function del_img(o)
{
	$(o).parent().remove();
}
function set_img_pos(pos)
{
	insert_<?php echo $this->_var['box_id']; ?>_cnt("[img]"+pos+"[/img]");	
}
function bind_<?php echo $this->_var['box_id']; ?>_set_expression()
{
	$(".emotion_<?php echo $this->_var['box_id']; ?>").find("a").bind("click",function(){
		var o = $(this);
		insert_<?php echo $this->_var['box_id']; ?>_cnt("["+$(o).attr("rel")+"]");	
	});
	
}
function toogle_mo(o)
{
	$(o).blur();
	$(o).parent().parent().parent().parent().parent().find(".emotion").hide();
	$(o).parent().parent().find("li").removeClass("c");
	$(o).parent().addClass("c");
	$(o).parent().parent().parent().parent().parent().find(".emotion[f='"+$(o).parent().attr("f")+"']").show();
}

function insert_<?php echo $this->_var['box_id']; ?>_cnt(cnt)
{
	var val = $("#<?php echo $this->_var['box_id']; ?>").val();
//	var pos = $("#<?php echo $this->_var['box_id']; ?>").attr("position");
//	var bpart = val.substr(0,pos);
//	var epart = val.substr(pos,val.length);
//	$("#<?php echo $this->_var['box_id']; ?>").val(bpart+cnt+epart);
	$("#<?php echo $this->_var['box_id']; ?>").val(val+cnt);
}


//  获取光标位置
//	$.fn.position = function(){
//		var s,e,range,stored_range;
//		if(this[0].selectionStart == undefined)
//		{
//			var selection=document.selection;
//			if(selection!=undefined)
//			{
//				if (this[0].tagName.toLowerCase() != "textarea")
//				{
//					var val = this.val();
//					range = selection.createRange().duplicate();
//					range.moveEnd("character", val.length);
//					s = (range.text == "" ? val.length:val.lastIndexOf(range.text));
//					range = selection.createRange().duplicate();
//					range.moveStart("character", -val.length);
//					e = range.text.length;
//				}
//				else
//				{
//					range = selection.createRange(),
//					stored_range = range.duplicate();
//					stored_range.moveToElementText(this[0]);
//					stored_range.setEndPoint('EndToEnd', range);
//					s = stored_range.text.length - range.text.length;
//					e = s + range.text.length;
//				}
//			}
//			else
//			return 0;
//		}
//		else
//		{
//			s=this[0].selectionStart,
//			e=this[0].selectionEnd;
//		}
//		var te=this[0].value.substring(s,e);
//		return s;
//	};


</script>


<div id="face_box_tab_<?php echo $this->_var['box_id']; ?>" style="display:none;">
	<ul class="lb_tab">
	<?php $_from = $this->_var['expression']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	<li class="<?php if ($this->_var['key'] == 'qq'): ?>c<?php endif; ?> rt3 " f="<?php echo $this->_var['key']; ?>" title="<?php echo $this->_var['key']; ?>"><a onclick="toogle_mo(this);" onfocus="$(this).blur();" href="javascript:void(0)">
		<?php echo $GLOBALS['lang']['EXPRESSION_'.strtoupper($GLOBALS['tmpl']->_var['key'])];?>
	</a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>
<div id="face_box_hd_<?php echo $this->_var['box_id']; ?>" style="display:none;">
<div class="blank1"></div>
<?php $_from = $this->_var['expression']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<div class="emotion emotion_<?php echo $this->_var['box_id']; ?> <?php echo $this->_var['key']; ?>" f="<?php echo $this->_var['key']; ?>" <?php if ($this->_var['key'] != 'qq'): ?>style="display:none;"<?php endif; ?>>

<?php $_from = $this->_var['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'exp');if (count($_from)):
    foreach ($_from AS $this->_var['exp']):
?>
	<a href="javascript:void(0);" title="<?php echo $this->_var['exp']['title']; ?>" rel="<?php echo $this->_var['exp']['emotion']; ?>"><img src="<?php echo $this->_var['exp']['filename']; ?>" /></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>