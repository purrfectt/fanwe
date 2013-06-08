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

<?php function get_supplier_cate($cate_id)
	{
		return M("DealCate")->where("id=".$cate_id)->getField("name");
	}
	function getSupplierLocationLink($id)
	{
		return "<a href='javascript:supplier_location(\"".$id."\")'>".l("SUPPLIER_LOCATION_INDEX")."</a>";
	} ?>
<script type="text/javascript">
	function supplier_location(id)
	{
		location.href = ROOT+"?"+VAR_MODULE+"=SupplierLocation&"+VAR_ACTION+"=index&supplier_id="+id;
	}
	function supplier_account(id)
	{
		location.href = ROOT+"?"+VAR_MODULE+"=SupplierAccount&"+VAR_ACTION+"=index&supplier_id="+id;
	}
</script>
<div class="main">
<div class="main_title"><?php echo ($main_title); ?></div>
<div class="blank5"></div>
<div class="button_row">
	<input type="button" class="button" value="<?php echo L("ADD");?>" onclick="add();" />
	<input type="button" class="button" value="<?php echo L("FOREVERDEL");?>" onclick="foreverdel();" />
</div>
<div class="blank5"></div>
<div class="search_row">
	<form name="search" action="__APP__" method="get">	
		名称：<input type="text" class="textbox" name="name" value="<?php echo trim($_REQUEST['name']);?>" />		
		<input type="hidden" value="Supplier" name="m" />
		<input type="hidden" value="index" name="a" />
		<input type="submit" class="button" value="<?php echo L("SEARCH");?>" />
	</form>
</div>
<div class="blank5"></div>
<!-- Think 系统列表组件开始 -->
<table id="dataTable" class="dataTable" cellpadding=0 cellspacing=0 ><tr><td colspan="5" class="topTd" >&nbsp; </td></tr><tr class="row" ><th width="8"><input type="checkbox" id="check" onclick="CheckAll('dataTable')"></th><th width="50px"><a href="javascript:sortBy('id','<?php echo ($sort); ?>','Supplier','index')" title="按照<?php echo L("ID");?><?php echo ($sortType); ?> "><?php echo L("ID");?><?php if(($order)  ==  "id"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('name','<?php echo ($sort); ?>','Supplier','index')" title="按照<?php echo L("NAME");?><?php echo ($sortType); ?> "><?php echo L("NAME");?><?php if(($order)  ==  "name"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('sort','<?php echo ($sort); ?>','Supplier','index')" title="按照<?php echo L("SORT");?><?php echo ($sortType); ?> "><?php echo L("SORT");?><?php if(($order)  ==  "sort"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th >操作</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$supplier): ++$i;$mod = ($i % 2 )?><tr class="row" ><td><input type="checkbox" name="key" class="key" value="<?php echo ($supplier["id"]); ?>"></td><td>&nbsp;<?php echo ($supplier["id"]); ?></td><td>&nbsp;<a href="javascript:edit('<?php echo (addslashes($supplier["id"])); ?>')"><?php echo ($supplier["name"]); ?></a></td><td>&nbsp;<?php echo (get_sort($supplier["sort"],$supplier['id'])); ?></td><td><a href="javascript:edit('<?php echo ($supplier["id"]); ?>')"><?php echo L("EDIT");?></a>&nbsp;<a href="javascript: foreverdel('<?php echo ($supplier["id"]); ?>')"><?php echo L("FOREVERDEL");?></a>&nbsp;<a href="javascript:supplier_account('<?php echo ($supplier["id"]); ?>')"><?php echo L("SUPPLIER_ACCOUNT_INDEX");?></a>&nbsp; <?php echo (getSupplierLocationLink($supplier["id"])); ?>&nbsp;</td></tr><?php endforeach; endif; else: echo "" ;endif; ?><tr><td colspan="5" class="bottomTd"> &nbsp;</td></tr></table>
<!-- Think 系统列表组件结束 -->
 

<div class="blank5"></div>
<div class="page"><?php echo ($page); ?></div>
</div>
</body>
</html>