<head>
	<link rel="stylesheet" type="text/css" href="../../CSS/photos.css">
	<link href="./../../inc/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="./../../inc/phpFileTree/php_file_tree.js" type="text/javascript"></script>
	<title>ACM10->photos</title>
</head>
<body>
<div id = "top">
<h1>ACM10 Photos</h1>
<p>
showing files under ftp/photos&videos<br/>
click on a picture file on the left to display it. Now only .jpg .png format is showed. For more formats, contact the webmaster.<br/>
click on left of the picture to move backward. click on right to move forward.<br/>
<a href="../../index.php" >home</a> 
</p>
</div>
<div id = "all">
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/init.php');
?>