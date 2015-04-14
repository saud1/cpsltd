<!doctype html>
<html>

<?php
$title = 'Registration';

include 'header.php';

// This page is intended for creating new user accounts.  A user enters their new user name and
// password, verify's their password, puts in first and last name,
// and the information is passed on to register.php.
?>

<script type="text/javascript">

var $ = function(x) {
	return document.getElementById(x);
}

var createXMLHttp = funtion() {

	if(window.XMLHttpRequest) {
		xHttp = new XMLHttpRequest();
	} else {
		xHttp = new ActiveXObject("Microsoft/XMLHttp");
	}
	return xHttp;
}

</script>

<div class='title'><h2>Sign up for a user account today!</h2></div><br><br> 
	<div class = "search">
		<div class="product-center">
			<form method = 'post' action='register.php'>
			<table>
				<tr>	
					<td>Username:</td><td><input type='text' name='user'><td>
				</tr><br>
				<tr>
					<td>Password:</td><td><input type='password' name='password1'></td><br>
					</tr><tr>
					<td>Confirm Password:</td><td><input type='password' name='password2'></td>
					<br><br>
				</tr>
					
				</table>
				
				<input type='submit' value='submit'>
			
			</form>
		</div>
	</div>
</div>

<?php
//hi

include 'footer.php';
?>
</html>