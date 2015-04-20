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

include "products.php";

<form method="post" action="products.php>"
</form>
search <input type='text' name='pCat'>
<select name='pCat'>
  <option value='0'>All</option>
  <option value='1'>Cars</option>
  <option value='2'>Perfume</option>
</select>
<input type='submit' value='Go'>
</form>
<?php
include("sessions/connect.php");
$sTerm="";
if(!empty($_GET["pCat"])){
  $sTerm = $_GET["pCat"];
}

include "login.php";

<form method="post" action="login.php">
 </form>
Username <input type="text" name="userName"><br>
Password <input type="password" name="pwd"><br>
<input type="submit" value="Go">


include "registeration.php";
<form method="post" action="registeration.php"></form>
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

include "cart.php";
<form="post" action="cart.php>"
</form>
<h1 class="items">Your CPS Shopping Cart</h1>
<div class="fl">
<h2 class="items ">Your CPS Shopping Cart</h2>
</div>

include "footer.php";

