<?php
// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云淡风轻(88522820@qq.com)
// +----------------------------------------------------------------------

require APP_ROOT_PATH.'app/Lib/deal.php';
class mallModule extends ShopBaseModule
{
	public function index()
	{				
		$GLOBALS['tmpl']->caching = true;
		$cache_id  = md5(MODULE_NAME.ACTION_NAME.$GLOBALS['deal_city']['id']);		
		if (!$GLOBALS['tmpl']->is_cached('mall.html', $cache_id))
		{		
				
			//输出商城分类
			$cate_tree = get_cate_tree(0,1);
			$top_count = 0;
			foreach($cate_tree as $k=>$v)
			{
				if($v['level']==0)$top_count++;
//				if($top_count>6)
//				{
//					$cate_tree[$k]['is_hide'] = 1;
//				}	
			}
			$GLOBALS['tmpl']->assign("cate_tree",$cate_tree);
			
			//获取推荐
			$hot_list = get_goods_list(intval(app_conf("REC_HOT_LIMIT")),0," is_hot = 1 and buy_type <> 1","",false);			
			$best_list = get_goods_list(intval(app_conf("REC_BEST_LIMIT")),0," is_best = 1 and buy_type <> 1 ","",false);
			$new_list = get_goods_list(intval(app_conf("REC_NEW_LIMIT")),0," is_new = 1 and buy_type <> 1 ","",false);
			
			
			
			$GLOBALS['tmpl']->assign("inc_var", array('title'=>$GLOBALS['lang']['HOT_LIST'],'list'=>$hot_list['list'],'url'=>url("shop","rec#rhot")));
			$hot_span_goods_html = $GLOBALS['tmpl']->fetch("inc/span_goods.html");
			$GLOBALS['tmpl']->assign("hot_span_goods_html",$hot_span_goods_html);
			
			$GLOBALS['tmpl']->assign("inc_var", array('title'=>$GLOBALS['lang']['BEST_LIST'],'list'=>$best_list['list'],'url'=>url("shop","rec#rbest")));
			$best_span_goods_html = $GLOBALS['tmpl']->fetch("inc/span_goods.html");			
			$GLOBALS['tmpl']->assign("best_span_goods_html",$best_span_goods_html);
			
			$GLOBALS['tmpl']->assign("inc_var", array('title'=>$GLOBALS['lang']['NEW_LIST'],'list'=>$new_list['list'],'url'=>url("shop","rec#rnew")));
			$new_span_goods_html = $GLOBALS['tmpl']->fetch("inc/span_goods.html");
			$GLOBALS['tmpl']->assign("new_span_goods_html",$new_span_goods_html);
			
				$recommend_cate = $GLOBALS['db']->getAll("select id,name,uname from ".DB_PREFIX."shop_cate where recommend = 1 order by sort desc");
				//输出分类商品
				$recommend_cate_html = "";
				foreach($recommend_cate as $cate)
				{
					$cate_id = $cate['id'];
					
					require_once APP_ROOT_PATH."system/utils/child.php";
					$ids_util = new child("shop_cate");
					$ids = $ids_util->getChildIds($cate_id);
					$ids[] = $cate_id;
		
					$brand_list = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."brand where shop_cate_id in (".implode(",",$ids).")");
					foreach($brand_list as $kk=>$brand_item)
					{
						$brand_list[$kk]['url'] = url("shop","brand#index", array("id"=>$brand_item['id']));
					}
					$cate_list = get_goods_list(intval(app_conf("REC_CATE_GOODS_LIMIT")),$cate_id," buy_type <> 1 ","",false);
					$cate_title = $cate['name'];
					if($cate['uname']!="")
					$curl = url("shop","cate#index",array("id"=>$cate['uname']));
					else
					$curl = url("shop","cate#index",array("id"=>$cate['id']));
					$GLOBALS['tmpl']->assign("inc_var", array('id'=>$cate['id'],'brand_list'=>$brand_list,'title'=>$cate_title,'list'=>$cate_list['list'],'url'=>$curl));
					$recommend_cate_html.=$GLOBALS['tmpl']->fetch("inc/recommend_cate_goods.html");
				}
				
			$GLOBALS['tmpl']->assign("recommend_cate_html",$recommend_cate_html);
			
			
			$GLOBALS['tmpl']->assign("page_title",app_conf("MALL_SHOP_TITLE"));
			$GLOBALS['tmpl']->assign("page_keyword",app_conf("MALL_SHOP_TITLE"));
			$GLOBALS['tmpl']->assign("page_description",app_conf("MALL_SHOP_TITLE"));	
			
			//输出商城公告
			$notice_list = get_notice(0,array(0,2));
			$GLOBALS['tmpl']->assign("notice_list",$notice_list);		
		}
		$GLOBALS['tmpl']->display("mall.html",$cache_id);		
	}
}
?>