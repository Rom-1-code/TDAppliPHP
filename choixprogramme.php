<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<?php require ("Users.php"); 
      require ("inscription.php");
?>
<body>
<h2>Choix de votre programme</h2>
	
	<form action="choixprogramme.php" method="POST">
		<label>Tonic :</label>
		<input type="text" name="username" required />
		<p></p>
		<label>Intensif:</label>
		<input type="password" name="password" required />
		<p></p>
		<label>Forme :</label>
		<input type="password" name="password2" required />
		<p></p>
		<input type="submit" />
	</form>
	<p></p>



	
</body>
</html>