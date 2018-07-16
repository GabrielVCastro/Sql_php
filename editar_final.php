<?php 
	include_once("head_footer/header.php");  
	include("classes/Pessoa.class.php");

	$pessoa = new Pessoa();
	$today = date("Y-m-d H:i:s");
	$pessoa->editar($_POST['nome'], $_POST['email'], $today, $_POST['imagem'], $_POST['cpf'],$_POST['cep'], $_POST['cel'], $_POST['cnpj'], $_POST['id']);

	header("Location: index.php");
	include_once("head_footer/footer.php"); 
?>