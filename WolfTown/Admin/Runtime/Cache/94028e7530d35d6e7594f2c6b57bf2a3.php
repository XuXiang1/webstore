<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title>网站后台</title><meta name="description" content=""><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="__CSS__/bootstrap.min.css"><link rel="stylesheet" href="__CSS__/icomoon-social.css"><link rel="stylesheet" href="__CSS__/leaflet.css" /><link rel="stylesheet" href="__CSS__/main.css"><link rel="stylesheet" href="__CSS__/bootstrap-datetimepicker.min.css"><link rel="stylesheet" href="__PUBLIC__/KingEditor/themes/default/default.css" /><link rel="stylesheet" href="__PUBLIC__/KingEditor//code/prettify.css" /><link rel="stylesheet" href="__CSS__/pagination.css"><script type="text/javascript" src="__JS__/modernizr-2.6.2-respond-1.1.0.min.js"></script><script type="text/javascript" src="__JS__/jquery-1.9.1.min.js"></script><link rel="stylesheet" href="__JS__/uploadify/uploadify.css"><script type="text/javascript" src="__JS__/bootstrap.min.js"></script><script src="__JS__/jquery.pagination.js"></script><script type="text/javascript" src="__JS__/Common.js"></script><script type="text/javascript">
			var mymodelName = '<?php echo (trim(strtolower(MODULE_NAME))); ?>';
			var myActionName = '<?php echo (trim(strtolower(ACTION_NAME))); ?>';
			var currentPublicURL = '__PUBLIC__/';
			var imgfilemax = 999999999;
		</script></head><body><div class="container"><div style="margin-top: 15px;"><ul class="nav nav-tabs"><li role="presentation" nameflag="index"><a href="__ROOT__/admin.php"><span
						class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;首&nbsp;页&nbsp;</a></li><li role="presentation" nameflag="product"><a href="__ROOT__/admin.php/product"><span
						class="glyphicon glyphicon-th" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;产品管理</a></li><li role="presentation" nameflag="news"><a href="__ROOT__/admin.php/news"><span
						class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;新闻管理</a></li><li role="presentation" nameflag="join"><a href="__ROOT__/admin.php/join"><span
						class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;加盟说明</a></li><li role="presentation" nameflag="fenxiao"><a href="__ROOT__/admin.php/fenxiao"><span
						class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;商品分销</a></li><li role="presentation" nameflag="member"><a href="__ROOT__/admin.php/member"><span
						class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;狼堡店铺</a></li><li role="presentation" nameflag="job"><a href="__ROOT__/admin.php/job"><span
						class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;招聘管理</a></li><li role="presentation" nameflag="aboutus"><a href="__ROOT__/admin.php/aboutus"><span
						class="glyphicon glyphicon-tower" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;关于我们</a></li><li role="presentation" nameflag="contactus"><a href="__ROOT__/admin.php/contactus"><span
						class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;联系我们</a></li></ul><div class="section"><div class="container"><div class="row"><div class="panel panel-default"><div class="panel-heading"><a href="javascript: location.reload();" class="btn btn-grey"><i
                        class="glyphicon glyphicon-refresh"></i>刷新</a><a href="__URL__/EditProduct" style="margin-left: 4px;" class="btn"><i
                                class="glyphicon glyphicon-plus icon-white"></i>添加产品</a><a href="__URL__/editclass" class="btn"><i
                                class="glyphicon glyphicon-list-alt"></i>产品分类</a></div><div class="panel-body"><table class="table table-hover"><thead><tr><th style="width:100px;">产品ID</th><th style="width:180px;">产品名称</th><th style="width:180px;">分类</th><th style="width:180px;">品牌</th><th style="width:180px;">修改日期</th><th style="width:320px;">操作</th></tr></thead><tbody id="myProductList"></tbody></table><div style="display: block; width: 100%; text-align: center;" id="loadingImage"></div><div id="Pagination" class="m-pagination" style="padding-left: 15px;"></div></div></div></div></div></div><script>
	$(function() {
		startPaging(0, 3);
	});

	function DeleteProduct(jsonobj) {
		if (confirm("是否删除，请确认")) {
			var objt = JSON.parse($(jsonobj).siblings(".pdata").html());
			var url = '__URL__/DeleteProduct';
			var callback = function(data) {
				if (data.status == 1) {
					myAlert("产品已删除", "refresh");
				}
			};
			var postdata = {
				ID: objt.ID
			};
			ajaxExecute(url, callback, postdata);
		}
	}

	function startPaging(page_index, flag) {
		var url = '__URL__/productpage';
		var postdata = {
			PageIndex: page_index + 1
		};
		$("#myProductList").html("");
		AjaxStart($("#loadingImage"));
		$.ajax({
			type: "POST",
			cache: false,
			url: url,
			data: postdata,
			processData: true,
			success: function(data) {
				AjaxStop($("#loadingImage"));
				$("#myProductList").html(data);
				var pagecount = parseInt($("#mydatacount").val());
				if (flag != 3) {
					$("#Pagination").page('destroy');
				}
				$("#Pagination").page({
					debug: true,
					total: pagecount,
					pageSize: 10,
					firstBtnText: '首页',
					lastBtnText: '尾页',
					prevBtnText: '上一页',
					nextBtnText: '下一页',
					showInfo: true,
					jumpBtnText: '跳转',
					showPageSizes: true,
					infoFormat: '{start} ~ {end}条，共{total}条',
					mypageindex: page_index
				}).on("pageClicked", function(event, pageIndex) {
					console.log(pageIndex);
					startPaging(pageIndex)
				});
			},
			error: function(ex) {}
		});
	}
</script></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>