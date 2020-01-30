<?php session_start(); ?>
<?php require ("Users.php");?>
<?php require ("Programme.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/identification.css">
	
    <title>Identification</title>
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
			<label>Confirmez le mot de passe :</label>
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




	

	if(isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['poids']) &&  isset($_POST['taille']))
	{
		if($_POST['password'] == $_POST['password2'])
		{
			try
			{
				$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
			}
			catch(Exception $erreurs)
			{
				echo "erreur à la base impossible";
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
	
				?>
					<form action="choixprogramme.php" method="post">
		
						<input type="submit" value="changer de page"> 
				
					</form>
				<?php
			}
			else
			{
				?><div class="erreur"><p>Le mot de passe doit être identique</p></div> <?php
			}
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
<?php
if(isset($_POST['username'])&& isset($_POST['password'])){
	
	
	$user1 = new Users($_POST['username'],$_POST['password'],0);
	$varreturn= $user1->login($_POST['username'],$_POST['password']);
	$user1->SetIMC($_POST['username']);

	if($varreturn==1)
	{
		?> <a href="navprogrammes.php">naviguer</a> <?php
	}



} ?>

<label>choisir programme:</label>
<form  methode="POST">
	<select name="listprog" id="pet-select">
   	 	<option value="">--Please choose an option--</option>
    	<option value="1">Tonic</option>
    	<option value="2">Intensif</option>
    	<option value="3">Forme</option>
	</select>
</form>

<?php

try 
{
	$base = new PDO('mysql:host=localhost; dbname=base_sportive', 'root', 'root');
	$DonneeBruteUser = $base->query('SELECT * from programme');
	$TabProg = array();
	$TabProgIndex = 0; 
	
	while($tab = $DonneeBruteUser->fetch())
	{ 
		$TabProg[$TabProgIndex] = new Programme($tab['id_programme']);        
		$TabProg[$TabProgIndex]->settypeprog($tab['type_programme']);
		$TabProg[$TabProgIndex]->setadresse($tab['adresse_prog']);
		$TabProg[$TabProgIndex++];
	}      
}
catch(exception $e) 
{
	$e->getMessage;

}


?>

<form action="" methode="POST">
<select name="prog"id="pet-select">
	
<?php  
	  foreach($TabProg as $objetProg)
	  {
		  echo'<option value="'.$objetProg->getidprog().'">'.$objetProg->getadresse().'</option>';                
	  }
	  
 ?>
 </select>
 	<input type="submit"></input>
</form>
<?php /*
<label>choisir utilisateur à supprimer:</label>
<form  methode="POST">
	<select name="listuser" id="pet-select">
   	 	<option value="">--Please choose an option--</option>
    	<option value=""></option>
    	<option value=""></option>
    	<option value=""></option>
	</select>
</form>
*/
?>

<p>choisis un utilisateur à supprimer</p>

<div>
  <input type="checkbox" id="" name="users[]"
         checked>
  <label for="coding">choose</label>
</div>

<?php

try 
{
	$base = new PDO('mysql:host=localhost; dbname=base_sportive', 'root', 'root');
	$DonneeBruteUser = $base->query('SELECT * from user');
	$TabUser = array();
	$TabUserIndex = 0;
	
	while ($tab = $DonneeBruteUser->fetch())
	{ 
		$TabUser[$TabUserIndex++] = new Users($tab['id_user'],$tab['pseudo']);        
		//$TabUser[$TabUserIndex++];
	}      
}
catch(exception $e) 
{
	$e->getMessage;

}

?>

<form action="" methode="POST">

	
<?php  
	  foreach($TabUser as $objetUser)
	  {
		  echo'<p><input type="checkbox" value="'.$objetUser->getId().'" name="users[]" />';
		  echo '<label for="coding">'.$objetUser-> getPseudo().'</label></p>';                
	  }
	  
 ?>
 
 	<input type="submit"></input>
</form>

<?php
if (isset($_POST['users']))
{
	foreach($_POST['users'] as $idUser)
	{
		$j=0;
		
		foreach($TabUser as $objetUser)
		{
			if($objetUser->getId()== $idUser)
			{
				$objetUser->deleteUser();
				unset($TabUser[$j]);
			
			}
			$j++;
		}
		
	}
}

$TabUser[$TabUserIndex]->suppressionuser($_POST['id']);


?>




</body>
</html>