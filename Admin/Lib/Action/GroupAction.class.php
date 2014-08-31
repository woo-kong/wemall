<?php
class GroupAction extends Action {
	public function index() {
		$m = M("info");
		$result = $m->select();
		$this->assign("info",$result[0]);
		$this->display ();
	}
	public function mallset() {
		$m = M ( "info" );
		$data ["id"] = '1';
		$data ["title"] = $_POST ["title"];
		$data ["gonggao"] = $_POST ["gonggao"];
		$result = $m->add($data=$data,$options=array(),$replace=true);
		$this->success("配置商城成功");

	}
	public function theme(){
		$themedir = getDir("./App/Tpl/");
		
		for ($i = 0; $i < count($themedir); $i++) {
			$theme[$i] = simplexml_load_file("./App/Tpl/".$themedir[$i]."/config.xml");
			$theme[$i]->dir = $themedir[$i];
		}
		
		$this->assign("theme",$theme);
		$this->display();
	}
	public function settheme(){
		$m = M("Theme");
		$where["id"] = "1";
		$data["theme"] = $_POST["theme"];
		$data["id"] = "1";
		$result = $m->where($where)->save($data);
		echo "1";
	}
	public function payonline(){
		$this->error("在线支付功能目前无法正常使用,付款方式默认为货到付款。");
	}
	public function setemail(){
		$m = M("Mail");
		
		if ($_POST) {
			$data = $_POST;
			$data ["id"] = '1'; 
			$result = $m->add($data=$data,$options=array(),$replace=true);
			$this->success("邮件设置成功");
		}else {
			$where["id"] = 1;
			$result = $m->where($where)->select();
			$this->assign("result",$result[0]);
			$this->display();
		}

	}
	public function postemail(){
		import ( 'Email', APP_PATH . 'Common', '.php' );
		$m = M("Mail");
		$where["id"] = '1';
		$mail = $m->where($where)->select();
		
		$d = D("Orders");
		$result = $d->order('id desc')->relation(true)->select();
		
		$orderid = $result[0][orderid];
		$totalprice = $result[0][totalprice];
		$username = $result[0][users][username];
		$phone = $result[0][users][phone];
		$address = $result[0][users][address];
		$time = $result[0][time];
		for ($i = 0; $i <  count( $result[0][ordersinfo]) ; $i++) {
			$detail .= $result[0][ordersinfo][$i][title].'---'.$result[0][ordersinfo][$i][price].'---'.$result[0][ordersinfo][$i][num].'<br/>';
		}
		
		$content = '<html> 
						<head> 
						  <title></title>
						  <meta charset="utf-8"> 
						  <style type="text/css"> 
						    body,table{ 
						      font-size:12px; 
						    } 
						    table{ 
						      table-layout:fixed; 
						      empty-cells:show; 
						      border-collapse: collapse; 
						      margin:0 auto; 
						      width: 480px;
						    } 
						    td{ 
						      height:30px; 
						    } 
						    h1,h2,h3{ 
						      font-size:12px; 
						      margin:0; 
						      padding:0; 
						    } 
						    .table{ 
						      border:1px solid #cad9ea; 
						      color:#666; 
						    } 
						    .table th { 
						      background-repeat:repeat-x; 
						      height:30px; 
						
						    } 
						    .table td,.table th{ 
						      border:1px solid #cad9ea; 
						      padding:0 1em 0; 
						    } 
						    .table tr.alter{ 
						      background-color:#f5fafe; 
						    } 
						  </style> 
						</head> 
						<body> 
						  <table width="90%" class="table">
						    <tr class="alter"> 
						      <th colspan="2">WeMall订单邮件通知</th> 
						    </tr> 
						    <tr> 
						      <td width="80px;" align="center">订单编号</td> 
						      <td>'.$orderid.'</td> 
						    </tr> 
						    <tr> 
						      <td align="center">订单用户</td> 
						      <td>'.$username.'</td>  
						    </tr> 
						    <tr > 
						      <td align="center">联系电话</td> 
						      <td>'.$phone.'</td> 
						    </tr>
						    <tr> 
						      <td align="center">送货地址</td> 
						      <td>'.$address.'</td>  
						    </tr> 
						    <tr > 
						      <td align="center">订购时间</td> 
						      <td>'.$time.'</td> 
						    </tr>
						    <tr> 
						      <td align="center">订单详情</td> 
						      <td>'.$detail.'</td>  
						    </tr>
						    <tr> 
						      <td align="center">订单总计</td> 
						      <td>'.$totalprice.'元</td>  
						    </tr>  
						  </table> 
						</body> 
						</html> ';
		$m = M("mail");
		$where["id"] = 1;
		$result = $m->where($where)->select();
		$result = $result[0];
		
		if ($mail[0][on]) {
			//邮件实例化
			$mail = new MySendMail();
			$mail->setServer($result["smtp"], $result["username"], $result["password"]);
			$mail->setFrom($result["username"]);
			$mail->setReceiver($result["username"]);
			$mail->setMailInfo("WeMall邮件通知", "$content");
			$mail->sendMail();
		}

	}
}