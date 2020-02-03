<?php require("Users.php");
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Fitness</title>
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

    <h3>Liste déroulante</h3>
    <FORM action"" methode="POST">
        <select name="user" id="user-select">
            <option value="28" selected>User 1</option>
            <option value="20">User 2</option>
            <option value="19">User 3</option>
            <option value="26">User 4</option>
            <option value="25">User 5</option>
            <option value="24">User 6</option>
        </select>
        <input type="submit"></input>
    </FORM>
    <?php
    //récupération de la liste des users en BDD.
    try {
        $base = new PDO('mysql:host=192.168.65.204; dbname=base_sportive', 'root', 'root');
        $DonneeBruteUser = $base->query("select * from user");
        $TabUserIndex = 0;
        while ($tab = $DonneeBruteUser->fetch()) {
            //ici on creer nos objets User pour chaque tuple de notre requête
            //et on les places dans un tableau de User
            $TabUser[$TabUserIndex++] = new Users($tab['id_user'], $tab['pseudo']);
        }
    } catch (exception $e) {
        $e->getMessage();
    }
    ?>
    <?php
    //traitement du formulaire
    if (isset($_POST["id_user"])) {
        //recherche de l'id dans le tableau de user
        foreach ($TabUser as $objetUser) {
            if ($objetUser->getId() == $_POST["id_user"]) {
                $objetUser->getPseudo() == $_POST["pseudo"];
            
            }
        
        }
    } else {
        echo "Aucun user selectionné";
    }
    ?>

    <FORM action="" methode="POST">
        <select name="user" id="user-select">
            <?php
            //parcours du tableau de User pour afficher les options de la liste déroulante
            foreach ($TabUser as $objetUser) {
                echo '<option value="' . $objetUser->getId() . '">' . $objetUser->getPseudo() . '</option>';
            }
            ?>
        </select>
        <input type="submit"></input>
    </FORM>

    <div id="id">
        bdqsbdbxcn behb fqjnfdjndfsndfksikfj,skl,
    </div>

<div name="bleu">
    bleu
</div>

<div name="rouge">
    rouge
</div>

    <script src="js/coderom.js"></script>
</body>

</html>