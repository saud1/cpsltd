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

if(!isset($_COOKIE['cart'])){
	echo "You have no items in your cart.";
}else{
	$array = $_COOKIE('CART');
	$count = $array.length;
	echo "You have $count items in your cart.";
}

echo "</div>";


include 'footer.php';
?>
</html>