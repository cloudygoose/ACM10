<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head>
<script src = "jquery-min-1.8.0.js" type = "text/javascript"></script>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/flourish-config.php'); //for flourish
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/Notice.php'); //the Notice model
fORMDatabase::attach(new fDatabase('mysql', 'acm10', 'root', 'msh'));
$db = fORMDatabase::retrieve();       
