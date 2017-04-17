<?php 
	//require_once();
	
	session_start();
	$_SESSION['nick'] = $_GET['nick'];
	$_SESSION['color'] = $_GET['color'];

	header("Location: chat.php");
	die();
 ?>