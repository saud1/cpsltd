<?php

	setcookie('userId','', time() - 3600);
	setcookie('user','', time() - 3600);
	setcookie('time','', time() - 3600);
	setcookie('hash','', time() - 3600);

	header ("location:main.php");

?>