<html>
<?php
$title = 'Shopping Cart';
include 'header.php';

?>

<script type="text/javascript" file="javascript.js">

window.onload = function() {

	//$("search").onblur = filterList;
	//$("sCat").onclick = filterList;
	//$("sCat").onblur = filterList;

	callAjax();
}

</script>

<div class='title'>
	<h2>Shopping Cart</h2>
</div>

<div>
	<?php
		if(count($_CART) > 0){

		}else{
			echo "You have no items in your cart.";
		}
	?>
</div>

<?php

include 'footer.php';
?>
</html>