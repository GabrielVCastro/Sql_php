<?php  
	session_start();
	$_SESSION['var'] = $_GET['editar'];
	header("Location: index.php");

?>