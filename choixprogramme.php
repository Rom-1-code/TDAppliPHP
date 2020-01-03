<?php require ("Users.php");?> 
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>

<body>
<h2>Choix de votre programme : </h2>
	
	<form action="choixprogramme.php" method="POST">
		
	<input type="checkbox" id="tonic1" name="progtonic" value="Tonic">
  	<label for="Tonic">Tonic</label>
		<p></p>
	<input type="checkbox" id="intensif1" name="progintensif" value="Intensif">
  	<label for="Intensif">Intensif</label>
		<p></p>
	<input type="checkbox" id="forme1" name="progforme" value="Forme">
  	<label for="Forme">Forme</label>
		<p></p>
	<input type="submit" />
	
	</form>
	<p></p>



	
</body>
</html>