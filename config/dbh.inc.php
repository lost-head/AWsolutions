<?php
	
	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "Awsol";
	
	$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

	if(!$conn){
		die("Can't connect: ".mysqli_connect_error());
	}