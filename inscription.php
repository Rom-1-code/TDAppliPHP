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
	<form action="register.php" method="POST">
		<label>Identifiant :</label>
		<input type="text" name="username" required /><br /><br />
		<label>Mot de passe :</label>
		<input type="password" name="password" required /><br /><br />
		<label>Retapez mot de passe :</label>
		<input type="password" name="password2" required /><br /><br />
		<input type="submit" />
	</form>
	<br /><hr />
	<h2>Connexion</h2>
	<form action="login.php" method="POST">
		<label>Identifiant :</label>
		<input type="text" name="username" required /><br /><br />
		<label>Mot de passe :</label>
		<input type="password" name="password" required /><br /><br />
		<input type="submit" />
    </form>
</body>
</html>