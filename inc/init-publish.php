<!-- This is the init.php for publishing, some secret code is not set in this php -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	<script src = "jquery-min-1.8.0.js" type = "text/javascript"></script>
</head>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/flourish-config.php'); //for flourish
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/phpFileTree/php_file_tree.php'); //for Filetree in the photos app
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/Notice.php'); //the Notice model
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/NoticeBackup.php'); 
fORMDatabase::attach(new fDatabase('mysql', 'acm10', 'root', 'YOURCODE'));
$db = fORMDatabase::retrieve();