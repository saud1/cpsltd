<!doctype html>
<html>
<?php
$title = 'Registration';

include 'header.php';

// This page is intended for creating new user accounts.  A user enters their new user name and
// password, verify's their password, puts in first and last name,
// and the information is passed on to register.php.

echo "
<div class='title'><h2>Sign up for a user account today!</h2></div><br><br> 

<form method = 'post' action='register.php'>

Username: <input type='text' name='user'><br>
Password: <input type='password' name='password1'><br>
Confirm Password: <input type='password' name='password2'><br><br>

First Name: <input type='text' name='fName'><br>
Last Name: <input type='text' name='lname'><br><br>
<input type='submit' value='submit'>

</form>

";
//hi

include 'footer.php';
?>
</html>