<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML><html><head><title>狼堡-
			<?php echo ($ModelName); ?></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="WolfTown,上海狼堡实业有限公司" /><link href="__CSS__/bootstrap.css" rel='stylesheet' type='text/css' /><link href="__CSS__/style.css" rel='stylesheet' type='text/css' /><link href="__CSS__/megamenu.css" rel="stylesheet" type="text/css" media="all" /><link rel="stylesheet" href="__CSS__/pagination.css"><script type='text/javascript' src="__JS__/jquery-1.11.1.min.js"></script><script type="text/javascript" src="__JS__/megamenu.js"></script><script>
			var mymodelName = '<?php echo (trim(strtolower(MODULE_NAME))); ?>';
			var myActionName = '<?php echo (trim(strtolower(ACTION_NAME))); ?>';
			var currentPublicURL = '__PUBLIC__/';
			$(document).ready(function() {
				$(".megamenu").megamenu();
			});
		</script><script src="__JS__/jquery.pagination.js"></script><script type="text/javascript" src="__JS__/Common.js"></script><script src="__JS__/menu_jquery.js"></script></head><body><!-- header_top --><div class="top_bg"><div class="container"><div class="header_top"><div class="top_right"><ul><!--							<li><a href="#">联系客服</a></li>|--><li><a href="__ROOT__/aboutus">关于狼堡</a></li>|
							<li><a href="__ROOT__/join">加盟狼堡</a></li></ul></div><div class="top_left"><h2><span></span> 热线电话 : 4008888888</h2></div><div class="clearfix"></div></div></div></div><!-- header --><div class="container"><div class="header"><div class="head-t"><div class="logo"><a href="index.html"><img src="__IMG__/logo.png" style="height: 120px;" class="img-responsive" alt="" /></a></div><!-- start header_right --><div class="header_right"><div style="margin-top: 26px;"><a href=""><img src="__IMG__/cofy.png" style="width: 35px;" />&nbsp;<b>咖啡</b></a><a href=""><img src="__IMG__/cloth.png" style="width: 35px;" />&nbsp;<b>服饰</b></a><a href=""><img src="__IMG__/jiaju.png" style="width: 35px;" />&nbsp;<b>家居</b></a><div class="create_btn"><a href="__ROOT__/join">加盟狼堡</a></div></div><div class="search" style="margin-top: 10px;"><form action="__ROOT__/search" method="post"><input type="text" name="searchkey" value="" placeholder=""><input type="submit" value=""></form></div><div class="clearfix"></div></div><!--<div style="float: right;padding-right: 10px;"><a href=""><img src="__IMG__/weixin.jpg" style="width: 128px;" /></a></div>--><div class="clearfix"></div></div><!-- start header menu --><ul class="megamenu skyblue"><li class="active grid" nameflag="index"><a class="color1" href="__ROOT__">首页</a></li><li class="grid" nameflag="aboutus"><a class="color2 color-bold" href="__ROOT__/aboutus">走进狼堡</a><div class="megapanel megapanel1"><div class="row"><div class="col1"><div class="h_nav"><ul><li><a href="__ROOT__/aboutus/index/pid/company_profile">公司简介</a></li><li><a href="__ROOT__/aboutus/index/pid/company_honor">公司荣誉</a></li><li><a href="__ROOT__/aboutus/index/pid/company_team">核心团队</a></li><li><a href="__ROOT__/aboutus/index/pid/company_shop">狼堡店铺</a></li></ul></div></div></div></div></li><li nameflag="product"><a class="color4 color-bold" href="__ROOT__/product">产品展示</a><div class="megapanel megapanel2"><div class="row"><?php if(is_array($parentdata)): $i = 0; $__LIST__ = $parentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datap): $mod = ($i % 2 );++$i;?><div class="col40"><div class="h_nav"><a href="__ROOT__/product/index/d1/<?php echo ($datap[ID]); ?>"><h4><?php echo ($datap[classname]); ?></h4></a><ul><?php if(is_array($chilrendata)): $i = 0; $__LIST__ = $chilrendata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datac): $mod = ($i % 2 );++$i; if($datac[parentclass] == $datap[ID]): ?><li><a href="__ROOT__/product/index/d1/<?php echo ($datap[ID]); ?>/d2/<?php echo ($datac[ID]); ?>"><?php echo ($datac[classname]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?></ul></div></div><?php endforeach; endif; else: echo "" ;endif; ?></li><li nameflag="fenxiao"><a class="color5 color-bold" href="__ROOT__/fenxiao">商品分销</a></li><li nameflag="news"><a class="color6 color-bold" href="__ROOT__/news">狼堡资讯</a></li><li nameflag="join"><a class="color7 color-bold" href="__ROOT__/join">加盟狼堡</a></li><li nameflag="job"><a class="color8 color-bold" href="__ROOT__/job">诚聘英才</a></li><li nameflag="contactus"><a class="color9 color-bold" href="__ROOT__/contactus">联系我们</a></li></ul></div></div><script type="text/javascript">
					myChangeHead(mymodelName);
				</script><div style="display: block; width: 100%; text-align: center;" id="loadingImage"></div><div class="container" style="margin-bottom: 20px;margin-top: 0;"><div  id="myNewsList"></div><div id="Pagination" class="m-pagination" style="padding-left: 15px;"></div></div><script>
		$(function() {
			startPaging(0, 3);
		});
		 // var com = { "index": "首页", "product": "产品和服务", "productdetail": "产品详细", "blog": "新闻活动", "blogdetail": "新闻详细", "aboutus": "关于我们", "contactus": "联系我们", "job": "人才招聘", "member": "会员", "jobdetail": "职位信息", "emailcheck": "邮箱验证", "login": "登陆", "passwordreset": "重置密码", "register": "注册", "resetpassword": "重置密码" }
		function startPaging(page_index, flag) {
			var url = '__URL__/newspage';
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
				success: function(data) {
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
					}).on("pageClicked", function(event, pageIndex) {
						console.log(pageIndex);
						startPaging(pageIndex)
					});
				},
				error: function(ex) {}
			});
		}
	</script><div class="foot-top"><div class="container"><div class="col-md-6 s-c"><li><div class="fooll"><h5>成为我们的加盟商！</h5></div></li><div class="clearfix"></div></div><div class="col-md-6 s-c"><div class="stay"><form action="__ROOT__/contactus/sendmessage" method="post"><div class="stay-left"><input type="text" name="contact-email" placeholder="输入您的邮箱地址" required=""><input type="hidden" name="contact-message" value="我要加盟" /><input name="Name" maxlength="100" type="hidden" placeholder="" value="匿名"></div><div class="btn-1"><input type="submit" value="加盟"></div></form><div class="clearfix"></div></div></div><div class="clearfix"></div></div></div><div class="footer"><div class="container"><div class="col-md-2 cust"><h4>用户指南</h4><li><a href="#">帮助中心</a></li><li><a href="#">FAQ</a></li><li><a href="buy.html">如何购买</a></li><li><a href="#">物流</a></li></div><div class="col-md-2 cust"><h4>关于我们</h4><li><a href="#">公司发展历程</a></li><li><a href="#">核心竞争力</a></li><li><a href="#">联系我们</a></li></div><div class="col-md-2 myac"><h4>友情链接</h4><li><a href="#">链接1</a></li><li><a href="#">链接2</a></li><li><a href="#">链接3</a></li><li><a href="#">链接4</a></li></div><div class="col-md-3 myac"><h4>狼堡店铺</h4><li><a href="#">上海松江狼堡品牌折扣馆</a></li><li><a href="#">上海松江狼堡品牌折扣馆</a></li><li><a href="#">杭州萧山狼堡品牌工厂店</a></li><li><a href="#">上海金山狼堡·身外织物时尚生活体验馆</a></li><li><a href="#">贵州安顺狼堡品牌集合店</a></li></div><div class="col-md-3 our-st"><h4>联系方式</h4><li><i class="add"></i>贵州安顺狼堡品牌集合店</li><li><i class="phone"></i>025-8888888</li><li><a href="mailto:info@example.com"><i class="mail"></i>info@sitename.com </a></li></div><div class="clearfix"></div><p>Copyright &copy; 2015.Company name All rights reserved. </p></div></div></body></html>