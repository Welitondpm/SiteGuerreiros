<?php

	session_start();

	require_once("bancodedados.class.php");

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$sql = "SELECT * FROM registro_de_usuarios WHERE email = '$email' and senha = '$senha'";

	$objDb = new banco_de_dados();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if ($resultado_id) {
		
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if (isset($dados_usuario['email'])) {
			$_SESSION['email'] = $dados_usuario['email'];
			header('Location: ../autenticado/index.php');
		} else {
			header('Location: ../view/login.php?erro=1');
		}

	} else {
		echo "Erro na execução da consulta, Favor entrar em contato com o nosso suporte";
	}

?>