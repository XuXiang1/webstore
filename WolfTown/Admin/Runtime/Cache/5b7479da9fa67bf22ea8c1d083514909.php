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
						class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;联系我们</a></li></ul><script src="__JS__/uploadify/jquery.uploadify.js"></script><script>    $(function () {
        $("#myModal").on('hidden.bs.modal', function (e) {
            $("#myModal input").val("");
            $("#myModal textarea").val("");
            $("#HighlightsCount").val(1);
            $(".JobHighlights").parent().parent().parent().remove();

        });

        $("#resuModel").on('hidden.bs.modal', function (e) {
            $("#ResumPagination").html("");
        });
        startPaging(0, 3);

        $('#file_upload')
               .uploadify(
                       {
                           auto: true,
                           buttonCursor: 'hand',
                           buttonImage: '__JS__/uploadify/img/browse-btn.png',
                           buttonText: '<div>选择文件</div>',
                           debug: false,
                           fileObjName: 'Filedata',
                           fileSizeLimit: 50,
                           fileTypeExts: '*.jpg;*.png;*.gif;*.jpeg',
                           fileTypeDesc: 'All Files',
                           formData: {
                           	   currentroot: '__ROOT__/',
                               timestamp: '<?php echo ($timestamp); ?>',
                               token: '<?php echo ($unique_salt); ?>',
                               target: 'jobwelcome'
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
                           onCancel: function (file) {
                               console.log('The file' + file.name
                                       + 'was cancelled.')
                           },
                           onClearQueue: function (queueItemCount) {
                               console
                                       .log(queueItemCount
                                               + 'file(s) were removed frome the queue')
                           },
                           onDestroy: function () {
                           },
                           onDialogClose: function (queueData) {
                               console.log(queueData.filesSelected + '\n'
                                       + queueData.filesQueued + '\r\n'
                                       + queueData.filesReplaced + '\r\n'
                                       + queueData.filesCancelled + '\r\n'
                                       + queueData.filesErrored)
                           },
                           onDialogOpen: function () {
                           },
                           onDisable: function () {
                           },
                           onEnalbe: function () {
                           },
                           onFallback: function () {
                           },
                           onInit: function (instance) {
                               console.log('The queue ID is'
                                       + instance.settings.queueID)
                           },
                           onQueueComplete: function (queueData) {
                               console.log(queueData.uploadsSuccessful + '\n'
                                       + queueData.uploadsErrored)
                           },
                           onSelect: function (file) {
                               console.log(file.name)
                           },
                           onSelectError: function (file, errorCode, errorMsg) {
                               console.log(errorCode)
                               console.log(this.queueData.errorMsg)
                           },
                           onSWFReady: function () {
                           },
                           onUploadComplete: function (file) {
                           },
                           onUploadError: function (file, errorCode, erorMsg,
                                   errorString) {
                           },
                           onUploadProgress: function (file, bytesUploaded,
                                   bytesTotal, totalBytesUploaded,
                                   totalBytesTotal) {
                               $('#pregress').html(
                                       '总共需要上传' + bytesTotal + '字节，' + '已上传'
                                               + totalBytesTotal + '字节')
                           },
                           onUploadStart: function (file) {
                               console.log('start update')
                           },
                           onUploadSuccess: function (file, response) {
                               if (response != 'Invalid') {
                                   $("#welcomeimagehidden").val(response);
                                   response = '__PUBLIC__/UploadFiles/JobWelcome/'
                                           + response;
                                   $("#welcomeimage").attr("src", response);

                               }
                           }
                       });

    });

    function startPaging(page_index, flag) {
        var url = '__URL__/jobpage';
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
            success: function (data) {
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
                }).on("pageClicked", function (event, pageIndex) {
                    console.log(pageIndex);
                    startPaging(pageIndex)
                });
            },
            error: function (ex) {

            }
        });
    }

    function AddJob() {
        $("#myModalLabel").html("添加招聘职位");
    }

    function lookresum(jobid) {
        $("#myModalLabel").html("查看简历");
        $("#resuModel").modal('show');
        startresumPaging(0, jobid, 3);
    }

    function startresumPaging(page_index, jobid, flag) {
        var url = '__URL__/resumpage';
        var postdata = {
            JobID: jobid,
            PageIndex: page_index + 1
        };
        $("#resumlist").html("");
        AjaxStart($("#resumloadingImage"));
        $.ajax({
            type: "POST",
            cache: false,
            url: url,
            data: postdata,
            processData: true,
            success: function (data) {
                AjaxStop($("#resumloadingImage"));
                $("#resumlist").html(data);
                var pagecount = parseInt($("#myresumdatacount").val());
                if (flag != 3) {
                    $("#ResumPagination").page('destroy');
                }
                $("#ResumPagination").page({
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
                }).on("pageClicked", function (event, pageIndex) {
                    startresumPaging(pageIndex, jobid);
                });
            },
            error: function (ex) {

            }
        });
    }

    function AddHighlights(highlightsObj) {
        var Hcount = 0;
        var flag = false;
        if (highlightsObj != undefined) {
            $("#hiLights1").html("");
            if (highlightsObj.length > 0) {
                Hcount = highlightsObj.length;
                flag = true;
            }
        } else {
            Hcount = parseInt($("#HighlightsCount").val());
        }

        for (var i = 0; i < Hcount; i++) {
            $mainDIV = $("<div></div>").addClass("row").css("margin-bottom",
					"4px");
            $seDIV = $("<div></div>").addClass("col-lg-6");
            $TDIV = $("<div></div>").addClass("input-group");
            $span2 = $('<span"></span>').addClass("input-group-btn").append(
					$("<button>-</button>").addClass("btn btn-default").attr(
							"onclick", "deleteself(this)"));
            $input1 = $(
					'<input type="text" name="JobSkills[]" class="form-control JobHighlights" aria-label="..." />')
					.val(flag ? highlightsObj[i] : "");
            $seDIV.append($TDIV.append($input1).append($span2));
            $mainDIV.append($seDIV);
            $("#hiLights1").append($mainDIV);
        }
    }

    function EditJob(jsonobj) {
        var objt = JSON.parse($(jsonobj).siblings(".pdata").html());
        $("#myModalLabel").html("修改招聘职位");
        $("#myModal").modal('show');
        $("#JobID").val(objt.ID);
        $("#JobtName").val(objt.JobName);
        $("#Jobtlocation").val(objt.joblocation);
        
        $("#JobPay").val(objt.Pay);
        AddHighlights(JSON.parse(objt.Skills == "" ? "[]"
				: objt.Skills));
        $("#JobDescription").val(objt.Description);
    }

    function DeleteJob(jsonobj) {
        if (confirm("是否删除，请确认")) {
            var objt = JSON.parse($(jsonobj).siblings(".pdata").html());
            var url = '__URL__/deletejob';
            var callback = function (data) {
                if (data.status == 1) {
                	myAlert("删除成功","refresh");
                }
                else {
                	myAlert("删除失败");
                }
            };
            var postdata = objt;
            ajaxExecute(url, callback, postdata);
        }
    }

    function ChangeStatue(jsonobj) {
        var objt = JSON.parse($(jsonobj).siblings(".pdata").html());
        var url = '__URL__/ChangeStatue';
        if (objt.Status == 0) {
            objt.Status = 1;
        } else {
            objt.Status = 0;
        }
        var callback = function (data) {
            if (data.status == 1) {
                if (objt.Status == 1) {
                	myAlert("招聘信息已上线","refresh");
                } else {
                	myAlert("招聘信息已下线","refresh");
                }
            }
        };
        var postdata = objt;
        ajaxExecute(url, callback, postdata);
    }


    function ChangeReStatue(rid, isRead) {
        if (isRead > 0) {
            return false;
        }
        else {
            var postdata = { resumID: rid };
            var url = '__URL__/ChangeResumStatue';
            var callback = function (data) {

            };
            ajaxExecute(url, callback, postdata);
            $("#resuModel").modal('hide');
        }
    }

    function deleteself(obj) {
        $(obj).parent().parent().parent().parent().remove();
    }
