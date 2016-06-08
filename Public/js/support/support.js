function cheackIE(){
	var appName = navigator.appName,
	userAgent = navigator.userAgent,
	version;
	if(appName == 'Microsoft Internet Explorer'){
		version = /MSIE\s(\S)/.exec(userAgent)[1];
		versionfloat = parseFloat(version);
		return versionfloat;
	}
	return null;
}

if (cheackIE() && cheackIE() < 9) {
	alert("如果您使用IE浏览器，请确保使用IE9及以上版本且不能开启企业模式！");
}