<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<title>Retirada de pedidos</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Rambla|Rufina" rel="stylesheet">
	<script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>

	<?php  
		session_start(); 
		$conexao = mysql_connect('localhost', 'root','') or die ("erro de conexao no banco de dados");
		$banco = mysql_select_db("sql_1", $conexao) or die ("erro select banco de dados");
	?>
	


</head>
<body>