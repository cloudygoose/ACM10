function imageReset() {
	$("img#theImage").attr("src", "./../../images/photos/nofile.jpg");
	$("img#theImage").attr("class", "noFile");
}
function imageSet(path, name) {
	$("a#fancyboxTag").attr("href", path);
	$("img#theImage").attr("src", path);
	$("img#theImage").attr("class", "file");
	$("img#theImage").attr("name", name);
}
$(document).ready(function() {
	init_php_file_tree();
	$(".fancybox").fancybox();  
	$("img#theImage").click(function(event) {
		if ($(this).attr("class") != "noFile")
		{
			divLeftX = $("div#right").offset().left;
			divWidth = $("div#right").width();
			divCenter = divLeftX + (divWidth / 2);
			//alert(divCenter);
			//alert(event.pageX + " " + event.pageY);
			thisId = $(this).attr("name");
			if (event.pageX > divCenter)
				thisId++;
			else
				thisId--;
			ss = "li#" + thisId;
			path = $(ss).attr("name");
			if ($(ss).length) //check if it's NULL
				imageSet(path, thisId);
		}
	});
	$("div.pft").click(function() {
		path = $(this).parent().attr("name");
		id = $(this).parent().attr("id");
		imageSet(path, id);
	});
	$("div.pft-directory").click(function() {
		imageReset();
	});
});