</script><div class="section"><div class="container"><div class="row"><div class="panel panel-default"><div class="panel-heading"><a href="javascript: location.reload();" class="btn btn-grey"><i
                        class="glyphicon glyphicon-refresh"></i>刷新</a><a href="#" class="btn"
                            data-toggle="modal" data-target="#myModal" onclick="AddJob()"><i
                                class="glyphicon glyphicon-plus icon-white"></i>添加招聘职位</a><a href="#" class="btn"
                        onclick="openEdit()"><i
                            class="glyphicon glyphicon-pencil icon-white"></i>编辑招聘欢迎语</a><a href="#" class="btn"
                        onclick="openEditEmail()"><i
                            class="glyphicon glyphicon-pencil icon-white"></i>修改人事邮箱</a></div><div class="panel-body"><table class="table table-hover"><thead><tr><th style="width: 100px;">职称</th><th style="width: 100px;">工作地点</th><th style="width: 80px;">薪资</th><th style="width: 100px;">修改日期</th><th style="width: 80px;">在线状态</th><th style="width: 80px;">简历数<br /><small>(未读/总数)</small></th><th style="width: 200px;">操作</th></tr></thead><tbody id="myProductList"></tbody></table><div style="display: block; width: 100%; text-align: center;"
                        id="loadingImage"></div><div id="Pagination" class="m-pagination"
                        style="padding-left: 15px;"></div></div></div></div></div></div><!-- Modal --><div class="modal fade" id="myModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Modal title</h4></div><form action="__URL__/addjob" method="post"><div class="modal-body"><input type="hidden" name="JobID" id="JobID" value="" /><div class="form-group"><label for="JobtName"><b>职称</b></label><input class="form-control"
                            maxlength="200" id="JobtName" name="JobtName" type="text" placeholder=""></div><div class="form-group"><label for="Jobtlocation"><b>工作地点</b></label><input class="form-control"
                            maxlength="200" id="Jobtlocation" name="Jobtlocation" type="text" placeholder=""></div><div class="form-group"><label for="JobDescription"><b>职位描述</b></label><textarea class="form-control" id="JobDescription" name="JobDescription" type="text"
                            placeholder="" rows="10"></textarea></div><div class="form-group"><div class="row"><div class="col-lg-3"><div class="input-group"><input type="text" id="HighlightsCount"
                                        class="form-control amount form-control" placeholder="添加几个技能"
                                        maxlength="2" onkeyup="clearNoNum(event,this)"
                                        onblur="clearNoNum(event,this)" onpaste="return false" value="1"><span class="input-group-btn"><button class="btn btn-default" type="button"
                                            onclick="AddHighlights()">                                            +</button></span></div></div><div class="col-lg-9"><div class="input-group"></div></div></div></div><div class="form-group"><label for="JobDescription"><b>技能要求</b></label></div><div class="form-group" id="hiLights1"></div><div class="form-group"><label for="JobPay"><b>薪资说明</b></label><input class="form-control"
                            maxlength="100" id="JobPay" name="JobPay" type="text" placeholder=""></div><div class="clearfix"></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="submit" class="btn btn-primary">                        提交</button></div></form></div></div></div><div class="modal fade" id="resuModel" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="H1">查看简历</h4></div><div class="modal-body" id="resuModelbody"><table class="table table-hover"><thead><tr><th style="width: 40px;">ID</th><th style="width: 90px;">上传人</th><th style="width: 90px;">应聘职位</th><th style="width: 120px;">邮箱</th><th style="width: 45px;">状态</th><th style="width: 100px;">上传时间</th><th style="width: 80px;">下载简历</th></tr></thead><tbody id="resumlist"></tbody></table><div style="display: block; width: 100%; text-align: center;"
                    id="resumloadingImage"></div><div id="ResumPagination" class="m-pagination"
                    style="padding-left: 15px;"></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div><script>    var mytemptext = "";
    function editetext(obj, flag) {
        var target = $(obj);
        var width = $(obj).css("width");
        var height = $(obj).css("height");
        var replaceobj = $("<textarea></textarea>").css("width", width).css("height", height).css("line-height", "1.5").attr("onblur", "addmytext(this)").val(target.html());
        var replaceobj2 = $("<input type='text' />").css("width", "100px;").css("height", "15px;").css("line-height", "1.5").attr("onblur", "addmytext(this,1)").val(target.html());
        if (flag == 1) {
            replaceobj = replaceobj2;
        }
        target.html(replaceobj);
        replaceobj.focus();
        target.attr("onclick", "");
    }

    function addmytext(obj, flag) {
        var newtext = $(obj).val();
        $(obj).parent().html(newtext).attr("onclick", "editetext(this," + flag + ")");
    }

    function openEdit() {
        var url = '__URL__/getwelcomehtml';
        $("#welcomecontente").hide();
        var callback = function (data) {
            data = data[0];
            $("#welcomnote").html(data.JOBWELCOMETEXT1);
            $("#welcomemedem").html(data.JOBWELCOMETEXT2);
            $("#welcomedesc").html(data.JOBWELCOMETEXT3);
            $("#welcomeimage").attr("src", '__PUBLIC__/UploadFiles/JobWelcome/' + data.JOBWELCOMEIMAGE);
            $("#welcomeimagehidden").val(data.JOBWELCOMEIMAGE);
            $("#welcomecontente").show();
        };
        var postdata = { wtext1: '1' };


        ajaxExecute(url, callback, postdata);
        $("#myWelcomeModal").modal('show');
    }

    function savewelcome() {
        var text1 = $("#welcomnote").html();
        var text2 = $("#welcomemedem").html();
        var text3 = $("#welcomedesc").html();
        var imagewelcome = $("#welcomeimagehidden").val();
        var url = '__URL__/editwelcome';
        var callback = function (data) {
            if (data.status == 1) {
            	myAlert("保存成功，以防万一，最好去招聘模块看看","refresh");
            }
            else {
            	myAlert("保存失败");
            }
        };
        var postdata = { wtext1: text1, wtext2: text2, wtext3: text3, imgw: imagewelcome };
        ajaxExecute(url, callback, postdata);
    }

    function openEditEmail() {
        var url = '__URL__/getrolemail';

        $("#emailcontente").hide();
        var callback = function (data) {
            $("#manageremail").val(data.MANAGEREMAIL);
            $("#emailcontente").show();
        };
        var postdata = { wtext1: '1' };
        ajaxExecute(url, callback, postdata);
        $("#editemail").modal('show');
    }

    function saveEmail() {
        var url = '__URL__/saveroleemail';

        var callback = function (data) {
            
            if (data.status == 1) {
            	myAlert("保存成功");
                $("#editemail").modal('hide');
            }
            else {
            	myAlert("保存失败");
            }
        };
        var postdata = { MANAGEREMAIL:  $("#manageremail").val() };
        ajaxExecute(url, callback, postdata);
        $("#editemail").modal('show');
    }

