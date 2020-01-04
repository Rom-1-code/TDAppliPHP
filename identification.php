<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/identification.css">
	
    <title>Inscription</title>
</head>
<body>

<div class="form1">
	<h2>Inscription</h2>
		<form action="identification.php" method="POST">
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
</div>
	
<?php


$_SESSION['indice']=1;
$_SESSION['tableau_users'] = array(); //déclaration du tableau qui contiendra tous les utilisateurs en php

	

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
				$flag = 1; //valeur qui nous indiquera si le pseudo est en base ou non, si flag existe et vaut 1 alors on peut envoyer le mdp et le username dans la base pour en faire un nouvel utilisateur
			}

			if($flag==1) //alors on peut tout rentrer en base
			{
				$_SESSION['imc'];
				$_SESSION['username']=$_POST['username'];
				$_SESSION['password']=$_POST['password'];
				$_SESSION['imc']=$_POST['poids']/pow($_POST['taille'],2); //calcul de l'imc à partir des données du formulaire
				  
				//$indice=$_SESSION['indice'];
				  
				//$_SESSION['tableau_users'][$indice]= new Users($_POST['username'],$_POST['password'],$_SESSION['imc']);
				//$_SESSION['tableau_users'][$indice]->inscription($_POST['username'],$_POST['password'],$_SESSION['imc']);
				//$_SESSION['indice']++;
				
				
				//$user = new Users($_POST['username'],$_POST['password'],$imc); //je cherche un moyen d'avoir un nom de variable différent à chaque création d'objet User
				//$user->inscription($_POST['username'],$_POST['password'],$imc);
				//$tableau_users[$indice]= new Users($_POST['username'],$_POST['password'],$imc);
				//$tableau_users[$indice]->inscription($_POST['username'],$_POST['password'],$imc);
				//$indice++;
				

				
				header('Location: choixprogramme.php');
				Exit();
			}
		}
		else
		{
			?><div class="erreur"><p>Le mot de passe doit être identique</p></div> <?php
		}

	}
?>
	<div class="form2">
	<h2>Connexion</h2>
		<form action="identification.php" method="POST">
			<p></p>
			<label>Identifiant :</label>
			<input type="text" name="username" required />
			<p></p>
			<label>Mot de passe :</label>
			<input type="password" name="password" required />
			<p></p>
			<input type="submit" />
	</form>
</div>

</body>
</html>