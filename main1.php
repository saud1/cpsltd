<html>
<head>
<?php
$title="main";
include 'header.php';
?>

</head>
<body>
<form method="post" action="header.php">
</form>
 
 <div class=title><h1>CPS LTD welcomes you</h1></div>
<p> what are you looking for?</p>

include "login.php"

<form method="post" action="login.php">
Username <input type="text" name="userName"><br>
Password <input type="password" name="pwd"><br>
<input type="submit" value="Go">
</form>

include "registeration.php"
<script type='text/javascript'>var user=userName</script>
<script type='text/javascript'>
var register = account.Registration;
<div class='title'><h2>Sign up for a user account today!</h2></div><br><br>
<?php
if(isset($_GET['reg'])) {
$check = false;
}else{
$check = true;
}
if($check){
echo "<br><h4>Account created successfully. <a href='login.html'>Click here to log in</a>.</h4><br>";
}
?>

