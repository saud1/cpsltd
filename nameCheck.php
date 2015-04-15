<?php

// Checks the database for a user's name.

include 'connect.php';

if(empty($_GET['user'])) {
	die("Invalid user name submitted.");
}

$user = $_GET["user"];
$sql = "SELECT UsersId FROM users WHERE Username = '$user'"; 
$results = mysqli_query($link,$sql);
if(mysqli_num_rows($results)>0) {
	echo 1;
}else{
	echo 0;
}

?>