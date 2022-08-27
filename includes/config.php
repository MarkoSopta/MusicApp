<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");




	$con = mysqli_connect("eu-cdbr-west-03.cleardb.net", "b02fbe56f3ed91", "d2a1e66a", "heroku_f114630dc4328bb");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
