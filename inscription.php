<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
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

	
</body>
</html>