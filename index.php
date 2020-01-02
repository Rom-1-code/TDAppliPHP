<?php require("Users.php"); ?>
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
                            <li><b><a href="inscription.php">Inscription</a></li></b>
                            <li><b><a href="#">Score</a></li></b>
                            <li><b><a href="apropos.php">A propos</a></li></b>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </nav>
        </header>

        <div class="para">
            <p>
                Salut <?php echo $_SESSION['prenom']; ?> !
                Bienvenue sur mon appli sportive! Peut tu saisir ta taille et ton poids afin que je puisse calculer ton IMC ?
            </p>

            <div class="form">

                <p>
                    <h2>IMC</h2>
                    <form action="#" method="POST">
                        <label>Calcul de votre IMC</label>
                        <p></p>
                        <label>Enter votre taille:</label>
                        <input type="text" name="taille" required />
                        <p></p><label>Enter votre poids:</label>
                        <input type="text" name="poids" required />
                        <p></p>
                        <input type="submit" value="Valider" />
                    </form>
                </p>
             

            </div>

        </div>

    </div>
    <!-- Debut appli-->

    <!--<h3>Votre IMC est de:</h3>
                <h1>20.1</h1> -->

</body>

</html>