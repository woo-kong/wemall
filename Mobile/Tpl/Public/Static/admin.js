function doProduct (id , status) {
	$.ajax({
		url:appurl+'/Index/doupdown',
		type:'post',
		data:{
			'id':id,
			'status':status
		},
		success:function(response , status , xhr ){
			var json = eval(response);

			if (json.status == '1') {
				var doclass = 'ok';
				var dohtml = '下架';
				var status = '1';
			}else{
				var doclass = 'no';
				var dohtml = '上架';
				var status = '0';
			}
			$('#'+json.id).children().attr('class',doclass);
			$('#'+json.id).children().html(dohtml);
			$('#'+json.id).attr('href','javascript:doProduct('+json.id+','+status+');');
		}
	});
}

function doLogin (){
	$.ajax({
		type : 'post',
		url : appurl+'/Index/login',
		data : {
			username : $('#username').val(),
			password : $('#password').val()
		},
		success : function (response , status , xhr){
			if (response == '1') {
				$('#cpanel').show();
				$('#orderscpanel').show();
				$('#goodscpanel').hide();
				$('#logincpanel').hide();
			}else{
				alert('登录失败');
			};
		}
	});
}
function fetchdetail( orderid ){
	$.ajax({
		type : 'post',
		url : appurl+'/Index/fetchdetail',
		data : {
			orderid : orderid
		},
		success : function(response , status , xhr){
			var json = eval(response);
			
			$('#orderid').html(json.orderid);
			$('#time').html(json.time);
			$('#username2').html(json.users.username);
			$('#phone').html(json.users.phone);
			$('#address').html(json.users.address);
			$('#note').html(json.note);
			$('#orders_status').html(json.orders_status);
			$('#pay_status').html(json.pay_status);
			$('#totalprice').html(json.totalprice);
			$('#print_status').html(json.print_status);
			
			$('#ordersdetailcpanel').show();
			$('#orderscpanel').hide();

			var html = '';
			$.each(json.ordersinfo , function(index , value){
				html += '<tr type="wemall"><td>'+value.title+'</td><td class="cc">'+value.price+'</td><td class="cc">'+value.num+'</td><td class="rr">￥'+value.price*value.num+'</td></tr>';
			});
			$('#trtotal').parent().find('tr[type="wemall"]').remove();
			$('#trtotal').before(html);
		}
	});
}

$('#ordersmanage').click(function(){
	$('#goodscpanel').hide();
	$('#orderscpanel').show();
	$('#ordersdetailcpanel').hide();
	$(".footermenu ul li a").each(function(){
		$(this).attr("class","");
	});
	$(this).children("a").attr("class","active");
});

$('#productmanage').click(function(){
	$('#orderscpanel').hide();
	$('#goodscpanel').show();
	$('#ordersdetailcpanel').hide();
	$(".footermenu ul li a").each(function(){
		$(this).attr("class","");
	});
	$(this).children("a").attr("class","active");
});
