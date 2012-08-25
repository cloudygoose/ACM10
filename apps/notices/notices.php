<?php
include_once('notices-head.php');
//handle requests
if (fRequest::isPost()) {
    if (fRequest::get('remove'))
	{
		$theNotice = new Notice(fRequest::get('id'));
		$theNotice->delete();	
	}else
	if (fRequest::get('edit'))
	{
		$theNotice = new Notice(fRequest::get('id'));
		$theNotice->setContent(fRequest::get('content'));
		$theNotice->setAuthor(fRequest::get('author'));
		$theNotice->setTitle(fRequest::get('title'));
		$theNotice->store();	
	}
}
if (fRequest::isGet()) {
	if (fRequest::get('action')==="newNotice")
	{
		$theNotice = new Notice();
		$theNotice->store();	
	}
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
echo '<div id = "all">';
for ($i = $result->countReturnedRows() - 1;$i >= 0;$i--) {
	$result->seek($i);
	$row = $result->fetchRow();
	echo '<form id = "aForm" action = "notices.php" method = "POST">';
	echo '<input type = "hidden" name = "id" value = "'.$row['id'].'"/>'; 
	echo '<span id = "titleAndAuthor">TITLE:<input type = "text" name = "title" value = "'.$row['title'].'"/>AUTHOR:<input type = "text" name = "author" value = "'.$row['author'].'"/></span><br/>'; 
	echo '<textarea name = "content" rows = 15 cols = 93 >';
	echo $row['content'];
	echo '</textarea><br/>';
	echo '<input type = "submit" name = "remove" value = "remove"/>';
	echo '<input type = "submit" name = "edit" value = "submit"/><br/><br/>';
	echo '</form>';
}
echo '</div>';
include_once('notices-tail.php');