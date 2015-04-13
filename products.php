<!doctype html>
<html>
<?php

// Main product page.  This will have lists of the products that are currently offered in the
// store, with options to narrow down product selection.

$title = 'Products';
include 'header.php';
?>

<div class="title"><h2>Products<h2></div>

<div class = "product-center">
	<div class = "inline">
		<div class = "col-md-3">
			<div class="search">	
				<form>
					Search for Products:
					<input type="text" name="search">
					<input type="button" value="search">
				</form>
			</div>
		</div>
	</div>
	<div class="inline">
		<div class = "col-md-9">
			We have no products to display.
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>
</htm>