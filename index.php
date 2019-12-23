<?php require("Users.php");?>
<?php session_start();

$_SESSION['prenom'] = 'Mathis';
$_SESSION['nom'] = 'Clermont';
$_SESSION['age'] = 19;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Application Sportive</title>
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
                                    <h1>Appsportive<span class="tld">.php</span></h1>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--MENU DROIT-->

                    <div class="menu">
                        <ul class="right">
                            <li><b><a href="inscription.php">login</a></li></b>
                                <li><b><a href="#">Score</a></li></b>
                                    <li><b><a href="#">A propos</a></li></b>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </nav>
        </header>
    </div>
    <!-- Debut appli-->
    
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !
        Bienvenue sur l'accueil de mon Application Sportive.
    </p>

</body>

</html>