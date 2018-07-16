
<?php 
include_once("head_footer/header.php"); 
include("classes/Pessoa.class.php");

$_SESSION['base_url'] = false;
if ($_SESSION['base_url']){
	$_SESSION['base_url'] = "";
}else{
	$_SESSION['base_url'] = "http://localhost/sql_1/";
} 

?>

	<div class="container">
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 offset-md-3 col-md-6  offset-sm-3 col-sm-6 col-12 " >
					<?php
					if(isset($_SESSION['sucesso'])){ ?>
						<br><br>
								<div class="alert alert-success" role="alert">
								 	<strong><p><?= $_SESSION['sucesso'] ?></p></strong>
								</div>
						<?php }
							$_SESSION['sucesso'] = null;

							if(isset($_SESSION['excluido'])){ ?>
							<br><br>
									<div class="alert alert-warning" role="alert">
									 	<strong><p><?= $_SESSION['excluido'] ?></p></strong>
									</div>
							<?php }
								$_SESSION['excluido'] = null; 
					  	?>
				<form action="<?= $_SESSION['base_url'] ?>cadastrar.php" method="POST" >
					<h2>Cadastro</h2>
					<label for="cnome">Nome</label>
					<input type="text" name="nome" id="mnome" class="form-control " required><br>
					<label for="cemail">Email</label>
					<input type="email" name="email" id="memail" class="form-control" required><br>
				
					
					<label for="cimg">Imagem</label>
					<input type="url" name="imagem" id="mimg" class="form-control" required><br>
					<label for="icpf">CPF</label>
					<input type="text" name="cpf" id="mcpf" class="form-control mask_cpf" required>
					<label for="cep">CEP</label>
					<input type="text" name="cep" id="mcep" class="form-control mask_cep" required><br>
					<label for="Cel">Celular</label>
					<input type="text" name="cel" id="mphone" class="form-control mask_celular" required><br>
					<label for="cnpj">CNPJ</label>
					<input type="text" name="cnpj" id="mcnpj" class="form-control mask_cnpj" required><br>
					<button type="submit" class="btn btn-info  btn-lg btn-block">Cadastrar</button>
					

				</form>
			</div>
		</div>
	</div><br><br>
	
<?php 
	
	$pessoa = new Pessoa();
	if(!isset($_SESSION['var'])){
		$_SESSION['var'] = "id";
	}
	$var = $pessoa->exibir($_SESSION['var']);
	while($dados = mysql_fetch_assoc($var)){ ?>
		
		<div class="container">
			<div class="row">

				<div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
					
					
					
					<table class="table table-responsive">
						<thead>
							<tr class="bg-info">
								<th><a href="ordenar.php?editar=id">NºRegistro</a></th>
								<th><a href="ordenar.php?editar=nome">NOME</a></th>
								<th><a href="ordenar.php?editar=email">EMAIL</a></th>
								<th><a href="ordenar.php?editar=cpf">CPF</a></th>
								<th><a href="ordenar.php?editar=cep">CEP</a></th>
								<th><a href="ordenar.php?editar=celular">CELULAR</a></th>
								<th><a href="ordenar.php?editar=cnpj">CPNJ</a></th>
								<th><i class="fas fa-user-edit"></i></th>
								<th><i class="fas fa-trash-alt"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<?= $dados['id'] ?>
								</td>
								
								<td>
									<?= $dados['nome'] ?>
								</td>
								<td>
									<?php echo substr($dados['email'], 0 ,18) ?>...
								</td>
								<td class="mask_cpf">
									<?= $dados['cpf'] ?>
								</td>
								<td class="mask_cep">
									<?= $dados['cep'] ?>
								</td>
								<td class="mask_celular">
									<?= $dados['celular'] ?>
								</td>
								<td class="mask_cnpj">
									<?= $dados['cnpj'] ?>
								</td>
								<td>
									<a href="<?= $_SESSION['base_url'] ?>editar.php?editar=<?= $dados['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
								</td>
								<td><a href="<?= $_SESSION['base_url'] ?>excluir.php?excluir=<?= $dados['id'] ?>"><i class="fas fa-times-circle"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		






	<?php }


?>
	<?php include_once("head_footer/footer.php") ?>

