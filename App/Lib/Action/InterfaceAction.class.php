<?php
/**
 * 接口类 
 * @author Heqing
 *
 */
class InterfaceAction extends Action {
	public function index() {
	}
	/**
	 * 获取用户信息
	 */
	public function getusers($uid) {
		$m = M ( "Users" );
		$where["wx_id"] = $uid;
		$result = $m->where($where)->select ();
		if ($result) {
			return $result;
		}
	}
	public function getajaxusers() {
		$m = M ( "Users" );
		$result = $m->select ();
		if ($result) {
			$this->ajaxReturn ( $result );
		}
	}
	
	/**
	 * 获取商品分类
	 */
	public function getajaxmenu() {
		$m = M ( "Menu" );
		$result = $m->select ();
		if ($result) {
			$this->ajaxReturn ( $result );
		}
	}
	public function getmenu() {
		$m = M ( "Menu" );
		$result = $m->select ();
		if ($result) {
			return $result;
		}
	}
	
	/**
	 * 获取全部商品
	 */
	public function getgoods() {
		$m = M ( "Goods" );
		$result = $m->select ();
		if ($result) {
			return $result;
		}
	}
	public function getajaxgoods() {
		$m = M ( "Goods" );
		$result = $m->select ();
		if ($result) {
			$this->ajaxReturn ( $result );
		}
	}
	public function fetchgoodsdetail() {
		$m = M ( "Goods" );
		$where ["id"] = $_POST ["id"];
		$result = $m->where ( $where )->select ();
		if ($result) {
			$this->ajaxReturn ( $result[0] );
		}
	}
	/**
	 * 获取店铺信息
	 */
	public function getinfo() {
		$m = M ( "Info" );
		$result = $m->select ();
		if ($result) {
			return $result;
		}
	}
	public function getajaxinfo() {
		$m = M ( "Info" );
		$result = $m->select ();
		if ($result) {
			$this->ajaxReturn ( $result );
		}
	}
	
	/**
	 * 获取订单信息
	 * 传参 uid 获取个人订单
	 * 不传参获取全部订单
	 */
	public function getorders() {
		$d = D ( "Orders" );
		$wx_id = $_POST['uid'];
		
		$result = $d->relation(true)->order('id desc')->select();
		$j = 0;
		for ($i = 0; $i < count($result); $i++) {
			if ($result[$i]["users"]["wx_id"] == $wx_id) {
				$orders[$j] = $result[$i];
				$j++; 
			}
		}
		
		$this->ajaxReturn ( $orders );
	}
	/**
	 * 提交订单
	 */
	public function addorder() {
		$wx_id = htmlspecialchars ( $_POST ['uid'] );
		
		$username = $_POST ['userData'] [0] [value];
		$phone = $_POST ['userData'] [1] [value];
		$pay = $_POST ['userData'] [2] [value];
		
		$address = $_POST ['userData'] [3] [value];
		$note = $_POST ['userData'] [4] [value];
		$totalprice = $_POST ['totalPrice'];
		$cartdata = $_POST ['cartData'];
		
		$cartdata = json_decode ( stripslashes ( $cartdata ), true );
		
		$orderid = date ( "YmdHis" ) . mt_rand ( 10, 99 );
		$time = date ( "Y/m/d H:i:s" );
		
		switch ($pay) {
			case '1' : // 货到付款
				$print_status = '未打印';
				$pay_status = '未付款';
				$orders_status = '未处理';
				break;
		}
		
		$m = M ( "Users" );
		$where ["wx_id"] = $wx_id;
		$result = $m->where ( $where )->select ();
		print_r($result);
		$userid = $result[0]["id"];
		
		if ($userid) {
			$d = D ( "Orders" );
			$data ["users_id"] = $userid;
			$data ["orderid"] = $orderid;
			$data ["totalprice"] = $totalprice;
			$data ["pay_status"] = $pay_status;
			$data ["note"] = $note;
			$data ["orders_status"] = $orders_status;
			$data ["print_status"] = $print_status;
			$data ["time"] = $time;
			/*
			 * $data ["users"] = array ( 'id' => $userid, 'wx_id' => $wx_id, 'username' => $username, 'phone' => $phone, 'address' => $address );
			 */
			
			for($i = 0; $i < count ( $cartdata ); $i ++) {
				$cartdata [$i] ["orders_id"] = $orderid;
			}
			
			$data ["ordersinfo"] = $cartdata;
			$result = $d->relation ( true )->add ( $data, $options = array (), $replace = true );
			
			$m = M ( "Users" );
			$userdata ["id"] = $userid;
			$userdata ["wx_id"] = $wx_id;
			$userdata ['username'] = $username;
			$userdata ['phone'] = $phone;
			$userdata ['address'] = $address;
			$m->save ( $userdata );
		} else {
			$m = M ( "Users" );
			$userdata ["wx_id"] = $wx_id;
			$userdata ['username'] = $username;
			$userdata ['phone'] = $phone;
			$userdata ['address'] = $address;
			$userid = $m->add ( $userdata );
			
			$d = D ( "Orders" );
			$data ["users_id"] = $userid;
			$data ["orderid"] = $orderid;
			$data ["totalprice"] = $totalprice;
			$data ["pay_status"] = $pay_status;
			$data ["note"] = $note;
			$data ["orders_status"] = $orders_status;
			$data ["print_status"] = $print_status;
			$data ["time"] = $time;
			
			for($i = 0; $i < count ( $cartdata ); $i ++) {
				$cartdata [$i] ["orders_id"] = $orderid;
			}
			
			$data ["ordersinfo"] = $cartdata;
			$result = $d->relation ( true )->add ( $data, $options = array (), $replace = true );
		}
		R('Admin://Group/postemail');
	}
}