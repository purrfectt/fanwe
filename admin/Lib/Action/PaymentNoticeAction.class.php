<?php
// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云淡风轻(88522820@qq.com)
// +----------------------------------------------------------------------

class PaymentNoticeAction extends CommonAction{
	public function index()
	{
		if(trim($_REQUEST['order_sn'])!='')
		{
			$condition['order_id'] = M("DealOrder")->where("order_sn='".trim($_REQUEST['order_sn'])."'")->getField("id");
		}
		if(trim($_REQUEST['notice_sn'])!='')
		{
			$condition['notice_sn'] = $_REQUEST['notice_sn'];
		}		
		if(intval($_REQUEST['payment_id'])==0)unset($_REQUEST['payment_id']);
		$this->assign("default_map",$condition);
		$this->assign("payment_list",M("Payment")->findAll());
		parent::index();
	}
}
?>