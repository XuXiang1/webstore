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
						class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;联系我们</a></li></ul><style>
	.arriv-left {
		padding-left: 0;
		position: relative;
	}
	.arriv-info {
		position: absolute;
		bottom: 0;
		left: 0;
		text-align: left;
		background-color: #252525;
		background-color: rgba(0, 0, 0, 0.5);
		padding: 6px;
		width: 100%;
	}
	.arriv-right {
		padding-right: 0;
		position: relative;
	}
	.arriv-left1 {
		padding-left: 0;
		position: relative;
	}
	.arriv-left2 {
		padding-left: 0;
		position: relative;
	}
	.arriv-right1 {
		padding-right: 0;
		position: relative;
	}
	.arriv-right2 {
		padding-right: 0;
		position: relative;
	}
	.arriv h3 {
		font-size: 1.5em;
		font-weight: 500;
		color: #f9f9f9;
		margin: 0 0 0.5em;
		padding-left: 10px;
	}
	.arriv p {
		color: #ededed;
		font-size: 1em;
		font-weight: 300;
		line-height: 1.8em;
		margin: 0.5em 0;
		padding-left: 10px;
	}
	.crt-btn {
		float: right;
		margin-top: 32px;
		margin-right: 16px;
	}
	.crt-btn a {
		text-transform: capitalize;
		display: inline-block;
		padding: 6px 16px;
		font-size: 0.8725em;
		font-weight: 300;
		color: #f9f9f9;
		border: 1px solid #f9f9f9;
		background: none;
		text-decoration: none;
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
	.crt-btn a:hover {
		background: #ff6978;
		border: 1px solid #ff6978;
	}
	.arriv-info1 {
		position: absolute;
		top: 145px;
		left: 248px;
		text-align: center;
	}
	.arriv-bottm {
		margin: 1.5em 0;
	}
	.arriv-top {
		margin: 1.5em 0;
	}
	.arriv h3 {
		font-size: 1.5em;
		font-weight: 500;
		color: #f9f9f9;
		margin: 0 0 0.5em;
		padding-left: 10px;
	}
	.editbtn {
		position: absolute;
		right: 20px;
	}
</style><div class="section"><div class="container arriv"><!-- Modal --><div class="row"><div class="panel panel-default"><div class="panel-heading"><a href="javascript: location.reload();" class="btn btn-grey"><i
                        class="glyphicon glyphicon-refresh"></i>刷新</a><a href="__URL__/index" class="btn btn-grey"><i class="glyphicon glyphicon-arrow-left"></i>返回</a></div><div class="panel-body"><div class="arriv-top"><div class="col-md-6 arriv-left"><a href="javascript:void(0)" onclick="editslider(1)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[0][imgsrc]); ?>" class="img-responsive" style="height: 387px;" alt=""><div class="arriv-info" style="width: 555px;"><div style="width: 80%;float: left;"><h3><?php echo ($sliderdata[0][title]); ?></h3><p><?php echo ($sliderdata[0][overview]); ?></p></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[0][link]); ?>"><?php echo ($sliderdata[0][linktext]); ?></a></div></div></div><div class="col-md-6 arriv-right"><a href="javascript:void(0)" onclick="editslider(2)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[1][imgsrc]); ?>" class="img-responsive" style="height: 387px;" alt=""><div class="arriv-info" style="width: 555px;left:15px"><div style="width: 80%;float: left;"><h3><?php echo ($sliderdata[1][title]); ?></h3><p><?php echo ($sliderdata[1][overview]); ?></p></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[1][link]); ?>"><?php echo ($sliderdata[1][linktext]); ?></a></div></div></div><div class="clearfix"></div></div><div class="arriv-bottm"><div class="col-md-8 arriv-left1"><a href="javascript:void(0)" onclick="editslider(3)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[2][imgsrc]); ?>" style="height: 292px;" class="img-responsive" alt=""><div class="arriv-info" style="width: 745px;"><div style="width: 80%;float: left;"><h3><?php echo ($sliderdata[2][title]); ?></h3><p><?php echo ($sliderdata[2][overview]); ?></p></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[2][link]); ?>"><?php echo ($sliderdata[2][linktext]); ?></a></div></div></div><div class="col-md-4 arriv-right1"><a href="javascript:void(0)" onclick="editslider(4)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[3][imgsrc]); ?>" style="height: 292px;" class="img-responsive" alt=""><div class="arriv-info" style="width: 365px;left:15px"><div style="width: 65%;float: left;"><h3><?php echo ($sliderdata[3][title]); ?></h3><p><?php echo ($sliderdata[3][overview]); ?></p></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[3][link]); ?>"><?php echo ($sliderdata[3][linktext]); ?></a></div></div></div><div class="clearfix"></div></div><div class="arriv-las"><div class="col-md-4 arriv-left2"><a href="javascript:void(0)" onclick="editslider(5)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[4][imgsrc]); ?>" style="height: 273px;" class="img-responsive" alt=""><div class="arriv-info" style="width: 365px;left:0px"><div style="width: 65%;float: left;"><h3><?php echo ($sliderdata[4][title]); ?></h3></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[4][link]); ?>"><?php echo ($sliderdata[4][linktext]); ?></a></div></div></div><div class="col-md-4 arriv-middle"><a href="javascript:void(0)" onclick="editslider(6)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[5][imgsrc]); ?>" class="img-responsive" style="width: 365px;height: 273.75px;" alt=""><div class="arriv-info" style="width: 350px;left:15px"><div style="width: 65%;float: left;"><h3><?php echo ($sliderdata[5][title]); ?></h3></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[5][link]); ?>"><?php echo ($sliderdata[5][linktext]); ?></a></div></div></div><div class="col-md-4 arriv-right2"><a href="javascript:void(0)" onclick="editslider(7)" class="btn editbtn" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil icon-white"></i>编辑
							</a><img src="__PUBLIC__/UploadFiles/Slider/<?php echo ($sliderdata[6][imgsrc]); ?>" style="height: 273px;" class="img-responsive" alt=""><div class="arriv-info" style="width: 365px;left:15px"><div style="width: 65%;float: left;"><h3><?php echo ($sliderdata[6][title]); ?></h3></div><div class="crt-btn"><a href="__ROOT__<?php echo ($sliderdata[6][link]); ?>"><?php echo ($sliderdata[6][linktext]); ?></a></div></div></div><div class="clearfix"></div></div></div></div></div></div></div><script src="__JS__/uploadify/jquery.uploadify.js"></script><script>
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
				target: 'addslider'
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
					$("#imgsrc").val(response);
					var filenames = '__PUBLIC__/UploadFiles/Slider/' + response;
					$("#sliderimg").attr("src", filenames);
				}
			}
		});
		$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
			$("#linktype").val($(e.target).attr("aria-controls"));
		})
	});

	function editslider(num) {
		$("#pid").val(num);
		//ajax取数据
		var url = '__URL__/getslider';
		var callback = function(data) {
			if (data.ID) {
				var filenames = '__PUBLIC__/UploadFiles/Slider/' + data.imgsrc;
				$("#sliderimg").attr("src", filenames);
				$("[name='imgsrc']").val(data.imgsrc);
				$("[name='slidertitle']").val(data.title);
				$("[name='slideroverview']").val(data.overview);
				$("[name='sliderlinktext']").val(data.linktext);
				//初始化连接编辑器
				if (data.linktype == "" || data.linktype =="product") {
					data.linktype = "product"
					$('#myTabs a[href="#product"]').tab('show');
					$("#linktype").val('product');
					selectparent(data.parentid, data.childid)
					selectnews(data.newsid);
				} else {
					$("#myTabs a[href='#" + data.linktype + "']").tab('show');
					$("#linktype").val(data.linktype);
				}
				$("[name='sliderlink']").val(data.link);
			}
		};
		var postdata = {
			pid: num
		};
		ajaxExecute(url, callback, postdata);
	}

	function doPost() {
		$("#myform1").submit();
	}

	function selectnews(num) {
		if (num != "" && num != undefined && num != 0) {
			var classname = $("#news" + num).html();
			$("#newsid").val(num);
			$("#newstext").html(classname);
		} else {
			var parentid = $(".newslink").first().attr("pdata");
			var parentname = $(".newslink").first().html();
			$("#newsid").val(parentid);
			$("#newstext").html(parentname);
		}
	}

	function selectparent(num, childid) {
		if (num != "" && num != undefined && num != 0) {
			var classname = $("#parent" + num).html();
			$("#parentclassid").val(num);
			$("#parentclassnametext").html(classname);
			getchildren(num, childid);
		} else {
			var parentid = $(".parentclasslink").first().attr("pdata");
			var parentname = $(".parentclasslink").first().html();
			$("#parentclassid").val(parentid);
			$("#parentclassnametext").html(parentname);
			getchildren(parentid, childid);
		}
	}

	function selectchild(num) {
		if (num != "" && num != undefined && num != 0) {
			var classname = $("#child" + num).html();
			$("#childclassid").val(num);
			$("#childclassnametext").html(classname);
		} else {
			var childid = $(".childclasslink").first().attr("pdata");
			var childname = $(".childclasslink").first().html();
			$("#childclassid").val(childid);
			$("#childclassnametext").html(childname);
		}
	}

	function getchildren(parentid, childid) {
		var url = '__URL__/GetChild';
		var postdata = {
			pid: parentid,
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
				selectchild(childid);
			},
			error: function(ex) {}
		});
	}
