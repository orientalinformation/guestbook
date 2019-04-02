<?php
function OpenConnect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$db = "guestbook";
	$connect = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $connect->error);
	 
	return $connect;
}
 
function CloseConnect($conn)
{
 	$conn->close();
}
   
?>