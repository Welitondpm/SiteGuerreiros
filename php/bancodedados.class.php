<?php

class banco_de_dados {

	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = 'dpm91727106';
	private $database = 'guerreiros';

	public function conecta_mysql(){

		$coneccao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		mysqli_set_charset($coneccao, 'utf8');

		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}

		return $coneccao;
	}

}

?>