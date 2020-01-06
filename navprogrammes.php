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
	$Base->query('SELECT id_programme from user where pseudo=)
catch(Exception $erreur)
{
	echo "accès à la base impossible";
}


if()

?>
</body>
</html>