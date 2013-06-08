<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:110:"C:/Program Files/Apache Software Foundation/Apache2.2/htdocs/fanwe/app/Tpl/fanwe/inc/insert/load_user_tip.html";i:1;s:100:"C:/Program Files/Apache Software Foundation/Apache2.2/htdocs/fanwe/app/Tpl/fanwe/inc/store_navs.html";i:2;s:108:"C:/Program Files/Apache Software Foundation/Apache2.2/htdocs/fanwe/app/Tpl/fanwe/inc/review/review_form.html";i:3;s:100:"C:/Program Files/Apache Software Foundation/Apache2.2/htdocs/fanwe/app/Tpl/fanwe/inc/topic_form.html";}s:7:"expires";i:1356630530;s:8:"maketime";i:1356626930;}<div class="topic_pub_form">
<textarea class="f-textarea pubform" name="content" id="main_topic_form_textarea" style="width:600px; height:80px;"></textarea>
<div class="blank"></div>
<div class="f_l">
<span class="form_face form_ico form_face_main_topic_form_textarea">表情</span>
<input type="hidden" name="type" value="" />
<input type="hidden" name="group" value="" />
<input type="hidden" name="group_data" value="" />
</div>
<div class="blank1"></div>
<div id="image_box"></div>
<div class="blank1"></div>
<script type="text/javascript" src="http://localhost/fanwe/app/Tpl/fanwe/js/ajaxupload.js"></script>
<script type="text/javascript">
	
		function valid_length()
		{
			var c = $("#main_topic_form_textarea").val();
			if(c.length>5000)
			{
				$("#main_topic_form_textarea").val(c.substr(0,5000));
			}
		}
	$(document).ready(function(){		
		init_main_topic_form_textarea_form();
	});
function init_main_topic_form_textarea_form()
{
	$("#main_topic_form_textarea").bind("change keyup",function(){
			valid_length();
		});	
		$(".form_album").bind("click",function(){
			var html= '<label class="fileuploading hide" style="float:left;" ></label><label class="fileupload" onclick="upd_file(this,\'topic_image\');" style="float:left;"><input type="file" class="filebox" name="topic_image" id="topic_image"/></label><label style="height:24px; line-height:24px; display:inline-block; float:left; margin-left:10px;">上传后选择点击相应的图片插入到主题中</label>';
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
					title:"图片",
					width:350
				});
		});
		
				
				
		
		
		$(".form_face_main_topic_form_textarea").bind("click",function(){
			var obj = this;
			var face_html = $("#face_box_hd_main_topic_form_textarea").html();
			var face_tab_html = $("#face_box_tab_main_topic_form_textarea").html();
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
			bind_main_topic_form_textarea_set_expression();
		});
		
