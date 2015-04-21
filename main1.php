<html>

<?php
$title="main";
include 'header.php';
?>

 <div class=title><h1>CPS LTD welcomes you</h1></div>
<p> what are you looking for?</p>

<?php
include "products.php";
?>

<form>
search <input type='text' name='pCat'>
<select name='pCat'>
  <option value='0'>All</option>
  <option value='1'>Cars</option>
  <option value='2'>Perfume</option>
</select>
<input type='submit' value='Go'>
</form>


<?php
include "login.php"
?>

<form method="post" action="login.php">
 </form>
Username <input type="text" name="userName"><br>
Password <input type="password" name="pwd"><br>
<input type="submit" value="Go">


<?php
include "registeration.php"
?>


<?php
include "cart.php"
?>

<h1 class="items">Your CPS Shopping Cart</h1>
<div class="fl">
<h2 class="items ">Your CPS Shopping Cart</h2>
</div>

<?php
include "footer.php";
?>
