<?php
class GoodsAction extends Action {
	public function index() {
		import ( 'ORG.Util.Page' );
		$m = M ( "Goods" );
		
		$count = $m->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show (); // 分页显示输出
		
		$result = $m->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		
		$c = M ( "menu" );
		$menu = $c->select ();
		
		$this->assign ( "menu", $menu );
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "result", $result );
		$this->display ();
	}
	public function addgoods() {
		$m = M ( "Goods" );
		
		if ($_POST ["goodid"]) {
			if ($_FILES ['goodimage'] ['name'] !== '') {
				$img = $this->upload ();
				$data ["image"] = $img [0] [savename];
			}
			$data ["id"] = $_POST ["goodid"];
			$data ["menu_id"] = $_POST ["goodmenu"];
			$data ["title"] = $_POST ["goodname"];
			$data ["sort"] = $_POST ["goodsort"];
			$data ["price"] = $_POST ["goodprice"];
			$data ["old_price"] = $_POST ["goodoldprice"];
			
			$data ["detail"] = $_POST ["editorValue"];
			$data ["status"] = $_POST ["goodstatus"];
			
			$result = $m->data ( $data )->save ();
			if ($result) {
				$this->success ( "修改商品成功", "index" );
			}
		} else {
			if ($_FILES ['goodimage'] ['name'] !== '') {
				$img = $this->upload ();
				$img = $img [0] [savename];
			}
			
			$data ["menu_id"] = $_POST ["goodmenu"];
			$data ["title"] = $_POST ["goodname"];
			$data ["sort"] = $_POST ["goodsort"];
			$data ["price"] = $_POST ["goodprice"];
			$data ["old_price"] = $_POST ["goodoldprice"];
			$data ["image"] = $img;
			$data ["detail"] = $_POST ["editorValue"];
			$data ["status"] = $_POST ["goodstatus"];
			$result = $m->data ( $data )->add ();
			if ($result) {
				$this->success ( "添加商品成功", "index" );
			}
		}
	}
	public function delgoods(){
		$m = M("Goods");
		$where["id"] = $_POST["id"];
		$m->where($where)->delete();
		$this->ajaxReturn("1");
	}
	public function getregoods() {
		$m = M ( "Goods" );
		$where ["id"] = $_POST ["id"];
		$result = $m->where ( $where )->select ();
		echo json_encode ( $result );
	}
	public function menu() {
		import ( 'ORG.Util.Page' );
		$m = M ( "Menu" );
		
		$count = $m->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show (); // 分页显示输出
		
		$result = $m->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		
		$this->assign ( "result", $result );
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display ();
	}
	public function addmenu() {
		$m = M ( "Menu" );
		$data ["value"] = $_POST ["value"];
		$data ["sort"] = $_POST ["sort"];
		$result = $m->data ( $data )->add ();
		if ($result) {
			echo "success";
		}
	}
	public function remenu() {
		$m = M ( "Menu" );
		$result = $m->save ( $_POST );
		if ($result) {
			echo "success";
		}
	}
	public function delmenu() {
		$m = M ( "Menu" );
		$where ["id"] = $_POST ["id"];
		$result = $m->where ( $where )->delete ();
		if ($result) {
			echo "success";
		}
	}
	public function upload() {
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile (); // 实例化上传类
		$upload->maxSize = 3145728; // 设置附件上传大小
		$upload->allowExts = array (
				'jpg',
				'gif',
				'png',
				'jpeg' 
		); // 设置附件上传类型
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
		if (! $upload->upload ()) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
		}
		
		return $info;
	}
}