<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML><html><head><title>狼堡-
			<?php echo ($ModelName); ?></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="WolfTown,上海狼堡实业有限公司" /><link href="__CSS__/bootstrap.css" rel='stylesheet' type='text/css' /><link href="__CSS__/style.css" rel='stylesheet' type='text/css' /><link href="__CSS__/megamenu.css" rel="stylesheet" type="text/css" media="all" /><link rel="stylesheet" href="__CSS__/pagination.css"><script type='text/javascript' src="__JS__/jquery-1.11.1.min.js"></script><script type="text/javascript" src="__JS__/megamenu.js"></script><script>
			var mymodelName = '<?php echo (trim(strtolower(MODULE_NAME))); ?>';
			var myActionName = '<?php echo (trim(strtolower(ACTION_NAME))); ?>';
			var currentPublicURL = '__PUBLIC__/';
			$(document).ready(function() {
				$(".megamenu").megamenu();
			});
		</script><script src="__JS__/jquery.pagination.js"></script><script type="text/javascript" src="__JS__/Common.js"></script><script src="__JS__/menu_jquery.js"></script><script>
		function phstdata() {
						if ($("[name='Name']").val().trim() == "") {
				alert("请填写您的称呼！");
				return false;
			}
			if ($("[name='contact-email']").val().trim() == 0) {
				alert("请填写您的邮箱！");
				return false;
			}
			$("#msgform").submit();
		}
	</script></head><body><!-- header_top --><div class="top_bg"><div class="container"><div class="header_top"><div class="top_right"><ul><!--							<li><a href="#">联系客服</a></li>|--><li><a href="__ROOT__/aboutus">关于狼堡</a></li>|
							<li><a href="__ROOT__/join">加盟狼堡</a></li></ul></div><div class="top_left"><h2><span></span> 热线电话 : 4008888888</h2></div><div class="clearfix"></div></div></div></div><!-- header --><div class="container"><div class="header"><div class="head-t"><div class="logo"><a href="index.html"><img src="__IMG__/logo.png" style="height: 120px;" class="img-responsive" alt="" /></a></div><!-- start header_right --><div class="header_right"><div style="margin-top: 26px;"><a href=""><img src="__IMG__/cofy.png" style="width: 35px;" />&nbsp;<b>咖啡</b></a><a href=""><img src="__IMG__/cloth.png" style="width: 35px;" />&nbsp;<b>服饰</b></a><a href=""><img src="__IMG__/jiaju.png" style="width: 35px;" />&nbsp;<b>家居</b></a><div class="create_btn"><a href="__ROOT__/join">加盟狼堡</a></div></div><div class="search" style="margin-top: 10px;"><form action="__ROOT__/search" method="post"><input type="text" name="searchkey" value="" placeholder=""><input type="submit" value=""></form></div><div class="clearfix"></div></div><!--<div style="float: right;padding-right: 10px;"><a href=""><img src="__IMG__/weixin.jpg" style="width: 128px;" /></a></div>--><div class="clearfix"></div></div><!-- start header menu --><ul class="megamenu skyblue"><li class="active grid" nameflag="index"><a class="color1" href="__ROOT__">首页</a></li><li class="grid" nameflag="aboutus"><a class="color2 color-bold" href="__ROOT__/aboutus">走进狼堡</a><div class="megapanel megapanel1"><div class="row"><div class="col1"><div class="h_nav"><ul><li><a href="__ROOT__/aboutus/index/pid/company_profile">公司简介</a></li><li><a href="__ROOT__/aboutus/index/pid/company_honor">公司荣誉</a></li><li><a href="__ROOT__/aboutus/index/pid/company_team">核心团队</a></li><li><a href="__ROOT__/aboutus/index/pid/company_shop">狼堡店铺</a></li></ul></div></div></div></div></li><li nameflag="product"><a class="color4 color-bold" href="__ROOT__/product">产品展示</a><div class="megapanel megapanel2"><div class="row"><?php if(is_array($parentdata)): $i = 0; $__LIST__ = $parentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datap): $mod = ($i % 2 );++$i;?><div class="col40"><div class="h_nav"><a href="__ROOT__/product/index/d1/<?php echo ($datap[ID]); ?>"><h4><?php echo ($datap[classname]); ?></h4></a><ul><?php if(is_array($chilrendata)): $i = 0; $__LIST__ = $chilrendata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datac): $mod = ($i % 2 );++$i; if($datac[parentclass] == $datap[ID]): ?><li><a href="__ROOT__/product/index/d1/<?php echo ($datap[ID]); ?>/d2/<?php echo ($datac[ID]); ?>"><?php echo ($datac[classname]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?></ul></div></div><?php endforeach; endif; else: echo "" ;endif; ?></li><li nameflag="fenxiao"><a class="color5 color-bold" href="__ROOT__/fenxiao">商品分销</a></li><li nameflag="news"><a class="color6 color-bold" href="__ROOT__/news">狼堡资讯</a></li><li nameflag="join"><a class="color7 color-bold" href="__ROOT__/join">加盟狼堡</a></li><li nameflag="job"><a class="color8 color-bold" href="__ROOT__/job">诚聘英才</a></li><li nameflag="contactus"><a class="color9 color-bold" href="__ROOT__/contactus">联系我们</a></li></ul></div></div><script type="text/javascript">
					myChangeHead(mymodelName);
				</script><div class="section"><div class="container"><div class="row job-div"><div class="col-sm-7"><!-- Map --><div id="dituContent" style="width:95%;height:300px;border:#ccc solid 1px;"></div><!-- End Map --><!-- Contact Info --><p class="contact-us-details"><b>公司地址:</b><?php echo ($initdata["Address"]); ?><br><b>电话:</b><?php echo ($initdata["Phone"]); ?><br><b>传真:</b><?php echo ($initdata["Fax"]); ?><br><b>邮箱:</b><a href="mailto:<?php echo ($initdata["Email"]); ?>"><?php echo ($initdata["Email"]); ?></a></p><!-- End Contact Info --></div><div class="col-sm-5"><!-- Contact Form --><h3 style="padding-left: 35px;">给我们留言</h3><div class="contact-form-wrapper"><form class="form-horizontal" id="msgform" role="form" action="__URL__/sendmessage" method="post"><div class="form-group"><label for="Name" class="col-sm-4 control-label">您的称呼：</label><div class="col-sm-8"><input class="form-control" name="Name" maxlength="100" type="text" placeholder=""></div></div><div class="form-group"><label for="contact-email" class="col-sm-4 control-label">您的邮箱：</label><div class="col-sm-8"><input class="form-control" name="contact-email" maxlength="500" type="text" placeholder=""></div></div><div class="form-group"><label for="contact-message" class="col-sm-4 control-label">留言：</label><div class="col-sm-8"><textarea class="form-control" rows="5" maxlength="500" name="contact-message"></textarea></div></div><div class="form-group"><div class="create_btn" style="width: 77px;"><a href="javascript:void(0)" onclick="phstdata()">发送</a></div></div></form></div><!-- End Contact Info --></div></div></div></div><script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script><script type="text/javascript">
		var maptitle = "<?php echo ($initdata["Name"]); ?>";
		var mapcontent = "<?php echo ($initdata["Address"]); ?>";
		var mapointx = <?php echo ($initdata["PointX"]); ?>;
		var mapointy = <?php echo ($initdata["PointY"]); ?>;
		 //创建和初始化地图函数：
		function initMap() {
				createMap(); //创建地图
				setMapEvent(); //设置地图事件
				addMapControl(); //向地图添加控件
				addMarker(); //向地图中添加marker
			}
			//创建地图函数：

		function createMap() {
				var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
				var point = new BMap.Point(mapointx, mapointy); //定义一个中心点坐标
				map.centerAndZoom(point, 17); //设定地图的中心点和坐标并将地图显示在地图容器中
				window.map = map; //将map变量存储在全局
			}
			//地图事件设置函数：

		function setMapEvent() {
				map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
				map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
				map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
				map.enableKeyboard(); //启用键盘上下左右键移动地图
			}
			//地图控件添加函数：

		function addMapControl() {
				//向地图中添加缩放控件
				var ctrl_nav = new BMap.NavigationControl({
					anchor: BMAP_ANCHOR_TOP_LEFT,
					type: BMAP_NAVIGATION_CONTROL_LARGE
				});
				map.addControl(ctrl_nav);
				//向地图中添加缩略图控件
				var ctrl_ove = new BMap.OverviewMapControl({
					anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
					isOpen: 1
				});
				map.addControl(ctrl_ove);
				//向地图中添加比例尺控件
				var ctrl_sca = new BMap.ScaleControl({
					anchor: BMAP_ANCHOR_BOTTOM_LEFT
				});
				map.addControl(ctrl_sca);
			}
			//标注点数组
		var markerArr = [{
			title: maptitle,
			content: mapcontent,
			point: mapointx + "|" + mapointy,
			isOpen: 1,
			icon: {
				w: 23,
				h: 25,
				l: 23,
				t: 21,
				x: 9,
				lb: 12
			}
		}];
		 //创建marker
		function addMarker() {
				for (var i = 0; i < markerArr.length; i++) {
					var json = markerArr[i];
					var p0 = json.point.split("|")[0];
					var p1 = json.point.split("|")[1];
					var point = new BMap.Point(p0, p1);
					var iconImg = createIcon(json.icon);
					var marker = new BMap.Marker(point, {
						icon: iconImg
					});
					var iw = createInfoWindow(i);
					var label = new BMap.Label(json.title, {
						"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
					});
					marker.setLabel(label);
					map.addOverlay(marker);
					label.setStyle({
						borderColor: "#808080",
						color: "#333",
						cursor: "pointer"
					});
					(function() {
						var index = i;
						var _iw = createInfoWindow(i);
						var _marker = marker;
						_marker.addEventListener("click", function() {
							this.openInfoWindow(_iw);
						});
						_iw.addEventListener("open", function() {
							_marker.getLabel().hide();
						})
						_iw.addEventListener("close", function() {
							_marker.getLabel().show();
						})
						label.addEventListener("click", function() {
							_marker.openInfoWindow(_iw);
						})
						if (!!json.isOpen) {
							label.hide();
							_marker.openInfoWindow(_iw);
						}
					})()
				}
			}
			//创建InfoWindow

		function createInfoWindow(i) {
				var json = markerArr[i];
				var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
				return iw;
			}
			//创建一个Icon

		function createIcon(json) {
			var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
				imageOffset: new BMap.Size(-json.l, -json.t),
				infoWindowOffset: new BMap.Size(json.lb + 5, 1),
				offset: new BMap.Size(json.x, json.h)
			})
			return icon;
		}
		initMap(); //创建和初始化地图
	</script><div class="foot-top"><div class="container"><div class="col-md-6 s-c"><li><div class="fooll"><h5>成为我们的加盟商！</h5></div></li><div class="clearfix"></div></div><div class="col-md-6 s-c"><div class="stay"><form action="__ROOT__/contactus/sendmessage" method="post"><div class="stay-left"><input type="text" name="contact-email" placeholder="输入您的邮箱地址" required=""><input type="hidden" name="contact-message" value="我要加盟" /><input name="Name" maxlength="100" type="hidden" placeholder="" value="匿名"></div><div class="btn-1"><input type="submit" value="加盟"></div></form><div class="clearfix"></div></div></div><div class="clearfix"></div></div></div><div class="footer"><div class="container"><div class="col-md-2 cust"><h4>用户指南</h4><li><a href="#">帮助中心</a></li><li><a href="#">FAQ</a></li><li><a href="buy.html">如何购买</a></li><li><a href="#">物流</a></li></div><div class="col-md-2 cust"><h4>关于我们</h4><li><a href="#">公司发展历程</a></li><li><a href="#">核心竞争力</a></li><li><a href="#">联系我们</a></li></div><div class="col-md-2 myac"><h4>友情链接</h4><li><a href="#">链接1</a></li><li><a href="#">链接2</a></li><li><a href="#">链接3</a></li><li><a href="#">链接4</a></li></div><div class="col-md-3 myac"><h4>狼堡店铺</h4><li><a href="#">上海松江狼堡品牌折扣馆</a></li><li><a href="#">上海松江狼堡品牌折扣馆</a></li><li><a href="#">杭州萧山狼堡品牌工厂店</a></li><li><a href="#">上海金山狼堡·身外织物时尚生活体验馆</a></li><li><a href="#">贵州安顺狼堡品牌集合店</a></li></div><div class="col-md-3 our-st"><h4>联系方式</h4><li><i class="add"></i>贵州安顺狼堡品牌集合店</li><li><i class="phone"></i>025-8888888</li><li><a href="mailto:info@example.com"><i class="mail"></i>info@sitename.com </a></li></div><div class="clearfix"></div><p>Copyright &copy; 2015.Company name All rights reserved. </p></div></div></body></html>