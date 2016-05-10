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
						class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;联系我们</a></li></ul><div class="section"><div class="container"><!-- Modal --><div class="row"><div class="panel panel-default"><div class="panel-heading"><a href="javascript: location.reload();" class="btn btn-grey"><i
                        class="glyphicon glyphicon-refresh"></i>刷新</a><a href="__URL__/index" class="btn btn-grey"><i class="glyphicon glyphicon-arrow-left"></i>返回</a></div><div class="panel-body"><label for="file_upload"><b>新闻标题图片</b></label><form id="mynewsform" action="__URL__/AddNews" method="post"><input type="hidden" name="NID" value="<?php echo ($nid); ?>" /><input type="hidden" name="NStatues" value="<?php echo ($newsdata['Status']); ?>" /><div class="form-group"><div class="row"><div class="col-lg-6"><img src="__PUBLIC__/UploadFiles/NewsImage/<?php echo ($newsdata['TitleImage']); ?>" id="productImg" style="width: 100%" alt="请上传图片" /><input type="hidden" name="TitleImage" id="myimgfilename" value="<?php echo ($newsdata['TitleImage']); ?>" /></div><div class="col-lg-6"><input type="file" name="file_upload" id="file_upload" /><div id="queue"></div></div></div></div><div class="form-group"><label for="NewsName"><b>新闻标题</b></label><input class="form-control" name="NewsName" type="text" placeholder="" value="<?php echo ($newsdata['Name']); ?>"></div><div class="form-group"><label for="NewsDate"><b>发生日期</b></label><div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd"><input class="form-control" name="NewsDate" size="16" type="text" value="<?php echo ($newsdata['ODate']); ?>" readonly><span class="input-group-addon"><span
                                class="glyphicon glyphicon-remove"></span></span><span class="input-group-addon"><span
                                        class="glyphicon glyphicon-calendar"></span></span></div></div><div class="form-group"><label for="NewsOverView"><b>简介</b></label><input class="form-control" name="NewsOverView" type="text" placeholder="" value="<?php echo ($newsdata['OverView']); ?>"></div><div class="form-group"><label for="NewsContent"><b>内容</b></label><div id="NewsContent1" style="display: none;"><?php echo ($newsdata[ 'Content']); ?></div><textarea name="NewsContent" id="NewsContent" style=" visibility: hidden;"></textarea></div><div class="clearfix"></div><div class="clearfix"></div><button type="button" class="btn btn-primary pull-right" onclick="SaveChanges()">
							提交</button></form></div></div></div></div></div><script charset="utf-8" src="__PUBLIC__/KingEditor/kindeditor-all-min.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/zh-CN.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/code/prettify.js"></script><script src="__JS__/uploadify/jquery.uploadify.js"></script><script src="__JS__/bootstrap-datetimepicker.js"></script><script>
	$(function() {
		$('#file_upload')
			.uploadify({
				auto: true,
				buttonCursor: 'hand',
				buttonImage: '__JS__/uploadify/img/browse-btn.png',
				buttonText: '<div>选择文件</div>',
				debug: false,
				fileObjName: 'Filedata',
				fileSizeLimit: imgfilemax,
				fileTypeExts: '*.jpg;*.png;*.gif;*.jpeg',
				fileTypeDesc: 'All Files',
				formData: {
					currentroot: '__ROOT__/',
					timestamp: '<?php echo ($timestamp); ?>',
					token: '<?php echo ($unique_salt); ?>',
					target: 'addnews'
				},
				height: 30,
				width: 120,
				itemTemplate: false,
				method: 'post',
				multi: false,
				overrideEvents: [],
				preventCaching: true,
				progressData: 'percentage',
				queueID: false,
				queueSizeLimit: 999,
				removeCompleted: true,
				removeTimeout: 3,
				requeueErrors: false,
				successTimeout: 30,
				swf: '__JS__/uploadify/uploadify.swf',
				uploader: '__ROOT__/Admin/Common/uploadify.php',
				uploadLimit: 10,
				onCancel: function(file) {
					console.log('The file' + file.name + 'was cancelled.')
				},
				onClearQueue: function(queueItemCount) {
					console
						.log(queueItemCount + 'file(s) were removed frome the queue')
				},
				onDestroy: function() {},
				onDialogClose: function(queueData) {
					console.log(queueData.filesSelected + '\n' + queueData.filesQueued + '\r\n' + queueData.filesReplaced + '\r\n' + queueData.filesCancelled + '\r\n' + queueData.filesErrored)
				},
				onDialogOpen: function() {},
				onDisable: function() {},
				onEnalbe: function() {},
				onFallback: function() {},
				onInit: function(instance) {
					console.log('The queue ID is' + instance.settings.queueID)
				},
				onQueueComplete: function(queueData) {
					console.log(queueData.uploadsSuccessful + '\n' + queueData.uploadsErrored)
				},
				onSelect: function(file) {
					console.log(file.name)
				},
				onSelectError: function(file, errorCode, errorMsg) {
					console.log(errorCode)
					console.log(this.queueData.errorMsg)
				},
				onSWFReady: function() {},
				onUploadComplete: function(file) {},
				onUploadError: function(file, errorCode, erorMsg,
					errorString) {},
				onUploadProgress: function(file, bytesUploaded,
					bytesTotal, totalBytesUploaded,
					totalBytesTotal) {
					$('#pregress').html(
						'总共需要上传' + bytesTotal + '字节，' + '已上传' + totalBytesTotal + '字节')
				},
				onUploadStart: function(file) {
					console.log('start update')
				},
				onUploadSuccess: function(file, response) {
					if (response != 'Invalid') {
						$("#myimgfilename").val(response);
						response = '__PUBLIC__/UploadFiles/NewsImage/' + response;
						$("#productImg").attr("src", response);
					}
					//PostData(response);
				}
			});
		$('.form_date').datetimepicker({
			language: 'cn',
			weekStart: 1,
			todayBtn: 1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0,
			format: 'yyyy/mm/dd',
		});
	});
	var edititem = ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
		'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
		'superscript', '|', 'selectall', 'forecolor', 'fontname', 'fontsize', '|', 'bold',
		'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image', 'hr', 'emoticons', 'link', 'unlink', '|'
	];
	var editor1;
	KindEditor.ready(function(K) {
		editor1 = K.create('textarea[id="NewsContent"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "600px",
			items: edititem,
		});
		prettyPrint();
		editor1.html($("#NewsContent1").html());
	});
	var ProductObj = {
		ID: "",
		TitleImage: "",
		Name: "",
		ODate: "",
		OverView: "",
		Content: "",
		Status: ""
	};

	function SaveChanges() {
		if ($("[name='NewsName']").val().trim() == "") {
			myAlert("请填写新闻标题！");
			return false;
		}
		if ($("[name='TitleImage").val().trim() == "") {
			myAlert("请上传一张图片！");
			return false;
		}
		$("[name='NewsContent']").val(editor1.html());
		$("#mynewsform").submit();
	}
</script></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>