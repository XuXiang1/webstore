function ajaxExecute(url, callback, postdata) {
	AStart();
	jQuery.ajax({
		type: "POST",
		url: url,
		data: postdata,
		dataType: "json",
		success: function(data) {
			callback(data);
		},
		complete: function() {
			AStop();
		}
	});
}

function myAlert(msg, flag) {
	$("#myalertcontent").html(msg);
	$("#myAlertModal").modal('show');
	if (flag == "refresh") {
		$("#myAlertModal").on('hidden.bs.modal', function(e) {
			location.reload();
		});
	}
}

//画面加载显示特效
function AStart() {
	var myimg = $("<img />").attr("src", currentPublicURL + "images/loading.gif").addClass("myloadingimage");
	$("#progressBar").html(myimg);
	$("#loadingmodal").modal('show');
}

function AStop() {
	$("#loadingmodal").modal('hide');
}

function myChangeHead(num) {
	if ($("[nameflag='" + num + "']")) {
		$("[nameflag='" + num + "']").addClass("active");
		$("[nameflag='" + num + "']").siblings().removeClass("active");
	}
}

String.prototype.trim = function() {
	return this.replace(/(^\s*)|(\s*$)/g, "");
}

function AjaxStart(obj) {
	var myimg = $("<img />").attr("src", currentPublicURL + "images/loading.gif").addClass("myloadingimage");
	$(obj).append(myimg);
}

function AjaxStop(obj) {
	$(".myloadingimage").remove();
}

var _title,/*分享标题(可选)*/
	_source, 
	_sourceUrl, 
	_pic, 
	_showcount, 
	_desc,/*默认分享理由(可选)*/
	_summary, /*分享摘要(可选)*/
	_site,/*分享来源 如：腾讯网(可选)*/
	_width= 600,
	_height = 600,
	_top = (screen.height - _height) / 2,
	_left = (screen.width - _width) / 2,
	_url;
	_pic = 'http://m3.img.srcdd.com/farm4/d/2015/0113/11/6AE3FEBE500857BF82CA97E8F03DD6A8_B500_900_500_411.jpeg';


//分享到新浪微博    
function shareToSinaWB(event) {
	event.preventDefault();

	var _shareUrl = 'http://v.t.sina.com.cn/share/share.php?&appkey=895033136'; //真实的appkey，必选参数 
	_shareUrl += '&url=' + encodeURIComponent(_url || document.location); //参数url设置分享的内容链接|默认当前页location，可选参数
	_shareUrl += '&title=' + encodeURIComponent(_title || document.title); //参数title设置分享的标题|默认当前页标题，可选参数
	_shareUrl += '&source=' + encodeURIComponent(_source || '');
	_shareUrl += '&sourceUrl=' + encodeURIComponent(_sourceUrl || '');
	_shareUrl += '&content=' + 'utf-8'; //参数content设置页面编码gb2312|utf-8，可选参数
	_shareUrl += '&pic=' + encodeURIComponent(_pic || ''); //参数pic设置图片链接|默认为空，可选参数
	window.open(_shareUrl, '_blank', 'width=' + _width + ',height=' + _height + ',top=' + _top + ',left=' + _left + ',toolbar=no,menubar=no,scrollbars=no, resizable=1,location=no,status=0');
}

