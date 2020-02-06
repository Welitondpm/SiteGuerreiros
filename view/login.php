<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

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
</head>
<body>

	<nav class="navbar navbar-default navbar-expand-md navbar-dark bg-dark">

		<div class="container">

    		<a href="index.html" class="navbar-brand abs">LOGO</a>
    		<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#barra-navegacao">

        		<span class="navbar-toggler-icon"></span>
        		
        	</button>

	    	<div class="collapse navbar-collapse" id="barra-navegacao">
	    		
	    		<ul class="navbar-nav  ml-auto">
	    			
	    			<li class="nav-item">
	    				<a href="index.html" class="nav-link">Home</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="membros.php" class="nav-link">Membros</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="youtube.html" class="nav-link">Youtube</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="registro.php" class="nav-link">Registre-se</a>
	    			</li>
	    			<li class="nav-item active">
	    				<a href="login.php" class="nav-link">Login</a>
	    			</li>
	    			
	    		</ul>

	    	</div>

    	</div>

    </nav>

    <div class="container">

    	<div class="row linha">
    		
            <div class="col-sm-12 text-center">
                <h1>Logar</h1>
            </div>

        </div>

        <div class="row linha">
            
            <div class="col-xs-12 col-sm-12">
                
                <form method="POST" action="../php/login.php" class="col-lg-6 offset-lg-3">

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>

                    <div class="text-right">
                        <a href="">Esqueceu a senha?</a>
                        <br><br>
                    </div>

                    <div class="col-md-12 text-center">
                        
                        <p style="color: red;">
                            
                            <?php

                                if ($erro == 1) {
                                    echo "Usuário ou senha incorretos";
                                }

                            ?>

                        </p>

                    </div>

                    <div class="col-md-12 text-center">
                        
                        <button type="submit" class="btn btn-secondary" onclick="return verificalogin();">
                            Logar
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
</body>
</html>