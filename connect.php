<?php

$link = mysqli_connect("localhost","dbAdmin","access","cpsltd");
echo (!$link?die("connection failed"):"");

?>