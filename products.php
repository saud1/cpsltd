<!doctype html>
<html>
<?php

// Main product page.  This will have lists of the products that are currently offered in the
// store, with options to narrow down product selection.

$title = 'Products';
include 'header.php';
?>

<script type="text/javascript">

var createXMLHttp = function() {

	if(window.XMLHttpRequest) {
		xHttp = new XMLHttpRequest();
	}else{
		xHttp = new ActiveXObject("Microsoft/XMLHttp");
	}
	return xHttp;
}

var $ = function(x) {
	return document.getElementById(x);
}

var callAjax = function() {
	var url = "filterProducts.php"
	var xmlHttp = createXMLHttp();
	xmlHttp.open("GET",url);
	xmlHttp.send();
	var results = "";
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			var rows = JSON.parse(xmlHttp.responseText); 
			for(i=0; i<rows.length; i++) {
				createDiv(rows[i]["pId"],rows[i]["name"],rows[i]["description"],rows[i]["price"],rows[i]["picture"]);
			}
		}
	}
}

var createDiv = function(v,w,x,y,z) {
	var div = document.createElement("div");
	var image = document.createElement("div");
}

window.onload = function() {

	$("search").onclick = filterList;
	$("filter").onclick = filterList;
}

</script>

<div class="title"><h2>Products</h2></div>

<div class = "product-center">
	<div class = "inline">
		<div class = "col-md-3">
			<div class="search">	
				<form>
					Search In Products:
					<input type="text" name="search">
					<input type="button" value="search" id="search">
				</form>
			</div><br>
			<div class = "search">
				<form>
					Filter Products:
				<div class = "filter"><br>
					Price:
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
</htm>