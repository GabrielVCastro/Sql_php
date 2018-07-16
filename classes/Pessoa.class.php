<?php 
	class Pessoa{

		public $nome;
		public $email;
		public $data;
		public $imagem;
		public $cpf;
		public $cep;
		public $celular;
		public $cnpj;
		

		public function limpar($nome, $email, $data, $imagem, $cpf, $cep, $cel, $cnpj){
		$this->nome = $nome;
		$this->email = $email;


		$this->data = str_replace("/", "-", $data);
		$this->imagem = $imagem;
		$cpf_1 = str_replace(".", "", $cpf);
		$this->cpf = str_replace("-", "", $cpf_1);
		$cnpj_1 = str_replace(".", "", $cnpj);
		$cnpj_2 = str_replace("/", "", $cnpj_1);
		$this->cnpj = str_replace("-", "", $cnpj_2);
		$this->cep = str_replace("-", "", $cep);
		$celular_1 = str_replace("(", "", $cel);
		$celular_2 = str_replace(")", "", $celular_1);
		

		$celular_3 = str_replace("-", "", $celular_2);
		$this->celular = str_replace(" ", "", $celular_3);
		
 		}

 		public function buscar($id){
 			$resultado = mysql_query("select * from pessoas where id='$id'");
 			$resultado_1 = mysql_fetch_assoc($resultado);
 			return $resultado_1;
 		}

 		public function exibir($id){
 			$var = mysql_query("select * from pessoas order by $id");
 			return $var;
 		}

 		public function editar($nome, $email, $data, $imagem, $cpf, $cep, $cel, $cnpj,$id){
 			mysql_query("update pessoas set nome = '$nome', email = '$email', data_hora = '$data', imagem = '$imagem', cpf = '$cpf', cep = '$cep', celular = '$cel', cnpj = '$cnpj' where id = '$id' ") or die ("erro");

 		}

 		public function excluir($id){
 			mysql_query("delete from pessoas where id ='$id'");
 		}


	}




?>