<?php 
include ('db_connection.php');

if (!empty($_GET['idMessage'])) {
	$id = $_GET['idMessage'];
	$connect = openConnect();

	$sql = "SELECT * FROM messages WHERE id = '$id'";
	$result = mysqli_query($connect, $sql);

	if ($result) {
	    echo json_encode(mysqli_fetch_array($result));
	} else {
	    echo "Error get data record: " . $connect->error;
	}
	
	closeConnect($connect);
}
?>