<?php session_start(); ?>
<?php require ("Users.php");?>



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


if(isset($_POST['Intensif1']) && !isset($_POST['Tonic1']) && !isset($_POST['Forme1']))
{
	echo "coucou";
	$_SESSION['idprog']=2; //je déclare en session la valeur idprog qui servira à l'instanciation de l'objet user dans navprogrammes
	
	
}
?>