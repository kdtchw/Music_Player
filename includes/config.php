<?php

ob_start();

session_start();

$timezone = date_default_timezone_set("Asia/Hong_Kong");

$con = mysqli_connect("localhost", "root", "phA=odaTh7", "spotify");

if(mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>