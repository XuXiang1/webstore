var language_broswer = LANG.japanese;
try {
	var currentlang = navigator.language;
	if(currentlang.indexOf("zh") != -1){
		language_broswer = LANG.chinese;
	}
	else if(currentlang.indexOf("en") != -1){
		language_broswer = LANG.english;
	}
} catch (e) {
	//TODO handle the exception
	language_broswer = LANG.japanese;
}

function ajaxExecute(url, callback, postdata) {
	//AStart();
	jQuery.ajax({
		type: "POST",
		url: url,
		data: postdata,
		dataType: "json",
		success: function(data) {
			callback(data);
		},
		complete: function() {
			//AStop();
		}
	});
}