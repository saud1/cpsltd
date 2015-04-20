<html>
<?php
$title = 'Shopping Cart';
include 'header.php';

?>

<div class='title'>
	<h2>Shopping Cart</h2>
</div>

<div id='cart'>

<?php

	$array = $_COOKIE['cart'];
	$count = count(json_decode($array));

	if($count < 1) {
		echo "You have $count item(s) in your cart.";
	}else{
		echo"";
	}

echo "</div>";


include 'footer.php';
?>
</html>