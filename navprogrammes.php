<?php session_start(); ?>
<?php require ("Users.php");?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Navigation programme</title>
</head>

<body>
    <!-- HEADER -->
    <div class="page">
        <header>
            <div class="container">
                <nav class="menu-bar">

                    <!--TITRE-->

                    <div class="logo">
                        <ul class="titre">
                            <li class="name">
                                <a>
                                    <h1>Fitness<span class="tld">.php</span></h1>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--MENU DROIT-->

                    <div class="menu">
                        <ul class="right">
                            <li><b><a href="#">Decouvrir</a></li></b>
                            <li><b><a href="conseil.php">Conseil</a></li></b>
                            <li><b><a href="apropos.php">A propos</a></li></b>
                            <li><b><a href="identification.php">S'identifier</a></li></b>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </nav>
        </header>
    </div>
    </div>
    <!-- FIN HEADER -->
    <div class="titre3">
        <h1>Presentation des programmes</h1>
    </div>

    <div class="tonic">
        <h2>Programme Tonic</h2>
    </div>
    <div class="intensif">
        <h2>Programme intensif</h2>
    </div>
    <div class="forme">
        <h2>Programme forme</h2>
    </div>




<?php


if(isset($_POST['Intensif1']) && !isset($_POST['Tonic1']) && !isset($_POST['Forme1']))
{
	echo "coucou";
	$_SESSION['idprog']=2; //je déclare en session la valeur idprog qui servira à l'instanciation de l'objet user dans navprogrammes
	
	
}


if(isset($_POST['Tonic'])&&!isset($_POST['Intensif'])&&!isset($_POST['Forme']))
{
	
	
	
	//$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	
	//$_SESSION['indice']++;
	
}


if(isset($_POST['Forme'])&&!isset($_POST['Intensif'])&&!isset($_POST['Tonic']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],3);
	$_SESSION['indice']++;
	*/
}

if(isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],4);
	$_SESSION['indice']++;
	*/
}	

if(isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&!isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],5);
	$_SESSION['indice']++;
	*/
}	

if(isset($_POST['Tonic'])&&!isset($_POST['Intensif'])&&isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],6);
	$_SESSION['indice']++;
	*/
}	

if(!isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],7);
	$_SESSION['indice']++;
	*/
}	


//$pseudo_user;

//$indice;
//$indice = $_SESSION['indice'];




if(isset($_POST['Tonic'])&&!isset($_POST['Intensif'])&&!isset($_POST['Forme']))
{
	
	
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	
	$_SESSION['indice']++;
	*/
}


if(isset($_POST['Forme'])&&!isset($_POST['Intensif'])&&!isset($_POST['Tonic']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],3);
	$_SESSION['indice']++;
	*/
}

if(isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],4);
	$_SESSION['indice']++;
	*/
}	

if(isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&!isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],5);
	$_SESSION['indice']++;
	*/
}	

if(isset($_POST['Tonic'])&&!isset($_POST['Intensif'])&&isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],6);
	$_SESSION['indice']++;
	*/
}	

if(!isset($_POST['Tonic'])&&isset($_POST['Intensif'])&&isset($_POST['Forme']))
{
	/*
	$_SESSION['tableau_users'][$indice]= new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
	$_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],7);
	$_SESSION['indice']++;
	*/
}	
	

if(isset($_SESSION['tableau_users'])&& isset($_SESSION['indice']) && isset($_SESSION['idprog']) && isset($_SESSION['imc']) && isset($_SESSION['username']) && isset($_SESSION['password'])) 
{
    $_SESSION['tableau_users'][$indice] = new Users($_SESSION['username'],$_SESSION['password'],$_SESSION['imc']);
    $_SESSION['tableau_users'][$indice]->inscription($_SESSION['username'],$_SESSION['password'],$_SESSION['imc'],$_SESSION['idprog']);
	
	$quelprog = $_SESSION['idprog']; //on stocke l'id du programme choisi 

    
    
    //$quelprog = $_SESSION['tableau_users'][$indice]->getidprog();
    //$pseudo_user = $_SESSION['tableau_users'][$indice]->getname();
    
}


try
{
	$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
}
catch(Exception $erreur)
{
	echo "accès à la base impossible";
}

try
{
	
	$idprogbrut = $Base->query('SELECT id_programme from user where pseudo="'.$_SESSION['username'].'"'); //on regarde quel programme correspond à l'utilisateur

	while($tabid = $idprogbrut->fetch())
	{
		$idprogcourant = $tabid["id_programme"]; //je récupère l'id du programme choisi depuis la base (sous forme utilisable après le fetch)
	}
	
	
}
catch(Exception $erreur)
{
	echo "accès à la base impossible";
}

if($idprogcourant==$quelprog && $idprogcourant==2)
{
   ?> <embed src="Musculation.pdf" width=800 height=500 type='application/pdf'/> <?php
}

?>
</body>

</html>