<!-- This is the init.php for publishing, some secret code is not set in this php -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/flourish-config.php'); //for flourish
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/Notice.php'); //the Notice model
fORMDatabase::attach(new fDatabase('mysql', 'acm10', 'root', 'YOURCODE'));
$db = fORMDatabase::retrieve();