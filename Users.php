<?php
class Users
{
    //propriété :
    private $_Nom;
    private $_Mdp;
    private $_Id;
    private $_Imc;

    //méthode :
    public function __construct($newNom,$newMdp,$newimc)
    {
        $this->_Nom = $newNom;
        $this->_Mdp = $newMdp;
        $this->_Imc = $newimc;
    }
    
    public function login($nom,$mdp)
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
		}
		catch(Exception $erreur)
		{
			echo "accès à la base impossible";
        }
    }

    public function inscription($nom,$mdp,$imc)
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
		}
		catch(Exception $erreur)
		{
			echo "accès à la base impossible";
        }
        
        $Base->query('INSERT INTO user (id_programme,imc,pseudo,motdepasse) VALUES ("'.$imc.'","'.$nom.'","'.$mdp.'")'); //insertion d'une nouvelle ligne dans la bdd

        $Iduser = $Base->query('SELECT id_user from user where pseudo="'.$nom.'" AND motdepasse="'.$mdp.'" AND imc="'.$imc.'"'); //on recupère l'id de l'utilisateur qui vient d'être crée
        $this->_Id=$Iduser;
    }
}
?>
