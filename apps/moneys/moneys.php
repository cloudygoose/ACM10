<?php
include_once('moneys-head.php');

//handle requests
try {
	if (findCookie() == "pangzi") {
		if (fRequest::isPost()) {
			if (fRequest::get('new'))
			{
				$theAccount = new MoneyRecord();
				$theAccount->setDate(fRequest::get('date'));
				$theAccount->setAccount(fRequest::get('account'));
				$theAccount->setNote(fRequest::get('note'));
				$theAccount->store();
				//prevent from re-submit by refreshing the page
				fURL::redirect('moneys.php');
			}
			if (fRequest::get('delete'))
			{
				$theAccount = new MoneyRecord(fRequest::get('id'));
				$theAccount->delete();
				fURL::redirect('moneys.php');
			}
		}
		if (fRequest::isGet()) {
			if (findCookie() != "pangzi")
				fURL::redirect('moneys.php');
			if (fRequest::get('action')==="newAccount")
			{	
				echo '<form action="moneys.php" method="post">
						<label for="date">日期:</label>
						<input type="text" name="date" id="date" value=" ' . date('m/d/Y') . ' "><br>
						<label for="account">金额:</label>
						<input type="text" name="account" id="account"><br>
						<label for="note">备注:</label>
						<input type="text" name="note" id="note"><br>
						<input type="submit" name="new" value="Submit">
					</form>';
			}
		}
	}
} catch (fException $fEx) {
	//do nothing
}
//now display the money_records from database
$result = $db->query("SELECT * FROM money_records");
$result->unescape(array(
    'id'       => 'integer',
    'date'        => 'string',
    'account' => 'string',
    'note'       => 'string'
));
//adding a new money_record.

echo '<table align = "center" rules="all" id="money_records">';
echo '<tr><th>编号</th><th>时间</th><th>金额</th><th>备注</th><th>删除</th></tr>';
//the button for adding a new notice.
$sum = 0; // for the total money remain.
for ($i = $result->countReturnedRows() - 1;$i >= 0;$i--) {
	$result->seek($i);
	$row = $result->fetchRow();
	$sum += $row['account'];
	echo '<tr>
			<td>';
	echo		$i+1;
	echo	'</td>
			<td>';
	echo  		$row['date'];
	echo 	'</td>
			<td>';
	echo		$row['account'];
	echo	'</td>
			<td>';
	echo		$row['note'];
	echo	'</td>
			<td>
			<form action="moneys.php" method="post">
			<input type="submit" name="delete" value="删除">
			<input type="hidden" name="id" value="' . $row['id']. '">
			</form>
			</td>
		</tr>';

}
echo '</table>';
echo '<br/>';
echo '剩余:'.$sum;
include_once("moneys-tail.php");
?>

