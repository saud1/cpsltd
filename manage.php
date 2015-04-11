<!doctype html>
<html>
<?php
$title = 'Manage';
include 'header.php';

echo '<div class="title"><h2>Management Console</h2></div>';

echo '<div class="addp">
<h4>Add your product here:</h4>
<form method="post" action="verify.php">
Product Name:<input type="text" name="pname"><br>
*Enter a product name.<br><br>

Price:<input type="text" name="price"><br>
*Please input your price as an integer.  Non-integer values will cause the whole product to be rejected.<br><br>

Product Picture - Large:<input type="url" name="lpic"><br>
Enter a link to the large product picture.<br><br>

Product Picture - Small:<input type="img" name="spic"><br>
Enter a link to the small product picture.<br><br>

Description - Small:<input type="text" name="sdescr" maxlength="40"><br>
*Input a short description, less than 40 characters long, on what the product is.  Longer descriptions will cause the whole product to be rejected.<br><br>

Description - Long #1:<input type="text" name="ldescr1" maxlength="240"><br>
*Input #1 of 2 long paragraphs detailing the product.  Description should be less than 240 characters.  Longer descriptions will cause the whole product to be rejected.<br><br>

Description - Long #2:<input type="text" name="ldescr1" maxlength="240"><br>
*Input #2 of 2 long paragraphs detailing the product.  Description should be less than 240 characters.  Longer descriptions will cause the whole product to be rejected.<br><br>

In Stock:<input type="radio" name="istock" value=TRUE checked="checked"><br>Out of Stock:<input type="radio" name="istock" value=FALSE><br>
*Check for whether the product is in stock or out of stock.<br><br>

Shipping options:<br>
Next-day: <input type="checkbox" name="shipping[]" value="ND"><br>
3-5 day: <input type="checkbox" name="shipping[]" value="PD"><br>
Ground: <input type="checkbox" name="shipping[]" value="LD"><br>
Specify which type of shipping is available for this item.<br><br>

<input type="submit" value="Submit">
Entries with a * are required in order to list your product.<br>
</form></div>';

include 'footer.php';
?>
</html>