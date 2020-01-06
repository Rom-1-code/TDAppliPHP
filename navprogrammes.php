<?php require "Users.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Navigation programme</title>
</head>

<body>
    <!-- HEADER -->
    <div class="page">
        <header>
            <div class="container">
                <nav class="menu-bar">

                    <!--TITRE-->

                    <div class="logo">
                        <ul class="titre">
                            <li class="name">
                                <a>
                                    <h1>Fitness<span class="tld">.php</span></h1>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--MENU DROIT-->

                    <div class="menu">
                        <ul class="right">
                            <li><b><a href="#">Decouvrir</a></li></b>
                            <li><b><a href="conseil.php">Conseil</a></li></b>
                            <li><b><a href="apropos.php">A propos</a></li></b>
                            <li><b><a href="identification.php">S'identifier</a></li></b>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </nav>
        </header>
    </div>
    </div>
    <!-- FIN HEADER -->
    <div class="titre3">
        <h1>Presentation des programmes</h1>
    </div>

    <div class="tonic">
        <h2>Programme Tonic</h2>
    </div>
    <div class="intensif">
        <h2>Programme intensif</h2>
    </div>
    <div class="forme">
        <h2>Programme forme</h2>
    </div>




<?php
$quelprog;

$quelprog = $_SESSION['tableau_users'][$indice]->getidprog();
$pseudo_user = $_SESSION['tableau_users'][$indice]->getname();

try
{
	$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
}
catch(Exception $erreur)
{
	echo "accès à la base impossible";
}

try
{
	$idprogcourant = $Base->query('SELECT id_programme from user where pseudo="'.$pseudo_user.'"'); //on regarde quel programme correspond à l'utilisateur
}
catch(Exception $erreur)
{
	echo "accès à la base impossible";
}

if($idprogcourant==$quelprog && $idprogcourant==1)
{
   ?> <embed src="Musculation.pdf" width=800 height=500 type='application/pdf'/> <?php
}

?>
</body>

</html>