//分享到QQ空间
function shareToQzone(event) {
	event.preventDefault();

	var _shareUrl = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?';
	_shareUrl += 'url=' + encodeURIComponent(_url || document.location); //参数url设置分享的内容链接|默认当前页location
	_shareUrl += '&showcount=' + _showcount || 0; //参数showcount是否显示分享总数,显示：'1'，不显示：'0'，默认不显示
	_shareUrl += '&desc=' + encodeURIComponent(_desc || '分享的描述'); //参数desc设置分享的描述，可选参数
	_shareUrl += '&summary=' + encodeURIComponent(_summary || '分享摘要'); //参数summary设置分享摘要，可选参数
	_shareUrl += '&title=' + encodeURIComponent(_title || document.title); //参数title设置分享标题，可选参数
	_shareUrl += '&site=' + encodeURIComponent(_site || ''); //参数site设置分享来源，可选参数
	_shareUrl += '&pics=' + encodeURIComponent(_pic || ''); //参数pics设置分享图片的路径，多张图片以＂|＂隔开，可选参数
	window.open(_shareUrl, '_blank', 'width=' + _width + ',height=' + _height + ',top=' + _top + ',left=' + _left + ',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
}

//分享到豆瓣
function shareToDouban(event) {
	event.preventDefault();

	var _shareUrl = 'http://shuo.douban.com/!service/share?';
	_shareUrl += 'href=' + encodeURIComponent(_url || location.href); //分享的链接
	_shareUrl += '&name=' + encodeURIComponent(_title || document.title); //分享的标题
	_shareUrl += '&image=' + encodeURIComponent(_pic || ''); //分享的图片
	window.open(_shareUrl, '_blank', 'width=' + _width + ',height=' + _height + ',left=' + _left + ',top=' + _top + ',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
}

//分享到腾迅微博
function shareToQQwb(event) {
	event.preventDefault();

	var _shareUrl = 'http://v.t.qq.com/share/share.php?';
	_shareUrl += 'title=' + encodeURIComponent(_title || document.title); //分享的标题
	_shareUrl += '&url=' + encodeURIComponent(_url || location.href); //分享的链接
	_shareUrl += '&appkey=5bd32d6f1dff4725ba40338b233ff155'; //在腾迅微博平台创建应用获取微博AppKey
	_shareUrl += '&site=' + encodeURIComponent(_site || ''); //分享来源
	_shareUrl += '&pic=' + encodeURIComponent(_pic || ''); //分享的图片，如果是多张图片，则定义var _pic='图片url1|图片url2|图片url3....'
	window.open(_shareUrl, '_blank', 'width=' + _width + ',height=' + _height + ',left=' + _left + ',top=' + _top + ',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
}

//分享到人人网
function shareToRenren(event) {
	event.preventDefault();

	var _shareUrl = 'http://share.renren.com/share/buttonshare.do?';
	_shareUrl += 'link=' + encodeURIComponent(_url || location.href); //分享的链接
	_shareUrl += '&title=' + encodeURIComponent(_title || document.title); //分享的标题
	window.open(_shareUrl, '_blank', 'width=' + _width + ',height=' + _height + ',left=' + _left + ',top=' + _top + ',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
}



//只能输入数字
//
//只能输入数字和小数点的文本框： deNum 为小数位数
//<input class="amount" onKeyUp="clearNoNum(event,this)" onBlur="clearNoNum(event,this)" onpaste="return false"> 
//只能输入数字的文本框：
//<input onkeyUp = "DigitInput(this,event);" onpaste="return false" > 
function clearNoNum(event, obj, deNum) {
	if (deNum == undefined) {
		deNum = 2;
	}
	var start = 1;
	if (obj.selectionStart) {
		start = obj.selectionStart;
	} else {
		var range = document.selection.createRange();
		range.moveStart("character", -obj.value.length);
		start = range.text.length;
	}
	var origionLength = obj.value.length;
	//响应鼠标事件，允许左右方向键移动 
	event = window.event || event;
	if (event.keyCode == 37 | event.keyCode == 39) {
		return;
	}
	//先把非数字的都替换掉，除了数字和. 
	obj.value = obj.value.replace(/[^\d.]/g, "");
	//必须保证第一个为数字而不是. 
	obj.value = obj.value.replace(/^\./g, "");
	//保证只有出现一个.而没有多个. 
	obj.value = obj.value.replace(/\.{2,}/g, ".");
	//保证.只出现一次，而不能出现两次以上 
	obj.value = obj.value.replace(".", "$#$").replace(/\./g, "").replace("$#$", ".");
	//保留两位小数
	var dot = obj.value.indexOf(".");
	if (dot != -1 && deNum == 0) {
		obj.value = obj.value.substr(0, dot);
	} else if (dot != -1 && obj.value.length > (dot + deNum)) //有小数点，且长度超过两位小数
	{
		obj.value = obj.value.substr(0, dot + deNum + 1);
	}
	var position = parseInt(start) - (origionLength - obj.value.length);
	//console.log("start " + start + " origion " + origionLength + "  obj " + obj.value.length + " position " + position);
	if (event.type == "keyup") {
		if (!$.support.leadingWhitespace) {
			var range = obj.createTextRange();
			range.move("character", position);
			range.select();
		} else {
			//obj.setSelectionRange(startPosition, endPosition);
			obj.setSelectionRange(position, position);
			obj.focus();
		}
	}
	//如果是空值赋值为0
	if (event.type == "blur" && obj.value.trim() == "") {
		obj.value = 0;
	}
}