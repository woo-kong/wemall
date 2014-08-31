<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$m = M("Theme");
    	$result = $m->select();
    	C("DEFAULT_THEME",$result[0][theme]);
    	
		$menuresult = R("Interface/getmenu");
		$this->assign("menu",$menuresult);
		
		$inforesult = R("Interface/getinfo");
		$this->assign("info",$inforesult[0]);
		
		$goodsresult = R("Interface/getgoods");
		$this->assign("goods",$goodsresult);
		
		$uid=$_GET["uid"];
		$usersresult = R("Interface/getusers",array($uid));
		$this->assign("users",$usersresult[0]);
    	$this->display();
    }


}