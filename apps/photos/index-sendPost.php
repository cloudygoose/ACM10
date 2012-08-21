<head>
</head>
<body>
<?php
include_once('init.php');
if (fRequest::isPost())
{
	echo 'getpost id : '.fRequest::get('name');
}
else
	echo 'no post<br/>';
?>
<button class = "clickButton" id = "aa">aa</button>
<button class = "clickButton" id = "bb">bb</button>
<script type="text/javascript">
function sendPost() {
	var myForm = document.createElement("form");
	myForm.method = "post";
	myForm.action = "index.php";
	var myInput = document.createElement("input");
	myInput.type = "text";
	myInput.name = "name";
	myInput.value= this.id;
	myForm.appendChild(myInput);
	
	document.body.appendChild(myForm);
	myForm.submit();
	document.body.removeChild(myForm);
}
document.getElementById("aa").onclick = sendPost;
document.getElementById("bb").onclick = sendPost;
</script>
</body>