
<?php
$title = 'Registration';

include_once 'header.php';

// This page is intended for creating new user accounts.  A user enters their new user name and
// password, verify's their password, puts in first and last name,
// and the information is passed on to register.php.
?>
<script type="text/javascript" src="javascript.js">

window.onload=function() {
	$("user").onblur = callUser();
	$("password1").onblur = checkPassword();
	$("password2").onblur = checkPassword();
	$("buttonSubmit").onclick = validateHandle();
}

</script>

<div class='title'><h2>Sign up for a user account today!</h2></div><br><br> 
	<?php
		$check = false;
		//if(isset($_GET['reg'])) {
		//	$check = true;
		//}
		if($check){
			echo "<br><h4>Account created successfully. <a href='login.html'>Click here to log in</a>.</h4><br>";
		}
	?>
	<div class = "search">
		<div class="product-center">
			<br>
			<form method = 'post' action='register.php' id='productForm'>
				<table>
					<tr>	
						<td>Username:</td>
						<td><input type='text' name='user' id='user'></td>
						<td><span id="exist">*</span></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type='password' name='password1' id='password1'></td>
						<td><span id="passwordStatus1">*</span></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type='password' name='password2' id='password2'></td>
						<td><span id="passwordStatus2">*</span></td>
					</tr>
				</table>
				
				<input type='button' value='Submit' id='buttonSubmit'>
			</form>
			<br>
		</div>
	</div>
</div>

<?php
//hi

include 'footer.php';
?>