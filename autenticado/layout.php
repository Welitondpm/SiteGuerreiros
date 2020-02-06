<?php

    session_start();

    if (!isset($_SESSION['email'])) {
        header('Location: ../view/login.php?erro=1');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/site.css">
    <link rel="stylesheet" type="text/css" href="../css/updatstyle.css">
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
                    
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="membros.php" class="nav-link">Membros</a>
                    </li>
                    <li class="nav-item">
                        <a href="youtube.html" class="nav-link">Youtube</a>
                    </li>
                    
                </ul>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row linha">
            <div class="col-sm-12 text-center">
                <h1 class="titulo">Layouts</h1>
            </div>          
        </div>

        <div class="col-sm-12 postar">

            <div class="row">
                
                <div class="col-md-8 bordaclass">
                    
                    <textarea rows="5" class="form-control">Descrição</textarea>

                </div>

                <div class="col-md-4 bordaclass">
                    
                    <div id='outputImage'></div>

                </div>

            </div>

            <div class="row uploadclass">
                
                <div class="col-md-6">
                    
                    <form action="uploadFile.php" id="uploadForm" name="frmupload" method="post" enctype="multipart/form-data">
                        <input type="file" id="uploadImage" name="uploadImage">
                        <input id="submitButton" type="submit" name='btnSubmit' value="Enviar Arquivo" />
                    </form>

                </div>

                <div class="col-md-6">
                    
                    <div class='progress col-sm-10' id="progressDivId">
                        <div class='progress-bar' id='progressBar'></div>
                        <div class='percent' id='percent'>0%</div>
                    </div>

                </div>

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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.form.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<!-- <form method="POST" action="upload.php" enctype="multipart/form-data">
    imagem <input type="file" name="arquivo">
</form>
 -->
<?php
    
    // $arquivo = $_FILES['arquivo']['name'];

    // $_UP['pasta'] = "foto/";

    // $_UP['tamanho'] = 1024*1024*100;

    // $_UP['extensoes'] = array('png', 'jpg', 'jpeg');

    // $_UP['renomeia'] = false;


    // $_UP['erros'][0] = "Não houve erro";
    // $_UP['erros'][1] = "O arquivo no upload é maior que o limite permitido";
    // $_UP['erros'][2] = "O arquivo ultrapassa o limite de tamanho especificado";
    // $_UP['erros'][3] = "O upload do arquivo foi feito parcialmente";
    // $_UP['erros'][4] = "Não foi feito o upload do arquivo";

    // if ($_FILES['arquivo']['error'] != 0) {
    //  die("Não foi possivel fazer o upload, erro: <br>".$_UP['erros'][$_FILES['arquivo']'error']);
    //  exit;
    // }


    // $extensao = strtolower(end(explod('.', $_FILES['arquivo']['name'])));
    // if (array_search($extensao, $_UP['extensoes']) === false) {
    //  $query = mysqli_query($coneccao, "INSERT INTO imagens (nome, url, ordem, created) VALUES ('$nome', '$url', '$controle_ordem', NOW())");
    //  echo "<META HTTP-EQUIV=REFRESH CONTENT='URLLLLLL' <script>alert('não foi possivel formato invalido')</script>";
    // } if ($_UP['tamahno'] < $_FILES['arquivo']['size']){

    // } else {

    //  if ($_UP['renomeia'] == true) {
    //      $nome_final = time().'.jpg';
    //  } else {
    //      $nome_final = $_FILES['arquivo']['name'];
    //  }

    //  if (move_uploaded_file($_FILES['arquivos']['tmp_name'], $_UP['pasta'].$nome_final)) {
    //      $query = mysqli_query($coneccao, "INSERT >.....");
    //  }

    // }
?>