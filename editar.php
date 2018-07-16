<?php 
	include_once("head_footer/header.php");  
	include("classes/Pessoa.class.php");
	if ($_GET['editar']=="") {
		$_SESSION['excluido']= "Informe um usuário antes!";
		header("Location: index.php");
	}
	//$pdo = new PDO("mysql:host=localhost;sql_1", "root", "") or die ("erro selecão");
	$pessoa = new Pessoa();
 	$editar = $pessoa->buscar($_GET['editar']);


?>

	<div class="container">
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 offset-md-3 col-md-6  offset-sm-3 col-sm-6 col-12 " >
				<form action="<?= $_SESSION['base_url'] ?>editar_final.php" method="POST" >
					<h2>Editar</h2>
					<label for="cnome">Nome</label>
					<input type="text" name="nome" id="mnome" class="form-control " value="<?= $editar['nome'] ?>"><br>
					<label for="cemail">Email</label>
					<input type="email" name="email" id="memail" class="form-control" value="<?= $editar['email'] ?>""><br>
					<label for="cimg">Imagem</label>
					<input type="url" name="imagem" id="mimg" class="form-control" value="<?= $editar['imagem'] ?>"><br>
					<label for="icpf">CPF</label>
					<input type="text" name="cpf" id="mcpf" class="form-control mask_cpf" value="<?= $editar['cpf'] ?>">
					<label for="cep">CEP</label>
					<input type="text" name="cep" id="mcep" class="form-control mask_cep" value="<?= $editar['cep'] ?>"><br>
					<label for="Cel">Celular</label>
					<input type="text" name="cel" id="mphone" class="form-control mask_celular" value="<?= $editar['celular'] ?>"><br>
					<label for="cnpj">CNPJ</label>
					<input type="text" name="cnpj" id="mcnpj" class="form-control mask_cnpj" value="<?= $editar['cnpj'] ?>"><br>
					<input type="hidden" value="<?= $editar['id']?>" name="id">
					<button type="submit" class="btn btn-warning  btn-lg btn-block">Editar</button>
					

				</form>
			</div>
		</div>
	</div><br><br>



<?php include_once("head_footer/footer.php");  ?>