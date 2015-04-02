<?php

$link = mysqli_connect("localhost","dbAdmin","database","cpsltd");
echo (!$link?die("connection failed"):"");

?>