<?php 
	session_start();
	include("database.php");
	if(isset($_GET)&& !empty($_GET))
	{
		$cid=$_GET['carid'];
		$sql= "SELECT * FROM cars WHERE carid=$cid";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$_SESSION['cars'][$cid] = $row;

		//echo"<pre>";print_r($_SESSION['book']);exit;
		header("Location:index.php");
	}