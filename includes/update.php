<?php
include('db_connection.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (!empty($_POST["authorName"]) && !empty($_POST["messageText"]) && !empty($_POST['idMessage'])) {
    $author = $_POST["authorName"];
    $message = $_POST["messageText"];
    $dateUpdate = date("Y-m-d H:i:s");
    $id = $_POST['idMessage'];

    $sql = "UPDATE messages
			SET message='$message', author='$author', update_date='$dateUpdate'
			WHERE id='$id'";

    $connect = openConnect();
        
    if (mysqli_query($connect, $sql)) {
        echo json_encode([
                'status' => true,
                'message' => 'Update successfully'
            ]);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    closeConnect($connect);
} else {
    echo json_encode([
                'status' => false,
                'message' => 'Message or Author required'
            ]);
}
