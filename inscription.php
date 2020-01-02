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
		<input type="text" name="username" required />
		<p></p>
		<label>Mot de passe :</label>
		<input type="password" name="password" required />
		<p></p>
		<label>Retapez mot de passe :</label>
		<input type="password" name="password2" required />
		<p></p>
		<label>Votre poids : </label>
		<input type="text" name="poids" required />
		<p></p>
		<label>Votre taille en cm : </label>
		<input type="text" name="taille" required />
		<p></p>
		<input type="submit" />
	</form>
	<p></p>

	<div class="login">
	<p>Vous avez deja un compte?  : <a href="login.php">Connectez vous</a></a> </p>
	</div>

<?php
	$tableau_users = array(); //déclaration du tableau qui contiendra tous les utilisateurs en php
	$indice=1;

	if(isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['password2']) &&  isset($_POST['poids']) &&  isset($_POST['taille']))
	{
		if($_POST['password'] == $_POST['password2'])
		{
			try
			{
				$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
			}
			catch(Exception $erreurs)
			{
				echo "accès à la base impossible";
			}

			try
			{
				$usernameformulaire = $_POST['username'];
				$testusernamebase = $Base->query('SELECT pseudo from user where pseudo="'.$usernameformulaire.'"');

				while($pseudobase=$testusernamebase->fetch())
				{
					echo $pseudobase["pseudo"];
				}
				
			}
			catch(Exception $erreur)
			{
				?> <p> erreur </p> <?php
			}
			
			if($usernameformulaire!=$pseudobase["pseudo"])
			{
				echo "le pseudo n'existe pas en base";
				$flag = 1; //valeur qui nous indiquera si le pseudo est en base ou non, si flag existe et vaut 1 alors on peut envoyer le mdp et le username dans la base pour en faire un nouvel utilisateur
			}

			if($flag==1) //alors on peut tout rentrer en base
			{

				$imc=$_POST['poids']/pow($_POST['taille'],2); //calcul de l'imc à partir des données du formulaire
				//$user = new Users($_POST['username'],$_POST['password'],$imc); //je cherche un moyen d'avoir un nom de variable différent à chaque création d'objet User
				//$user->inscription($_POST['username'],$_POST['password'],$imc);
				$tableau_users[$indice]= new Users($_POST['username'],$_POST['password'],$imc);
				$tableau_users[$indice]->inscription($_POST['username'],$_POST['password'],$imc);
				$indice++;
				
				
			}
		}
		

		




	}
?>
	
</body>
</html>