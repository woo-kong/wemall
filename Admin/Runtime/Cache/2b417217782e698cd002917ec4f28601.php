<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8" />
<title>WeMall微商城登录</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="MobileOptimized" content="320">
<link
	href="__PUBLIC__/Style/plugins/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/uniform/css/uniform.default.css"
	rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css"
	href="__PUBLIC__/Style/plugins/select2/select2_metro.css" />
<link href="__PUBLIC__/Style/css/style-metronic.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/style-responsive.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/plugins.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/themes/default.css" rel="stylesheet"
	type="text/css" id="style_color" />
<link href="__PUBLIC__/Style/css/pages/login.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/custom.css" rel="stylesheet"
	type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="login">
	<div class="logo" style="font-size: 30px;">
		<!-- <font color="#FFFFFF">We</font><font color="#72C1AC">Mall</font> -->
	</div>
	<div class="content">
		<form class="login-form" action="__APP__/Login/login" method="post">
		<img src="__PUBLIC__/Style/logo.png" height="" width="300px" style="margin:20px 0px;" />
			<div class="alert alert-danger display-hide">
				<button class="close" data-close="alert"></button>
				<span>输入您的用户名和密码.</span>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">用户名</label>
				<div class="input-icon">
					<i class="fa fa-user"></i> <input
						class="form-control placeholder-no-fix" type="text"
						autocomplete="off" placeholder="用户名" name="username" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">密码</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i> <input
						class="form-control placeholder-no-fix" type="password"
						autocomplete="off" placeholder="密码" name="password" />
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox"> <input type="checkbox"
					name="remember" value="1" /> 记住我
				</label>
				<button type="submit" class="btn green pull-right">
					登录 <i class="m-icon-swapright m-icon-white"></i>
				</button>
			</div>
		</form>
	</div>
	<div class="copyright">2014 &copy; Powered by WeMall.</div>
	<script src="__PUBLIC__/Style/plugins/respond.min.js"></script>
	<script src="__PUBLIC__/Style/plugins/excanvas.min.js"></script> 
	<script src="__PUBLIC__/Style/plugins/jquery-1.10.2.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery-migrate-1.2.1.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/bootstrap/js/bootstrap.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.blockui.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.cookie.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/uniform/jquery.uniform.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jquery-validation/dist/jquery.validate.min.js"
		type="text/javascript"></script>
	<script type="text/javascript"
		src="__PUBLIC__/Style/plugins/select2/select2.min.js"></script>
	<script src="__PUBLIC__/Style/scripts/app.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/login.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			Login.init();
		});
	</script>
</body>
</html>