</script><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">编辑磁贴</h4><span></span></div><div class="modal-body"><form id="myform1" action="__URL__/editsliderpost" method="post"><input type="hidden" name="pid" id="pid" value="" /><div class="form-group"><label for="slidertitle"><b>磁贴图片</b></label></div><div class="form-group"><div class="row"><div class="col-lg-4"><img src="" id="sliderimg" style="max-width: 100%;" /></div><div class="col-lg-8"><input type="hidden" name="imgsrc" id="imgsrc" value="" /><input type="file" name="file_upload" id="file_upload" /><div id="queue"></div></div></div></div><div class="form-group"><label for="slidertitle"><b>磁贴标题</b></label><input class="form-control" maxlength="20" name="slidertitle" type="text" placeholder="" value=""></div><div class="form-group"><label for="slidertitle"><b>磁贴简介</b></label><input class="form-control" maxlength="50" name="slideroverview" type="text" placeholder="" value=""></div><div class="form-group"><label for="slidertitle"><b>链接文字</b></label><input class="form-control" maxlength="8" name="sliderlinktext" type="text" placeholder="" value=""></div><div class="form-group"><label for="slidertitle"><b>磁贴链接</b></label><input type="hidden" name="parentclassid" id="parentclassid" value="" /><input type="hidden" name="linktype" id="linktype" value="" /><input type="hidden" name="childclassid" id="childclassid" value="" /><input type="hidden" name="newsid" id="newsid" value="" /><div><!-- Nav tabs --><ul id="myTabs" class="nav nav-tabs" role="tablist"><li role="presentation" class="active"><a href="#product" aria-controls="product" role="tab" data-toggle="tab">分类链接</a></li><li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">某个新闻链接</a></li><li role="presentation"><a href="#joinus" aria-controls="joinus" role="tab" data-toggle="tab">加盟狼堡链接</a></li><li role="presentation"><a href="#userlink" aria-controls="userlink" role="tab" data-toggle="tab">自定义链接</a></li></ul><!-- Tab panes --><div class="tab-content" style="padding-left: 10px;padding-top: 10px;"><div role="tabpanel" class="tab-pane active" id="product"><div class="input-group-btn" style="width: 300px;"><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="parentclassnametext"></span><span class="caret"></span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu6" style="min-width: 130px !important;"><?php if(is_array($parentdata)): $i = 0; $__LIST__ = $parentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datap): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)" id="parent<?php echo ($datap[ID]); ?>" pdata="<?php echo ($datap[ID]); ?>" class="parentclasslink" onclick="selectparent(<?php echo ($datap[ID]); ?>,'')"><?php echo ($datap[classname]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="input-group-btn" style="width: 150px;" id="childclass"></div><div class="input-group-btn" style="width: 100px;" id="loadingImage"></div></div><div role="tabpanel" class="tab-pane" id="news"><div class="input-group-btn" style="width: 400px;"><div class="input-group-btn" style="width: 400px;"><button class="btn btn-default dropdown-toggle" style="width:130px" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span id="newstext"></span><span class="caret"></span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu8" style="min-width: 130px !important;"><?php if(is_array($newsdata)): $i = 0; $__LIST__ = $newsdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datan): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)" id="news<?php echo ($datan[ID]); ?>" pdata="<?php echo ($datan[ID]); ?>" class="newslink" onclick="selectnews(<?php echo ($datan[ID]); ?>,'')"><?php echo ($datan[Name]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div></div><div role="tabpanel" class="tab-pane" id="joinus">.加盟狼堡链接.</div><div role="tabpanel" class="tab-pane" id="userlink"><input class="form-control" type="text" name="sliderlink" id="sliderlink" value=""></div></div></div></div></form></div><div class="clearfix"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary" onclick="doPost()">
					提交</button></div></div></div></div></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>