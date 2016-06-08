var os = require('os');
var fs = require('fs');
var tempdir = os.tmpdir();
var filename_ = "/nodeconfig.txt";
var is_check_update = "true";
var is_show_notion = "true";
set_config_init();
jQuery.setconfig = function(name, value) {
	if (typeof value != 'undefined') { // name and value given, set cookie
		fs.readFile(tempdir + filename_, function(err, data) {
			if (err) { //没有配置文件
				return false;
				//console.log("no file 10");
			} else {
				data = JSON.parse(data);
				data[name] = value;
				data = JSON.stringify(data);
				fs.writeFile(tempdir + filename_, data, function(err) {
					if (err) {
						//console.log("line:set err" + err);
					}
					set_config_init()
					//console.log("File Saved set value!"); //文件被保存
					//console.log(data);
				});
			}
		});
	}
};

function set_config_init() {
	var custom_setting = [];
	fs.readFile(tempdir + filename_, function(err, data) {
		if (err) { //没有配置文件
			fs.readFile('./src/custom_settings.json', function(err, data1) {
				if (err) {
					//console.log("init err:" + err);
					return false;
				}
				custom_setting = JSON.parse(data1);
				custom_setting = JSON.stringify(custom_setting);
				fs.writeFile(tempdir + filename_, custom_setting, function(err) {
					if (err) {
						//console.log("init err2:" + err);
						return false;
					}
					check_options();
					//console.log("File Saved init!"); //文件被保存
				});
			});
		} else {
			data = JSON.parse(data);
			is_check_update = data['is_check_update'];
			is_show_notion = data['is_show_notion'];
			check_options();
			//console.log("getdata");
			//console.log(data);
			//console.log(is_check_update + "   " + is_show_notion)
		}
	});

}