<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/flourish-config.php'); //for flourish
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/phpFileTree/php_file_tree.php'); //for Filetree in the photos app
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/Notice.php'); //models
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/NoticeBackup.php'); 
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/models/MoneyRecord.php'); 
fORMDatabase::attach(new fDatabase('mysql', 'acm10', 'root', 'msh'));
$db = fORMDatabase::retrieve();       
$db->query("set names utf8");
$imageRoot = "./../../acmimages"; //set path for images, some further configuration in photos.php, it should be set relative to apps/photos/
global $normalPass;
$normalPass = "test";
global $pangPass;
$pangPass = "pangzi";
function findCookie()
{
	global $normalPass;
	global $pangPass;
	$nowPass = fCookie::get('acm10Pass', 'none');
	if ($nowPass == $normalPass) return "acmer";
	if ($nowPass == $pangPass) return "pangzi";
	return "none";	
}
if (findCookie() == 'none')
{
	if (fUTF8::cmp(fURL::get(), "/acm10/index.php"))
		fURL::redirect('/acm10/index.php');
}
