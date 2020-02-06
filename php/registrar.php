<?php

	require_once("bancodedados.class.php");
	require("apiconect.php");

	$usuario = $_POST["nome"];
	$email = $_POST["email"];
	$nick = $_POST["nick"];
	$tag = $_POST["tag"];
	$senha = $_POST["senha"];
	$senhaconfirma = $_POST["senhaconfirma"];

	$objDb = new banco_de_dados();
	$link = $objDb->conecta_mysql();

	// Verificando existencia de itens

	$sql = "SELECT * FROM registro_de_usuarios WHERE email = '$email'";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if (isset($dados_usuario['email'])) {
			header('Location: ../view/registro.php?erro=1');
			die();
		}

	} else {
		echo "Erro ao tentar confirmar a existencia do email";
	}


	$sql = "SELECT * FROM registro_de_usuarios WHERE tag = '$tag'";
	if ($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if (isset($dados_usuario['tag'])) {
			header('Location: ../view/registro.php?erro=2');
			die();
		}

	} else {
		echo "Erro ao tentar confirmar a existencia do jogador";
	}

	// verificar se pertence ao clã

	$memberstag = array();

	foreach ($members as $member) {
		$membrostag[] = $member['tag'];
	}

	if (array_search($tag, $membrostag) == false) {
		header('Location: ../view/registro.php?membro=0');
		die();
	}

	// Cadastramento do usuário não existente

	$sql = "INSERT INTO registro_de_usuarios (nome, email, nick, tag, senha) VALUES ('$usuario', '$email', '$nick', '$tag', '$senha')";

	if (mysqli_query($link, $sql)) {
		header('Location: ../view/login.php?registro=1');
	} else {
		echo "Erro ao registrar usuário favor entrar em contato com o suporte do site: <a href='../suporte.php'>Suporte</a>";
	}

?>