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

	echo "You have $count item(s) in your cart.";

echo "</div>";


include 'footer.php';
?>
</html>