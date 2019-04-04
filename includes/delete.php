<?php 
include ('db_connection.php');

if (!empty($_POST['idMessage'])) {
	$id = $_POST['idMessage'];
	$connect = openConnect();

	$sql = "DELETE FROM messages WHERE id = '$id'";
	$result = mysqli_query($connect, $sql);

	if ($result == true) {
	    echo json_encode([
		                'status' => true,
		                'message' => 'Record deleted successfully'
		            ]);
	} else {
	    echo "Error deleting record: " . $connect->error;
	}

	closeConnect($connect);
}

?>