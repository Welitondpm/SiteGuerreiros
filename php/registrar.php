<?php

	require_once("bancodedados.class.php");

	$usuario = $_POST["nome"];
	$email = $_POST["email"];
	$nick = $_POST["nick"];
	$tag = $_POST["tag"];
	$senha = $_POST["senha"];
	$senhaconfirma = $_POST["senhaconfirma"];

	$objDb = new banco_de_dados();
	$link = $objDb->conecta_mysql();

	// Verificando existencia de itens

	$sql = "SELECT * FROM registro_de_usuarios WHERE email = '$email";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario mysqli_fetch_array($resultado_id);

		if (isset($dados_usuario['email'])) {
			header('Location: ../view/registro.php?erro1')
		}

	} else {
		echo "Erro ao tentar confirmar a existencia do email";
	}


	$sql = "SELECT * FROM registro_de_usuarios WHERE tag = '$tag";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario mysqli_fetch_array($resultado_id);

		if (isset($dados_usuario['tag'])) {
			header('Location: ../view/registro.php?erro2')
		}

	} else {
		echo "Erro ao tentar confirmar a existencia do email";
	}

	// Cadastramento do usuário não existente

	$sql = "INSERT INTO registro_de_usuarios (nome, email, nick, tag, senha) VALUES ('$usuario', '$email', '$nick', '$tag', '$senha')";

	if (mysqli_query($link, $sql)) {
		echo "Usuário registrado com sucesso";
	} else {
		echo "Erro ao registrar usuário";
	}

?>