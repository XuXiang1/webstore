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
                        class="glyphicon glyphicon-refresh"></i>刷新</a><a href="__URL__/index" class="btn btn-grey"><i class="glyphicon glyphicon-arrow-left"></i>返回</a></div><div class="panel-body"><form id="myporductform" action="__URL__/AddProduct" method="post"><input type="hidden" name="productid" id="PID" value="<?php echo ($pid); ?>" /><div class="form-group"><label for="ProductName"><b>产品名称</b></label><input class="form-control" name="ProductName" maxlength="50" type="text" placeholder="" value="<?php echo ($productdata['Name']); ?>"></div><div class="row" style="padding:4px 15px ;"><label for=""><b>产品图片</b></label><br /><table class="table table-hover " id="piclist" style="width: 30%;float: left;"><thead><tr><th style="width: 80px;">排序</th><th>显示图片</th><th style="width: 100px;">操作</th></tr></thead><tbody id="myPicList"><?php if(is_array($productimgdata)): $i = 0; $__LIST__ = $productimgdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><tr><td><input type="text" maxlength="9" name="paixu[]" class="amount" onkeyup="clearNoNum(event,this)" onblur="clearNoNum(event,this)" onpaste="return false" style="width: 80px;" value="<?php echo ($data1['OrderID']); ?>"><input type="hidden" name="fimg[]" value="<?php echo ($data1['imgsrc']); ?>"></td><td><img height="100" src="__PUBLIC__/UploadFiles/ProductImage/<?php echo ($data1['imgsrc']); ?>"></td><td><button type="button" onclick="deleteimage(this)" class="btn btn-default">删除</button></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div style="width: 30%;float: left;padding-left: 10px;"><input type="file" name="file_upload" id="file_upload" /><div id="queue"></div></div></div><div class="form-group"><label for="OrderID"><b>排序</b></label><input class="form-control" name="OrderID" type="text" maxlength="9" class="amount" onKeyUp="clearNoNum(event,this)" onBlur="clearNoNum(event,this)" onpaste="return false" placeholder="" value="<?php echo ($productdata['OrderID']); ?>"></div><div class="form-group"><label for="ProductFenlei"><b>产品分类</b></label><br /><br /><div class="input-group-btn" style="width: 300px;"><?php if(empty($pid)): ?><input type="hidden" name="parentclassid" id="parentclassid" value="<?php echo ($parentdata[0][ID]); ?>" /><input type="hidden" name="parentclassname" id="parentclassname" value="<?php echo ($parentdata[0][classname]); ?>" /><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="parentclassnametext"><?php echo ($parentdata[0][classname]); ?><span class="caret"></span></button><?php else: ?><input type="hidden" name="parentclassid" id="parentclassid" value="<?php echo ($productdata['parentclassid']); ?>" /><input type="hidden" name="parentclassname" id="parentclassname" value="<?php echo ($productdata['parentclassname']); ?>" /><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="parentclassnametext"><?php echo ($productdata['parentclassname']); ?><span class="caret"></span></button><?php endif; ?><ul class="dropdown-menu" aria-labelledby="dropdownMenu6" style="min-width: 130px !important;"><?php if(is_array($parentdata)): $i = 0; $__LIST__ = $parentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datap): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)" onclick="selectparent(<?php echo ($datap[ID]); ?>,this)"><?php echo ($datap[classname]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="input-group-btn" style="width: 150px;" id="childclass"></div><div class="input-group-btn" style="width: 100px;" id="loadingImage"></div></div><div class="form-group"><label for="ProductFenlei"><b>品牌</b></label><br /><br /><div class="input-group-btn" style="width: 300px;"><input type="hidden" name="brandid" id="brandid" value="<?php echo ($branddata[0][ID]); ?>" /><input type="hidden" name="brandname" id="brandname" value="<?php echo ($branddata[0][name]); ?>" /><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="brandnametext"><?php echo ($branddata[0][name]); ?><span class="caret"></span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu8" style="min-width: 130px !important;"><?php if(is_array($branddata)): $i = 0; $__LIST__ = $branddata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datab): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)" onclick="selectbrand(<?php echo ($datab[ID]); ?>,this)"><?php echo ($datab[name]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div><div class="form-group"><label for="ProductOverView"><b>简介</b></label><textarea class="form-control"  name="ProductOverView" rows="10"><?php echo ($productdata['Overview']); ?></textarea></div><div class="form-group"><label for="Description"><b>描述</b></label><div id="Description1" style="display: none;"><?php echo ($productdata[ 'Description']); ?></div><textarea id="Description" name="Description" style="visibility: hidden;"></textarea></div><div class="clearfix"></div><button type="button" class="btn btn-primary pull-right" onclick="SaveChanges()">
							提交</button></form></div></div></div></div></div></div><script src="__JS__/uploadify/jquery.uploadify.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/kindeditor-all-min.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/zh-CN.js"></script><script charset="utf-8" src="__PUBLIC__/KingEditor/code/prettify.js"></script><script>
	$(function() {
		$('#file_upload').uploadify({
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
				target: 'addproduct'
			},
			height: 30,
			width: 120,
			itemTemplate: false,
			method: 'post',
			multi: true,
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
					var filenames = '__PUBLIC__/UploadFiles/ProductImage/' + response;
					Addpic(filenames, response);
				}
			}
		});
		getchildren($("#parentclassid").val(), "<?php echo ($productdata['childclassid']); ?>", "<?php echo ($productdata['childclassname']); ?>");
	});
	var editor1;
	var edititem = ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
		'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
		'superscript', '|', 'selectall', 'forecolor', 'fontname', 'fontsize', '|', 'bold',
		'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image', 'hr', 'emoticons', 'link', 'unlink', '|'
	];
	KindEditor.ready(function(K) {
		editor1 = K.create('textarea[id="Description"]', {
			cssPath: '__PUBLIC__/KingEditor/code/prettify.css',
			uploadJson: '__ROOT__/Admin/Common/upload_json.php',
			fileManagerJson: '__ROOT__/Admin/Common/file_manager_json.php',
			allowFileManager: true,
			width: "100%",
			height: "600px",
			items: edititem,
		});
		prettyPrint();
		editor1.html($("#Description1").html());
	});

	function deleteimage(obj) {
		$(obj).parent().parent().remove();
	}

	function SaveChanges() {
		$("[name='Description']").val(editor1.html());
		if ($("[name='ProductName']").val().trim() == "") {
			myAlert("请填写产品名称！");
			return false;
		}
		if ($("[name='fimg[]']").length == 0) {
			myAlert("请至少上传一张产品图片！");
			return false;
		}
		$("#myporductform").submit();
	}

	function selectparent(num, obj) {
		var classname = $(obj).html();
		$("#parentclassid").val(num);
		$("#parentclassname").val(classname);
		$("#parentclassnametext").html(classname);
		getchildren(num, "", "");
	}

	function selectbrand(num, obj) {
		var classname = $(obj).html();
		$("#brandid").val(num);
		$("#brandname").val(classname);
		$("#brandnametext").html(classname);
	}

	function selectchild(num, obj) {
		var classname = $(obj).html();
		$("#childclassid").val(num);
		$("#childclassname").val(classname);
		$("#childclassnametext").html(classname);
	}

	function getchildren(parentid, childid, childname) {
		var url = '__URL__/GetChild';
		var postdata = {
			pid: parentid,
			childid: childid,
			childname: childname
		};
		AjaxStart($("#loadingImage"));
		$.ajax({
			type: "POST",
			cache: false,
			url: url,
			data: postdata,
			processData: true,
			success: function(data) {
				AjaxStop($("#loadingImage"));
				$("#childclass").html(data);
			},
			error: function(ex) {}
		});
	}

	function Addpic(src, filename) {
		var tr = $("<tr></tr>");
		var td1 = $("<td></td>");
		var input1 = $("<input type='text' />").css("width", "80px").attr("maxlength", "9").attr("name", "paixu[]").addClass("amount").attr("onKeyUp", "clearNoNum(event,this)").attr("onBlur", "clearNoNum(event,this)").attr("onpaste", "return false");
		var input2 = $("<input type='hidden' />").attr("name", "fimg[]").val(filename);
		var td2 = $("<td></td>");
		var img1 = $("<img />").attr("height", "100").attr("src", src);
		var td3 = $("<td></td>");
		var button1 = $("<button></button>").attr("type", "button").attr("onclick", "deleteimage(this)").addClass("btn").addClass("btn-default").html("删除");
		var trtemp = tr.append(td1.append(input1).append(input2)).append(td2.append(img1)).append(td3.append(button1));
		$("#myPicList").append(trtemp);
	}
</script></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>