</script><div class="modal fade" id="myWelcomeModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel"><div class="modal-dialog modal-md" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="H2">编辑欢迎语</h4></div><div class="modal-body" id="Div2"><div style="display: block; width: 100%; text-align: center;"
                    id="welcomeloading"></div><table id="welcomecontente"><tr><td><div class="join-us-promo" style="width: 400px;"><div class="join-us-bubble" style="width: 360px"><blockquote><p class="quote" id="welcomnote" onclick="editetext(this)"></p><cite class="author-info"><span id="welcomemedem" onclick="editetext(this,1)"></span><br><span id="welcomedesc" onclick="editetext(this,1)"></span></cite></blockquote><div class="sprite arrow-speech-bubble"></div></div><!-- Team Member Photo --><div class="author-photo" style="width: 360px;"><img id="welcomeimage" src="#" alt="Name Surname"><input type="hidden" id="welcomeimagehidden" name="name" value="#" /></div></div></td><td><div class="alert alert-success" style="margin-top: 64px;" role="alert">                                文字点击即可修改<br />                                头像点击下面按钮修改，110&times;110像素 小于50KB
                            </div><div><input type="file" name="file_upload" id="file_upload" /></div><div id="queue"></div></td></tr></table></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" onclick="savewelcome()" class="btn btn-default" data-dismiss="modal">保存</button></div></div></div></div><div class="modal fade" id="editemail" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel"><div class="modal-dialog modal-md" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="H3">编辑人事邮箱</h4></div><div class="modal-body" id="Div3"><div style="display: block; width: 100%; text-align: center;"
                    id="managerloading"></div><div class="form-group" id="emailcontente"><label for="restore-email"><i class="icon-envelope"></i><b>人事经理邮箱</b></label><input maxlength="50" class="form-control" id="manageremail" name="toemail" type="text"  placeholder=""></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" onclick="saveEmail()" class="btn btn-default" data-dismiss="modal">保存</button></div></div></div></div></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>