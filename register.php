<?php
//Connexion à la base de données
$pdo = new PDO('mysql:host=localhost; dbname=appphp; charset=utf8', 'root', '');
	
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])){

	if($_POST["password"] == $_POST["password2"]){
	
		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$query = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password);");
		$query->bindParam(':username', $_POST["username"]);
		$query->bindParam(':password', $hash);
		$query->execute();
		header('Location: index.php');
		exit();
	}
}
?>