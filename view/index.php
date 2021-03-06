<?php

    session_start();

    if (!isset($_SESSION['email'])) {
        $menu = 1;
    } else {
        $menu = 0;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Site Clã Guerreiros, clã fundado dia 19/04/2019">
	<meta name="Keywords" content="Clã Guerreiros, Clash of Clans, Coc clã, Clash of clans Clã">
	<meta name="author" content="Clã Guerreiros">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/site.css">
	<title>Clã Guerreiros</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body>

	<nav class="navbar navbar-default navbar-expand-md navbar-dark bg-dark">

		<div class="container">

    		<a href="index.php" class="navbar-brand abs">
				<img src="../img/logo.png" alt="LOGO" height="42.4px" width="200px">
			</a>
    		<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#barra-navegacao">

        		<span class="navbar-toggler-icon"></span>
        		
        	</button>

	    	<div class="collapse navbar-collapse" id="barra-navegacao">
	    		
	    		<ul class="navbar-nav  ml-auto">
	    			
	    			<li class="nav-item active">
	    				<a href="index.php" class="nav-link">Home</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="membros.php" class="nav-link">Membros</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="youtube.php" class="nav-link">Youtube</a>
	    			</li>
	    			<?php
                        if ($menu == 1) {
                            echo '<li class="nav-item">
                                    <a href="registro.php" class="nav-link">Registre-se</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link">Login</a>
                                </li>';
                        } else {
                            echo '<li class="nav-item">
									<a href="../autenticado/layout.php" class="nav-link">Layouts</a>
								</li>
								<li class="nav-item">
									<a href="../autenticado/perfil.php" class="nav-link">Perfil</a>
								</li>
								<li class="nav-item">
                                    <a href="../autenticado/sair.php" class="nav-link">Log-Out</a>
                                </li>';
                        }
                    ?>
	    			
	    		</ul>

	    	</div>

    	</div>

    </nav>

    <div class="container">

    	<div class="row linha">
    		<div class="col-sm-12 text-center">
    			<h1 class="titulo">Clã Guerreiros</h1>
    		</div>    		
    	</div>
    	
    	<div class="row linha">
    		
    		<div class="col-md-6 caixatexto">
    			<p>
    				O Clã Guerreiros foi fundado no dia 19/04/2019 porem antes já teve outros nomes como: 
    				The Dark Side (Nível 5) (2018), Guerreiros (Nível 5) (2016). <br><br>
    				O Clã Guerreiros tem como foco principal guerras, no momento ainda não participamos de nenhuma liga. Também é focado mas não totalmente nos Jogos do Clã. <br>
   					Atualmente está no nível 4 e Estamos Recrutando.
    			</p>
    		</div>

    		<div class="col-md-6">

    			<div class="video-sobre">
    				<iframe width="560" height="315" src="https://www.youtube.com/embed/D8yiv-QCS_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    			</div>

    		</div>

    	</div>

        <a name="entrar"></a>

    	<div class="row linha">
    		
    		<div class="col-sm-12 text-center">
    			<h2>Estamos Recrutanto Saiba Como Participar:</h2>
    		</div> 

    	</div>

    	<div class="row linha">
    		
    		<div class="caixatexto">
    			
    			<p>
    				Primeiramente para poder participar tem que cumprir 2 requisitos e claro estar ciente das nossar Regras: <strong>1- </strong> Ser centro de vila maior ou igual a nível 6, <strong>2- </strong>Ter mais de 1000 troféus. <br>
    				<h3>Regras:</h3>
    				<ul>
    					<li>Respeitar a Todos.</li>
    					<li>Fazer os 2 ataques na guerra</li>
    					<li>Doar só o que for pedido</li>
    				</ul>
    				<div class="alert alert-danger" role="alert">
    					O Não comprimento de uma dessas regras acarretará na remoção imediata do clã
    				</div>
    				Um pouco sobre o Site: <br>
    				Página Youtube mostra nosso canal no youtube que tem layouts, estratégias, farm, guerra, jogos do clã.<br>
    				Página Membros tem a lista de todos os membros que estão no clã nesse momento.<br><br>
    				<strong>Esclusivo a membros do clã:</strong>
    				<ul>
    					<li>Ferramenta de Layouts</li>
    					<li>Ferramentas de Guerra</li>
    					<li>Ferramenta de Evolução</li>
    					<li>Eventos</li>
    					<li>Entre outras</li>
    				</ul>
    			</p>

    		</div>

    	</div>

    </div>

    <footer class="bg-dark">
    	
    	<div class="row">
    		
    		<div class="col-md-6">
    			
    			<div class="footertexto">
    				<p>
    					This is unofficial Fan Content, do not use your Supercell credentials to log in or register.<br>
    					<br>
    					( Este é um Conteúdo não oficial dos fãs, não use suas credenciais da Supercell para fazer login ou se registrar.)
    				</p>
    			</div>

    		</div>

    		<div class="col-md-6">
    			
    			<div class="footertexto">
    				<p>
                        This content is not affiliated with, endorsed, sponsored, or specifically approved by Supercell and Supercell is not responsible for it. For more information see Supercell’s Fan Content Policy: <a href="www.supercell.com/fan-content-policy" target="_blank">www.supercell.com/fan-content-policy</a>.<br><br>
                        ( Este conteúdo não é afiliado, endossado, patrocinado ou aprovado especificamente pela Supercell e a Supercell não é responsável por isso. Para mais informações, consulte a Política de Conteúdo para Fãs da Supercell: <a href="www.supercell.com/fan-content-policy" target="_blank">www.supercell.com/fan-content-policy</a>. )
                    </p>
    			</div>

    		</div>

    	</div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>