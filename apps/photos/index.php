<?php
include_once("../../inc/init.php");
include_once("../../inc/phpFileTree/php_file_tree.php");
?>
<head>
	<link href="./../../inc/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<script src="./../../inc/phpFileTree/php_file_tree.js" type="text/javascript"></script>
<?php
	echo "111<br/>";
	echo php_file_tree($_SERVER['DOCUMENT_ROOT']."/../../../images", "javascript:alert('You clicked on [link]');");
?>
</body>