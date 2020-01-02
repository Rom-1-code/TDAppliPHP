<?php session_start();?>
<?php require("Users.php"); ?>


<h2>Connexion</h2>
<form action="login.php" method="POST">
	<p></p>
	<label>Identifiant :</label>
	<input type="text" name="username" required />
	<p></p>
	<label>Mot de passe :</label>
	<input type="password" name="password" required />
	<p></p>
	<input type="submit" />
</form>
<?php
if(isset($_POST['username'])&& isset($_POST['password'])){

}
?>