<?php
class LoginAction extends Action {
	public function index(){
		$this->display("Public:login");
	}
	public function login(){
		$m = M("admin");
		$where["username"] = $_POST["username"];
		$where["password"] = md5( $_POST["password"] );
		$result = $m->where($where)->select();
		if ($result){
			$_SESSION["username"]=$_POST["username"];
			$this->success("登录成功","__APP__"."/Index/index");
		}
	}
	public function logout(){
		unset($_SESSION["username"]);
		$this->success('已注销登录！',"__APP__".'/Login/index');
	}
}