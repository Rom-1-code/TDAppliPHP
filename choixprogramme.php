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
	
<form action="choixprogramme.php" method="POST">
	
		
	<?php	if(25<=$_SESSION['imc'] && $_SESSION['imc']<=30)     
			{ ?>
				<input type="checkbox" id="tonic1" name="Tonic" value="1"  >
				<label for="Tonic">Tonic</label>
	<?php	} ?>
				<p></p>
	<?php	if($_SESSION['imc']>=18.35 && $_SESSION['imc']<27)
			{ ?>
				<input type="checkbox" id="intensif1" name="Intensif" value="3" >
				<label for="Intensif">Intensif</label>
<?php		} ?>
			<p></p>

<?php		if($_SESSION['imc']>=16.5 && $_SESSION['imc']<26)
			{ ?>
				<input type="checkbox" id="forme1" name="Forme" value="2">
				<label for="Forme">Forme</label>
<?php		} ?>
			
				<p></p>
			<input type="submit" />
			
			</form>
			<p></p>
<?php

$indice;
$indice = $_SESSION['indice'];

if(isset($_POST['Tonic'])&&!isset($_POST['Intensif'])&&!isset($_POST['Forme']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],1);
	$_SESSION['indice']++;
}

if(isset($_POST['Intensif'])&&!isset($_POST['Tonic'])&&!isset($_POST['Forme']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],2);
	$_SESSION['indice']++;
}

if(isset($_POST['Forme'])&&!isset($_POST['Intensif'])&&!isset($_POST['Tonic']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],3);
	$_SESSION['indice']++;
}

if(isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&isset($_POST['Forme']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],4);
	$_SESSION['indice']++;
}	

if(isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&!isset($_POST['Forme']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],5);
	$_SESSION['indice']++;
}	

if(isset($_POST['Tonic'])&&!isset($_POST['Intensif'])&&isset($_POST['Forme']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],6);
	$_SESSION['indice']++;
}	

if(!isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&isset($_POST['Forme']))
{

	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],7);
	$_SESSION['indice']++;
}	
	

?>


	
</body>
</html>