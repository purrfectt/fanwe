<?php
//参数:city_id, cate_id, page
class eventlist
{
	public function index()
	{		
		$page = intval($GLOBALS['request']['page']);
		if($page==0)
		$page = 1;
	
		$cate_id = intval($GLOBALS['request']['cate_id']);
		$city_id = intval($GLOBALS['request']['city_id']);
		
		$ytop = $latitude_top = floatval($GLOBALS['request']['latitude_top']);//最上边纬线值 ypoint
		$ybottom = $latitude_bottom = floatval($GLOBALS['request']['latitude_bottom']);//最下边纬线值 ypoint
		$xleft = $longitude_left = floatval($GLOBALS['request']['longitude_left']);//最左边经度值  xpoint
		$xright = $longitude_right = floatval($GLOBALS['request']['longitude_right']);//最右边经度值 xpoint
		$ypoint =  $m_latitude = doubleval($GLOBALS['request']['m_latitude']);  //ypoint 
		$xpoint = $m_longitude = doubleval($GLOBALS['request']['m_longitude']);  //xpoint
		
		if($xpoint>0)
		{		
			$pi = 3.14159265;  //圆周率
			$r = 6378137;  //地球平均半径(米)
			$field_append = ", (ACOS(SIN(($ypoint * $pi) / 180 ) *SIN((ypoint * $pi) / 180 ) +COS(($ypoint * $pi) / 180 ) * COS((ypoint * $pi) / 180 ) *COS(($xpoint * $pi) / 180 - (xpoint * $pi) / 180 ) ) * $r) as distance ";
			if($ybottom!=0&&$ytop!=0&&$xleft!=0&&$xright!=0)
			$where = " ypoint > $ybottom and ypoint < $ytop and xpoint > $xleft and xpoint < $xright ";
			$order = " distance asc ";
		}
		else
		{
			$field_append = $where = $order = "";
		}		
		
		$limit = (($page-1)*PAGE_SIZE).",".PAGE_SIZE;	
		$res = m_search_event_list($limit,$cate_id,$city_id,$where,$order,$field_append);				
			
		foreach($res['list'] as $k=>$v)
		{
			$res['list'][$k]['distance'] = round($v['distance']);
			$res['list'][$k]['date_time'] = pass_date($v['submit_begin_time']);
		}
		$root = array();
		$root['return'] = 1;		
		$root['item'] = $res['list'];
		$root['page'] = array("page"=>$page,"page_total"=>ceil($res['count']/PAGE_SIZE));

		output($root);
	}
}
?>