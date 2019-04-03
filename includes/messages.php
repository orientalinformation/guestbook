<?php
include ('db_connection.php');

function messages()
{
	$connect = openConnect();
	$messages = array();

	$sql =  "SELECT * FROM messages";
	$result = mysqli_query($connect, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
		   $messages[] = $row;
		}
	}
	return $messages;

	closeConnect($connect);
}

?>