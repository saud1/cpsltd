<?php

include_once 'connect.php';

$userName = $_POST['user'];
$password = sha1($_POST['password']);

$sql = "SELECT uId FROM users WHERE userName = '$userName' AND password = '$password'";
$results = mysqli_query($link, $sql);
echo (!$results?die(mysqli_error($link)."<br>".$sql):"");

$count = mysqli_num_rows($results);

if($count > 0) {

	list($userId) = mysqli_fetch_array($results);

	$time = time();
	$secret = "test webpage";
	$hash = sha1($userId.$userName.$time.$secret);
	$expirationTime = strtotime("+2 years");

	setcookie("user", $username, $expirationTime);
	setcookie("userId", $userId, $expirationTime);
	setcookie("time", $time, $expirationTime);
	setcookie("hash", $hash, $expirationTime);

	header("Location:index.php");
} else {
	header("Location:login.html");
}
?>