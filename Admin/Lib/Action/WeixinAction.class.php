<?php
class WeixinAction extends Action {
	public function index() {
		import ( 'Weixin', APP_PATH . 'Common', '.php' );
		define ( "TOKEN", "wemall" );
		
		$m = M ( "Weixin" );
		$where["id"] = 1;
		$result = $m->where($where)->select ();
		
		$wechatObj = new wechatCallbackapiTest ( $result[0] ['title'], 'http://' . $_SERVER ['HTTP_HOST'] . '/Public/Uploads/' . $result[0]['picurl'],  $result[0]['description'], 'http://' . $_SERVER ['HTTP_HOST'] .'/app.php?uid=' );
		if (! isset ( $_GET ['echostr'] )) {
			$wechatObj->responseMsg ();
		} else {
			$wechatObj->valid ();
		}
	}
	public function replay() {
		$m = M ( "Weixin" );
		$where["id"] = 1;
		$result = $m->where($where)->select ();
		
		$this->assign("result" , $result[0]);
		$this->display ();
	}
	public function set() {
		$m = M ( "Weixin" );
		$data = $_POST;
		if ($_FILES ['picurl'] ['name'] !== '') {
			$img = $this->upload ();
			$picurl = $img [0] [savename];
			$data["picurl"] = $picurl;
		} else {
			if ($_POST["image"]) {
			$data["picurl"] = $_POST["image"];
			}
		}
		$data["id"] = '1';
		$result = $m->add($data=$data,$options=array(),$replace=true);
		$this->success("微信初始化成功");
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