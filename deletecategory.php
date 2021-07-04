<?php
	include("database.php");
	session_start();

	if(isset($_GET) && !empty($_GET))
	{
		$id=$_GET['id'];
		$sql2= "DELETE FROM categories WHERE categoryid=$id";
		if($conn->query($sql2))
		{
			$_SESSION['delete']="Record deleted.";
		}
		else{
			$_SESSION['delete']="Record is not deleted";
		}
	}
	header("Location:category.php");

	?>	