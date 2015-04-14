<?php
	include 'connect.php';

	$Username = $_POST["user"];
	$Password = sha1($_POST["password2"]);
	$UserType = 0;

	$sql = "INSERT INTO users (Username, Password, UserType) VALUES ('$Username', '$Password', '$UserType')";
	$results = mysqli_query($link, $sql);

?>