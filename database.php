<?php 
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "online car booking";

	$conn = new mysqli($server,$user,$password,$db);

	if($conn->connect_error)
		die("Connection failed: ".$conn->connect_error);


	//echo "connected with database"
	?>