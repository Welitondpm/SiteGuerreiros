<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/site.css">
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
	    			<li class="nav-item active">
	    				<a href="membros.html" class="nav-link">Membros</a>
	    			</li>
	    			<li class="nav-item">
	    				<a href="youtube.html" class="nav-link">Youtube</a>
	    			</li>
	    			<li class="nav-item">
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
    		
            <?php

            $clantag = "#28GPGRGGV";

            $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6Ijk2MmYyNjAxLTIxNWMtNDBhYi05N2I0LTZjYWY4ZjY2OTAxYiIsImlhdCI6MTU4MDkyMjA5OSwic3ViIjoiZGV2ZWxvcGVyLzliYTc4NTExLWU4ZmMtYmViMS0xYzZhLWYyYmY1MzYzYzFmZSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE2OC4xOTUuMjMwLjE1NyIsIjEzMS4yNTUuMTMyLjE0MSIsIjEzMS4yNTUuMTMyLjE0NyIsIjE2OC4xOTUuMjMwLjE1NiIsIjE2OC4xOTUuMjMwLjE1OCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.dQ-Tn83STGlrCxHau0GSCbw6PlGLD5mK4OtntZsNc-FV0bX_ZWgK3eKJJJm7UNgvcNMkK5TQP6dPAY6GXsb4Iw";

            $url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);

            $ch = curl_init($url);

            $headr = array();
            $headr[] = "Accept: application/json";
            $headr[] = "Authorization: Bearer ".$token;

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

            $res = curl_exec($ch);
            $data = json_decode($res, true);
            curl_close($ch);

            if (isset($data["reason"])) {
                $errormsg = true;
            }

            $members = $data["memberList"];

            ?>

            <?php

            if (isset($errormsg)) {
                echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
                exit;
            }

            ?>

            <table class="table table-hover table-sm">
                
                <tr class="row table-bordered">
                    <td class="col-md-3 col-sm-4 col-xs-4 text-center">
                        <img src="<?php echo $data["badgeUrls"]["medium"]; ?>">
                    </td>
                    <td class="col-md-5 col-sm-4 col-xs-4">
                        <h2><?php echo $data["name"]; ?></h2>
                        <?php echo $data["tag"]; ?>
                        <br><br>
                        <p>
                            <?php echo $data["description"]; ?>
                        </p>
                    </td>
                    <td class="col-md-4 col-sm-4 col-xs-4">
                        Total de pontos: 
                        <img src="../img/principaltrofel.png" width="15px" height="20px">
                        <?php echo $data["clanPoints"]; ?>
                        <img src="../img/baseconstrutortrofeu.png" width="15px" height="20px">
                        <?php echo $data["clanVersusPoints"]; ?>
                        <br>
                        Localização: <?php echo $data["location"]["name"]; ?>
                        <br>
                        Tipo:
                        <?php 
                            if ($data["type"] == "inviteOnly") {
                                echo "Somente convidados";
                            } elseif ($data["type"] == "closed") {
                                echo "Fechado";
                            } else {
                                echo "Aberto";
                            }
                        ?>
                        <br>
                        Troféus necessários: 
                        <img src="../img/principaltrofel.png" width="15px" height="20px">
                        <?php echo $data["requiredTrophies"]; ?>
                        <br>
                    </td>
                </tr>
                <tr class="row table-bordered">
                    <td colspan="3" class="col-sm-12 text-center">
                        Fequência: 
                        <?php
                            if ($data["warFrequency"] == "always") {
                                echo "Sempre";
                            } else {
                                echo $data["warFrequency"];
                            }
                        ?>,
                        Vitórias: <?php echo $data["warWins"]; ?>,
                        Empates: <?php echo $data["warTies"]; ?>,
                        Derrotas: <?php echo $data["warLosses"]; ?>,
                        Vitórias seguidas: <?php echo $data["warWinStreak"]; ?>
                    </td>
                </tr>
                <tr class="row table-bordered">
                    <td colspan="3" class="col-sm-12 text-center">
                        Membros: <?php echo $data["members"]; ?>
                    </td>
                </tr>

            </table>

            <table class="table table-bordered table-hover table-sm">
                
                <tr>
                    <td>
                        Posição:
                    </td>
                    <td>
                        Liga:
                    </td>
                    <td>
                        Level:
                    </td>
                    <td>
                        Nome:
                    </td>
                    <td>
                        Tropas Doadas:
                    </td>
                    <td>
                        Tropas Recebidas:
                    </td>
                    <td>
                        Troféus:
                    </td>
                </tr>

                <?php
                    foreach ($members as $member) {
                ?>

                <tr>
                    <td>
                        <?php echo $member["clanRank"];?>
                    </td>
                    <td>
                        <img src="<?php echo $member["league"]["iconUrls"]["tiny"]; ?>" alt="<?php echo $member["league"]["name"]; ?>">
                    </td>
                    <td>
                        <?php echo $member["expLevel"]; ?>
                    </td>
                    <td>
                        <?php echo "<b>", $member["name"], "</b><br/>"; 
                            if ($member["role"] == "member") {
                                echo "Membro";
                            } elseif ($member["role"] == "admin") {
                                echo "Ançião";
                            } elseif ($member["role"] == "coLeader") {
                                echo "Colíder";
                            } else {
                                echo "Líder";
                            }
                        ?>
                    </td>
                    <td>
                        <?php echo $member["donations"]; ?>
                    </td>
                    <td>
                        <?php echo $member["donationsReceived"]; ?>
                    </td>
                    <td>
                        <?php echo $member["trophies"]; ?>
                    </td>
                </tr>

                <?php
                    }
                ?>

            </table>

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