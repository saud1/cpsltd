<!doctype html>
<html>
<?php

// Main product page.  This will have lists of the products that are currently offered in the
// store, with options to narrow down product selection.

$title = 'Products';
include 'header.php';
?>

<script sytle="text/javascript" file="javascript.js">

window.onload = function() {
	callProducts();
}

</script>

<div class="title"><h2>Products</h2></div>

<div class = "product-center">
	<div class = "inline">
		<div class = "col-md-3">
			<div class="search">	
				<form>
					Search In Products:<br>
					<input type="text" name="search" id="search">
				</form>
			</div><br>
			<div class = "search">
				<form>
					Filter Products:<br><br>
				<div class = "filter">
					Category:
					<select name="sCat" id="sCat">
						<option value=0>All</option>
						<option value=1>Electronics</option>
						<option value=2>Auto</option>
						<option value=3>Cosmetics</option>
					</select><br>
					<br>
					Price:<br>
					$0-10  <input type="radio" name="price" value=1><br>
					$11-50 <input type="radio" name="price" value=2><br>
					$51-100 <input type="radio" name="price" value=3><br>
					>$101 <input type="radio" name="price" value=4><br>
				</div>
				</form>
			</div>
			<div>

			</div>
		</div>
	</div>
	<div class="inline">
		<div class = "col-md-9" id = "productList">
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>
</html>