<?php require "Users.php";?>
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