<?php
class Users
{
    //propriété :
    private $_Nom;
    private $_Mdp;
    private $_Id;

    //méthode :
    public function __construct($newNom, $newMdp)
    {
        $this->_Nom = $newNom;
        $this->_Mdp = $newMdp;
    }
    
    public function login()
    {

    }

    public function inscription($nom,$mdp);
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
		}
		catch($error erreur)
		{
			echo "accès à la base impossible";
        }
        
        $Base->query("INSERT INTO table (pseudo,motdepasse) VALUES ('.$nom.','.$mdp.')");
    }
}
?>
