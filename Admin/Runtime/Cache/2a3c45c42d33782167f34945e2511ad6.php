<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8" />
<title>WeMall微商城后台管理中心</title>
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
<link href="__PUBLIC__/Style/plugins/gritter/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link
	href="__PUBLIC__/Style/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<link
	href="__PUBLIC__/Style/plugins/fullcalendar/fullcalendar/fullcalendar.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/plugins/jqvmap/jqvmap/jqvmap.css"
	rel="stylesheet" type="text/css" />
<link
	href="__PUBLIC__/Style/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css"
	rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Style/css/style-metronic.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/style-responsive.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/plugins.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/pages/tasks.css" rel="stylesheet"
	type="text/css" />
<link href="__PUBLIC__/Style/css/themes/default.css" rel="stylesheet"
	type="text/css" id="style_color" />
<link href="__PUBLIC__/Style/css/custom.css" rel="stylesheet"
	type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />

<!-- 引入umeditor -->
<link href="__PUBLIC__/Plug-in/umeditor/themes/default/css/umeditor.css"
	type="text/css" rel="stylesheet">
<script type="text/javascript"
	src="__PUBLIC__/Plug-in/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8"
	src="__PUBLIC__/Plug-in/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8"
	src="__PUBLIC__/Plug-in/umeditor/umeditor.min.js"></script>
<script type="text/javascript"
	src="__PUBLIC__/Plug-in/umeditor/lang/zh-cn/zh-cn.js"></script>
