<!doctype html>
<html>
<?php
$title = 'Main';

// main page.

include 'header.php';

echo '<div class="title"><h1>Welcome to CPS LTD</h1></div>';
echo '<p>What are you looking for?</p>';

<script type='text/javascript'>var user=userName</script>
<script type='text/javascript'>
var register = site.Registry;
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

</form>
	<h1 class="items">Your CPS Shopping Cart</h1>
<div class="fl">
	<h2 class="items ">Your CPS Shopping Cart</h2>
</div>



include 'footer.php';
?>
</html>


