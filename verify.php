<?php

include_once 'connect.php';

$userName = $_POST['user'];
$password = sha1($_POST['password']);

$script = "SELECT uId FROM cpsltd WHERE userName = '$userName' AND password = $password";
$results = mysqli_query($link, $script);
echo (!$results?die(mysqli_error(link)."<br>".$sql):"");
$count = mysqli_num_rows($results);

echo $count;
?>