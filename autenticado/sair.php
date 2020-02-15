<?php

	session_start();

	unset($_SESSION['email']);
	unset($_SESSION['tag']);

	header('Location: ../view/index.php')

?>