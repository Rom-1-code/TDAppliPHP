<?php session_start();
//Connexion à la base de données
<<<<<<< HEAD
/*
$pdo = new PDO(
    'mysql:host=localhost;dbname=appphp', 'root', '');
=======
$pdo = new PDO('mysql:host=localhost; dbname=appphp; charset=utf8', 'root', '');
>>>>>>> f7a8f79bfb12beb2f60ed75f3b0515ea3bb8d211

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
*/
?>

<h2>Connexion</h2>
	<form action="login.php" method="POST">
		<label>Identifiant :</label>
		<p></p>
		<input type="text" name="username" required />
		<label>Mot de passe :</label>
		<p></p>
		<input type="password" name="password" required />
		<input type="submit" />
    </form>
<?php


?>