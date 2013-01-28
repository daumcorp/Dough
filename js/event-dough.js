var getLog = function(arg, link){
	$.post("./rest/log.php", {
		info: arg
	}).success(function(){
		if(link != undefined){
			location.href = link;
		}
	});
};