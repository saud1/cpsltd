<?php
	
	$logIn = false;

	if(!empty($_COOKIE["userId"]) && !empty($_COOKIE["user"]) && !empty($_COOKIE["time"]) && !empty($_COOKIE["hash"])) {

		$userId = $_COOKIE["userId"];
		$userName = $_COOKIE["user"];
		$time = $_COOKIE["time"];
		$hash = $_COOKIE["hash"];

		$secret = "WelcomeToOurStore";
		$recalculatedHash = sha1($userId.$userName.$time.$secret);
		if($recalculatedHash != $hash) {
			$logIn = true;
		}
	}

?>