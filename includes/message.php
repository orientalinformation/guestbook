<?php
include 'db_connection.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

if ($_POST["authorName"] && $_POST["messageText"]) {
	$author = $_POST["authorName"];
	$message = $_POST["messageText"];
	$dateCreate = date("Y-m-d H:i:s"); 

	$sql = "INSERT INTO messages (message, author, start_date) 
			VALUES ('$message', '$author', '$dateCreate')";

	$connect = OpenConnect();
		

	if (mysqli_query($connect, $sql)) {
    	echo json_encode([
                'status' => true,
                'message' => 'Message successfully'
            ]);
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	CloseConnect($connect);
}

?>