<?php
include_once("./inc/init.php");
?>
<head>
	<title>ACM10 root</title>
</head>
<body>
<div>
<?php
echo 'beware : this site does well under firefox and chrome, but doesn\'t in IE.<br/>'; 
try {
	if (fRequest::isPost())
	{
		$thePass = fRequest::get("pass");
		fCookie::set("acm10Pass", $thePass, '+5 months');
		fURL::redirect("index.php");	
	}
} catch (fException $fEx) {
	//do nothing
}
if (findCookie() == 'none')
{
	echo "system can't find the correct password in your cookie. please enter your password here.it will be saved in your cookie.<br/>";
	echo "there're currently two types of users, users and PANGZI.<br/>";
} else {
	echo "password accepted, welcome back, " . findCookie();
}
echo '<form id = "passForm" action = "index.php" method = "POST">';
echo 'your password: <input type = "text" name = "pass"/>';
echo '<input type = "submit" value = "changeCookiePassword"/></form>';
?>
</div>
<h1>
ACM10 root
</h1>
<a href = "./apps/notices/notices.php">notices</a> |  
<a href = "./apps/photos/photos.php">photos</a> | 
<a href = "./apps/moneys/moneys.php">classAccount</a><br/>
<br/>
<img src='http://zenithwebtechnologies.com.au/thumbnail01.php?url=www.baidu.com&type=png&width=200&height=200&email=yourEmail@domain.com'></body>
</body>
</html>