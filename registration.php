
<?php
$title = 'Registration';

include_once 'header.php';

// This page is intended for creating new user accounts.  A user enters their new user name and
// password, verify's their password, puts in first and last name,
// and the information is passed on to register.php.
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

var checkPassword = function() {
  var pw1 = $("password1").value;
  var pw2 = $("password2").value;

  if(pw1 != pw2) {
    $("passwordStatus2").innerHTML = "Passwords do not match.";
  }else{
    $("passwordStatus1").innerHTML = "*";
    $("passwordStatus2").innerHTML = "*";
  }
}

var validateHandle = function() {
  var submitForm = true;
  var pw1 = $("password1").value;
  var pw2 = $("password2").value;

  if(pw1 != pw2) {
    $("passwordStatus2").innerHTML = "Passwords do not match.";
    submitForm = false;
  }

  if($("user").value.length < 3) {
    $("exist").innerHTML = "Username is too short.  Please use a longer name.";
    submitForm = false;
  }

  if(submitForm) {
    $("productForm").submit();
  }
}

var callUser = function() {
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

window.onload=function() {
	$("user").onblur = callUser;
	$("password1").onblur = checkPassword;
	$("password2").onblur = checkPassword;
	$("buttonSubmit").onclick = validateHandle;
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