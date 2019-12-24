<?php session_start();
//Connexion à la base de données
$pdo = new PDO('mysql:host=localhost; dbname=appphp; charset=utf8', 'root', '');

if(isset($_POST["username"]) && isset($_POST["password"])){
	$query = $pdo->prepare('SELECT password FROM users WHERE username = :username');
	$query->bindParam(':username', $_POST["username"]);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];
	
	$correctPassword = password_verify($_POST["password"], $hash);
	
	if($correctPassword){
		echo "Bienvenu ".$_POST["username"];
	}else{
	
		echo "login/password incorrect";
	}
}
?>