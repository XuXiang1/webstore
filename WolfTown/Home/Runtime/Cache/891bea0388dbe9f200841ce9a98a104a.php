<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML><html><head><title>狼堡-
			<?php echo ($ModelName); ?></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="WolfTown,上海狼堡实业有限公司" /><link href="__CSS__/bootstrap.css" rel='stylesheet' type='text/css' /><link href="__CSS__/style.css" rel='stylesheet' type='text/css' /><link href="__CSS__/megamenu.css" rel="stylesheet" type="text/css" media="all" /><link rel="stylesheet" href="__CSS__/pagination.css"><script type='text/javascript' src="__JS__/jquery-1.11.1.min.js"></script><script type="text/javascript" src="__JS__/megamenu.js"></script><script>
			var mymodelName = '<?php echo (trim(strtolower(MODULE_NAME))); ?>';
			var myActionName = '<?php echo (trim(strtolower(ACTION_NAME))); ?>';
			var currentPublicURL = '__PUBLIC__/';
			$(document).ready(function() {
				$(".megamenu").megamenu();
			});
		</script><script src="__JS__/jquery.pagination.js"></script><script type="text/javascript" src="__JS__/Common.js"></script><script src="__JS__/menu_jquery.js"></script><link rel="stylesheet" type="text/css" href="__JS__/uploadify/uploadify.css"></head><body><!-- header_top --><div class="top_bg"><div class="container"><div class="header_top"><div class="top_right"><ul><!--							<li><a href="#">联系客服</a></li>|--><li><a href="__ROOT__/aboutus">关于狼堡</a></li>|
							<li><a href="__ROOT__/join">加盟狼堡</a></li></ul></div><div class="top_left"><h2><span></span> 热线电话 : 4008888888</h2></div><div class="clearfix"></div></div></div></div><!-- header --><div class="container"><div class="header"><div class="head-t"><div class="logo"><a href="index.html"><img src="__IMG__/logo.png" style="height: 120px;" class="img-responsive" alt="" /></a></div><!-- start header_right --><div class="header_right"><div style="margin-top: 26px;"><a href=""><img src="__IMG__/cofy.png" style="width: 35px;" />&nbsp;<b>咖啡</b></a><a href=""><img src="__IMG__/cloth.png" style="width: 35px;" />&nbsp;<b>服饰</b></a><a href=""><img src="__IMG__/jiaju.png" style="width: 35px;" />&nbsp;<b>家居</b></a><div class="create_btn"><a href="__ROOT__/join">加盟狼堡</a></div></div><div class="search" style="margin-top: 10px;"><form action="__ROOT__/search" method="post"><input type="text" name="searchkey" value="" placeholder=""><input type="submit" value=""></form></div><div class="clearfix"></div></div><!--<div style="float: right;padding-right: 10px;"><a href=""><img src="__IMG__/weixin.jpg" style="width: 128px;" /></a></div>--><div class="clearfix"></div></div><!-- start header menu --><ul class="megamenu skyblue"><li class="active grid" nameflag="index"><a class="color1" href="__ROOT__">首页</a></li><li class="grid" nameflag="aboutus"><a class="color2 color-bold" href="__ROOT__/aboutus">走进狼堡</a><div class="megapanel megapanel1"><div class="row"><div class="col1"><div class="h_nav"><ul><li><a href="__ROOT__/aboutus/index/pid/company_profile">公司简介</a></li><li><a href="__ROOT__/aboutus/index/pid/company_honor">公司荣誉</a></li><li><a href="__ROOT__/aboutus/index/pid/company_team">核心团队</a></li><li><a href="__ROOT__/aboutus/index/pid/company_shop">狼堡店铺</a></li></ul></div></div></div></div></li><li nameflag="product"><a class="color4 color-bold" href="__ROOT__/product">产品展示</a><div class="megapanel megapanel2"><div class="row"><?php if(is_array($parentdata)): $i = 0; $__LIST__ = $parentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datap): $mod = ($i % 2 );++$i;?><div class="col40"><div class="h_nav"><a href="__ROOT__/product/index/d1/<?php echo ($datap[ID]); ?>"><h4><?php echo ($datap[classname]); ?></h4></a><ul><?php if(is_array($chilrendata)): $i = 0; $__LIST__ = $chilrendata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datac): $mod = ($i % 2 );++$i; if($datac[parentclass] == $datap[ID]): ?><li><a href="__ROOT__/product/index/d1/<?php echo ($datap[ID]); ?>/d2/<?php echo ($datac[ID]); ?>"><?php echo ($datac[classname]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?></ul></div></div><?php endforeach; endif; else: echo "" ;endif; ?></li><li nameflag="fenxiao"><a class="color5 color-bold" href="__ROOT__/fenxiao">商品分销</a></li><li nameflag="news"><a class="color6 color-bold" href="__ROOT__/news">狼堡资讯</a></li><li nameflag="join"><a class="color7 color-bold" href="__ROOT__/join">加盟狼堡</a></li><li nameflag="job"><a class="color8 color-bold" href="__ROOT__/job">诚聘英才</a></li><li nameflag="contactus"><a class="color9 color-bold" href="__ROOT__/contactus">联系我们</a></li></ul></div></div><script type="text/javascript">
					myChangeHead(mymodelName);
				</script><div class="container"><div class="row job-div"><div class="col-md-7"><!-- Job Description --><div class="job-details-wrapper" style="padding-left: 2px;"><h3><?php echo ($jobdata["JobName"]); ?></h3><br /><p><?php echo ($jobdata["Description"]); ?></p><br /><h4>技能要求</h4><ul><?php if(is_array($skilldata)): $i = 0; $__LIST__ = $skilldata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><?php echo ($data); ?></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><br /><h4>如何应聘?</h4><p>
						简历发送至:
						<a href="mailto:<?php echo ($jobwelcome["MANAGEREMAIL"]); ?>"><?php echo ($jobwelcome["MANAGEREMAIL"]); ?></a></p></div><!-- End Job Description --></div><div class="col-sm-5" style="padding-left: 0;"><div class="contactform"><div class="contact-form-wrapper"><div class="alert alert-success" role="alert"><p id="takeaction"><span>上传简历</span> （文档大小必须小于 200KB）:</p></div><form action="__URL__/addresum" method="post" class="form-horizontal" id="myform" role="form"><div class="form-group"><label for="resum-Name" class="col-sm-4 control-label">您的称呼:</label><div class="col-sm-8"><input class="form-control" name="resumName" id="resum-Name" onblur="checkinput()" maxlength="100" type="text" placeholder=""></div></div><div class="form-group"><label for="contact-email" class="col-sm-4 control-label">您的邮箱:</label><div class="col-sm-8"><input class="form-control" name="resumEmail" id="resum-Email" onblur="checkinput()" maxlength="100" type="text" placeholder=""></div></div><div class="form-group"><label for="contact-message" class="col-sm-4 control-label">您的简历</label><div class="col-sm-8"><input class="col-md-6" type="file" name="file_upload" id="file_upload" /><div id="queue"></div><input type="hidden" id="filename" name="resumFileName" value="" /><input type="hidden" name="JobID" value="<?php echo ($jobdata["ID"]); ?>" /></div></div><div class="form-group"><label for="contact-message" class="col-sm-3 control-label"><b></b></label><div class="col-sm-9" id="warningDIV"></div></div></form><div><div class="create_btn"><a href="javascript:void(0)" onclick="return Dpost()">提交简历</a></div><!--	<button onclick="return Dpost()" class="btn btn-large pull-right">提交</button>--></div></div></div></div></div></div><script src="__JS__/uploadify/jquery.uploadify.js"></script><script>
		$(function() {
			if (navigator.platform.indexOf('Win32') != -1) {
				//pc
				//window.location.href="电脑网址";
			} else {
				//shouji
				$("#takeaction").append("<br /><span style='color:red'>手机不可以使用上传功能，请在PC上使用，谢谢</span>");
			}
			$('#file_upload')
				.uploadify({
					auto: false,
					buttonCursor: 'hand',
					buttonText: '<div>选择简历</div>',
					debug: false,
					fileObjName: 'Filedata',
					fileSizeLimit: 200,
					fileTypeExts: '*.doc;*.docx;',
					fileTypeDesc: 'All Files',
					formData: {
						currentroot: '__ROOT__/',
						timestamp: '<?php echo ($timestamp); ?>',
						token: '<?php echo ($unique_salt); ?>',
						target: 'addresum'
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
						console.log(queueData.filesSelected + 'n' + queueData.filesQueued + 'rn' + queueData.filesReplaced + 'rn' + queueData.filesCancelled + 'rn' + queueData.filesErrored)
					},
					onDialogOpen: function() {},
					onDisable: function() {},
					onEnalbe: function() {},
					onFallback: function() {},
					onInit: function(instance) {
						console.log('The queue ID is' + instance.settings.queueID)
					},
					onQueueComplete: function(queueData) {
						console.log(queueData.uploadsSuccessful + 'n' + queueData.uploadsErrored)
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
						errorString) {
						// alert(erorMsg + "__-____"+errorString);
					},
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
						if (response == 'Invalid') {
							response = '';
						}
						$("#filename").val(response);
						PostData();
					}
				});
		});

		function checkinput() {
			var rName = $("#resum-Name").val();
			var rEmail = $("#resum-Email").val();
			if (rName.trim() == "" || rEmail.trim() == "") {
				addWarning("请填写‘称呼’ 和 '邮箱'");
			} else {
				if ($(".fileName").length == 1) { //有文件
					removeWarning();
				} else { //没有图片
					addWarning('请选择文件');
				}
			}
		}

		function Dpost() {
			checkinput();
			if ($("#warningDIV").html().trim() == "") {
				$('#file_upload').uploadify('upload');
				//alert('开始上传');
			}
		}

		function addWarning(mystr) {
			$("#warningDIV").html("");
			var warningspan = $("<span></span>").addClass("label label-warning").html(mystr);
			$("#warningDIV").append(warningspan);
		}

		function removeWarning() {
			$("#warningDIV").html("");
		}

		function PostData() {
			$("#myform").submit();
		}
	</script><div class="foot-top"><div class="container"><div class="col-md-6 s-c"><li><div class="fooll"><h5>成为我们的加盟商！</h5></div></li><div class="clearfix"></div></div><div class="col-md-6 s-c"><div class="stay"><form action="__ROOT__/contactus/sendmessage" method="post"><div class="stay-left"><input type="text" name="contact-email" placeholder="输入您的邮箱地址" required=""><input type="hidden" name="contact-message" value="我要加盟" /><input name="Name" maxlength="100" type="hidden" placeholder="" value="匿名"></div><div class="btn-1"><input type="submit" value="加盟"></div></form><div class="clearfix"></div></div></div><div class="clearfix"></div></div></div><div class="footer"><div class="container"><div class="col-md-2 cust"><h4>用户指南</h4><li><a href="#">帮助中心</a></li><li><a href="#">FAQ</a></li><li><a href="buy.html">如何购买</a></li><li><a href="#">物流</a></li></div><div class="col-md-2 cust"><h4>关于我们</h4><li><a href="#">公司发展历程</a></li><li><a href="#">核心竞争力</a></li><li><a href="#">联系我们</a></li></div><div class="col-md-2 myac"><h4>友情链接</h4><li><a href="#">链接1</a></li><li><a href="#">链接2</a></li><li><a href="#">链接3</a></li><li><a href="#">链接4</a></li></div><div class="col-md-3 myac"><h4>狼堡店铺</h4><li><a href="#">上海松江狼堡品牌折扣馆</a></li><li><a href="#">上海松江狼堡品牌折扣馆</a></li><li><a href="#">杭州萧山狼堡品牌工厂店</a></li><li><a href="#">上海金山狼堡·身外织物时尚生活体验馆</a></li><li><a href="#">贵州安顺狼堡品牌集合店</a></li></div><div class="col-md-3 our-st"><h4>联系方式</h4><li><i class="add"></i>贵州安顺狼堡品牌集合店</li><li><i class="phone"></i>025-8888888</li><li><a href="mailto:info@example.com"><i class="mail"></i>info@sitename.com </a></li></div><div class="clearfix"></div><p>Copyright &copy; 2015.Company name All rights reserved. </p></div></div></body></html>