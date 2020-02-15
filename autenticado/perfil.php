<?php

    session_start();

    if (!isset($_SESSION['email'])) {
        header('Location: ../view/login.php?erro=1');
    }

    $aviso = 1;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                    
                    <li class="nav-item">
                        <a href="../view/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../view/membros.php" class="nav-link">Membros</a>
                    </li>
                    <li class="nav-item">
                        <a href="../view/youtube.php" class="nav-link">Youtube</a>
                    </li>
                    <li class="nav-item">
                        <a href="layout.php" class="nav-link">Layouts</a>
                    </li>
                    <li class="nav-item active">
                        <a href="perfil.php" class="nav-link">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="sair.php" class="nav-link">Log-Out</a>
                    </li>
                    
                </ul>

            </div>

        </div>

    </nav>

    <div class="container">

        <?php 
        
            if ($aviso == 1) {
                echo '<br><div class="alert alert-warning col-12">Algumas funcionalidades do site ainda estão em desenvolvimento e não estarão disponíveis até a sua completa conclusão!</div>';
            }

        ?>

        <?php

            require('apiconect.php');

        ?>

        <table class="table table-hover table-sm">

            <tr class="row table-bordered">
                <td class="col-sm-6 text-center" style="font-size: 25px;">
                    <?php echo $data['expLevel'];?>
                    <?php echo $data['name']."<br>";?>
                    <?php echo $data['tag']."<br>";?>
                    <?php 
                        if ($data['role'] == "leader") {
                            echo "Líder";
                        } elseif ($data['role'] == "coLeader") {
                            echo "Colíder";
                        } elseif ($data['role'] == "admin") {
                            echo "Ancião";
                        } else {
                            echo "Membro";
                        }
                    ?>
                </td>
                <td class="col-sm-6 text-center" style="font-size: 25px;">
                    <?php echo "Troféus: ".$data['trophies']."<br>";?>
                    <?php echo "Recorde de Troféus: ".$data['bestTrophies']."<br>";?>
                    <?php echo "Estrelas em Guerra: ".$data['warStars'];?>
                </td>
            </tr>

        </table>

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