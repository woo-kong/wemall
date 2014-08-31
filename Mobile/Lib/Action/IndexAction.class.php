<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$d = D("Orders");
    	$ordersresult = $d->order('id DESC')->relation(true)->select();
    	$this->assign("orders",$ordersresult);
    	
    	$m = M("Goods");
    	$goodsresult = $m->select();
    	$this->assign("goods",$goodsresult);
    	
		$this->display();
    }
    public function login(){
    	$username = $_POST["username"];
    	$password = $_POST["password"];
    	
    	$m = M("Admin");
    	$where["username"] = $username;
    	$where["password"] = md5( $password );
    	$result = $m->where($where)->select();
    	
    	if ($result) {
    		$this->ajaxReturn($result[0][id]);
    	}
    }
    public function fetchdetail(){
    	$orderid = $_POST["orderid"];
    	
    	$d = D("Orders");
    	$where["orderid"] = $orderid;
    	$result = $d->where($where)->relation(true)->select();

    	if ($result) {
    		$this->ajaxReturn($result[0]);
    	}
    }
    public function doupdown(){
    	$m = M("Goods");
    	$where["id"] = $_POST["id"];
    	$data["status"] = $_POST["status"];
    	
    	if ($data["status"]) {
    		$data["status"] = 0;
    	}else{
    		$data["status"] = 1;
    	}
    	
    	$m->where($where)->save($data);
    	
    	$result = $m->where($where)->select();
    	
    	if ($result) {
    		$this->ajaxReturn($result[0]);
    	}
    }
}