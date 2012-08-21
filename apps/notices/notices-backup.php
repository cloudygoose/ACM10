<head>
<title>ACM10->noticebackups</title>
</head>
<body>
<div id = "top">
<h1>ACM10 Noticebackups</h1>
<p>
This plain-text page is for notice backups.<br/>
It will save up to 30 latestly-edited notice.<br/>
<a href="notices.php" >back to noticeboard</a>
</p>
</div>
<hr/>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/acm10/inc/init.php');
$result = $db->query("SELECT * FROM notice_backups");
$result->unescape(array(
    'id'       => 'integer',
    'title'        => 'string',
    'author' => 'string',
    'content'       => 'string'
));
$maxid = 0;
for ($i = $result->countReturnedRows() - 1;$i >= 0;$i--) {
	$result->seek($i);
	$row = $result->fetchRow();
	if ($row['id'] > $maxid) $maxid = $row['id'];
	//delete far-away backup
	if ($row['id'] < $maxid - 30)
	{
		$backup = new NoticeBackup($row['id']);
		$backup->delete();
	}
	echo 'Title : '.$row['title'].'<br/>';
	echo 'Author : '.$row['author'].'<br/>';
	echo $row['content'];
	echo '<hr/>';
}
