<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/style.css" />
<script type="text/javascript">
 	var VAR_MODULE = "<?php echo conf("VAR_MODULE");?>";
	var VAR_ACTION = "<?php echo conf("VAR_ACTION");?>";
	var MODULE_NAME	=	'<?php echo MODULE_NAME; ?>';
	var ACTION_NAME	=	'<?php echo ACTION_NAME; ?>';
	var ROOT = '__APP__';
	var ROOT_PATH = '<?php echo APP_ROOT; ?>';
	var CURRENT_URL = '<?php echo trim($_SERVER['REQUEST_URI']);?>';
	var INPUT_KEY_PLEASE = "<?php echo L("INPUT_KEY_PLEASE");?>";
	var TMPL = '__TMPL__';
	var APP_ROOT = '<?php echo APP_ROOT; ?>';
</script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.timer.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/script.js"></script>
<script type="text/javascript" src="__ROOT__/public/runtime/admin/lang.js"></script>
<script type='text/javascript'  src='__ROOT__/admin/public/kindeditor/kindeditor.js'></script>
</head>
<body>
<div id="info"></div>

<?php function get_is_open($status)
{
	return l("IS_OPEN_".$status);
}
function get_is_default($status,$id)
{
	if($status == 1)
	$str = l("IS_DEFAULT_".$status);
	else
	$str = l("IS_DEFAULT_".$status)."&nbsp;<a href='".u("DealCity/set_default",array("id"=>$id))."' style='color:red;'>".l("SET_DEFAULT")."</a>";
	return $str;
} ?>
<div class="main">
<div class="main_title"><?php echo ($main_title); ?></div>
<div class="blank5"></div>
<div class="button_row">
	<input type="button" class="button" value="<?php echo L("ADD");?>" onclick="add();" />
	<input type="button" class="button" value="<?php echo L("DEL");?>" onclick="del();" />
</div>
<div class="blank5"></div>
<!-- Think 系统列表组件开始 -->
<table id="dataTable" class="dataTable" cellpadding=0 cellspacing=0 ><tr><td colspan="7" class="topTd" >&nbsp; </td></tr><tr class="row" ><th width="8"><input type="checkbox" id="check" onclick="CheckAll('dataTable')"></th><th width="50px"><a href="javascript:sortBy('id','<?php echo ($sort); ?>','DealCity','index')" title="按照<?php echo L("ID");?><?php echo ($sortType); ?> "><?php echo L("ID");?><?php if(($order)  ==  "id"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('name','<?php echo ($sort); ?>','DealCity','index')" title="按照<?php echo L("DEAL_CITY");?><?php echo ($sortType); ?> "><?php echo L("DEAL_CITY");?><?php if(($order)  ==  "name"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('is_default','<?php echo ($sort); ?>','DealCity','index')" title="按照<?php echo L("IS_DEFAULT");?><?php echo ($sortType); ?> "><?php echo L("IS_DEFAULT");?><?php if(($order)  ==  "is_default"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('sort','<?php echo ($sort); ?>','DealCity','index')" title="按照<?php echo L("SORT");?><?php echo ($sortType); ?> "><?php echo L("SORT");?><?php if(($order)  ==  "sort"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('is_effect','<?php echo ($sort); ?>','DealCity','index')" title="按照<?php echo L("IS_EFFECT");?><?php echo ($sortType); ?> "><?php echo L("IS_EFFECT");?><?php if(($order)  ==  "is_effect"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th >操作</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dealcity): ++$i;$mod = ($i % 2 )?><tr class="row" ><td><?php if($dealcity[level] == -1): ?><input type="checkbox" name="key" class="key" value="<?php echo ($dealcity["id"]); ?>"><?php else: ?>&nbsp;<?php endif; ?></td><td><?php echo ($dealcity["id"]); ?></td><td><?php echo ($dealcity["name"]); ?></td><td><?php echo (get_is_default($dealcity["is_default"],$dealcity['id'])); ?></td><td><?php echo (get_sort($dealcity["sort"],$dealcity['id'])); ?></td><td><?php echo (get_is_effect($dealcity["is_effect"],$dealcity['id'])); ?></td><td><a href="javascript:edit('<?php echo ($dealcity["id"]); ?>')"><?php echo L("EDIT");?></a>&nbsp;<a href="javascript: del('<?php echo ($dealcity["id"]); ?>')"><?php echo L("DEL");?></a>&nbsp;</td></tr><?php endforeach; endif; else: echo "" ;endif; ?><tr><td colspan="7" class="bottomTd"> &nbsp;</td></tr></table>
<!-- Think 系统列表组件结束 -->
 

<div class="blank5"></div>
<div class="page"><?php echo ($page); ?></div>
</div>
</body>
</html>