<!-- 引入umeditor结束 -->
</head>
<body class="page-header-fixed">
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<div class="header-inner">
			<a class="navbar-brand" href="__APP__/Index/index" style="padding-left: 20px;"><font
				color="#FFFFFF">We</font><font color="#72C1AC">Mall</font> </a>
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse"> <img
				src="__PUBLIC__/Style/img/menu-toggler.png" alt="" />
			</a>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown user"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" data-hover="dropdown"
					data-close-others="true"> <span class="username">Admin</span> <i
						class="fa fa-angle-down"></i>
				</a>
					<ul class="dropdown-menu">
						<li><a href="javascript:;" id="trigger_fullscreen"><i
								class="fa fa-move"></i> 全屏</a></li>
						<li><a href="__APP__/Login/logout"><i class="fa fa-key"></i>
								退出</a></li>
					</ul></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="page-container">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu">
				<li>
					<div class="sidebar-toggler hidden-phone"></div>
				</li>

				<li class="active"><a href="javascript:;"> <i class="fa fa-home"></i>
						<span class="title">全局</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Group/index"> 商城设置</a></li>
						<li><a href="__APP__/Group/theme"> 主题设置</a></li>
						<li><a href="__APP__/Group/payonline"> 在线支付</a></li>
						<li class="active"><a href="__APP__/Group/setemail"> 邮件设置</a></li>
					</ul></li>

				<li class=""><a href="javascript:;"> <i class="fa fa-truck"></i>
						<span class="title">商品</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Goods/index"> 商品管理</a></li>
						<li><a href="__APP__/Goods/menu"> 商品分类</a></li>
					</ul></li>
				<li class=""><a href="javascript:;"> <i class="fa fa-list"></i>
						<span class="title">订单</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Orders/index"> 订单管理</a></li>
					</ul></li>
				<li class=""><a href="javascript:;"> <i
						class="fa fa-sitemap"></i> <span class="title">微信</span> <span
						class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Weixin/replay"> 微信初始化</a></li>
					</ul></li>
				<li class=""><a href="javascript:;"> <i class="fa fa-user"></i>
						<span class="title">用户</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Users/index"> 用户管理</a></li>
					</ul></li>

				<li class=""><a href="javascript:;"> <i class="fa fa-cloud"></i>
						<span class="title">云商店</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Yun/index">主题</a></li>
						<li><a href="__APP__/Yun/plugin">插件</a></li>
					</ul></li>
			</ul>
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">全局设置</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li><i class="fa fa-home"></i> <a href="">首页</a> <i
							class="fa fa-angle-right"></i></li>
						<li><a href="#">邮件设置</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>邮件设置
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a> <a
									href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a> <a
									href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="__APP__/Group/setemail" class="form-horizontal" method="post">
								<div class="form-body">
									<div class="note note-success">
										<h4 class="block">邮件发送</h4>
										<p>
										* 支持发送纯文本邮件和HTML格式的邮件。<br/>
										* 需要的php扩展，sockets和Fileinfo。<br/>
										* 例如设置QQ邮箱为发送邮件的邮箱
										* 代理服务器的ip或者域名: smtp.qq.com<br/>
									    * 认证账号：您的qq邮箱<br/>
									    * 认证密码：您的qq邮箱密码<br/>
									    * 目前仅支持自己给自己发邮件<br/>
										</p>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">邮箱服务器</label>
										<div class="col-md-4">
											<input type="text" class="form-control" name="smtp" value="<?php echo ($result["smtp"]); ?>"
												placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">认证账号</label>
										<div class="col-md-4">
											<input type="text" class="form-control" name="username" value="<?php echo ($result["username"]); ?>"
												placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">认证密码</label>
										<div class="col-md-4">
											<input type="text" class="form-control" name="password" value="<?php echo ($result["password"]); ?>"
												placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" style="color: red;">邮件发送是否开启</label>
										<div class="col-md-4">
											<select class="form-control" name="on">
												<option value="1">开启</option>
												<option value="0">关闭</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn blue">设置</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-inner">2014 &copy; Powered by WeMall .</div>
		<div class="footer-tools">
			<span class="go-top"> <i class="fa fa-angle-up"></i>
			</span>
		</div>
	</div>
	<script src="__PUBLIC__/Style/plugins/jquery-1.10.2.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery-migrate-1.2.1.min.js"
		type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script
		src="__PUBLIC__/Style/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/bootstrap/js/bootstrap.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"
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
	<script src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/jquery.vmap.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/flot/jquery.flot.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/flot/jquery.flot.resize.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.pulsate.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/bootstrap-daterangepicker/moment.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/bootstrap-daterangepicker/daterangepicker.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/gritter/js/jquery.gritter.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"
		type="text/javascript"></script>
	<script
		src="__PUBLIC__/Style/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/plugins/jquery.sparkline.min.js"
		type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/app.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/index.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Style/scripts/tasks.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function() {
			App.init(); // initlayout and core plugins
			$('select[name="on"]').val(<?php echo ($result["on"]); ?>);
			
			$('#sample_editable_1_new').on("click", function() {
				$('div[role="dialog"]').show();
			});
			$('.modal-footer').find('button').first().on("click", function() {
				$('div[role="dialog"]').hide();
			});
			$('.modal-header').find('button').on("click",function() {
				$('div[role="dialog"]').hide();
			});
			$('.modal-footer').find('button').last().on("click",function() {
				var addmenu = $('.bootbox-form').children().eq("1").val();
				var sort = $('.bootbox-form').children().last().val();

				$.post("__APP__/Goods/addmenu", {
					sort : sort,
					value : addmenu
				}, function(data, status) {
					if (data == "success") {
						location.reload();
					}
				});
			});
			<!--table点击修改-->
			$('.label.label-success.do').on("click",function() {
				$(this).next().show();
				$(this).hide();
				var value = $(this).parent().prev().html();
				$(this).parent().prev().html('<input type="text" class="form-control input-small" value="'+value+'">');
				var valueprev = $(this).parent().prev().prev().html();
				$(this).parent().prev().prev().html('<input type="text" class="form-control input-small" value="'+valueprev+'">');
			});
			$('.label.label-success.save').on("click",function() {
				$(this).prev().show();
				$(this).hide();

				var value = $(this).parent().prev().children().val();
				var valueprev = $(this).parent().prev().prev().children().val();
				var id = $(this).parent().prev().prev().prev().html();

				$(this).parent().prev().html(value);
				$(this).parent().prev().prev().html(valueprev);
				$.post("__APP__/Goods/remenu", {
					id : id,
					value : valueprev,
					sort : value
				});

			});
			$('.label.label-danger.del').on("click",function() {
				var id = $(this).parent().prev().prev()
						.prev().html();
				$.post("__APP__/Goods/delmenu", {
					id : id
				}, function(data, status) {
					if (data == "success") {
						location.reload();
					}
				});
			});
		});
	</script>
</body>
</html>