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
						class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;联系我们</a></li></ul><div class="section"><div class="container"><form class="" action="__URL__/editjoin" method="post"><div class="form-group"><label for="content"><b>商品分销</b></label><textarea name="content" style="width: 700px; height: 100px; visibility: hidden;"><?php echo ($initdata["content"]); ?></textarea></div><div class="form-group"><button type="submit" class="btn btn-default pull-right">保存</button></div><div class="clearfix"></div></form></div></div><script charset="utf-8" src="__PUBLIC__/KingEditor/kindeditor-all-min.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/zh-CN.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/code/prettify.js"></script><script src="__JS__/uploadify/jquery.uploadify.js"></script><script>
	var editor1;
	
	var edititem = ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
		'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
		'superscript', '|', 'selectall', 'forecolor', 'fontname', 'fontsize', '|', 'bold',
		'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image', 'hr', 'emoticons', 'link', 'unlink', '|'
	];
	KindEditor.ready(function(K) {
		editor1 = K.create('textarea[name="content"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "800px",
			items: edititem,
			afterCreate: function() {
				$(".ke-edit-iframe").css("background", "__IMG__/page-background.png");
			}
		});
		
		prettyPrint();
	});
</script></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>