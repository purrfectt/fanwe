<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['darencss'][] = $this->_var['TMPL_REAL']."/css/daren.css";
$this->_var['darencss'][] = $this->_var['TMPL_REAL']."/css/biz.css";
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['darencss'],
);
echo $k['name']($k['v']);
?>" />
<div class="blank"></div>
<div class="daren_submit_title"></div>
<div class="blank"></div>
<div class="daren_submit_desc"></div>
<div class="blank"></div>
<div class="daren_submit_tq">
	<div class="tq">得到专属身份标识，您将具有一呼百应的号召力</div>
	<div class="tq">得到网站达人页的精彩推荐资格</div>
	<div class="tq">得到广大热爱生活的观众的追捧与关注</div>
	<div class="tq">参加定期的达人专属活动</div>
	<div class="tq">得到定期举行的打折促销活动优先参与权</div>
	<div class="tq">优先得到商家提供的免费体验机会</div>
</div>
<div class="blank"></div>
<div class="daren_submit_bz">
	<div class="bz">有头像，头像积极向上，最好是本人真实头像</div>
	<div class="bz">关注数不低于20个人</div>
	<div class="bz">观众不低于30个人</div>
	<div class="bz">至少要发布20条生活分享或优惠信息</div>
	<div class="bz">提供可证明在某一领域擅长的材料，如人气博客，个人主页或作品照片等</div>
	<div class="blank"></div>
	<span class="bz_tip">(注：随着网站的成长，我们将逐步提高达人的申请标准 ，并会定期取消不合格的达人标识)</span>
</div>
<div class="blank"></div>
<!--
<div class="daren_submit_how">
	
		若符合达人申请标准，请发邮件至 <a href="mailto:<?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'REPLY_ADDRESS',
);
echo $k['name']($k['v']);
?>" style="color:#f30;"><?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'REPLY_ADDRESS',
);
echo $k['name']($k['v']);
?></a> 进行申请。我们将在3个工作日内完成审核，并以邮件的方式通知你。
		<br />
		请按照以下格式发送申请邮件，这会加快我们的认证审核速度：
		<ul>
			<li><span style="color:#f30;">邮件标题：</span>某某(你的帐号)申请网站达人认证</li>
			<li><span style="color:#f30;">邮件内容：</span>登录帐号和证明材料</li>
		</ul>
	
	
</div>
-->
<style type="text/css">
	.user-lr-box-left .field .ipttxt {
  background: none repeat scroll 0 0 #FAFAFA;
  font-family: Arial;
  font-weight: bolder;
  height: 20px;
  line-height: 20px;
  padding: 5px 10px;
}
</style>
<div class="user-lr-box-left" style="width:960px; padding:20px 0px;">
<form>
<div class="field ">
	<label>达人称号</label>
	<input type="text" tabindex="1" size="90" name="daren_title" class="f-input ipttxt" style="width:750px;" value="">
</div>
<div class="field ">
	<label>申请理由</label>
	<textarea class="f-input ipttxt" name="reason" style="width:750px; height:100px;"></textarea>
</div>
								<div class="clear"></div>
								
								<div class="act">
									
									<input type="button" value="立即申请" name="commit" onclick="daren_submit();" class="biz_pub_btn" />
									
								</div>
</form>
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>