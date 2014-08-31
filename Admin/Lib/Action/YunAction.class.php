<?php
class YunAction extends Action {
	public function index(){
    	$this->display();
	}
	public function plugin() {
		$this->error("正在开发中。。。","__APP__/Index/index");
	}
}