<?php
	session_start();
	include 'conn.php';
	if(isset($_SESSION['user']))
	{
		if($_SESSION['type']==0)
		{
			header("location: index.php");
			exit();
		}
		if($_SESSION['type']==1)
		{
			header("location: admin_index.php")
			exit();
		}
	}
?>