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

// var = variable opjects that perform a task.
var $ = function(x) {
	return document.getElementById(x);
}

var createXMLHttp = function() {

	if(window.XMLHttpRequest) {
		xHttp = new XMLHttpRequest();
	} else {
		xHttp = new ActiveXObject("Microsoft/XMLHttp");
	}
	return xHttp;
}

var callAjax = function() {
	var user = $("user").value;
	var url = "nameCheck.php?user="+user;
	var xmlHttp = createXMLHttp();
	xmlHttp.open("GET",url);
	xmlHttp.send();
	var results="";

	xmlHttp.onreadystatechange = function() {
		console.log(xmlHttp.responseText);
		if(xmlHttp.responseText>0) {
			$("exist").innerHTML = "Username already taken.  Please choose another.";
		}else{
			$("exist").innerHTML = "";
		}
	}
}

// window.onload identifies tasks that the browser should perform on load up.

window.onload = function() {
	$("user").onblur = callAjax;
}

</script>

<div class='title'><h2>Sign up for a user account today!</h2></div><br><br> 
	<div class = "search">
		<div class="product-center">
			<form method = 'post' action='register.php'>
			<table>
				<tr>	
					<td>Username:</td><td><input type='text' name='user' id='user'>
					<span id="exist">*</span></td>
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