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
						class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;联系我们</a></li></ul><div class="section"><div class="container"><form class="" action="__URL__/editaboutus" method="post"><div class="form-group"><label for="profile"><b>公司简介</b></label><textarea name="profile" style="width: 700px; height: 100px; visibility: hidden;"><?php echo ($initdata["profile"]); ?></textarea></div><div class="form-group"><label for="history"><b>公司发展历程</b></label><textarea name="history" style="width: 700px; height: 100px; visibility: hidden;"><?php echo ($initdata["history"]); ?></textarea></div><div class="form-group"><label for="competence"><b>核心竞争力</b></label><textarea name="competence" style="width: 700px; height: 100px; visibility: hidden;"><?php echo ($initdata["competence"]); ?></textarea></div><div class="form-group"><label for="honor"><b>公司荣誉</b></label><textarea name="honor" style="width: 700px; height: 100px; visibility: hidden;"><?php echo ($initdata["honor"]); ?></textarea></div><div class="form-group"><label for="NewsContent"><b>团队照片墙</b></label></div><div class="row" style="margin-top: 6px; margin-bottom: 50px"><div class="col-lg-4"><div class="input-group"><label><b>团队名称</b></label><input class="form-control" id="INAME" type="text" maxlength="50" placeholder="" /></div></div><div class="col-lg-4"><div class="input-group"><label><b>描述</b></label><input class="form-control" id="IPosition" maxlength="50" type="text" placeholder="" /></div></div><div class="col-lg-4"><div class="input-group"><label><b>照片</b></label><input type="file" name="file_upload" id="file_upload" /><div id="queue"></div></div></div></div><div class="row" id="imagegroup"></div><div class="form-group"><button type="submit" class="btn btn-default pull-right">保存</button></div><div class="clearfix"></div></form></div></div><script charset="utf-8" src="__PUBLIC__/KingEditor/kindeditor-all-min.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/zh-CN.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/code/prettify.js"></script><script src="__JS__/uploadify/jquery.uploadify.js"></script><script>
	var editor1;
	var editor2;
	var editor3;
	var editor4;
	var edititem = ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
		'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
		'superscript', '|', 'selectall', 'forecolor', 'fontname', 'fontsize', '|', 'bold',
		'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image', 'hr', 'emoticons', 'link', 'unlink', '|'
	];
	KindEditor.ready(function(K) {
		editor1 = K.create('textarea[name="profile"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "400px",
			items: edititem,
			afterCreate: function() {
				$(".ke-edit-iframe").css("background", "__IMG__/page-background.png");
			}
		});
		editor2 = K.create('textarea[name="history"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "400px",
			items: edititem,
			afterCreate: function() {
				$(".ke-edit-iframe").css("background", "__IMG__/page-background.png");
			}
		});
		editor3 = K.create('textarea[name="competence"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "400px",
			items: edititem,
			afterCreate: function() {
				$(".ke-edit-iframe").css("background", "__IMG__/page-background.png");
			}
		});
		editor4 = K.create('textarea[name="honor"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "400px",
			items: edititem,
			afterCreate: function() {
				$(".ke-edit-iframe").css("background", "__IMG__/page-background.png");
			}
		});
		prettyPrint();
	});

	function deleteself(obj) {
		$(obj).parent().parent().parent().parent().remove();
	}

	function AddImage(IName, IPosition, imgfile) {
		var count = $(".team-member").length;
		var div1 = $("<div></div>").addClass("col-md-4 col-sm-6");
		var div2 = $("<div></div>").addClass("team-member");
		var div3 = $("<div></div>").css("display", "block").css("text-align", "right").css("padding", "6px").append($("<a></a>").attr("href", "javascript:void(0)").append($("<span></span>").addClass("glyphicon glyphicon-remove").attr("aria-hidden", "true").attr("onclick", "deleteself(this)").html("删除")));
		var div4 = $("<div></div>").addClass("team-member-image").append($("<img />").attr("src", imgfile).attr("alt", "团队图片"));
		var div5 = $("<div></div>").addClass("team-member-info").append($("<ul></ul>").append($("<li></li>").addClass("team-member-name").html(IName)).append($("<li></li>").html(IPosition)));
		var hiddendata1 = $("<input />").attr("type", "hidden").attr("name", "Igroup[" + count + "][name]").val(IName);
		var hiddendata2 = $("<input />").attr("type", "hidden").attr("name", "Igroup[" + count + "][posigion]").val(IPosition);
		var hiddendata3 = $("<input />").attr("type", "hidden").attr("name", "Igroup[" + count + "][image]").val(imgfile);
		div2.append(div3).append(div4).append(div5);
		div1.append(div2).append(hiddendata1).append(hiddendata2).append(hiddendata3);
		$("#imagegroup").append(div1);
	}
	$(function() {
		var imgaged = JSON.parse('<?php echo ($initdata["team"]); ?>');
		for (var i = 0; i < imgaged.length; i++) {
			AddImage(imgaged[i].name, imgaged[i].posigion, imgaged[i].image);
		}
		$('#file_upload')
			.uploadify({
				auto: true,
				buttonCursor: 'hand',
				buttonImage: '__JS__/uploadify/img/browse-btn.png',
				debug: false,
				fileObjName: 'Filedata',
				fileSizeLimit: imgfilemax,
				fileTypeExts: '*.jpg;*.png;*.gif;*.jpeg',
				fileTypeDesc: 'All Files',
				formData: {
					currentroot: '__ROOT__/',
					timestamp: '<?php echo ($timestamp); ?>',
					token: '<?php echo ($unique_salt); ?>',
					target: 'addaboutus'
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
						response = '__PUBLIC__/UploadFiles/AboutUS/' + response
					}
					var IName = $("#INAME").val();
					var IPosition = $("#IPosition").val();
					AddImage(IName, IPosition, response);
				}
			});
	});
</script></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>