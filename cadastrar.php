	<?php
	include_once("head_footer/header.php");
	include("classes/Pessoa.class.php");
	
	//$pdo = new PDO("mysql:host=localhost;sql_1", "root", "") or die ("erro selecão");
	$pessoa = new Pessoa();
	$today = date("Y-m-d H:i:s");
 	$pessoa->limpar($_POST['nome'], $_POST['email'], $today, $_POST['imagem'], $_POST['cpf'],$_POST['cep'], $_POST['cel'], $_POST['cnpj']);






 	mysql_query("insert into pessoas () values('default','$pessoa->nome', '$pessoa->email', '$pessoa->data', '$pessoa->imagem', '$pessoa->cpf', '$pessoa->cep', '$pessoa->celular', '$pessoa->cnpj') ") or die ("erro");

	$var = mysql_query("select nome,email,cpf from pessoas");
	$_SESSION['sucesso'] = "Usuário cadastrado com sucesso!";
	header("Location: index.php");



	include_once("head_footer/footer.php")
	?>