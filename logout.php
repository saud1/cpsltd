<?php

// page deletes cookies from a user's web browser and shoots them back to the main page.

	setcookie('userId','', time() - 3600);
	setcookie('user','', time() - 3600);
	setcookie('time','', time() - 3600);
	setcookie('hash','', time() - 3600);

	header ("location:main.php");

?>