window.gui = require('nw.gui');
var nw = require('nw.gui');
var winparent = nw.Window.get();
winparent.isMaximized = false;
//接收消息
window.addEventListener('message', function(e) {
	try {
		var jsonstr = e.data;
		var jsonobj = JSON.parse(jsonstr);
		showFunnyNotification(jsonobj[0], jsonobj[1]);
	} catch (e) {}
}, false);
var isShowWindow = true;
//程序最小化到任务栏设置
var tray = new nw.Tray({
	title: 'Wow Talk',
	icon: 'src/img/icon_36.png'
});
//Close window to hide;
winparent.on('close', function() {
	this.hide();
	isShowWindow = false;
});
tray.tooltip = 'Wow Talk';
//Menu
var menu = new nw.Menu();
menu.append(new nw.MenuItem({
	type: 'normal',
	label: 'Show/Hide',
	click: function() {
		if (isShowWindow) {
			winparent.hide();
			isShowWindow = false;
		} else {
			winparent.show();
			isShowWindow = true;
		}
	}
}));
menu.append(new nw.MenuItem({
	type: 'normal',
	label: 'Quit',
	click: function() {
		nw.App.quit();
	}
}))
tray.menu = menu;
//Click to show/hide;
tray.on('click',
	function() {
		if (isShowWindow) {
			winparent.hide();
			isShowWindow = false;
		} else {
			winparent.show();
			isShowWindow = true;
		}
	});
$(function() {
	goto_page();
	resizeframe();
	$(window).bind('resize', resizeframe);
});

function resizeframe() {
	var new_height = $("body").height() - 30;
	$("#iframepage").css("height", new_height + "px");
}

function goto_page() {
	//$("#iframepage").attr("src", 'https://biz.wowtalk.org/webtalk/login');
	//$("#iframepage").attr("src", 'https://dev02.wowtalkapi.com/webtalk/login');
	$("#iframepage").attr("src", 'http://webtalk.com/login');
}
// Min
document.getElementById('windowControlMinimize').onclick = function() {
	winparent.minimize();
}; // Close
document.getElementById('windowControlClose').onclick = function() {
	winparent.close();
}; // Max
document.getElementById('windowControlMaximize').onclick = function() {
	if (winparent.isMaximized)
		winparent.unmaximize();
	else
		winparent.maximize();
};
winparent.on('maximize', function() {
	winparent.isMaximized = true;
});
winparent.on('unmaximize', function() {
	winparent.isMaximized = false;
});

function showFunnyNotification(title, content) {
	var icon = './img/desktop-notify.png';
	window.LOCAL_NW.desktopNotifications.notify(icon, title, content, function() {
		//window.frames[0].postMessage('getcolor','http://webtalk.com');
		winparent.show();
	});
}