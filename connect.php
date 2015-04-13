<?php

$link = mysqli_connect("localhost","yoda","12345","cpsltd");
echo (!$link?die("connection failed"):"");

?>