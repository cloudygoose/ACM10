<?php
include_once('notices-head.php');
//handle requests
try {
	if (fRequest::isPost()) {
	    if (fRequest::get('remove'))
		{
			$theNotice = new Notice(fRequest::get('id'));
			$theNotice->delete();	
			//prevent from re-submit by refreshing the page
			fURL::redirect('notices.php');
		}else
		if (fRequest::get('edit'))
		{
			$theNotice = new Notice(fRequest::get('id'));
			$theNotice->setContent(fRequest::get('content'));
			$theNotice->setAuthor(fRequest::get('author'));
			$theNotice->setTitle(fRequest::get('title'));
			$theNotice->store();	
			
			//saving a backup to TABLE noticebackups
			$backup = new NoticeBackup();
			$backup->setContent(fRequest::get('content'));
			$backup->setAuthor(fRequest::get('author'));
			$backup->setTitle(fRequest::get('title'));
			$backup->store();
			//prevent from re-submit by refreshing the page
			fURL::redirect('notices.php');
		}
	}
	if (fRequest::isGet()) {
		if (fRequest::get('action')==="newNotice")
		{
			$theNotice = new Notice();
			$theNotice->store();	
			//header('location:notices.php');
			fURL::redirect('notices.php');
		}
	}
} catch (fException $fEx) {
	//do nothing
}
//now display the notices from database
$result = $db->query("SELECT * FROM notices");
$result->unescape(array(
    'id'       => 'integer',
    'title'        => 'string',
    'author' => 'string',
    'content'       => 'string'
));
//the button for adding a new notice.
for ($i = $result->countReturnedRows() - 1;$i >= 0;$i--) {
	$result->seek($i);
	$row = $result->fetchRow();
	echo '<form id = "aForm" action = "notices.php" method = "POST">';
	echo '<input type = "hidden" name = "id" value = "'.$row['id'].'"/>'; 
	echo '<span id = "titleAndAuthor">TITLE:<input type = "text" name = "title" value = "'.$row['title'].'"/>AUTHOR:<input type = "text" name = "author" value = "'.$row['author'].'"/></span><br/>'; 
	echo '<textarea name = "content" rows = 15 cols = 93 >';
	echo $row['content'];
	echo '</textarea><br/>';
	echo '<input type = "submit" name = "remove" value = "remove" onclick = "return confirm(\'sure?\')"/>';
	echo '<input type = "submit" name = "edit" value = "submit"/><br/><br/>';
	echo '</form>';
}
include_once('notices-tail.php');
