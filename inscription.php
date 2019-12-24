<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<?php require ("Users.php"); ?>
<body>
<h2>Inscription</h2>
	
	<form action="inscription.php" method="POST">
		<label>Identifiant :</label>
		<p></p>
		<input type="text" name="username" required />
		<label>Mot de passe :</label>
		<p></p>
		<input type="password" name="password" required />
		<label>Retapez mot de passe :</label>
		<p></p>
		<input type="password" name="password2" required />
		<input type="submit" />
	</form>
	<p></p>

<?php
	if(isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['password2']))
	{
		try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
		}
		catch($error erreur)
		{
			echo "accès à la base impossible";
		}

		try
		{
			$testusernamebase = $Base->query("SELECT pseudo from user where pseudo=.$_POST['username']." );
		}
		catch($error erreur)
		{
			echo "le pseudo n'existe pas en base";
			$flag = 1; //valeur qui nous indiquera si le pseudo est en base ou non, si flag existe et vaut 1 alors on peut envoyer le mdp et le username dans la base pour en faire un nouvel utilisateur
		}

		if($flag==1) //alors on peut tout rentrer en base
		{
			$user
		}

		




	}
?>
	
</body>
</html>