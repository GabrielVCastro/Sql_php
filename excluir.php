<?php 
	include_once("head_footer/header.php");  
	include("classes/Pessoa.class.php");

	$pessoa = new Pessoa();
	$pessoa->excluir($_GET['excluir']);
	$_SESSION['excluido'] = "Usuário excluido com sucesso!";
	header("Location: index.php");
	
	
	
	include_once("head_footer/footer.php"); 
?>