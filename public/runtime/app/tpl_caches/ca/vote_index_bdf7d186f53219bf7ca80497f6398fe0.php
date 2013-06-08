<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:96:"C:/Program Files/Apache Software Foundation/Apache2.2/htdocs/fanwe/app/Tpl/fanwe/vote_index.html";i:1;s:101:"C:/Program Files/Apache Software Foundation/Apache2.2/htdocs/fanwe/app/Tpl/fanwe/inc/vote_header.html";}s:7:"expires";i:1370710136;s:8:"maketime";i:1370706536;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小调查 - 方维o2o商业系统 - 方维o2o商业系统,国内最优秀的PHP开源o2o系统</title>
<meta name="keywords" content="方维o2o商业系统关键词" />
<meta name="description" content="方维o2o商业系统描述" />
<link rel="stylesheet" type="text/css" href="http://localhost/fanwe/public/runtime/statics/fc4096efab710232ecae3ad9f839572b.css" />
<script type="text/javascript">
var APP_ROOT = '/fanwe';
var CART_URL = '/fanwe/index.php?ctl=cart';
var CART_CHECK_URL = '/fanwe/index.php?ctl=cart&act=check';
var LOADER_IMG = 'http://localhost/fanwe/app/Tpl/fanwe/images/lazy_loading.gif';
</script>
</head>
 
<body style="background:#ECECEC;">
	<div class="vote_box">
		<div class="vote_box_top"></div>
		<div class="vote_box_main">
			<div class="vote_main">
						<div class="vote_head">
													</div>
						<div class="blank"></div>
						<div class="vote_desc"></div>
						<div class="blank"></div>
						<form action="/fanwe/index.php?ctl=vote&act=dovote" method="post">
								<ol class="vote-list">
																		<li>
										<h4>报纸</h4>
										<div class="choices">
																																	<label><input type="radio" name="name[13][]" value="报纸1" class="choice" /> 报纸1 </label>
																																												<label><input type="radio" name="name[13][]" value="报纸2" class="choice" /> 报纸2 </label>
																																												<label><input type="radio" name="name[13][]" value="报纸3" class="choice" /> 报纸3 </label>
																																											</label>
										</div>
										<div class="blank"></div>
									</li>		
																		<li>
										<h4>网站</h4>
										<div class="choices">
																																	<label><input type="radio" name="name[12][]" value="网站1" class="choice" /> 网站1 </label>
																																												<label><input type="radio" name="name[12][]" value="网站2" class="choice" /> 网站2 </label>
																																												<label><input type="radio" name="name[12][]" value="网站3" class="choice" /> 网站3 </label>
																																											</label>
										</div>
										<div class="blank"></div>
									</li>		
															
								</ol>
								<div class="blank"></div>
								<div class="commit">
									<input type="hidden" value="" name="vote_id">
									<input type="submit" value="好了，提交" name="submit" class="formbutton">
								</div>
							</form>
												
				
					
			</div>
		</div><!--end vote_box_main-->
		<div class="vote_box_foot"></div>
	</div><!--vote_box-->	
</body>
<html>