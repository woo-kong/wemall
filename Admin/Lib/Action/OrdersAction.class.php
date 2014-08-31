<?php
class OrdersAction extends Action {
	public function index(){
		import ( 'ORG.Util.Page' );
		$d = D("Orders");
		
		$count = $d->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show (); // 分页显示输出
		
		$result = $d->limit ( $Page->firstRow . ',' . $Page->listRows )->relation(true)->select();
		
		$this->assign("result",$result);
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display();
	}
}