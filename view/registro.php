<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    $membroexiste = isset($_GET['membro']) ? $_GET['membro'] : 1;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/site.css">
    <script type="text/javascript" src="../js/site.js"></script>
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
	    			
	    			<li class="nav-item">
	    				<a href="index.php" class="nav-link">Home</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="membros.php" class="nav-link">Membros</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="youtube.php" class="nav-link">Youtube</a>
	    			</li>
	    			<li class="nav-item active">
	    				<a href="registro.php" class="nav-link">Registre-se</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="login.php" class="nav-link">Login</a>
	    			</li>
	    			
	    		</ul>

	    	</div>

    	</div>

    </nav>

    <div class="container">

    	<div class="row linha">
    		
            <div class="col-sm-12 text-center">
                <h1>Registre-se</h1>
            </div>

            <div class="alert alert-warning col-md-12 text-center">
                
                O Cadastro só está disponível pra membros do clã. <a href="index.html#entrar">(Saiba como participar).</a>

            </div>

    	</div>

        <div class="row linha">
            
            <div class="col-xs-12 col-sm-12">
                
                <form method="POST" action="../php/registrar.php" class="col-lg-6 offset-lg-3">
                    
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    
                    <div class="form row">
                        
                        <div class="col-md-6">
                            <label for="nick">Nick:</label>
                            <input type="text" name="nick" id="nick" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="tag">Tag:</label>

                            <div class="input-group">
                                
                                <input type="text" name="tag" id="tag" class="form-control">

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Exemplo:">
                                        <img src="../img/help.png" width="25px" height="25px">
                                    </button>
                                </div>

                            </div>
                            
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="senhaconfirma">Confirme sua senha:</label>
                        <input type="password" name="senhaconfirma" id="senhaconfirma" class="form-control">
                    </div>

                    <div class="col-md-12 text-center">
                        
                        <p style="color: red;">
                            
                            <?php

                                if ($erro == 1) {
                                    echo "Email já cadastrado escolha outro email!";
                                } elseif ($erro == 2) {
                                    echo "O jogador escolhido ( TAG ) já está cadastrado!";
                                }

                                if ($membroexiste == 0) {
                                    echo "Verifique se a tag está escrita exatamente igual no jogo (Diferencia letras maiúsculas de minuscúlas) ou o jogador não pertence ao clã!";
                                }

                            ?>

                        </p>

                    </div>

                    <div class="col-md-12 text-center">
                        
                        <button type="submit" class="btn btn-secondary" onclick="return verificaregistro();">
                            Registrar
                        </button>

                    </div>

                </form>

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
    <script type="text/javascript">
        
        $(function () {
            $('[data-toggle="popover"]').popover({
                html:true,
                content:'<img src="../img/clashtag.png" width="250px" height="75px">'
            })
        })
    </script>
</body>
</html>