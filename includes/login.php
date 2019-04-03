<?php 
 include 'db_connection.php';
 session_start();

if (!empty($_POST['txtUser']) && !empty($_POST['txtPassword'])) {
	$connect = OpenConnect();

	$username = mysqli_real_escape_string($connect, $_POST['txtUser']);
    $password = mysqli_real_escape_string($connect, $_POST['txtPassword']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($result);

	$result = mysqli_query($connect, $sql);  
    if (mysqli_num_rows($result) > 0) {  
        while ($row = mysqli_fetch_array($result)) {  
            if (password_verify($password, $row["password"])) {  
                $_SESSION["username"] = $username;  
                // header("location: ../index.php");
	    		echo json_encode([
					                'status' => true,
					                'message' => 'Login successfully'
					            ]);
            }   else  {  
          		echo json_encode([
					                'status' => false,
					                'message' => 'Username and password not found'
					            ]);
            }  
        }  
    }  else  {
        echo '<script>alert("Wrong User Details")</script>';  
    } 

	CloseConnect($connect);
} else {
	echo json_encode(['status' => false,
		             'message' => 'Username and password required']);
}

?>