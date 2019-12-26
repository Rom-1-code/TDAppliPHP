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
    
    public function login()
    {

    }

    public function inscription($nom,$mdp,$imc);
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
		}
		catch($error erreur)
		{
			echo "accès à la base impossible";
        }
        
        $Base->query("INSERT INTO table (pseudo,motdepasse,imc) VALUES ('.$nom.','.$mdp.','.$imc.')");
    }
}
?>
