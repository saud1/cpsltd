<!doctype html>
<html>
<?php
$title = "Verify";
include 'header.php';

echo '<div class="title"><h3>Does your product look correct?<h3></div>';
//print_r($_POST);

//echo '<br><br>';

$link = mysqli_connect("localhost", "testUser", "DatabaseT3st", "shopkit");
echo (!$link?die("Connection Failed."):"");

$sql = "INSERT INTO products(pname,price,lpic,spic,sdescr,ldescr1,ldescr2,istock,available) VALUES($_POST[pname],$_POST[price],$_POST[lpic],$_POST[spic],$_POST[sdescr],$_POST[ldescr1],$_POST[ldescr2],$_POST[istock],TRUE)";
$results = mysqli_query($link, $sql);
echo (!$results?die(mysqli_error($link)."<br>".$sql):"Insert Successful.");

include 'footer.php';
?>
</html>