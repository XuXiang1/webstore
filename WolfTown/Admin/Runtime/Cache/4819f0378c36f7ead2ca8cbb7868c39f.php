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
                        class="glyphicon glyphicon-refresh"></i>刷新</a><a href="#" class="btn"
                            data-toggle="modal" data-target="#myModal" ><i
                                class="glyphicon glyphicon-pencil icon-white"></i>修改公司信息</a></div><div class="panel-body"><table class="table table-hover"><thead><tr><th style="width: 80px;">编号</th><th style="width: 120px;">留言者
                                </th><th style="width: 120px;">邮箱</th><th style="width: 300px;">内容</th><th style="width: 120px;">发送时间</th></tr></thead><tbody id="myNewsList"></tbody></table><div style="display: block; width: 100%; text-align: center;"
                        id="loadingImage"></div><div id="Pagination" class="m-pagination"
                        style="padding-left: 15px;"></div></div></div></div></div></div><div class="modal fade" id="myModal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">编辑公司信息</h4></div><div class="modal-body"><form id="myform" action="__URL__/EditCompany" method="post"><div class="form-group"><label for="Address"><b>公司名称</b></label><input class="form-control" name="Name" type="text" placeholder="" value="<?php echo ($initdata["Name"]); ?>"></div><div class="form-group"><label for="Address"><b>公司地址</b></label><input class="form-control" name="Address" type="text" placeholder="" value="<?php echo ($initdata["Address"]); ?>"></div><div class="form-group"><label for="Addpoint"><b>公司坐标</b></label><p>在这里可以查到坐标 : &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://api.map.baidu.com/lbsapi/getpoint/index.html" target="_blank">http://api.map.baidu.com/lbsapi/getpoint/index.html</a></p><b>切换城市->搜索公司名->右侧复制坐标</b></div><div class="row" style="margin-bottom: 15px;"><div class="col-lg-6"><div class="input-group"><span class="input-group-addon">X
                                </span><input type="text" name="pointX" class="form-control" aria-label="..." value="<?php echo ($initdata["PointX"]); ?>"></div><!-- /input-group --></div><div class="col-lg-6"><div class="input-group"><span class="input-group-addon">Y
                                </span><input type="text" name="pointY" class="form-control" aria-label="..." value="<?php echo ($initdata["PointY"]); ?>"></div><!-- /input-group --></div></div><div class="form-group"><label for="Email"><b>公司邮箱</b></label><input class="form-control" name="Email" type="text" placeholder="" value="<?php echo ($initdata["Email"]); ?>"></div><div class="form-group"><label for="Tel"><b>公司电话</b></label><input class="form-control" name="Tel" type="text" placeholder="" value="<?php echo ($initdata["Phone"]); ?>"></div><div class="form-group"><label for="NewsContent"><b>传真</b></label><input class="form-control" name="Fax" type="text" placeholder="" value="<?php echo ($initdata["Fax"]); ?>"></div><div class="clearfix"></div></form></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary" onclick="dopost()">                    提交</button></div></div></div></div><script>    function dopost() {
        $("#myform").submit();
    }

    $(function () {
        startPaging(0, 3);
    });
    function startPaging(page_index, flag) {
        var url = '__URL__/ContactusPage';
        var postdata = {
            PageIndex: page_index + 1
        };
        $("#myNewsList").html("");
        AjaxStart($("#loadingImage"));
        $.ajax({
            type: "POST",
            cache: false,
            url: url,
            data: postdata,
            processData: true,
            success: function (data) {
                AjaxStop($("#loadingImage"));
                $("#myNewsList").html(data);
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
                    mypageclass: 'm-pagination-page',
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
</script></div></div><script type="text/javascript">
			myChangeHead(mymodelName);
		</script><!-- Modal --><div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" style="margin: 10% auto;" role="document"><div class="modal-content" style="text-align: center" id="progressBar">loading</div></div></div><!-- Modal --><div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">系统信息</h4></div><div class="modal-body" id="myalertcontent"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></body></html>