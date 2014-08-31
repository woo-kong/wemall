<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	if (isset($_SESSION["username"])) {
			$this->assign("url",'http://'.$_SERVER['HTTP_HOST']);
    		$this->display();
    	}else{
    		$this->display("Public:login");
    	}
    }
}