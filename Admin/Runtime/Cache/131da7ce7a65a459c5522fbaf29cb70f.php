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

				<li class=""><a href="javascript:;"> <i class="fa fa-home"></i>
						<span class="title">全局</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Group/index"> 商城设置</a></li>
						<li><a href="__APP__/Group/theme"> 主题设置</a></li>
						<li><a href="__APP__/Group/payonline"> 在线支付</a></li>
						<li><a href="__APP__/Group/setemail"> 邮件设置</a></li>
					</ul></li>

				<li class="active"><a href="javascript:;"> <i class="fa fa-truck"></i>
						<span class="title">商品</span> <span class="arrow "></span>
				</a>
					<ul class="sub-menu">
						<li><a href="__APP__/Goods/index"> 商品管理</a></li>
						<li class="active"><a href="__APP__/Goods/menu"> 商品分类</a></li>
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
					<h3 class="page-title">商品设置</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li><i class="fa fa-home"></i> <a href="">首页</a> <i
							class="fa fa-angle-right"></i></li>
						<li><a href="#">商品分类</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>商品分类
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a> <a
									href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a> <a
									href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
									<button id="sample_editable_1_new" class="btn green">
										新增分类 <i class="fa fa-plus"></i>
									</button>
								</div>
							</div>
							<div id="sample_1_wrapper" class="dataTables_wrapper form-inline"
								role="grid">
								<div class="table-scrollable">
									<table
										class="table table-striped table-bordered table-hover dataTable"
										id="sample_1" aria-describedby="sample_1_info">
										<thead>
											<tr role="row">
												<th class="table-checkbox sorting_disabled"
													role="columnheader" rowspan="1" colspan="1" aria-label=""
													style="width: 20px;"><div class="checker">
														<span><input type="checkbox"
															class="group-checkable" data-set="#sample_1 .checkboxes"></span>
													</div></th>
												<th class="sorting" role="columnheader" tabindex="0"
													aria-controls="sample_1" rowspan="1" colspan="1"
													aria-label="Username: activate to sort column ascending"
													style="width: 251px;">ID</th>
												<th class="sorting_disabled" role="columnheader" rowspan="1"
													colspan="1" aria-label="Email" style="width: 464px;">分类名称</th>
												<th class="sorting" role="columnheader" tabindex="0"
													aria-controls="sample_1" rowspan="1" colspan="1"
													aria-label="Points: activate to sort column ascending"
													style="width: 204px;">排序</th>
												<th class="sorting_disabled" role="columnheader" rowspan="1"
													colspan="1" aria-label="&amp;nbsp;" style="width: 250px;">操作</th>
											</tr>
										</thead>

										<tbody role="alert" aria-live="polite" aria-relevant="all">
											<?php if(is_array($result)): foreach($result as $key=>$vo): ?><tr class="gradeX even">
												<td class=" sorting_1"><div class="checker">
														<span><input type="checkbox" class="checkboxes"
															value="1"></span>
													</div></td>
												<td class=" "><?php echo ($vo["id"]); ?></td>
												<td class=" "><?php echo ($vo["value"]); ?></td>
												<td class=" "><?php echo ($vo["sort"]); ?></td>
												<td class=" ">
													<span class="label label-success do">操作</span>
													<span class="label label-success save" style="display: none;">保存</span>
													<span class="label label-danger del">删除</span>
												</td>
											</tr><?php endforeach; endif; ?>
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-md-5 col-sm-12"></div>
									<div class="col-md-7 col-sm-12">
										<div class="dataTables_paginate paging_bootstrap">
											<?php echo ($page); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 新增分类dialog -->
	<div class="bootbox modal fade bootbox-prompt in" tabindex="-1"
		role="dialog" aria-hidden="false" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="bootbox-close-button close">
						×</button>
					<h4 class="modal-title">新增分类</h4>
				</div>
				<div class="modal-body">
					<div class="bootbox-body">

						<form class="bootbox-form">
							<label>分类名称：</label> <input
								class="bootbox-input bootbox-input-text form-control"
								autocomplete="off" type="text" placeholder="请输入分类名称"> <label
								style="padding-top: 2px;">排序序号：</label> <input
								class="bootbox-input bootbox-input-text form-control"
								autocomplete="off" type="text" placeholder="请输入排序序号">
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button data-bb-handler="cancel" type="button"
						class="btn btn-default">取消</button>
					<button data-bb-handler="confirm" type="button"
						class="btn btn-primary">提交</button>
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
				var id = $(this).parent().prev().prev().prev().html();
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