//		var txt = $("#main_topic_form_textarea");
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
							//$("textarea[name='content']").val($("textarea[name='content']").val()+"[img]"+data.id+"[/img]");
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
	insert_main_topic_form_textarea_cnt("[img]"+pos+"[/img]");	
}
function bind_main_topic_form_textarea_set_expression()
{
	$(".emotion_main_topic_form_textarea").find("a").bind("click",function(){
		var o = $(this);
		insert_main_topic_form_textarea_cnt("["+$(o).attr("rel")+"]");	
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
function insert_main_topic_form_textarea_cnt(cnt)
{
	var val = $("#main_topic_form_textarea").val();
//	var pos = $("#main_topic_form_textarea").attr("position");
//	var bpart = val.substr(0,pos);
//	var epart = val.substr(pos,val.length);
//	$("#main_topic_form_textarea").val(bpart+cnt+epart);
	$("#main_topic_form_textarea").val(val+cnt);
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
<div id="face_box_tab_main_topic_form_textarea" style="display:none;">
	<ul class="lb_tab">
		<li class="c rt3 " f="qq" title="qq"><a onclick="toogle_mo(this);" onfocus="$(this).blur();" href="javascript:void(0)">
		QQ	</a></li>
		<li class=" rt3 " f="tusiji" title="tusiji"><a onclick="toogle_mo(this);" onfocus="$(this).blur();" href="javascript:void(0)">
		兔斯基	</a></li>
		</ul>
</div>
<div id="face_box_hd_main_topic_form_textarea" style="display:none;">
<div class="blank1"></div>
<div class="emotion emotion_main_topic_form_textarea qq" f="qq" >
	<a href="javascript:void(0);" title="傲慢" rel="傲慢"><img src="http://localhost/fanwe/public/expression/qq/aoman.gif" /></a>
	<a href="javascript:void(0);" title="白眼" rel="白眼"><img src="http://localhost/fanwe/public/expression/qq/baiyan.gif" /></a>
	<a href="javascript:void(0);" title="鄙视" rel="鄙视"><img src="http://localhost/fanwe/public/expression/qq/bishi.gif" /></a>
	<a href="javascript:void(0);" title="闭嘴" rel="闭嘴"><img src="http://localhost/fanwe/public/expression/qq/bizui.gif" /></a>
	<a href="javascript:void(0);" title="擦汗" rel="擦汗"><img src="http://localhost/fanwe/public/expression/qq/cahan.gif" /></a>
	<a href="javascript:void(0);" title="菜刀" rel="菜刀"><img src="http://localhost/fanwe/public/expression/qq/caidao.gif" /></a>
	<a href="javascript:void(0);" title="差劲" rel="差劲"><img src="http://localhost/fanwe/public/expression/qq/chajin.gif" /></a>
	<a href="javascript:void(0);" title="欢庆" rel="欢庆"><img src="http://localhost/fanwe/public/expression/qq/cheer.gif" /></a>
	<a href="javascript:void(0);" title="虫子" rel="虫子"><img src="http://localhost/fanwe/public/expression/qq/chong.gif" /></a>
	<a href="javascript:void(0);" title="呲牙" rel="呲牙"><img src="http://localhost/fanwe/public/expression/qq/ciya.gif" /></a>
	<a href="javascript:void(0);" title="捶打" rel="捶打"><img src="http://localhost/fanwe/public/expression/qq/da.gif" /></a>
	<a href="javascript:void(0);" title="大便" rel="大便"><img src="http://localhost/fanwe/public/expression/qq/dabian.gif" /></a>
	<a href="javascript:void(0);" title="大兵" rel="大兵"><img src="http://localhost/fanwe/public/expression/qq/dabing.gif" /></a>
	<a href="javascript:void(0);" title="大叫" rel="大叫"><img src="http://localhost/fanwe/public/expression/qq/dajiao.gif" /></a>
	<a href="javascript:void(0);" title="大哭" rel="大哭"><img src="http://localhost/fanwe/public/expression/qq/daku.gif" /></a>
	<a href="javascript:void(0);" title="蛋糕" rel="蛋糕"><img src="http://localhost/fanwe/public/expression/qq/dangao.gif" /></a>
	<a href="javascript:void(0);" title="发怒" rel="发怒"><img src="http://localhost/fanwe/public/expression/qq/fanu.gif" /></a>
	<a href="javascript:void(0);" title="刀" rel="刀"><img src="http://localhost/fanwe/public/expression/qq/dao.gif" /></a>
	<a href="javascript:void(0);" title="得意" rel="得意"><img src="http://localhost/fanwe/public/expression/qq/deyi.gif" /></a>
	<a href="javascript:void(0);" title="凋谢" rel="凋谢"><img src="http://localhost/fanwe/public/expression/qq/diaoxie.gif" /></a>
	<a href="javascript:void(0);" title="饿" rel="饿"><img src="http://localhost/fanwe/public/expression/qq/er.gif" /></a>
	<a href="javascript:void(0);" title="发呆" rel="发呆"><img src="http://localhost/fanwe/public/expression/qq/fadai.gif" /></a>
	<a href="javascript:void(0);" title="发抖" rel="发抖"><img src="http://localhost/fanwe/public/expression/qq/fadou.gif" /></a>
	<a href="javascript:void(0);" title="饭" rel="饭"><img src="http://localhost/fanwe/public/expression/qq/fan.gif" /></a>
	<a href="javascript:void(0);" title="飞吻" rel="飞吻"><img src="http://localhost/fanwe/public/expression/qq/feiwen.gif" /></a>
	<a href="javascript:void(0);" title="奋斗" rel="奋斗"><img src="http://localhost/fanwe/public/expression/qq/fendou.gif" /></a>
	<a href="javascript:void(0);" title="尴尬" rel="尴尬"><img src="http://localhost/fanwe/public/expression/qq/gangga.gif" /></a>
	<a href="javascript:void(0);" title="给力" rel="给力"><img src="http://localhost/fanwe/public/expression/qq/geili.gif" /></a>
	<a href="javascript:void(0);" title="勾引" rel="勾引"><img src="http://localhost/fanwe/public/expression/qq/gouyin.gif" /></a>
	<a href="javascript:void(0);" title="鼓掌" rel="鼓掌"><img src="http://localhost/fanwe/public/expression/qq/guzhang.gif" /></a>
	<a href="javascript:void(0);" title="哈哈" rel="哈哈"><img src="http://localhost/fanwe/public/expression/qq/haha.gif" /></a>
	<a href="javascript:void(0);" title="害羞" rel="害羞"><img src="http://localhost/fanwe/public/expression/qq/haixiu.gif" /></a>
	<a href="javascript:void(0);" title="哈欠" rel="哈欠"><img src="http://localhost/fanwe/public/expression/qq/haqian.gif" /></a>
	<a href="javascript:void(0);" title="花" rel="花"><img src="http://localhost/fanwe/public/expression/qq/hua.gif" /></a>
	<a href="javascript:void(0);" title="坏笑" rel="坏笑"><img src="http://localhost/fanwe/public/expression/qq/huaixiao.gif" /></a>
	<a href="javascript:void(0);" title="挥手" rel="挥手"><img src="http://localhost/fanwe/public/expression/qq/huishou.gif" /></a>
	<a href="javascript:void(0);" title="回头" rel="回头"><img src="http://localhost/fanwe/public/expression/qq/huitou.gif" /></a>
	<a href="javascript:void(0);" title="激动" rel="激动"><img src="http://localhost/fanwe/public/expression/qq/jidong.gif" /></a>
	<a href="javascript:void(0);" title="惊恐" rel="惊恐"><img src="http://localhost/fanwe/public/expression/qq/jingkong.gif" /></a>
	<a href="javascript:void(0);" title="惊讶" rel="惊讶"><img src="http://localhost/fanwe/public/expression/qq/jingya.gif" /></a>
	<a href="javascript:void(0);" title="咖啡" rel="咖啡"><img src="http://localhost/fanwe/public/expression/qq/kafei.gif" /></a>
	<a href="javascript:void(0);" title="可爱" rel="可爱"><img src="http://localhost/fanwe/public/expression/qq/keai.gif" /></a>
	<a href="javascript:void(0);" title="可怜" rel="可怜"><img src="http://localhost/fanwe/public/expression/qq/kelian.gif" /></a>
	<a href="javascript:void(0);" title="磕头" rel="磕头"><img src="http://localhost/fanwe/public/expression/qq/ketou.gif" /></a>
	<a href="javascript:void(0);" title="示爱" rel="示爱"><img src="http://localhost/fanwe/public/expression/qq/kiss.gif" /></a>
	<a href="javascript:void(0);" title="酷" rel="酷"><img src="http://localhost/fanwe/public/expression/qq/ku.gif" /></a>
	<a href="javascript:void(0);" title="难过" rel="难过"><img src="http://localhost/fanwe/public/expression/qq/kuaikule.gif" /></a>
	<a href="javascript:void(0);" title="骷髅" rel="骷髅"><img src="http://localhost/fanwe/public/expression/qq/kulou.gif" /></a>
	<a href="javascript:void(0);" title="困" rel="困"><img src="http://localhost/fanwe/public/expression/qq/kun.gif" /></a>
	<a href="javascript:void(0);" title="篮球" rel="篮球"><img src="http://localhost/fanwe/public/expression/qq/lanqiu.gif" /></a>
	<a href="javascript:void(0);" title="冷汗" rel="冷汗"><img src="http://localhost/fanwe/public/expression/qq/lenghan.gif" /></a>
	<a href="javascript:void(0);" title="流汗" rel="流汗"><img src="http://localhost/fanwe/public/expression/qq/liuhan.gif" /></a>
	<a href="javascript:void(0);" title="流泪" rel="流泪"><img src="http://localhost/fanwe/public/expression/qq/liulei.gif" /></a>
	<a href="javascript:void(0);" title="礼物" rel="礼物"><img src="http://localhost/fanwe/public/expression/qq/liwu.gif" /></a>
	<a href="javascript:void(0);" title="爱心" rel="爱心"><img src="http://localhost/fanwe/public/expression/qq/love.gif" /></a>
	<a href="javascript:void(0);" title="骂人" rel="骂人"><img src="http://localhost/fanwe/public/expression/qq/ma.gif" /></a>
	<a href="javascript:void(0);" title="不开心" rel="不开心"><img src="http://localhost/fanwe/public/expression/qq/nanguo.gif" /></a>
	<a href="javascript:void(0);" title="不好" rel="不好"><img src="http://localhost/fanwe/public/expression/qq/no.gif" /></a>
	<a href="javascript:void(0);" title="很好" rel="很好"><img src="http://localhost/fanwe/public/expression/qq/ok.gif" /></a>
	<a href="javascript:void(0);" title="佩服" rel="佩服"><img src="http://localhost/fanwe/public/expression/qq/peifu.gif" /></a>
	<a href="javascript:void(0);" title="啤酒" rel="啤酒"><img src="http://localhost/fanwe/public/expression/qq/pijiu.gif" /></a>
	<a href="javascript:void(0);" title="乒乓" rel="乒乓"><img src="http://localhost/fanwe/public/expression/qq/pingpang.gif" /></a>
	<a href="javascript:void(0);" title="撇嘴" rel="撇嘴"><img src="http://localhost/fanwe/public/expression/qq/pizui.gif" /></a>
	<a href="javascript:void(0);" title="强" rel="强"><img src="http://localhost/fanwe/public/expression/qq/qiang.gif" /></a>
	<a href="javascript:void(0);" title="亲亲" rel="亲亲"><img src="http://localhost/fanwe/public/expression/qq/qinqin.gif" /></a>
	<a href="javascript:void(0);" title="出丑" rel="出丑"><img src="http://localhost/fanwe/public/expression/qq/qioudale.gif" /></a>
	<a href="javascript:void(0);" title="足球" rel="足球"><img src="http://localhost/fanwe/public/expression/qq/qiu.gif" /></a>
	<a href="javascript:void(0);" title="拳头" rel="拳头"><img src="http://localhost/fanwe/public/expression/qq/quantou.gif" /></a>
	<a href="javascript:void(0);" title="弱" rel="弱"><img src="http://localhost/fanwe/public/expression/qq/ruo.gif" /></a>
	<a href="javascript:void(0);" title="色" rel="色"><img src="http://localhost/fanwe/public/expression/qq/se.gif" /></a>
	<a href="javascript:void(0);" title="闪电" rel="闪电"><img src="http://localhost/fanwe/public/expression/qq/shandian.gif" /></a>
	<a href="javascript:void(0);" title="胜利" rel="胜利"><img src="http://localhost/fanwe/public/expression/qq/shengli.gif" /></a>
	<a href="javascript:void(0);" title="衰" rel="衰"><img src="http://localhost/fanwe/public/expression/qq/shuai.gif" /></a>
	<a href="javascript:void(0);" title="睡觉" rel="睡觉"><img src="http://localhost/fanwe/public/expression/qq/shuijiao.gif" /></a>
	<a href="javascript:void(0);" title="太阳" rel="太阳"><img src="http://localhost/fanwe/public/expression/qq/taiyang.gif" /></a>
</div>
<div class="emotion emotion_main_topic_form_textarea tusiji" f="tusiji" style="display:none;">
	<a href="javascript:void(0);" title="啊" rel="啊"><img src="http://localhost/fanwe/public/expression/tusiji/aa.gif" /></a>
	<a href="javascript:void(0);" title="暗爽" rel="暗爽"><img src="http://localhost/fanwe/public/expression/tusiji/anshuang.gif" /></a>
	<a href="javascript:void(0);" title="byebye" rel="byebye"><img src="http://localhost/fanwe/public/expression/tusiji/baibai.gif" /></a>
	<a href="javascript:void(0);" title="不行" rel="不行"><img src="http://localhost/fanwe/public/expression/tusiji/buxing.gif" /></a>
	<a href="javascript:void(0);" title="戳眼" rel="戳眼"><img src="http://localhost/fanwe/public/expression/tusiji/chuoyan.gif" /></a>
	<a href="javascript:void(0);" title="很得意" rel="很得意"><img src="http://localhost/fanwe/public/expression/tusiji/deyi.gif" /></a>
	<a href="javascript:void(0);" title="顶" rel="顶"><img src="http://localhost/fanwe/public/expression/tusiji/ding.gif" /></a>
	<a href="javascript:void(0);" title="抖抖" rel="抖抖"><img src="http://localhost/fanwe/public/expression/tusiji/douxiong.gif" /></a>
	<a href="javascript:void(0);" title="哼" rel="哼"><img src="http://localhost/fanwe/public/expression/tusiji/heng.gif" /></a>
	<a href="javascript:void(0);" title="挥汗" rel="挥汗"><img src="http://localhost/fanwe/public/expression/tusiji/huihan.gif" /></a>
	<a href="javascript:void(0);" title="昏迷" rel="昏迷"><img src="http://localhost/fanwe/public/expression/tusiji/hunmi.gif" /></a>
	<a href="javascript:void(0);" title="互拍" rel="互拍"><img src="http://localhost/fanwe/public/expression/tusiji/hupai.gif" /></a>
	<a href="javascript:void(0);" title="瞌睡" rel="瞌睡"><img src="http://localhost/fanwe/public/expression/tusiji/keshui.gif" /></a>
	<a href="javascript:void(0);" title="笼子" rel="笼子"><img src="http://localhost/fanwe/public/expression/tusiji/longzi.gif" /></a>
	<a href="javascript:void(0);" title="听歌" rel="听歌"><img src="http://localhost/fanwe/public/expression/tusiji/music.gif" /></a>
	<a href="javascript:void(0);" title="奶瓶" rel="奶瓶"><img src="http://localhost/fanwe/public/expression/tusiji/naiping.gif" /></a>
	<a href="javascript:void(0);" title="扭背" rel="扭背"><img src="http://localhost/fanwe/public/expression/tusiji/niubei.gif" /></a>
	<a href="javascript:void(0);" title="拍砖" rel="拍砖"><img src="http://localhost/fanwe/public/expression/tusiji/paizhuan.gif" /></a>
	<a href="javascript:void(0);" title="飘过" rel="飘过"><img src="http://localhost/fanwe/public/expression/tusiji/piaoguo.gif" /></a>
	<a href="javascript:void(0);" title="揉脸" rel="揉脸"><img src="http://localhost/fanwe/public/expression/tusiji/roulian.gif" /></a>
	<a href="javascript:void(0);" title="闪闪" rel="闪闪"><img src="http://localhost/fanwe/public/expression/tusiji/shanshan.gif" /></a>
	<a href="javascript:void(0);" title="生日" rel="生日"><img src="http://localhost/fanwe/public/expression/tusiji/shengri.gif" /></a>
	<a href="javascript:void(0);" title="摊手" rel="摊手"><img src="http://localhost/fanwe/public/expression/tusiji/tanshou.gif" /></a>
	<a href="javascript:void(0);" title="躺坐" rel="躺坐"><img src="http://localhost/fanwe/public/expression/tusiji/tanzuo.gif" /></a>
	<a href="javascript:void(0);" title="歪头" rel="歪头"><img src="http://localhost/fanwe/public/expression/tusiji/waitou.gif" /></a>
	<a href="javascript:void(0);" title="我踢" rel="我踢"><img src="http://localhost/fanwe/public/expression/tusiji/woti.gif" /></a>
	<a href="javascript:void(0);" title="无聊" rel="无聊"><img src="http://localhost/fanwe/public/expression/tusiji/wuliao.gif" /></a>
	<a href="javascript:void(0);" title="醒醒" rel="醒醒"><img src="http://localhost/fanwe/public/expression/tusiji/xingxing.gif" /></a>
	<a href="javascript:void(0);" title="睡了" rel="睡了"><img src="http://localhost/fanwe/public/expression/tusiji/xixishui.gif" /></a>
	<a href="javascript:void(0);" title="旋转" rel="旋转"><img src="http://localhost/fanwe/public/expression/tusiji/xuanzhuan.gif" /></a>
	<a href="javascript:void(0);" title="摇晃" rel="摇晃"><img src="http://localhost/fanwe/public/expression/tusiji/yaohuang.gif" /></a>
	<a href="javascript:void(0);" title="耶" rel="耶"><img src="http://localhost/fanwe/public/expression/tusiji/yeah.gif" /></a>
	<a href="javascript:void(0);" title="郁闷" rel="郁闷"><img src="http://localhost/fanwe/public/expression/tusiji/yumen.gif" /></a>
	<a href="javascript:void(0);" title="晕厥" rel="晕厥"><img src="http://localhost/fanwe/public/expression/tusiji/yunjue.gif" /></a>
	<a href="javascript:void(0);" title="砸" rel="砸"><img src="http://localhost/fanwe/public/expression/tusiji/za.gif" /></a>
	<a href="javascript:void(0);" title="震荡" rel="震荡"><img src="http://localhost/fanwe/public/expression/tusiji/zhendang.gif" /></a>
	<a href="javascript:void(0);" title="撞墙" rel="撞墙"><img src="http://localhost/fanwe/public/expression/tusiji/zhuangqiang.gif" /></a>
	<a href="javascript:void(0);" title="转头" rel="转头"><img src="http://localhost/fanwe/public/expression/tusiji/zhuantou.gif" /></a>
	<a href="javascript:void(0);" title="抓墙" rel="抓墙"><img src="http://localhost/fanwe/public/expression/tusiji/zhuaqiang.gif" /></a>
</div>
</div>
</div>