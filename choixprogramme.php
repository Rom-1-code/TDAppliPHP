<?php session_start(); ?>
<?php require ("Users.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choix du programme</title>
</head>

<body>
<h2>Choisissez votre programme: </h2>
	
<form action="navprogrammes.php" method="post">
	
		
	<?php	if(25<=$_SESSION['imc'] && $_SESSION['imc']<=30)     
			{ ?>
				<input type="checkbox" name="Tonic1" value="Tonic">
				<label for="Tonic">Tonic</label>
			
	<?php	} ?>
				<p></p>
	<?php	if($_SESSION['imc']>=18.35 && $_SESSION['imc']<27)
			{ ?>
				<input type="checkbox" name="Intensif1" value="Intensif">
				<label for="Intensif">Intensif</label>
				
<?php		} ?>
			<p></p>

<?php		if($_SESSION['imc']>=16.5 && $_SESSION['imc']<26)
			{ ?>
				<input type="checkbox" name="Forme1" value="Forme">
				<label for="Forme">Forme</label>
<?php		} ?>
			
				<p></p>
			<input  type="submit" value="Envoyer le formulaire"> 
			
</form>
			<p></p>

<?php //le formulaire est censé envoyer le programme en post à navprogramme 

try 
{
	$base = new PDO('mysql:host=localhost; dbname=base_sportive', 'root', 'root');
	$DonneeBruteUser = $base->query("select * from user");
	$TabUserIndex = 0;
	
	while ($tab = $DonneeBruteUser->fetch())
	{ 
		$TabUser[$TabUserIndex++] = new Users($tab['id_user'],$tab['id_programme'],$tab['imc'],$tab['pseudo'],$tab['motdepasse']);        
	
	}      
}
catch(exception$e) 
{
	$e->getMessage;

}

?>

<form action="" methode="POST">
<select name="pets"id="pet-select">
	
<?php  
	  foreach($TabUser as $objetUser)
	  {
		  echo'<option value="'.$objetUser->getidprog().'">'.$objetUser->getname().'</option>';                
	  }
	  
 ?>
 </select><input type="submit"></input></form>



	
</body>
</html>